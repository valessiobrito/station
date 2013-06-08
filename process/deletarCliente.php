<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
	
	$resposta = 'erro';
	
	$idCliente = $_POST['ic'];
	
	$query = "DELETE FROM sta_clientes WHERE cliente_10_id = ".$idCliente;
	$deletar = mysql_query($query);
	
	$deletarContatos = mysql_query("DELETE FROM sta_contatos_cliente WHERE cliente_10_id = ".$idCliente);
	
	if($deletar){
		$resposta = 'ok';
	}
	
	echo $resposta;
?>