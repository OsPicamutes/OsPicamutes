<?php
   
		
   class ControladorPlanoConta
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorPlanoConta::$singleton==NULL) {
				ControladorPlanoConta::$singleton = new ControladorPlanoConta();
			}
			return ControladorPlanoConta::$singleton;
		}
		
		public function inserirPlanoConta($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/planoconta/RepositorioPlanoConta_".BANCO_PORTAL.".php");
				$repositorioPlanoConta = new RepositorioPlanoConta();
				
				if(!$repositorioPlanoConta->inserirPlanoConta($objBusca)){
					throw new Exception("Erro ao inserir plano de conta.");
				}
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
		
		public function alterarSenhaPlanoConta($objBusca){
			// require_once(CAMINHO_PORTAL."classes/planoconta/ControladorPlanoConta.php");
			// $controlador = new ControladorPlanoConta();
			// return $controlador->consultarRegionaisPlanoConta($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/planoconta/RepositorioPlanoConta_".BANCO_PORTAL.".php");
				$repositorioPlanoConta = new RepositorioPlanoConta();
				
				if(!$repositorioPlanoConta->alterarSenhaPlanoConta($objBusca)){
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
		
		public function consultarPlanosDeConta(){
			require_once(CAMINHO_PORTAL."classes/planoconta/RepositorioPlanoConta_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPlanoConta();
			return $controlador->consultarPlanosDeConta();
		}
		
		public function consultarPlanoContaPerfilPorPlanoConta($id){
			require_once(CAMINHO_PORTAL."classes/planoconta/RepositorioPlanoConta_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPlanoConta();
			return $controlador->consultarPlanoContaPerfilPorPlanoConta($id);
		}
		
		public function consultarPlanoContas($obj){
			require_once(CAMINHO_PORTAL."classes/planoconta/RepositorioPlanoConta_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPlanoConta();
			return $controlador->consultarPlanoContas($obj);
		}
		
		// public function consultarMunicipiosPlanoConta($id){
			// require_once(CAMINHO_PORTAL."classes/planoconta/RepositorioPlanoConta_".BANCO_PORTAL.".php");
			// $controlador = new RepositorioPlanoConta();
			// return $controlador->consultarMunicipiosPlanoConta($id);
		// }
	}
?>
