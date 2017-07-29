<?php

// require_once('IRepositorioLink.php');

class RepositorioLink //implements IRepositorioLink
{

	private $con = NULL;

	public function __construct()
	{

		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}

	public function consultarCidades($pais, $uf, $municipio){		
		// echo '<pre>'.
		$sql = "SELECT *
				FROM pais p, uf u, municipio m
				WHERE p.codigo = u.cod_pais
					AND u.uf = m.cod_estado
					AND m.cod_municipio = ".$municipio."
					AND u.uf = ".$uf."
					AND p.codigo = '".$pais."'";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row[0];
	}
	
	public function alterar($id){
		
		$sql = "";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	// public function consultarMunicipiosUsuario($id){		
		
		// $sql = "SELECT 
					// usuario_perfil.usu_id AS usu_id, perfil.per_id AS id, perfil.per_descricao AS descricao, perfil.per_sigla AS sigla, perfil.per_url_inicial AS urlLogin
				// FROM 
					// acesso.usuario_perfil, acesso.perfil
				// WHERE usuario_perfil.per_id = perfil.per_id
					// AND usu_id = ".$id."";
			
		// $arr = $this->con->query($sql);
		// $row = $arr->fetchAll(PDO::FETCH_OBJ);
		// return $row;
	// }
    
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

	
	public function consultarLinkPorPerfilAcesso($id, $perfil_id) 
	{
		// echo '<pre>'.
		$sql = "SELECT count(link.*) AS total 
				FROM acesso.link, acesso.menu, acesso.menu_perfil
				WHERE menu_perfil.menp_men_id = menu.men_id
					AND menu.men_link = link.lin_id
					AND link.visivel = TRUE
					AND menu.visivel = TRUE
					AND link.visivel = TRUE
					AND menu_perfil.menp_per_id = ".$perfil_id."
					AND link.lin_id = ".$id;
		
	  
		$arr = $this->con->query($sql);
		$row = $arr->fetch(PDO::FETCH_ASSOC);
		
		if($row['total'] > 0){
			$retorno = TRUE;
		}else{
			$retorno = FALSE;
		}
		return $retorno;
	}
	
	public function consultarMenuLinkPorPerfilAcesso($perfil) 
	{
		// echo '<pre>'.
		$sql = "SELECT 
					mn.*,li.lin_id, li.lin_nome ,li.lin_url, li.lin_class, li.lin_datatarget
				FROM    
					acesso.menu mn
					left outer join acesso.menu_perfil mp on (mp.menp_men_id = mn.men_id)
					left outer join acesso.link li on (li.lin_id = mn.men_link)
				WHERE 
					mp.menp_per_id = $perfil
					AND mn.visivel = TRUE
				ORDER BY mn.men_ordem, mn.men_nome;";
		//echo $sql; die();
		$arr = $this->con->query($sql); 
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
}
?>
