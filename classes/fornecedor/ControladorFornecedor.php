<?php
   
		
   class ControladorFornecedor
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorFornecedor::$singleton==NULL) {
				ControladorFornecedor::$singleton = new ControladorFornecedor();
			}
			return ControladorFornecedor::$singleton;
		}
		
		public function inserirFornecedor($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				// echo BANCO_PORTAL;
				require_once(CAMINHO_PORTAL."classes/fornecedor/RepositorioFornecedor_".BANCO_PORTAL.".php");
				$repositorioFornecedor = new RepositorioFornecedor();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();	
				
				$for_id = $repositorioFornecedor->inserirFornecedor($objBusca);
				if(!$for_id){
					throw new Exception("Erro ao inserir Fornecedor.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->for_id = $for_id;
					if(!$repositorioEndereco->inserirEndereco($objEndereco)){
						throw new Exception("Erro ao inserir endereço do Fornecedor.");
					}else{
						$objContato = $objBusca->contato;
						$objContato->for_id = $for_id;
						if(!$repositorioContato->inserirContato($objContato)){
							throw new Exception("Erro ao inserir contato do Fornecedor.");
						}
					}
					
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
		
		public function atualizarFornecedor($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				// echo BANCO_PORTAL;
				require_once(CAMINHO_PORTAL."classes/fornecedor/RepositorioFornecedor_".BANCO_PORTAL.".php");
				$repositorioFornecedor = new RepositorioFornecedor();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();
				
				//echo '<pre>'; print_r($objBusca); echo '</pre>';
				
				if(!$repositorioFornecedor->atualizarFornecedor($objBusca)){
					throw new Exception("Erro ao atualizar Fornecedor.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->aso_id = $objBusca->id;
					if(!$repositorioEndereco->atualizarEndereco($objEndereco)){
						throw new Exception("Erro ao atualizar endereco do Fornecedor.");
					}else{
						$objContato = $objBusca->contato;
						$objContato->aso_id = $objBusca->id;
						if(!$repositorioContato->atualizarContato($objContato)){
							throw new Exception("Erro ao atualizar contato do Fornecedor.");
						}
					}
				}
				
				//echo '<br>passou tudo';				
				//exit();
				$con->commit();
				return true;
				
			}catch(Exception $e){
				//print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				//exit();
				return false;
			}
		}
		
		public function excluirFornecedor($for_id){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();			
			
			try 
			{
				$con->beginTransaction();
				// echo BANCO_PORTAL;
				require_once(CAMINHO_PORTAL."classes/fornecedor/RepositorioFornecedor_".BANCO_PORTAL.".php");
				$repositorioFornecedor = new RepositorioFornecedor();
				
				if(!$repositorioFornecedor->excluirFornecedor($for_id)){ // EXCLUE TAMBÉM A LIGAÇÃO DA CHAVE ESTRANGEIRA
					throw new Exception("Erro ao excluir Fornecedor.");
				}
				
				//echo '<br>passou tudo';				
				//exit();
				$con->commit();
				return true;
				
			}catch(Exception $e){
				//print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				//exit();
				return false;
			}
		}		
		public function consultarFornecedor($obj){
			require_once(CAMINHO_PORTAL."classes/fornecedor/RepositorioFornecedor_".BANCO_PORTAL.".php");
			$controlador = new RepositorioFornecedor();
			return $controlador->consultarFornecedor($obj);
		}
		
	}
?>
