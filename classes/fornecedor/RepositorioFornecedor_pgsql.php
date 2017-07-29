<?php

// require_once('IRepositorioFornecedor.php');

class RepositorioFornecedor //implements IRepositorioFornecedor
{

	private $con = NULL;

	public function __construct()
	{

		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}

	public function inserirFornecedor($obj){
		// echo '<pre>'.
		$sql = "INSERT INTO principais.fornecedor(
						for_datacadastro, fk_tipo, for_cnpj, for_cpf, for_nome_razao, 
						for_apelido, for_rg_inscricao_estadual)
				VALUES (".$obj->data_cadastro.", ".$obj->tipo_pessoa.", ".$obj->for_cnpj.", ".$obj->for_cpf.",
				".$obj->nome_razao.",".$obj->fantasia_conhecido.", ".$obj->rg_inscricao_estadual.") RETURNING for_id;";
		
		$inserir = $this->con->prepare($sql);
		$result = $inserir->execute();
		if(!$result){
			print_r($this->con->errorInfo());// die();
		}else{
			$for_id = $inserir->fetch();
			return $for_id[0];
		}
		return $result;
	}
		
	public function atualizarFornecedor($obj){
		//echo '<pre>'.
		//exit();
		$sql = "UPDATE principais.fornecedor
				SET for_datacadastro = ".$obj->for_cnpj.",
					fk_tipo = ".$obj->for_cpf.",
					for_cnpj = ".$obj->nome_razao.",
					for_cpf = ".$obj->fantasia_conhecido.",
					for_nome_razao = ".$obj->inscricao_estadual.",
					for_apelido = ".$obj->rg.",
					for_rg_inscricao_estadual = ".$obj->cep."
				WHERE for_id = ".$obj->id.";";
			
		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function excluirFornecedor($for_id){
		//echo '<pre>'.
		$sql = "DELETE FROM principais.fornecedor
				WHERE fornecedor.for_id = ".$for_id;

		$excluir = $this->con->prepare($sql);
	    return $excluir->execute();
	}

	public function consultarFornecedor($objBusca){
		if($objBusca->id != ""){
			$search = "AND f.for_id = ".$objBusca->id;
		}
		if($objBusca->search != ""){
			$search = "AND ( apelido_fantasia iLIKE '%".$objBusca->search."%' ";
			$search .= "OR LPAD(cast(f.for_id as varchar),6,'0') = '".$objBusca->search."' ";
			$search .= "OR nome_razao_social iLIKE '%".$objBusca->search."%' ";
			$search .= "OR nome_municipio iLIKE '%".$objBusca->search."%' ";			
			$search .= "OR rg_inscricao_estadual iLIKE '%".$objBusca->search."%' )";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		$sql = "SELECT LPAD(cast(f.for_id as varchar),6,'0') AS codigo, f.for_id, f.for_datacadastro AS data_cadastro, f.fk_tipo,
					SUBSTR(f.for_cnpj, 1, 2) || '.' || SUBSTR(f.for_cnpj, 3, 3) || '.' ||
					SUBSTR(f.for_cnpj, 6, 3) || '/' || SUBSTR(f.for_cnpj, 9, 4) || '-' ||
					SUBSTR(f.for_cnpj, 13) AS cnpj, for_cnpj,
					SUBSTR(f.for_cpf, 1, 3) || '.' || SUBSTR(f.for_cpf, 4, 3) || '.' ||
					SUBSTR(f.for_cpf, 7, 3) || '-' || SUBSTR(f.for_cpf, 10, 2) AS cpf, for_cpf,
					for_nome_razao AS nome_razao_social, for_apelido AS apelido_fantasia, for_rg_inscricao_estadual AS rg_inscricao_estadual,
					e.end_cep, e.end_logradouro, e.end_bairro, e.end_numero, e.end_complemento, e.fk_estado_id, e.fk_municipio_id, 
					m.nome_municipio AS nome_municipio, c.con_telefone, c.con_celular, c.con_email, c.con_site
				FROM principais.fornecedor f, principais.contato c, principais.endereco e
				LEFT JOIN public.municipio m ON m.cod_municipio = e.fk_municipio_id
				WHERE f.for_id = e.fk_fornecedor_id
					AND e.fk_fornecedor_id = c.fk_fornecedor_id
					$search
					$orderby
				$limit";
				
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	/*	
	public function consultarProgramas(){		
		// echo '<pre>'.
		$sql = "SELECT pro_nome, pro_precofinal, pro_fiscal, pro_status FROM principais.programas";
					//$sqlAdd";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
*/	
}
?>
