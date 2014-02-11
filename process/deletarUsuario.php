<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

	$resposta = 'erro';

	$idUsuario = $_POST['iu'];

	if($idUsuario != "1"){

		$query = "DELETE FROM sta_usuarios WHERE usuario_10_id = ".$idUsuario;
		$deletar = mysql_query($query);

		if($deletar){
			$resposta = 'ok';
		}
	}
	echo $resposta;
?>