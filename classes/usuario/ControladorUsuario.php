<?php
   
		
   class ControladorUsuario
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorUsuario::$singleton==NULL) {
				ControladorUsuario::$singleton = new ControladorUsuario();
			}
			return ControladorUsuario::$singleton;
		}
		
		public function inserirUsuario($objBusca){
			// require_once(CAMINHO_PORTAL."classes/usuario/ControladorUsuario.php");
			// $controlador = new ControladorUsuario();
			// return $controlador->consultarRegionaisUsuario($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario.php");
				$repositorioUsuario = new RepositorioUsuario();
				
				$con->commit();
				
			}catch(Exception $e){
				 print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				 $con->rollBack();
			}
		}
		
		public function alterarSenhaUsuario($objBusca){
			// require_once(CAMINHO_PORTAL."classes/usuario/ControladorUsuario.php");
			// $controlador = new ControladorUsuario();
			// return $controlador->consultarRegionaisUsuario($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_pgsql.php");
				$repositorioUsuario = new RepositorioUsuario();
				
				if(!$repositorioUsuario->alterarSenhaUsuario($objBusca)){
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
		
		public function consultarUsuarioPorLogin($login){
			require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuarioAutenticacao_".BANCO_PORTAL.".php");
			$controlador = new RepositorioUsuarioAutenticacao();
			return $controlador->consultarUsuarioPorLogin($login);
		}
		
		public function consultarUsuarioPerfilPorUsuario($id){
			require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuarioAutenticacao_".BANCO_PORTAL.".php");
			$controlador = new RepositorioUsuarioAutenticacao();
			return $controlador->consultarUsuarioPerfilPorUsuario($id);
		}
		
		public function consultarUsuarioPorLoginDbCliente($login){
			require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_".BANCO_PORTAL.".php");
			$controlador = new RepositorioUsuario();
			return $controlador->consultarUsuarioPorLoginDbCliente($login);
		}
		
		public function consultarUsuarioPerfilPorUsuarioDbCliente($id){
			require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_".BANCO_PORTAL.".php");
			$controlador = new RepositorioUsuario();
			return $controlador->consultarUsuarioPerfilPorUsuarioDbCliente($id);
		}
		
		public function consultarUsuarios($obj){
			require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_".BANCO_PORTAL.".php");
			$controlador = new RepositorioUsuario();
			return $controlador->consultarUsuarios($obj);
		}
		
		// public function consultarMunicipiosUsuario($id){
			// require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_".BANCO_PORTAL.".php");
			// $controlador = new RepositorioUsuario();
			// return $controlador->consultarMunicipiosUsuario($id);
		// }
	}
?>
