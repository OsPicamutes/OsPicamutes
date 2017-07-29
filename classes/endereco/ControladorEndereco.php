<?php
   
		
   class ControladorEndereco
   {

      private static $singleton = NULL;

		public static function getInstancia() 
		{
			if (ControladorEndereco::$singleton==NULL) {
				ControladorEndereco::$singleton = new ControladorEndereco();
			}
			return ControladorEndereco::$singleton;
		}				
		
	}
?>
