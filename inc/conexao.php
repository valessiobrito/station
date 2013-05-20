<?php
	if ($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_ADDR'] == "::1"){ 
		$servidor = "localhost";
		$usuario = "station";
		$senha = "stationdb";
		$banco = "station";
	}else{
		$servidor = "mysql01.stationct.hospedagemdesites.ws";
		$usuario = "stationct";
		$senha = "Labssj1450";
		$banco = "stationct";
	}
	$Conexao = mysql_connect($servidor,$usuario,$senha);
	$SelecaoDB = mysql_select_db($banco,$Conexao);
	
	mysql_pconnect($servidor,$usuario,$senha);
	mysql_select_db($banco);
	mysql_query("SET NAMES 'utf8'");
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');
?>