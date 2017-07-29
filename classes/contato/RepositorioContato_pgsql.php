<?php

// require_once('IRepositorioContato.php');

class RepositorioContato //implements IRepositorioContato
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
	
	public function inserirContatoDbCliente($obj){
		
		if(isset($obj->aso_id) && $obj->aso_id != ""){ $col = "fk_associacao_id"; $obj->id_coluna = $obj->aso_id; }
		if(isset($obj->ass_id) && $obj->ass_id != ""){ $col = "fk_associado_id"; $obj->id_coluna = $obj->ass_id; }
		if(isset($obj->for_id) && $obj->for_id != ""){ $col = "fk_fornecedor_id"; $obj->id_coluna = $obj->for_id; }
		if(isset($obj->rep_id) && $obj->rep_id != ""){ $col = "fk_representante_id"; $obj->id_coluna = $obj->rep_id; }
		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.contato(
						".$col.", con_telefone, con_celular, con_email, con_site)
				VALUES (".$obj->id_coluna.", ".$obj->telefone.", ".$obj->celular.", ".$obj->email.", ".$obj->site.");";
		
		$inserir = $this->conDbCliente->prepare($sql);
	    return $inserir->execute();
	}
	
	public function inserirContato($obj){
		
		if(isset($obj->aso_id) && $obj->aso_id != ""){ $col = "fk_associacao_id"; $obj->id_coluna = $obj->aso_id; }
		if(isset($obj->ass_id) && $obj->ass_id != ""){ $col = "fk_associado_id"; $obj->id_coluna = $obj->ass_id; }
		if(isset($obj->for_id) && $obj->for_id != ""){ $col = "fk_fornecedor_id"; $obj->id_coluna = $obj->for_id; }
		if(isset($obj->rep_id) && $obj->rep_id != ""){ $col = "fk_representante_id"; $obj->id_coluna = $obj->rep_id; }
		
		// echo '<pre>'.
		$sql = "INSERT INTO principais.contato(
						".$col.", con_telefone, con_celular, con_email, con_site)
				VALUES (".$obj->id_coluna.", ".$obj->telefone.", ".$obj->celular.", ".$obj->email.", ".$obj->site.");";
		
		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarContato($obj){
		
		if(isset($obj->aso_id) && $obj->aso_id != ""){ $col = "fk_associacao_id"; $obj->id_coluna = $obj->aso_id; }
		if(isset($obj->ass_id) && $obj->ass_id != ""){ $col = "fk_associado_id"; $obj->id_coluna = $obj->ass_id; }
		if(isset($obj->for_id) && $obj->for_id != ""){ $col = "fk_fornecedor_id"; $obj->id_coluna = $obj->for_id; }
		if(isset($obj->rep_id) && $obj->rep_id != ""){ $col = "fk_representante_id"; $obj->id_coluna = $obj->rep_id; }
		
		// echo '<pre>'.
		$sql = "UPDATE principais.contato
				SET	con_telefone = ".$obj->telefone.",
					con_celular = ".$obj->celular.",
					con_email = ".$obj->email.",
					con_site = ".$obj->site."
				WHERE ".$col." = ".$obj->id_coluna.";";
		
		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
		
	public function atualizarContatoParam($obj){
		if($obj->aso_codigo != ""){ $col = "fk_aso_codigo = ".$obj->aso_codigo;}
		if($obj->cli_id != ""){ $col = "fk_cli_id = ".$obj->cli_id;}
		// if($obj->for_id != ""){ $col = "fk_fornecedor_id = ".$obj->for_id;}
		// if($obj->far_id != ""){ $col = "fk_farmaceutico_id = ".$obj->far_id;}
		// if($obj->con_id != ""){ $col = "fk_contador_id = ".$obj->con_id;}
		// if($obj->cer_id != ""){ $col = "fk_certificado_id = ".$obj->cer_id;}
		// echo '<pre>'.
		$sql = "UPDATE principais.telefone
				SET $col,
					tel_numero = ".$obj->telefone.",
					tel_setor = ".$obj->setor.", 
					tel_contato = ".$obj->pessoa.",
					tel_celular = ".$obj->celular.",
					tel_whatsapp = ".$obj->whatsapp.",
					tel_principal = ".$obj->tel_principal.",
					tel_usu_id_cadastro = ".$_SESSION['idLogado']."
				WHERE tel_id = ".$obj->id_contato.";";
				

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function deletarContatos($id_contato){
		// echo '<pre>'.
		$sql = "DELETE FROM principais.telefone
				WHERE telefone.tel_id = ".$id_contato;

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	// public function deletarContatosParceiro($aso_codigo){
		//echo '<pre>'.
		// $sql = "DELETE FROM principais.contatos
				// WHERE contatos.fk_cliente_id = ".$aso_codigo;

		// $inserir = $this->con->prepare($sql);
	    // return $inserir->execute();
	// }
	
	// public function deletarContatosFarmaceutico($far_id){
		//echo '<pre>'.
		// $sql = "DELETE FROM principais.contatos
				// WHERE contatos.fk_farmaceutico_id = ".$far_id;

		// $inserir = $this->con->prepare($sql);
	    // return $inserir->execute();
	// }
	
	public function consultarContatosPorParceiro($aso_codigo){		
		if($aso_codigo != ""){ $sqlAdd = "AND telefone.fk_aso_codigo = ".$aso_codigo; }
		// echo '<pre>'.
		$sql = "SELECT tel_id, fk_aso_codigo, fk_cli_id, tel_numero, tel_setor, tel_contato
				FROM principais.telefone
				WHERE visivel = TRUE
				$sqlAdd
				ORDER BY tel_id";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	public function consultarContatosPorCliente($cli_id){		
		if($cli_id != ""){ $sqlAdd = "AND telefone.fk_cli_id = ".$cli_id." AND tel_principal = true"; }
		// echo '<pre>'.
		$sql = "SELECT tel_id, fk_cli_id, tel_numero, tel_celular, tel_whatsapp
				FROM principais.telefone
				WHERE visivel = TRUE
				$sqlAdd
				ORDER BY tel_id";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}		
}
?>
