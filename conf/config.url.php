<?php
include "config.inc.php";
// phpinfo();
// echo 
$url = $_SERVER['REQUEST_URI'];
// exit();
$geturl = explode('/', $_SERVER['REQUEST_URI']);
// echo '<pre>'; print_r($geturl); echo '</pre>';
$file = "../app";
if(count($geturl) > 2 && $geturl[(count($geturl)-1)] == ""){
	// echo 'kkk:'.
	$qtdUrl = count($geturl)-1;
}else{
	// echo 'kkkiii:'.
	$qtdUrl = count($geturl);
}
// echo '<br>'.$qtdUrl.'<br>';
for($i = 0; $i < $qtdUrl; $i++){
	// echo $i;
	if($geturl[$i] != ""){
		$file .= "/".$geturl[$i];
	}
	if(($i+1) == $qtdUrl && $geturl[$qtdUrl] == ""){
		$file .= "/".$geturl[$i].".php";
	}
}
// echo $file."<br>";
if(is_file($file)){
	// echo 'existe';
	include $file;
}else{
	// echo 'nao existe';
	include '../404.php';
}
// exit();
?>