<?php
   
		
   class ControladorAssociado
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorAssociado::$singleton==NULL) {
				ControladorAssociado::$singleton = new ControladorAssociado();
			}
			return ControladorAssociado::$singleton;
		}
		
		public function inserirAssociado($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				// echo BANCO_PORTAL;
				require_once(CAMINHO_PORTAL."classes/associado/RepositorioAssociado_".BANCO_PORTAL.".php");
				$repositorioAssociado = new RepositorioAssociado();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();
				// echo 'entrou';
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				
				$ass_id = $repositorioAssociado->inserir($objBusca);
				if(!$ass_id){
					throw new Exception("Erro ao inserir Associado.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->ass_id = $ass_id;
					if(!$repositorioEndereco->inserirEndereco($objEndereco)){
						throw new Exception("Erro ao inserir Endereço.");
					}else{
						$objContato = $objBusca->contato;
						$objContato->ass_id = $ass_id;
						if(!$repositorioContato->inserirContato($objContato)){
							throw new Exception("Erro ao inserir Contato.");
						}
					}
				}
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				// echo 'passou';
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
		
		public function atualizarAssociado($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				require_once(CAMINHO_PORTAL."classes/associado/RepositorioAssociado_".BANCO_PORTAL.".php");
				$repositorioAssociado = new RepositorioAssociado();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				
				// $aso_id = $repositorioAssociado->atualizarAssociado($objBusca);
				if(!$repositorioAssociado->atualizar($objBusca)){
					throw new Exception("Erro ao atualizar Associado.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->ass_id = $objBusca->id;
					if(!$repositorioEndereco->atualizarEndereco($objEndereco)){
						throw new Exception("Erro ao atualizar endereço da Associado.");
					}else{
						$objContato = $objBusca->contato;
						$objContato->ass_id = $objBusca->id;
						if(!$repositorioContato->atualizarContato($objContato)){
							throw new Exception("Erro ao atualizar Contato da Associado.");
						}
					}
				}
				
				// echo 'passou tudo';
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
		
		public function excluirAssociado($lista){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				require_once(CAMINHO_PORTAL."classes/associado/RepositorioAssociado_".BANCO_PORTAL.".php");
				$repositorioAssociado = new RepositorioAssociado();
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				
				for($i = 0; $i < count($lista); $i++){
					if(!$repositorioAssociado->excluir($lista[$i])){
						throw new Exception("Erro ao excluir Associado.");
					}
				}
				
				// echo 'passou tudo';
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
		
		public function consultarAssociado($obj){
			require_once(CAMINHO_PORTAL."classes/associado/RepositorioAssociado_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAssociado();
			return $controlador->consultarAssociado($obj);
		}
		
	}
?>
