<?php
   
		
   class ControladorLink
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorLink::$singleton==NULL) {
				ControladorLink::$singleton = new ControladorLink();
			}
			return ControladorLink::$singleton;
		}
		
		public function contratarLink($objBusca){
			// require_once(CAMINHO_PORTAL."classes/usuario/ControladorLink.php");
			// $controlador = new ControladorLink();
			// return $controlador->consultarRegionaisUsuario($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				// echo BANCO_PORTAL;
				require_once(CAMINHO_PORTAL."classes/link/RepositorioLink_".BANCO_PORTAL.".php");
				$repositorioLink = new RepositorioLink();
				// echo 'entrou';
				echo '<pre>'; print_r($objBusca); echo '</pre>';
				// $objBusca->protocolo = date('Y').;
				// if($repositorioLink){
					
				// }else{
					if(isset($_FILES['imagem']) && $_FILES['imagem']['name'] != ""){
						$imagem = $_FILES['imagem']['name']; // Nome originai da imagem
						
						$dir = CAMINHO_PORTAL."link/".str_replace("'", "", $objBusca->cnpj); // Diretório das imagens
						$type = explode("/", $_FILES['imagem']['type']);
						$salva = $dir."/logo.".$type[1]; // Caminho onde vai ficar a imagem no servidor
						// echo $dir;
						if(!is_dir($dir)){
							// echo 'nao existe';
							if(!mkdir($dir)){
								throw new Exception("Erro ao criar diretorio da imagem.");
							}
						}
						// exit();
						if(move_uploaded_file($_FILES['imagem']['tmp_name'],$salva )){ // Este comando move o arquivo do diretório temporário para o caminho especificado acima
							$info_imagem = pathinfo($salva); // Resgatando extensão do arquivo recém-baixado
							
							$nova_imagem = time().rand(1000,5000).".".$info_imagem['extension']; // Nome da imagem redimensionada
							
							// *** Include the class
							// ESte arquivo está no arquivo ZIPADO do artigo
							require_once( CAMINHO_PORTAL."lib/resize2.php" );
							
							// *** 1) Initialise / load image
							$resizeObj = new resize($salva);
							
							// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
							// $resizeObj -> resizeImage(200, 200, 'crop');
							$resizeObj -> resizeImage(132, 132, 'exact');
							/* Especificando que a nova imagem terá 200 px de largura e altura. E utilizando a opção CROP, que é considerada a melhor
							pois, recorta a imagem na medida sem distorção
							Se quizer ver outras opções, visite o site do desenvolvedor de resize2.php (http://www.jarrodoberto.com/articles/2011/09/image-resizing-made-easy-with-php)

							*/

							// *** 3) Save image
							$resizeObj -> saveImage($dir."/".$nova_imagem, 100);
							// O arquivo-base é removido
							unlink($salva);
							$objBusca->foto = $nova_imagem;
							
							// $protocolo = $repositorioLink->inserir();
							// if(!$procotolo){
								
							// }
							
						}else{
							throw new Exception("Erro ao mover a imagem.");
						}
					}
				// }
				$protocolo = $repositorioLink->inserir($objBusca);
				if(!$protocolo){
					throw new Exception("Erro ao contratar Link.");
				}
				// echo '<pre>'; print_r($objBusca); echo '</pre>';
				exit();
				// $con->commit();
				
			}catch(Exception $e){
				print '<br>============  Rollback =========== '.$e->getMessage().' ================<br>';
				exit();
				$con->rollBack();
			}
		}
		
		public function consultarCidades($pais, $uf, $municipio){
			require_once(CAMINHO_PORTAL."classes/link/RepositorioLink_".BANCO_PORTAL.".php");
			$controlador = new RepositorioLink();
			return $controlador->consultarCidades($pais, $uf, $municipio);
		}
		
		public function consultarLinkPorPerfilAcesso($id, $perfil_id){
			require_once(CAMINHO_PORTAL."classes/link/RepositorioLink_".BANCO_PORTAL.".php");
			$controlador = new RepositorioLink();
			return $controlador->consultarLinkPorPerfilAcesso($id, $perfil_id);
		}
		
		public function consultarMenuLinkPorPerfilAcesso($perfil_id, $menpai=""){
			require_once(CAMINHO_PORTAL."classes/link/RepositorioLink_".BANCO_PORTAL.".php");
			$controlador = new RepositorioLink();
			return $controlador->consultarMenuLinkPorPerfilAcesso($perfil_id, $menpai);
		}
	}
?>
