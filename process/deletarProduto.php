<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
	
	$resposta = 'erro';
	
	$idProduto = $_POST['ip'];
	
	$query = "DELETE FROM sta_produtos WHERE produto_10_id = ".$idProduto;
	$deletar = mysql_query($query);
	if($deletar){
		$resposta = 'ok';
	}
	
	echo $resposta;
?>