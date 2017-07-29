<?php
include "../../conf/config.inc.php";
define("IDFUNC",0); // o id da funcionalidade ser o mesmo do id do link
include CAMINHO_PORTAL."conf/validaLogin.php";

$controladorPublic = Factory::getControlador('Public');

// echo '<pre>'; print_r($_POST); echo '</pre>';
$nome_municipio = $_POST['nome_municipio'];
$objMunicipio = $controladorPublic->consultarMunicipio(1058, $_POST['uf'], "");
// echo '<pre>'; print_r($objMunicipio); echo '</pre>';
$html = "<option value=''>Selecione</option>";
for($i = 0; $i < count($objMunicipio); $i++){
	if($nome_municipio == $objMunicipio[$i]->nome_municipio){ $s = "selected"; }else{ $s = ""; }
	$html .= "<option ".$s." value=".$objMunicipio[$i]->cod_municipio.">".$objMunicipio[$i]->nome_municipio."</option>";
}
echo $html;
?>