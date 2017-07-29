<?php
   
		
   class ControladorAssociacao
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorAssociacao::$singleton==NULL) {
				ControladorAssociacao::$singleton = new ControladorAssociacao();
			}
			return ControladorAssociacao::$singleton;
		}
		
		public function implantarAssociacao($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			try 
			{
				$con->beginTransaction(); $_SESSION['writeDbCliente'] = false;
				require_once(CAMINHO_PORTAL."classes/associacao/RepositorioAssociacao_".BANCO_PORTAL.".php");
				$repositorioAssociacao = new RepositorioAssociacao();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();
				require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_".BANCO_PORTAL.".php");
				$repositorioUsuario = new RepositorioUsuario();
				
				$_SESSION['dbCliente'] = "control_".$objBusca->banco;
				
				$aso_id = $repositorioAssociacao->inserirAssociacao($objBusca);
				if(!$aso_id){
					throw new Exception("Erro ao inserir na Associacao.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->aso_id = $aso_id;
					if(!$repositorioEndereco->inserirEndereco($objEndereco)){
						throw new Exception("Erro ao inserir Endereço.");
					}
					else{
						$objContato = $objBusca->contato;
						$objContato->aso_id = $aso_id;
						if(!$repositorioContato->inserirContato($objContato)){
							throw new Exception("Erro ao inserir Contato.");
						}
					}
				}
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				// echo str_replace("'", "", $objBusca->cnpj);
				$senha = "innove".str_replace("'", "", $objBusca->cnpj);
				$custo = '08';
				$salt = 'Cf1f11ePArKlBJomM0F6aJ';
				$objBusca->pass = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
				$objBusca->aso_id = $aso_id;
				$usu_id = $repositorioUsuario->inserirUsuario($objBusca);
				if(!$usu_id){
					throw new Exception("Erro ao inserir usuário.");
				}else{
					if(!$repositorioUsuario->inserirUsuarioPerfilAssociacao($usu_id)){
						throw new Exception("Erro ao inserir usuário perfil associação.");
					}
				}
				// echo 'apssou';
				// exit();
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$con->rollBack();
				exit();
				return false;
			}
		}
		
		public function implantarAssociacaoDbCliente($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$_SESSION['dbCliente'] = "control_".$objBusca->banco;
			$conDbCliente = Conexao::getConexaoDbCliente();
			
			try 
			{
				$conDbCliente->beginTransaction(); $_SESSION['writeDbCliente'] = true;
				require_once(CAMINHO_PORTAL."classes/associacao/RepositorioAssociacao_".BANCO_PORTAL.".php");
				$repositorioAssociacao = new RepositorioAssociacao();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();
				require_once(CAMINHO_PORTAL."classes/usuario/RepositorioUsuario_".BANCO_PORTAL.".php");
				$repositorioUsuario = new RepositorioUsuario();
				
				$aso_idDbCliente = $repositorioAssociacao->inserirAssociacaoDbCliente($objBusca);
				if(!$aso_idDbCliente){
					throw new Exception("Erro ao inserir a Associacao na base do Cliente.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->aso_id = $aso_idDbCliente;
					if(!$repositorioEndereco->inserirEnderecoDbCliente($objEndereco)){
						throw new Exception("Erro ao inserir Endereço na base do Cliente.");
					}
					else{
						$objContato = $objBusca->contato;
						$objContato->aso_id = $aso_idDbCliente;
						if(!$repositorioContato->inserirContatoDbCliente($objContato)){
							throw new Exception("Erro ao inserir Contato na base do Cliente.");
						}
					}
					$senha = "innove".str_replace("'", "", $objBusca->cnpj);
					$custo = '08';
					$salt = 'Cf1f11ePArKlBJomM0F6aJ';
					$objBusca->pass = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
					$objBusca->aso_id = $aso_idDbCliente;
					$usu_id_dbCliente = $repositorioUsuario->inserirUsuarioDbCliente($objBusca);
					if(!$usu_id_dbCliente){
						throw new Exception("Erro ao inserir usuário na base do Cliente.");
					}else{
						if(!$repositorioUsuario->inserirUsuarioPerfilAssociacaoDbCliente($usu_id_dbCliente)){
							throw new Exception("Erro ao inserir usuário perfil associação na base do Cliente.");
						}
					}
				}
				$conDbCliente->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				$conDbCliente->rollBack();
				exit();
				return false;
			}
		}
		
		public function atualizarAssociacaoPorCNPJ($objBusca){
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			try 
			{
				$con->beginTransaction();
				require_once(CAMINHO_PORTAL."classes/associacao/RepositorioAssociacao_".BANCO_PORTAL.".php");
				$repositorioAssociacao = new RepositorioAssociacao();
				require_once(CAMINHO_PORTAL."classes/endereco/RepositorioEndereco_".BANCO_PORTAL.".php");
				$repositorioEndereco = new RepositorioEndereco();
				require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
				$repositorioContato = new RepositorioContato();
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				
				if(!$repositorioAssociacao->atualizarAssociacaoPorCNPJ($objBusca)){
					throw new Exception("Erro ao atualizar Associacao.");
				}else{
					$objEndereco = $objBusca->endereco;
					$objEndereco->aso_id = $objBusca->id;
					if(!$repositorioEndereco->atualizarEndereco($objEndereco)){
						throw new Exception("Erro ao atualizar endereco da Associacao.");
					}else{
						$objContato = $objBusca->contato;
						$objContato->aso_id = $objBusca->id;
						if(!$repositorioContato->atualizarContato($objContato)){
							throw new Exception("Erro ao atualizar contato da Associacao.");
						}
					}
				}
				// echo 'passou tudo';
				// exit();
				$con->commit();
				return true;
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				exit();
				$con->rollBack();
				return false;
			}
		}
		
		public function consultarAssociacoes($objBusca){
			require_once(CAMINHO_PORTAL."classes/associacao/RepositorioAssociacao_".BANCO_PORTAL.".php");
			$controlador = new RepositorioAssociacao();
			return $controlador->consultarAssociacoes($objBusca);
		}
		
	}
?>
