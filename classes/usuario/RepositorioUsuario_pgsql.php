<?php

//require_once('IRepositorioUsuario.php');

class RepositorioUsuario //implements IRepositorioUsuario
{

	private $con = NULL;

	public function __construct()
	{
		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		// $this->con = Conexao::getConexao();
		// echo '<pre>'; print_r($_SESSION); echo '</pre>';
		if(($_SESSION['readDbCliente'] && isset($_SESSION['dbCliente'])) || (isset($_SESSION['dbCliente']) && $_SESSION['writeDbCliente'] && $_SESSION['perfilAtualLogado']['sigla'] == 'G')){
			$this->conDbCliente = Conexao::getConexaoDbCliente();
		}else{
			$this->con = Conexao::getConexao();
		}
	}
	
	public function inserirUsuarioDbCliente($obj){
		// echo '<pre>'.
		$sql = "INSERT INTO acesso.usuario(
						usu_login, usu_senha, usu_status, usu_nome, usu_email)
				VALUES (".$obj->cnpj.", '".$obj->pass."', 'A', ".$obj->razao_social.", ".$obj->contato->email.") RETURNING usu_id;";
		
		$inserir = $this->conDbCliente->prepare($sql);
		$result = $inserir->execute();
		if(!$result){
			print_r($this->conDbCliente->errorInfo());// die();
		}else{
			$return = $inserir->fetch();
			return $return[0];
		}
		return $result;
	}
	
	public function inserirUsuarioPerfilAssociacaoDbCliente($usu_id){
		// echo '<pre>'.
		$sql = "INSERT INTO acesso.usuario_perfil(usu_id, per_id)
				VALUES (".$usu_id.", 2);";
		
		$inserir = $this->conDbCliente->prepare($sql);
		return $inserir->execute();
	}
	
	public function inserirUsuario($obj){
		// echo '<pre>'.
		$sql = "INSERT INTO acesso.usuario(
						usu_login, usu_senha, usu_status, usu_nome, usu_email, usu_database, fk_associacao_id)
				VALUES (".$obj->cnpj.", '".$obj->pass."', 'A', ".$obj->razao_social.", ".$obj->contato->email.", 
						'".$_SESSION['dbCliente']."', ".$obj->aso_id.") RETURNING usu_id;";
		
		$inserir = $this->con->prepare($sql);
		$result = $inserir->execute();
		if(!$result){
			print_r($this->con->errorInfo());// die();
		}else{
			$return = $inserir->fetch();
			return $return[0];
		}
		return $result;
	}
	
	public function inserirUsuarioPerfilAssociacao($usu_id){
		// echo '<pre>'.
		$sql = "INSERT INTO acesso.usuario_perfil(usu_id, per_id)
				VALUES (".$usu_id.", 2);";
		
		$inserir = $this->con->prepare($sql);
		return $inserir->execute();
	}

	public function consultarUsuarioPorLogin($login){		
		// echo '<pre>'.
		$sql = "SELECT usu_id, usu_login, usu_senha, usu_status, usu_data_cadastro, 
					usu_data_expira
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
	
	public function consultarUsuarioPorLoginDbCliente($login){		
		// echo '<pre>'.
		$sql = "SELECT usu_id, usu_login, usu_senha, usu_status, usu_data_cadastro, 
					usu_data_expira, fk_associacao_id, aso_cnpj
				FROM 
					acesso.usuario
				LEFT JOIN principais.associacao ON fk_associacao_id = associacao.aso_id
				WHERE usu_status = 'A'
					AND usu_login = '".$login."'";
			
		$arr = $this->conDbCliente->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row[0];
	}
	
	public function consultarUsuarioPerfilPorUsuarioDbCliente($id){		
		// echo '<pre>'.
		$sql = "SELECT 
					usuario_perfil.usu_id AS usu_id, perfil.per_id AS id, 
					perfil.per_descricao AS descricao, perfil.per_sigla AS sigla, perfil.per_url_inicial AS urlLogin
				FROM 
					acesso.usuario_perfil, acesso.perfil,
					acesso.usuario
				WHERE usuario_perfil.per_id = perfil.per_id
					AND usuario_perfil.usu_id = usuario.usu_id
					AND usuario_perfil.usu_id = ".$id."";
			
		$arr = $this->conDbCliente->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	public function consultarUsuarios($obj){
		
		if($obj->usu_id){
			$sqlAdd = "AND usuario_perfil.usu_id = ".$obj->usu_id;
		}
		if($objBusca->search != ""){
			$search = "AND ( associacao.aso_fantasia iLIKE '%".$objBusca->search."%' ";
			$search .= "OR LPAD(cast(associacao.aso_codigo as varchar),6,'0') = '$objBusca->search' ";
			$search .= "OR associacao.aso_razao_social iLIKE '%".$objBusca->search."%' ";
			$search .= "OR nome_municipio iLIKE '%".$objBusca->search."%' ";			
			$search .= "OR associacao.aso_inscricao_estadual iLIKE '%".$objBusca->search."%' )";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		// echo '<pre>'.
		$sql = "SELECT usuario.usu_id AS id, usuario.usu_login AS login, usuario.usu_status AS status, 
						CASE 
						 WHEN usuario.usu_status = 'A' THEN 'ATIVO'
						 WHEN usuario.usu_status = 'B' THEN 'BLOQUEADO'
						ELSE 'INATIVO'
						END AS status_usuario, usuario.usu_nome AS nome_usuario, usu_email AS email, 
						perfil.per_id AS id_perfil, perfil.per_descricao AS nome_perfil, perfil.per_sigla AS sigla
				FROM 
					acesso.usuario, acesso.usuario_perfil, acesso.perfil
				WHERE usuario_perfil.per_id = perfil.per_id
					AND usuario_perfil.usu_id = usuario.usu_id
					$sqlAdd
					$search
					$orderby
				$limit";
			
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
