<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$usuario = $_POST['usuario'];

		$json = array();

		$sql = mysql_query("SELECT * FROM sta_usuarios WHERE usuario_10_id = ".$usuario." ORDER BY usuario_30_nome");

		while($row = mysql_fetch_array($sql))
		{
			$resultado = array(
				'nomeUsuario' => $row['usuario_30_nome'],
				'loginUsuario' => $row['usuario_20_login'],
				'idUsuario' => $row['usuario_10_id']
			);
			array_push($json, $resultado);
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>