<?php
if($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_ADDR'] == "::1"){ 
    $dataBase = "station";
    $host = "localhost";
    $user = "station";
    $pass = "stationdb";
	
}else{
    $dataBase = "stationct";
    $host = "mysql01.stationct.hospedagemdesites.ws";
    $user = "stationct";
    $pass = "Labssj1450";
}

$conn = mysql_connect($host, $user, $pass);

if (!$conn){
    die ("Erro ao estabelecer conexão com o banco de dados! " . mysql_errno() . ": " . mysql_error());
}

$db_selected = mysql_select_db($dataBase, $conn);

if (!$db_selected){
    die ("Erro ao selecionar banco de dados!");
}

?>