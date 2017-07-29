<?php

//require_once('IRepositorioPerfil.php');

class RepositorioPerfil //implements IRepositorioPerfil
{

	private $con = NULL;

	public function __construct()
	{
		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}
	
	public function consultarPerfil(){		
		// echo '<pre>'.
		$sql = "SELECT per_id, per_descricao, visivel, per_sigla, per_url_inicial
				FROM 
					acesso.perfil
				WHERE visivel = TRUE";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}

	public function consultarPerfilPorLogin($login){		
		// echo '<pre>'.
		$sql = "SELECT per_id, per_descricao, visivel, per_sigla, per_url_inicial
				FROM 
					acesso.perfil
				WHERE visivel = TRUE
					AND usu_status = 'A'
					AND usu_login = '".$login."'";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row[0];
	}
	
	public function consultarMenuPorPerfil($id){		
		
		$sql = "SELECT m1.men_id AS men_id_pai, m1.men_nome AS men_nome_pai,
						CASE 
						 WHEN (mp1.menp_men_id IS NOT NULL AND mp1.menp_per_id IS NOT NULL) THEN TRUE
						ELSE FALSE
						END AS autorizacao_pai,
						m2.men_id AS men_id_filho, m2.men_nome AS men_nome_filho,
						CASE 
						 WHEN (mp2.menp_men_id IS NOT NULL AND mp2.menp_per_id IS NOT NULL) THEN TRUE
						ELSE FALSE
						END AS autorizacao_filho
				FROM acesso.menu m1
				LEFT JOIN acesso.menu_perfil mp1 ON mp1.menp_men_id = m1.men_id AND mp1.menp_per_id = ".$id."
				LEFT JOIN acesso.menu m2 ON m2.men_pai = m1.men_link
				LEFT JOIN acesso.menu_perfil mp2 ON mp2.menp_men_id = m2.men_id AND mp2.menp_per_id = ".$id."
				WHERE m1.men_pai IS NULL
				ORDER BY m1.men_ordem, m2.men_ordem";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	// public function consultarMunicipiosPerfil($id){		
		
		// $sql = "SELECT 
					// perfil_perfil.usu_id AS usu_id, perfil.per_id AS id, perfil.per_descricao AS descricao, perfil.per_sigla AS sigla, perfil.per_url_inicial AS urlLogin
				// FROM 
					// acesso.perfil_perfil, acesso.perfil
				// WHERE perfil_perfil.per_id = perfil.per_id
					// AND usu_id = ".$id."";
			
		// $arr = $this->con->query($sql);
		// $row = $arr->fetchAll(PDO::FETCH_OBJ);
		// return $row;
	// }
    
	public function alterarSenhaPerfil($obj)
	{
		// echo '<pre>'.
		$sql = "UPDATE
                       acesso.perfil
				SET
					usu_senha = '".$obj->nova_senha."'
                WHERE
					usu_id = ".$_SESSION['idLogado']."";
		$update = $this->con->prepare($sql);
		return $update->execute();
	}

	
	public function inserirPerfilPortalAval2($object) 
	{

		$easy_use = $object->easy_use;
		$cool_portal = $object->cool_portal;
		$util_portal = $object->util_portal;

		$sql = "INSERT INTO
	                   acesso.perfil_portal_avaliacao2(
					   	usu_id,
					   	usupaval_easy_use, 
						usupaval_cool_portal,
						usupaval_util_portal
					   ) 
	               VALUES
	                   ('".$_SESSION['idLogado']."',
	                   '".$easy_use."',
	                   '".$cool_portal."',
	                   '".$util_portal."')";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();

	}
	
}
?>
