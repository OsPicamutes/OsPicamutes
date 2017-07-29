<?php
   
		
   class ControladorContato
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorContato::$singleton==NULL) {
				ControladorContato::$singleton = new ControladorContato();
			}
			return ControladorContato::$singleton;
		}
		
		public function consultarContatosPorParceiro($aso_codigo=""){
			require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
			$controlador = new RepositorioContato();
			return $controlador->consultarContatosPorParceiro($aso_codigo);
		}
		
		public function consultarContatosPorCliente($cli_id=""){
			require_once(CAMINHO_PORTAL."classes/contato/RepositorioContato_".BANCO_PORTAL.".php");
			$controlador = new RepositorioContato();
			return $controlador->consultarContatosPorCliente($cli_id);
		}		
	}
?>
