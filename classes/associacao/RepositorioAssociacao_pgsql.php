<?php

// require_once('IRepositorioAssociacao.php');

class RepositorioAssociacao //implements IRepositorioAssociacao
{

	private $con = NULL;
	private $conDbCliente = NULL;

	public function __construct()
	{

		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		// $conexao = new Conexao();
		// $this->con = $conexao->getConexao();
		// $this->conDbCliente = $conexao->getConexaoDbCliente();
		// $this->con = Conexao::getConexao();
		if(isset($_SESSION['dbCliente']) && $_SESSION['writeDbCliente'] && $_SESSION['perfilAtualLogado']['sigla'] == 'G'){
			$this->conDbCliente = Conexao::getConexaoDbCliente();
		}else{
			$this->con = Conexao::getConexao();
		}
	}
	
	public function inserirAssociacaoDbCliente($obj){		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.associacao(aso_razao_social, aso_fantasia, aso_cnpj)
				VALUES(".$obj->razao_social.", ".$obj->fantasia.", ".$obj->cnpj.") RETURNING aso_id;";

		$inserir = $this->conDbCliente->prepare($sql);
		$result = $inserir->execute();
		if(!$result){
			print_r($this->conDbCliente->errorInfo());// die();
		}else{
			$aso_id = $inserir->fetch();
			return $aso_id[0];
		}
		return $result;
	}
	
	public function inserirAssociacao($obj){		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.associacao(aso_razao_social, aso_fantasia, aso_cnpj)
				VALUES(".$obj->razao_social.", ".$obj->fantasia.", ".$obj->cnpj.") RETURNING aso_id;";

		$inserir = $this->con->prepare($sql);
		$result = $inserir->execute();
		if(!$result){
			print_r($this->con->errorInfo());// die();
		}else{
			$aso_id = $inserir->fetch();
			return $aso_id[0];
		}
		return $result;
	}

	public function atualizarAssociacaoPorCNPJ($obj){		
		// echo '<pre>'.
		$sql = "UPDATE principais.associacao
				SET aso_razao_social = ".$obj->razao_social.", 
					aso_fantasia = ".$obj->fantasia.", 
					aso_data_fundacao = ".$obj->data_fundacao.", 
					aso_data_ultima_atualizacao = NOW()
				WHERE aso_cnpj = ".$obj->cnpj;

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function alterar($id){
		
		$sql = "";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
    
	public function excluir($id)
	{
		
		$sql = "UPDATE
                       acesso.usuario
                   SET
                       visivel = FALSE,
					   usu_ativo = FALSE				
                   WHERE 
                       usu_id='$id'";
		$delete = $this->con->prepare($sql);
		return $delete->execute();
	}
	
	public function consultarAssociacoes($objBusca){
		if($objBusca->id != ""){
			$search = "AND aso.aso_id = ".$objBusca->id;
		}
		if($objBusca->cnpj != ""){
			$search = "AND aso.aso_cnpj = '".$objBusca->cnpj."'";
		}
		if($objBusca->search != ""){
			$search = "AND ( remove_acento(aso.ass_razao_social) iLIKE remove_acento('%".$objBusca->search."%'))";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		// echo '<pre>'.
		$sql = "SELECT aso.aso_id AS id, LPAD(cast(aso.aso_id as varchar),6,'0') AS codigo, aso.aso_razao_social AS razao_social, 
					SUBSTR(aso.aso_cnpj, 1, 2) || '.' || SUBSTR(aso.aso_cnpj, 3, 3) || '.' || SUBSTR(aso.aso_cnpj, 6, 3) || '/' || 
					SUBSTR(aso.aso_cnpj, 9, 4) || '-' || SUBSTR(aso.aso_cnpj, 13) AS cnpj, aso.aso_cnpj AS aso_cnpj, aso.aso_fantasia AS fantasia,
					TO_CHAR(aso_data_fundacao, 'DD/MM/YYYY') AS data_fundacao,
					ende.end_cep AS cep, ende.end_logradouro AS logradouro, ende.end_bairro AS bairro, ende.end_numero AS numero, 
					ende.end_complemento AS complemento, ende.fk_estado_id AS cod_uf, ende.fk_municipio_id AS cod_municipio,
					municipio.nome_municipio, uf.estado AS nome_estado, uf.sigla AS sigla_uf,
					con.con_telefone AS telefone, con.con_celular AS celular, con.con_email AS email, con.con_site AS site
				FROM principais.associacao AS aso, principais.endereco AS ende, principais.contato AS con,
					public.municipio, public.uf
				WHERE aso.aso_id = ende.fk_associacao_id
					AND aso.aso_id = con.fk_associacao_id
					AND ende.fk_municipio_id = municipio.cod_municipio
					AND municipio.cod_estado = uf.uf
					$search
					$orderby
				$limit";

		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	public function consultarAssociacoesDbCliente($objBusca){
		if($objBusca->id != ""){
			$search = "AND aso.aso_id = ".$objBusca->id;
		}
		if($objBusca->search != ""){
			$search = "AND ( remove_acento(aso.ass_razao_social) iLIKE remove_acento('%".$objBusca->search."%'))";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		// echo '<pre>'.
		$sql = "SELECT aso.aso_id AS id, LPAD(cast(aso.aso_id as varchar),6,'0') AS codigo, aso.aso_razao_social AS razao_social, 
					SUBSTR(aso.aso_cnpj, 1, 2) || '.' || SUBSTR(aso.aso_cnpj, 3, 3) || '.' || SUBSTR(aso.aso_cnpj, 6, 3) || '/' || 
					SUBSTR(aso.aso_cnpj, 9, 4) || '-' || SUBSTR(aso.aso_cnpj, 13) AS cnpj, aso.aso_cnpj AS aso_cnpj, aso.aso_fantasia AS fantasia,
					ende.end_cep AS cep, ende.end_logradouro AS logradouro, ende.end_bairro AS bairro, ende.end_numero AS numero, 
					ende.end_complemento AS complemento, ende.fk_estado_id AS cod_uf, ende.fk_municipio_id AS cod_municipio,
					municipio.nome_municipio, uf.estado AS nome_estado, uf.sigla AS sigla_uf,
					con.con_telefone AS telefone, con.con_celular AS celular, con.con_email AS email, con.con_site AS site
				FROM principais.associacao AS aso, principais.endereco AS ende, principais.contato AS con,
					public.municipio, public.uf
				WHERE aso.aso_id = ende.fk_associacao_id
					AND aso.aso_id = con.fk_associacao_id
					AND ende.fk_municipio_id = municipio.cod_municipio
					AND municipio.cod_estado = uf.uf
					$search
					$orderby
				$limit";

		$arr = $this->conDbCliente->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
}
?>
