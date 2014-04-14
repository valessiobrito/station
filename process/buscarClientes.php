<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$cliente = $_POST['cliente'];

		$json = array();

		$sql = mysql_query("SELECT * FROM sta_clientes WHERE cliente_10_id = ".$cliente." ORDER BY cliente_30_nome");

		while($row = mysql_fetch_array($sql))
		{
			$resultado = array(
				'nomeCliente' => $row['cliente_30_nome'],
				'cnpj' => $row['cliente_30_cnpj'],
				'idCliente' => $row['cliente_10_id']
			);
			array_push($json, $resultado);
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>