<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

	$resposta = 'erro';

	$idContato = $_POST['ic'];

	$query = "DELETE FROM sta_contatos_cliente WHERE contato_cliente_10_id = ".$idContato;
	$deletar = mysql_query($query);

	if($deletar){
		$resposta = 'ok';
	}

	echo $resposta;
?>