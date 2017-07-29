<?php
	require_once( "conf/config.inc.php" );
	
			/*
			 * FECHA REGISTRO ACESSO
			 */
			// include CAMINHO_PORTAL."classes/registroAcesso/RegistroAcesso.php";
			// $objRegistroAcesso   = unserialize($_SESSION['registroAcesso']); 
			// $fachadaRepAcesso    = Factory::getFachada('RepositorioAcesso');
			// $objRegistroAcesso   = $fachadaRepAcesso->fecharRepositorioAcesso($objRegistroAcesso);
			/*
			 * TERMINA DE FECHAR REGISTRO ACESSO
			 */
	
	// $_SESSION['usuarioLogado'] = false;
	
	// unset($_SESSION['idLogado']);
	// unset($_SESSION['usuarioLogado']);
	// unset($_SESSION['nomeLogado']);
	// unset($_SESSION['perfilLogado']);
	// unset($_SESSION['escolaLogado']);
	// unset($_SESSION['pastaEscola']);
	// unset($_SESSION['senhaLogado']);
	// unset($_SESSION['perfilAtualLogado']);
	// unset($_SESSION['registroAcesso']);
	// unset($_SESSION['grupoEscolarConfig']);
	// unset($_SESSION['templateGrupo']);
	
	// if($_SESSION["FuturumPortalCook"]){
		// $tempPort = $_SESSION["FuturumPortalCook"]; 
		// $tempLogo = $_SESSION["FuturumPortalCookLogo"]; 
		// $tempUrlL = $_SESSION["FuturumPortalCookLogin"]; 
	// }
	
	foreach($_SESSION as $key => $value)
	{
		$_SESSION[$key] = '';
		unset($_SESSION[$key]);
	}

	// if($tempPort){
		// $_SESSION["FuturumPortalCook"] = $tempPort; 
		// $_SESSION["FuturumPortalCookLogo"] = $tempLogo; 
		// $_SESSION["FuturumPortalCookLogin"] = $tempUrlL; 
	// }
	
	/*print "<script>window.location.href='index.php'</script>";*/
	print "<script>window.location.href='".URL_PORTAL."'</script>";