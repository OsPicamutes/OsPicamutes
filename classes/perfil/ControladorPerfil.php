<?php
   
		
   class ControladorPerfil
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorPerfil::$singleton==NULL) {
				ControladorPerfil::$singleton = new ControladorPerfil();
			}
			return ControladorPerfil::$singleton;
		}
		
		public function inserirPerfil($objBusca){
			// require_once(CAMINHO_PORTAL."classes/perfil/ControladorPerfil.php");
			// $controlador = new ControladorPerfil();
			// return $controlador->consultarRegionaisPerfil($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/perfil/RepositorioPerfil.php");
				$repositorioPerfil = new RepositorioPerfil();
				
				$con->commit();
				
			}catch(Exception $e){
				 print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				 $con->rollBack();
			}
		}
		
		public function alterarSenhaPerfil($objBusca){
			// require_once(CAMINHO_PORTAL."classes/perfil/ControladorPerfil.php");
			// $controlador = new ControladorPerfil();
			// return $controlador->consultarRegionaisPerfil($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/perfil/RepositorioPerfil_pgsql.php");
				$repositorioPerfil = new RepositorioPerfil();
				
				if(!$repositorioPerfil->alterarSenhaPerfil($objBusca)){
					throw new Exception("Erro ao Alterar Senha do Usuário.");
				}
				// echo '<br>passou tudo';
				// exit();
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				// exit();
				return false;
			}
		}
		
		public function consultarPerfil(){
			require_once(CAMINHO_PORTAL."classes/perfil/RepositorioPerfil_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPerfil();
			return $controlador->consultarPerfil();
		}
		
		public function consultarPerfilPorLogin($login){
			require_once(CAMINHO_PORTAL."classes/perfil/RepositorioPerfil_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPerfil();
			return $controlador->consultarPerfilPorLogin($login);
		}
		
		public function consultarMenuPorPerfil($id){
			require_once(CAMINHO_PORTAL."classes/perfil/RepositorioPerfil_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPerfil();
			return $controlador->consultarMenuPorPerfil($id);
		}
		
		// public function consultarMunicipiosPerfil($id){
			// require_once(CAMINHO_PORTAL."classes/perfil/RepositorioPerfil_".BANCO_PORTAL.".php");
			// $controlador = new RepositorioPerfil();
			// return $controlador->consultarMunicipiosPerfil($id);
		// }
	}
?>
