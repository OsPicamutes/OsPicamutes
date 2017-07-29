<?php
	if((!isset($_SESSION['usuarioLogado'])) && (!$_SESSION['usuarioLogado'])){
		$url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
		header('Location:'.URL_PORTAL.'areaRestrita.php?url='.$url);
		die;
	}
	
	$controladorLink = Factory::getControlador("Link");
	// verifica se o perfil do usuário logado possui acesso para entrar na página solicitada.
	if(IDFUNC != 0){
		
		//print $valor = $controladorLink->consultarLinkPorPerfilAcesso(IDFUNC, $_SESSION['perfilAtualLogado']['id']);
		//die;
		
		if(!$controladorLink->consultarLinkPorPerfilAcesso(IDFUNC, $_SESSION['perfilAtualLogado']['id'])){
			header('Location:'.URL_PORTAL.'areaRestritaInterna.php');
			die;		
		}
	}else if(!is_int(IDFUNC)){
		header('Location:'.URL_PORTAL.'areaRestritaInterna.php');
		die;
	}
	// echo '<pre>';
	// print_r($_SESSION);
	// echo '</pre >';
	