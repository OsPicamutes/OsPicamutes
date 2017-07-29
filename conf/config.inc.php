<?php
	// error_reporting(0);
	error_reporting(~E_NOTICE);
	// error_reporting(E_ALL);
	// set_time_limit(999);
	// ini_set('memory_limit','256M');
	// phpinfo();
	session_start();
	// $_SESSION['teste']= 'tstee';
	define("URL_PORTAL","http://".$_SERVER['SERVER_NAME']."/control/");
	define("CAMINHO_PORTAL",$_SERVER['DOCUMENT_ROOT']."/control/");
	// echo 'oi';
	// echo URL_PORTAL."<br>";
	// echo CAMINHO_PORTAL;
	// echo '<pre>'; print_r($_SESSION); echo '</pre>';
	require_once(CAMINHO_PORTAL."classes/Factory.php");	
	
	$confBD['host']  = "127.0.0.1"; // $confBD['host']  = "131.72.60.6"; // $confBD['host']  = "127.0.0.1";
	$confBD['user']  = "postgres"; // $confBD['user']  = "cpsystem";	// $confBD['user']  = "postgres";
	$confBD['pass']  = "postgresql"; //"mil1556";// $confBD['pass']  = "CPsystem2016"; // $confBD['pass']  = "postgresql"//"mil1556";
	// $confBD['host']  = "192.168.1.10"; // $confBD['host']  = "131.72.60.6"; // $confBD['host']  = "127.0.0.1";
	// $confBD['user']  = "postgres"; // $confBD['user']  = "cpsystem";	// $confBD['user']  = "postgres";
	// $confBD['pass']  = "mil1556"; //"mil1556";// $confBD['pass']  = "CPsystem2016"; // $confBD['pass']  = "postgresql"//"mil1556";
	// $confBD['host']  = "179.188.16.157";
	// $confBD['user']  = "innove_nfe";
	// $confBD['pass']  = "j82julia@#7834";
	$confBD['type']  = "pgsql";// $confBD['type']  = "mysql";// $confBD['type']  = "pgsql";
	$confBD['base']  = $_SESSION['dbLogado'];//"control";//"innove_nfe";
	$confBD["porta"] = "5432"; // $confBD["porta"] = "3306";
	
	$confBD['userexterna']  = "usercontratacao";
	$confBD['passexterna']  = "postgresql";
	
    $config['totalPorPag'] = 20; // total de registro por página de uma listagem
	
	$config['template'] = "innove";
	
	// $_SESSION['precisaoValor'] = 4; $_SESSION['precisaoBDValor'] = '999G999G999G990D9999';
	// $_SESSION['precisaoPercentual'] = 4; $_SESSION['precisaoBDPercentual'] = '999G999G999G990D9999';
	// $_SESSION['precisaoQuantidade'] = 2; $_SESSION['precisaoBDQuantidade'] = '999G999G999G990D99';
	// $_SESSION['precisaoPeso'] = 3; $_SESSION['precisaoBDPeso'] = '999G999G999G990D999';
	
	define("BANCO_PORTAL", $confBD['type']);
	// $config['sistema_menu_novo'] = true;
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set("America/Bahia");
	
	
?>