<?php

// require_once('IRepositorioEndereco.php');

class RepositorioEndereco //implements IRepositorioEndereco
{

	private $con = NULL;
	private $conDbCliente = NULL;

	public function __construct()
	{

		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		if(isset($_SESSION['dbCliente']) && $_SESSION['writeDbCliente'] && $_SESSION['perfilAtualLogado']['sigla'] == 'G'){
			$this->conDbCliente = Conexao::getConexaoDbCliente();
		}else{
			$this->con = Conexao::getConexao();
		}
	}
	
	public function inserirEnderecoDbCliente($obj){
		
		if(isset($obj->aso_id) && $obj->aso_id != ""){ $col = "fk_associacao_id"; $obj->id_coluna = $obj->aso_id; }
		if(isset($obj->ass_id) && $obj->ass_id != ""){ $col = "fk_associado_id"; $obj->id_coluna = $obj->ass_id; }
		if(isset($obj->for_id) && $obj->for_id != ""){ $col = "fk_fornecedor_id"; $obj->id_coluna = $obj->for_id; }
		if(isset($obj->rep_id) && $obj->rep_id != ""){ $col = "fk_representante_id"; $obj->id_coluna = $obj->rep_id; }
		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.endereco(
						".$col.", end_cep, end_logradouro, end_bairro, end_numero, 
						end_complemento, fk_estado_id, fk_municipio_id, fk_usu_id_cadastro )
				VALUES (".$obj->id_coluna.", ".$obj->cep.", ".$obj->logradouro.", ".$obj->bairro.", ".$obj->numero.",
				".$obj->complemento.", ".$obj->uf.", ".$obj->cidade.", ".$_SESSION['idLogado'].");";
		
		$inserir = $this->conDbCliente->prepare($sql);
	    return $inserir->execute();
	}
	
	public function inserirEndereco($obj){
		
		if(isset($obj->aso_id) && $obj->aso_id != ""){ $col = "fk_associacao_id"; $obj->id_coluna = $obj->aso_id; }
		if(isset($obj->ass_id) && $obj->ass_id != ""){ $col = "fk_associado_id"; $obj->id_coluna = $obj->ass_id; }
		if(isset($obj->for_id) && $obj->for_id != ""){ $col = "fk_fornecedor_id"; $obj->id_coluna = $obj->for_id; }
		if(isset($obj->rep_id) && $obj->rep_id != ""){ $col = "fk_representante_id"; $obj->id_coluna = $obj->rep_id; }
		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.endereco(
						".$col.", end_cep, end_logradouro, end_bairro, end_numero, 
						end_complemento, fk_estado_id, fk_municipio_id, fk_usu_id_cadastro )
				VALUES (".$obj->id_coluna.", ".$obj->cep.", ".$obj->logradouro.", ".$obj->bairro.", ".$obj->numero.",
				".$obj->complemento.", ".$obj->uf.", ".$obj->cidade.", ".$_SESSION['idLogado'].");";
		
		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarEndereco($obj){
		
		if(isset($obj->aso_id) && $obj->aso_id != ""){ $col = "fk_associacao_id"; $obj->id_coluna = $obj->aso_id; }
		if(isset($obj->ass_id) && $obj->ass_id != ""){ $col = "fk_associado_id"; $obj->id_coluna = $obj->ass_id; }
		if(isset($obj->for_id) && $obj->for_id != ""){ $col = "fk_fornecedor_id"; $obj->id_coluna = $obj->for_id; }
		if(isset($obj->rep_id) && $obj->rep_id != ""){ $col = "fk_representante_id"; $obj->id_coluna = $obj->rep_id; }
		
		// echo '<pre>'.
		$sql = "UPDATE principais.endereco
				SET end_cep = ".$obj->cep.",
					end_logradouro = ".$obj->logradouro.",
					end_bairro = ".$obj->bairro.",
					end_numero = ".$obj->numero.",
					end_complemento = ".$obj->complemento.",
					fk_estado_id = ".$obj->uf.",
					fk_municipio_id = ".$obj->cidade."
				WHERE ".$col." = ".$obj->id_coluna.";";
		
		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function atualizarEnderecoParam($obj){
		if($obj->aso_codigo != ""){ $col = "fk_aso_codigo = ".$obj->aso_codigo;}
		if($obj->cli_id != ""){ $col = "fk_cli_id = ".$obj->cli_id;}
		
		//echo '<pre>'.
		$sql = "UPDATE principais.endereco
				SET end_cep = ".$obj->cep.",
					end_logradouro = ".$obj->logradouro.",
					end_bairro = ".$obj->bairro.",
					end_numero = ".$obj->numero.", 
					end_complemento = ".$obj->complemento.",
					fk_estado_id = ".$obj->uf.",
					fk_municipio_id = ".$obj->municipio.",
					end_principal = ".$obj->end_principal.", 
					end_usu_id_cadastro = ".$_SESSION['idLogado']."
				WHERE $col;";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}	
}
?>
