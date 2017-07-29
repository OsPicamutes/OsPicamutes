<?php

// require_once('IRepositorioAssociado.php');

class RepositorioAssociado //implements IRepositorioAssociado
{

	private $con = NULL;

	public function __construct()
	{

		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}
	
	public function inserir($obj){		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.associado(
						ass_data_cadastro, fk_situacao_id, ass_cnpj, ass_razao_social, 
						ass_fantasia, ass_inscricao_estadual, ass_inscricao_municipal, 
						ass_cnae, ass_atividade_economica, ass_valor_contribuicao)
				VALUES (".$obj->data_cadastro.", ".$obj->situacao.", ".$obj->cnpj.", ".$obj->razao_social.", 
						".$obj->fantasia.", ".$obj->insc_estadual.", ".$obj->insc_municipal.", 
						".$obj->cnae.", ".$obj->atividade_economica.", ".$obj->valor.") RETURNING ass_id;";
		// exit();
		$inserir = $this->con->prepare($sql);
		// return $inserir->execute();
		$result = $inserir->execute();
		if(!$result){
			print_r($this->con->errorInfo());// die();
		}else{
			$ass_id = $inserir->fetch();
			return $ass_id[0];
		}
		return $result;
	}
	
	public function atualizar($obj){		
		// echo '<pre>'.
		$sql = "UPDATE principais.associado
				SET fk_situacao_id = ".$obj->situacao.", 
					ass_cnpj = ".$obj->cnpj.", 
					ass_razao_social = ".$obj->razao_social.",
					ass_fantasia = ".$obj->fantasia.",
					ass_inscricao_estadual = ".$obj->insc_estadual.", 
					ass_inscricao_municipal = ".$obj->insc_municipal.", 
					ass_cnae = ".$obj->cnae.", 
					ass_atividade_economica = ".$obj->atividade_economica.", 
					ass_valor_contribuicao = ".$obj->valor."
				WHERE ass_id = ".$obj->id;

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function consultarAssociado($objBusca){
		if($objBusca->id != ""){
			$search = "AND ass.ass_id = ".$objBusca->id;
		}
		if($objBusca->search != ""){
			$search = "AND ( remove_acento(ass.ass_razao_social) iLIKE remove_acento('%".$objBusca->search."%'))";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		// echo '<pre>'.
		$sql = "SELECT ass.ass_id AS id, LPAD(cast(ass.ass_id as varchar),6,'0') AS codigo, ass.ass_razao_social AS razao_social, 
					SUBSTR(ass.ass_cnpj, 1, 2) || '.' || SUBSTR(ass.ass_cnpj, 3, 3) || '.' || SUBSTR(ass.ass_cnpj, 6, 3) || '/' || 
					SUBSTR(ass.ass_cnpj, 9, 4) || '-' || SUBSTR(ass.ass_cnpj, 13) AS cnpj, ass.ass_cnpj AS ass_cnpj, ass.ass_fantasia AS fantasia, 
					ass.ass_inscricao_estadual AS inscricao_estadual, ass.ass_inscricao_municipal AS inscricao_municipal, ass.ass_cnae AS cnae, 
					ass.ass_atividade_economica AS atividade_economica, TO_CHAR(ass.ass_data_cadastro, 'DD/MM/YYYY') AS data_cadastro,
					CASE
					 WHEN ass.fk_situacao_id = 'A' THEN 'ATIVO'
					 WHEN ass.fk_situacao_id = 'I' THEN 'INATIVO'
					 WHEN ass.fk_situacao_id = 'B' THEN 'BLOQUEADO'
					ELSE NULL
					END AS situacao, ass.fk_situacao_id AS cod_situacao,  ass.ass_razao_social AS razao_social, ass.ass_valor_contribuicao AS valor_contribuicao,
					'R$ ' || TRIM(from TO_CHAR(ass.ass_valor_contribuicao, '999G999G999G990D99')) AS valor_contribuicaors,
					ende.end_cep AS cep, ende.end_logradouro AS logradouro, ende.end_bairro AS bairro, ende.end_numero AS numero, 
					ende.end_complemento AS complemento, ende.fk_estado_id AS cod_uf, ende.fk_municipio_id AS cod_municipio,
					municipio.nome_municipio, uf.estado AS nome_estado, uf.sigla AS sigla_uf,
					con.con_telefone AS telefone, con.con_celular AS celular, con.con_email AS email, con.con_site AS site
				FROM principais.associado AS ass, principais.endereco AS ende, principais.contato AS con,
					public.municipio, public.uf
				WHERE ass.ass_id = ende.fk_associado_id
					AND ass.ass_id = con.fk_associado_id
					AND ende.fk_municipio_id = municipio.cod_municipio
					AND municipio.cod_estado = uf.uf
					$search
					$orderby
				$limit";

		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
    
	public function excluir($id)
	{
		// echo '<pre>'.
		$sql = "DELETE FROM principais.associado
				WHERE ass_id = ".$id;
		$delete = $this->con->prepare($sql);
		return $delete->execute();
	}
	
}
?>
