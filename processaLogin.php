<?php
include "conf/config.autentica.inc.php";
// echo '<pre>'; print_r($_REQUEST); echo '</pre>';
// exit();
if(isset($_POST['g-recaptcha-response'])){
	$captcha=$_POST['g-recaptcha-response'];
}
/* Validamos con Google */
// $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lcc4w4UAAAAAC_16NnJCfQDHodqLtX3unvqyJjX&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

/* Enviamos de vuelta las respuestas, si no es humano, envía 0 y si lo es, envía 1.*/

// $result = json_decode($response);
// if($response.success==false){
// if(!isset($result->hostname)){
	// echo '0';
// }else{
	// echo '1';
	// echo '<pre>'; print_r($_POST); echo '</pre>';
	$controladorUsuario = Factory::getControlador('Usuario');
	
	if($_POST['login']&&$_POST['password']){
		
		// objUsuario
		$objUsuario = $controladorUsuario->consultarUsuarioPorLogin($_POST['login']);
		
		// echo '<pre>'; print_r($objUsuario); echo '</pre>';
		// exit();
		if($objUsuario->usu_id != ""){
			// if($objUsuario->usu_senha == crypt($_POST['password'], '$2a$16$Cf1f11ePArKlBJomM0F6aJ$') && $objUsuario->usu_status == 'A'){
			$senha = $_POST['password'];
			$custo = '08';
			$salt = 'Cf1f11ePArKlBJomM0F6aJ';
			$hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');
			$_SESSION['dbCliente'] = $objUsuario->usu_database;
			$_SESSION['readDbCliente'] = true;
			// include "conf/config.inc.php";
			$objUsuario = $controladorUsuario->consultarUsuarioPorLoginDbCliente($_POST['login']);
			// echo '<pre>'; print_r($objUsuario); echo '</pre>';
			// exit();
			// echo $hash.":::::".$objUsuario->usu_senha;
			if($objUsuario->usu_senha == $hash && $objUsuario->usu_status == 'A'){
				
				$controladorUsuario = Factory::getControlador('Usuario');
				$objUsuarioPerfil = $controladorUsuario->consultarUsuarioPerfilPorUsuarioDbCliente($objUsuario->usu_id);
				// echo '<pre>'; print_r($objUsuarioPerfil); echo '</pre>';
				$qtdUsuarioPerfil = count($objUsuarioPerfil);
				for($i=0; $i<$qtdUsuarioPerfil; $i++){
					$arrayPerfil[$i]['id']			= $objUsuarioPerfil[$i]->id;
					$arrayPerfil[$i]['nome']     	= $objUsuarioPerfil[$i]->descricao;
					$arrayPerfil[$i]['sigla']     = $objUsuarioPerfil[$i]->sigla;
					$arrayPerfil[$i]['interno']     = $objUsuarioPerfil[$i]->sigla;
					$arrayPerfil[$i]['urlLogin']     = $objUsuarioPerfil[$i]->urllogin;
					
					$_SESSION['perfilAtualLogado'] = $arrayPerfil[$i];
					
					$urlLogin = $objUsuarioPerfil[$i]->urllogin;
				}
				
				$_SESSION['usuarioLogado'] 		 	= true;
				$_SESSION['idLogado']      		 	= $objUsuario->usu_id;
				$_SESSION['nomeLogado']    		 	= $objUsuario->usu_nome;
				$_SESSION['loginLogado']         	= $objUsuario->usu_login;
				$_SESSION['dbLogado']         		= $_SESSION['dbCliente'];
				$_SESSION['perfilLogado']  		 	= $arrayPerfil;
				// $_SESSION['nomeEmpresaLogado'] 		= $objUsuario->emp_razao_social;
				// $_SESSION['fantasiaEmpresaLogado'] 	= $objUsuario->emp_fantasia;
				// $_SESSION['urlLogo'] 	 		 	= $objUsuario->emp_logo;
				$_SESSION['associacaoLogado']  	 	= $objUsuario->fk_associacao_id;
				$_SESSION['cnpjLogado']  	 		= $objUsuario->aso_cnpj;
				$_SESSION['urlInicial'] 		 	= $urlLogin;
				$_SESSION['urlLogin']			 	= $_SESSION['perfilAtualLogado']['urlLogin'];
				
				// $senha        = $_POST['password'];
				// $lembrar_senha    = $_POST['lembrar_senha'];
				// echo '<pre>'; print_r($_SESSION); echo '</pre>';
				// exit();
				unset($_SESSION['readDbCliente']);
				echo 'app/home/';
			}else{
				echo 'error1';
			}
		}else{
			echo 'error2';
		}
	}else{
		echo 'error3';
	}
// }
// echo '<pre>'; print_r($_POST); echo '</pre>';
// echo '<pre>'; print_r($_REQUEST); echo '</pre>';
// echo '<pre>'; print_r($_GET); echo '</pre>';
exit();
?>