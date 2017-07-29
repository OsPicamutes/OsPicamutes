<?php
// Criado por Marcos Peli
// ultima atualização 05/06/2015 - correçâo ref alteraçâo parametros consulta CPF da receita de 03/06/2015
// o objetivo dos scripts deste repositório é integrar consultas de CNPJ e CPF diretamente da receita federal
// para dentro de aplicações web que necessitem da resposta destas consultas para proseguirem, como e-comerce e afins.

include "../../conf/config.inc.php";
define("IDFUNC", 0); // o id da funcionalidade ser o mesmo do id do link
include CAMINHO_PORTAL."conf/validaLogin.php";
// echo '<pre>'; print_r($_POST); echo '</pre>';
// exit();
require('funcoesDadosReceita.php');
// header('Content-Type: application/json');

// echo '<pre>'; print_r($_POST); echo '</pre>';
error_reporting(0);

// $cnpj = $_POST['cnpj'];
$cnpj = str_replace(".", "", $_POST['cnpj']);
$cnpj = str_replace("/", "", $cnpj);
$cnpj = str_replace("-", "", $cnpj);
$captcha = $_POST['captcha'];
// $keys = array(
	// 'inscricao',
	// 'data_abertura');
// $campos[] = $_POST['cnpj'];
// $campos[] = $_POST['captcha'];
// $list = array_combine($keys, array_values($campos));
// echo '<pre>'; print_r($list); echo '</pre>';
// echo json_encode($list);
// exit();

// pega html resposta da receita
$getHtmlCNPJ = getHtmlCNPJ($cnpj, $captcha);
// echo $getHtmlCNPJ;
// exit();
if($getHtmlCNPJ)
{
	// volova os dados em um array
	$campos = parseHtmlCNPJ($getHtmlCNPJ);
	// var_dump($campos);
	$keys = array(
	'inscricao',
	'data_abertura',
	'razao_social',
	'nome_fantasia',
	'cod_desc_atv_economica_princial',
	'cod_desc_atv_economica_secundaria',
	'cod_desc_natureza_juridica',
	'logradouro',
	'numero',
	'complemento',
	'cep',
	'bairrodistrito',
	'municipio',
	'uf',
	'endereco_eletronico',
	'telefone',
	'ente_federativo_responsavel',
	'situacao_cadastral',
	'data_situacao_cadastral',
	'motivo_situacao_cadastral',
	'situacao_especial',
	'data_situacao_especial',
	'status');
	// echo 'countkey:'.count($keys);
	// echo '<br>countcampos:'.count($campos);
	// for($i = 0; $i < count($campos); $i++){
	// $valor = ""; $i = 0;
	// foreach($campos AS $value){
		// $valor .= $keys[$i].":".$value."\n";
		// $i++;
	// }
	// echo $valor;
	// $i = 0;
	foreach($campos AS $value){
		$array[$keys[$i]] = utf8_encode($value);
		$i++;
	}
	// echo json_encode($array);
	// $list = array_combine($keys, array_values($campos));
	// echo '<pre>'; print_r($keys); echo '</pre>';
	// echo '<pre>'; print_r($list); echo '</pre>';
	// print_r($list);
	// header('Content-Type: application/json');
	// echo json_encode($list);
	// echo $list;
	// $teste[] = $list;
	// echo '<pre>'; print_r($teste); echo '</pre>';
	// echo '<pre>'; print_r($campos); echo '</pre>';
	// echo 'ok';
}

// print_r($campos);
// echo json_decode(array($campos));
echo json_encode($array);
// header('Content-Type: application/json');
// echo json_encode($teste[0]);
exit();
// echo json_encode($objTransportadora[0]);

?>