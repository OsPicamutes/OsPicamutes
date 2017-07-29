<?php
   
		
   class ControladorPublic
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorPublic::$singleton==NULL) {
				ControladorPublic::$singleton = new ControladorPublic();
			}
			return ControladorPublic::$singleton;
		}
		
		public function contratarPublic($objBusca){
			// require_once(CAMINHO_PORTAL."classes/usuario/ControladorPublic.php");
			// $controlador = new ControladorPublic();
			// return $controlador->consultarRegionaisUsuario($objBusca);
			require_once( CAMINHO_PORTAL."conf/Conexao.php" );
			$con = Conexao::getConexao();
			
			try 
			{
				$con->beginTransaction();
				// echo BANCO_PORTAL;
				require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
				$repositorioPublic = new RepositorioPublic();
				// echo 'entrou';
				echo '<pre>'; print_r($objBusca); echo '</pre>';
				// $objBusca->protocolo = date('Y').;
				// if($repositorioPublic){
					
				// }else{
					if(isset($_FILES['imagem']) && $_FILES['imagem']['name'] != ""){
						$imagem = $_FILES['imagem']['name']; // Nome originai da imagem
						
						$dir = CAMINHO_PORTAL."public/".str_replace("'", "", $objBusca->cnpj); // Diretório das imagens
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
							
							// $protocolo = $repositorioPublic->inserir();
							// if(!$procotolo){
								
							// }
							
						}else{
							throw new Exception("Erro ao mover a imagem.");
						}
					}
				// }
				$protocolo = $repositorioPublic->inserir($objBusca);
				if(!$protocolo){
					throw new Exception("Erro ao contratar Public.");
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
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarCidades($pais, $uf, $municipio);
		}
		
		public function consultarUsuarioPerfilPorUsuario($id){
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarUsuarioPerfilPorUsuario($id);
		}
		
		public function consultarPais(){
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarPais();
		}
		
		public function consultarUf(){
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarUf();
		}
		
		public function consultarMunicipio($pais, $uf, $municipio=""){
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarMunicipio($pais, $uf, $municipio);
		}
		
		public function consultarCSOSN($cod=""){
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarCSOSN($cod);
		}
		
		public function consultarPISCOFINS($cod="", $sigla=""){
			require_once(CAMINHO_PORTAL."classes/public/RepositorioPublic_".BANCO_PORTAL.".php");
			$controlador = new RepositorioPublic();
			return $controlador->consultarPISCOFINS($cod, $sigla);
		}
	}
?>
