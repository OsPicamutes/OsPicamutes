<?php

//require_once('IRepositorioUsuario.php');

class RepositorioUsuarioAutenticacao //implements IRepositorioUsuario
{

	private $con = NULL;

	public function __construct()
	{
		require_once( CAMINHO_PORTAL."conf/ConexaoAutenticacao.php" );
		$this->con = ConexaoAutenticacao::getConexao();
	}

	public function consultarUsuarioPorLogin($login){		
		// echo '<pre>'.
		$sql = "SELECT *
				FROM 
					acesso.usuario
				WHERE usu_status = 'A'
					AND usu_login = '".$login."'";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row[0];
	}
	
	public function consultarUsuarioPerfilPorUsuario($id){		
		
		$sql = "SELECT 
					usuario_perfil.usu_id AS usu_id, perfil.per_id AS id, 
					perfil.per_descricao AS descricao, perfil.per_sigla AS sigla, perfil.per_url_inicial AS urlLogin
				FROM 
					acesso.usuario_perfil, acesso.perfil,
					acesso.usuario
				WHERE usuario_perfil.per_id = perfil.per_id
					AND usuario_perfil.usu_id = usuario.usu_id
					AND usuario_perfil.usu_id = ".$id."";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	public function alterarSenhaUsuario($obj)
	{
		// echo '<pre>'.
		$sql = "UPDATE
                       acesso.usuario
				SET
					usu_senha = '".$obj->nova_senha."'
                WHERE
					usu_id = ".$_SESSION['idLogado']."";
		$update = $this->con->prepare($sql);
		return $update->execute();
	}
	
}
?>
