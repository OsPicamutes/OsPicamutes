<?php
   
		
   class ControladorAuxiliares
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorAuxiliares::$singleton==NULL) {
				ControladorAuxiliares::$singleton = new ControladorAuxiliares();
			}
			return ControladorAuxiliares::$singleton;
		}
		
		/****************************INÍCIO DOCUMENTOS****************************/
		
		public function inserirDocumento($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->inserirDocumento($objBusca)){
					throw new Exception("Erro ao inserir documento.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function atualizarDocumento($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->atualizarDocumento($objBusca)){
					throw new Exception("Erro ao Alterar Documento.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function excluirDocumento($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->excluirDocumento($objBusca)){
					throw new Exception("Erro ao Excluir Documento.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function consultarDocumentos($obj){
			require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAuxiliares();
			return $controlador->consultarDocumentos($obj);
		}
		
		/****************************FIM DOCUMENTOS****************************/
		/****************************INÍCIO CARGOS****************************/
		
		public function inserirCargo($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->inserirCargo($objBusca)){
					throw new Exception("Erro ao inserir Cargo.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function atualizarCargo($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->atualizarCargo($objBusca)){
					throw new Exception("Erro ao Alterar Cargo.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function excluirCargo($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->excluirCargo($objBusca)){
					throw new Exception("Erro ao Excluir Cargo.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function consultarCargos($obj){
			require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAuxiliares();
			return $controlador->consultarCargos($obj);
		}
		
		/****************************FIM CARGOS****************************/
		/****************************INÍCIO SITUACOES****************************/
		
		public function inserirSituacao($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->inserirSituacao($objBusca)){
					throw new Exception("Erro ao inserir Situacao.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function atualizarSituacao($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->atualizarSituacao($objBusca)){
					throw new Exception("Erro ao Alterar Situacao.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				// exit();
				return false;
			}
		}
		
		public function excluirSituacao($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->excluirSituacao($objBusca)){
					throw new Exception("Erro ao Excluir Situacao.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function consultarSituacoes($obj){
			require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAuxiliares();
			return $controlador->consultarSituacoes($obj);
		}
		
		/****************************FIM SITUACOES****************************/
		/****************************INÍCIO SERVICOS****************************/
		
		public function inserirServico($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->inserirServico($objBusca)){
					throw new Exception("Erro ao inserir Serviço.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function atualizarServico($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->atualizarServico($objBusca)){
					throw new Exception("Erro ao Alterar Serviço.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				// exit();
				return false;
			}
		}
		
		public function excluirServico($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->excluirServico($objBusca)){
					throw new Exception("Erro ao Excluir Serviço.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function consultarServicos($obj){
			require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAuxiliares();
			return $controlador->consultarServicos($obj);
		}
		
		/****************************FIM SITUACOES****************************/
		/****************************INÍCIO SERVICOS****************************/
		
		public function inserirAtividadeEconomica($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->inserirAtividadeEconomica($objBusca)){
					throw new Exception("Erro ao inserir Atividade Econômica.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				exit();
				return false;
			}
		}
		
		public function atualizarAtividadeEconomica($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->atualizarAtividadeEconomica($objBusca)){
					throw new Exception("Erro ao Alterar Atividade Econômica.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				// exit();
				return false;
			}
		}
		
		public function excluirAtividadeEconomica($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				
				require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
				$repositorioAuxiliares = new RepositorioAuxiliares();
				
				if(!$repositorioAuxiliares->excluirAtividadeEconomica($objBusca)){
					throw new Exception("Erro ao Excluir Atividade Econômica.");
				}
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				return false;
			}
		}
		
		public function consultarAtividadeEconomica($obj){
			require_once(CAMINHO_PORTAL."classes/auxiliares/RepositorioAuxiliares_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAuxiliares();
			return $controlador->consultarAtividadeEconomica($obj);
		}
		
		/****************************FIM SITUACOES****************************/
		
	}
?>
