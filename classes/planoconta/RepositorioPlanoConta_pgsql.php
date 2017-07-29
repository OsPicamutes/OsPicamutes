<?php

//require_once('IRepositorioUsuario.php');

class RepositorioPlanoConta //implements IRepositorioUsuario
{

	private $con = NULL;

	public function __construct()
	{
		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}

	public function inserirPlanoConta($objBusca){		
		// echo '<pre>'.
		$sql = "INSERT INTO
	                   auxiliares.plano_contas(
					   	placon_tipo,
					   	fk_placon_id_pai, 
						placon_descricao
					   ) 
	               VALUES
	                   (".$objBusca->tipo.",
	                   ".$objBusca->pertencea.",
	                   ".$objBusca->descricao.");";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function consultarPlanosDeConta(){		
		// echo '<pre>'.
		$sql = "SELECT 
					placon_id AS id, placon_tipo AS tipo, fk_placon_id_pai AS pertencea,
					placon_descricao AS descricao, placon_ordem AS ordem
				FROM 
					auxiliares.plano_contas
				WHERE visivel = TRUE
				ORDER BY ordem, descricao";
			
		$arr = $this->con->query($sql);
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

	
	public function inserirUsuarioPortalAval2($object) 
	{

		$easy_use = $object->easy_use;
		$cool_portal = $object->cool_portal;
		$util_portal = $object->util_portal;

		$sql = "INSERT INTO
	                   acesso.usuario_portal_avaliacao2(
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
