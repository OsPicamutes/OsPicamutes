<?php
	
class ConexaoAutenticacao{
		
	  private static $con = NULL;

      public static function getConexao() {
         if (ConexaoAutenticacao::$con == NULL) { 	
			
		    include "config.autentica.inc.php";
			
			if ($confBD["porta"]=="") {
			   $porta = 5432;
			} else {
			   $porta = $confBD["porta"];
			}
			try {
					ConexaoAutenticacao::close();
					ConexaoAutenticacao::$con = new PDO('pgsql:host='.$confBD["host"].';
										 port='.$porta.';
										 dbname='.$confBD["base"].';
										 user='.$confBD["user"].';
										 password='.$confBD["pass"].'');
					
				ConexaoAutenticacao::$con->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
			}catch (PDOException $e) {
			    print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
	   }
        return ConexaoAutenticacao::$con;
      }
	  
	  public static function getConexaoExterna() {
         if (Conexao::$con == NULL) { 	
			
		    include "config.inc.php";
			
			if ($confBD["porta"]=="") {
			   $porta = 5432;
			} else {
			   $porta = $confBD["porta"];
			}
			try {
					Conexao::close();
					Conexao::$con = new PDO('pgsql:host='.$confBD["host"].';
										 port='.$porta.';
										 dbname='.$confBD["base"].';
										 user='.$confBD["userexterna"].';
										 password='.$confBD["passexterna"].'');
					
				Conexao::$con->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
			}catch (PDOException $e) {
			    print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
	   }
        return Conexao::$con;
      }
      
	  public static function nextId($sequence){
	  	$sql = "SELECT nextval('$sequence') AS seq";
		
		$con = Conexao::getConexao();
		try {
			$arr = $con->query($sql);
			if($arr == ""){
				throw new Exception("Erro");
			}
			$row = $arr->fetch(PDO::FETCH_ASSOC);
			return $row['seq'];
		}catch (Exception $e){
			return 0;
		}
		
	  }
	  
	  public static function close(){
	  	ConexaoAutenticacao::$con = NULL;
	  }
		
	}
	
	