<?php

session_start();

if ($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_ADDR'] == "::1"){ //Fix para IP v6 que o MAMP usa
    $urlGeral = "http://localhost/agenda";
}else {
    $urlGeral = "http://stationct.com.br/agenda";
}

include $_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php";
$urlModules = $urlGeral."/modules";

/* Modules */
$urlUnidades = $urlModules."/unidades";
$urlProdutos = $urlModules."/produtos";
$urlClientes = $urlModules."/clientes";
$urlUsuarios = $urlModules."/usuarios";
$urlOportunidades = $urlModules."/oportunidades";
/* /Modules */

?>