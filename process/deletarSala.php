<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
	
	$resposta = 'erro';
	
	$idSala = $_POST['is'];
	
	$query = "DELETE FROM sta_salas WHERE sala_10_id = ".$idSala;
	$deletar = mysql_query($query);
	if($deletar){
		$resposta = 'ok';
	}
	
	echo $resposta;
?>