<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
	
	$resposta = 0;
	
	$nome = $_POST['nome'];
	
	$query = "INSERT INTO sta_tipos_produto(tipo_produto_30_nome) VALUES ('".$nome."')";
	$gravar = mysql_query($query);
	if($gravar){
		$resposta = mysql_insert_id();
	}
	
	echo $resposta;
?>