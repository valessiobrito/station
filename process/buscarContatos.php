<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$json = array();

		$metodo = $_POST['metodo'];
		if($metodo == "contato"){
			$contato = $_POST['contato'];

			$sql = mysql_query("SELECT * FROM sta_contatos_cliente WHERE contato_cliente_10_id = ".$contato." ORDER BY contato_cliente_30_nome");

			while($row = mysql_fetch_array($sql))
			{
				$sqlEmpresa = mysql_query("SELECT * FROM sta_clientes WHERE cliente_10_id = ".$row['cliente_10_id']." ORDER BY cliente_30_nome");
				$rowEmpresa = mysql_fetch_array($sqlEmpresa);

				$resultado = array(
					'nomeContato' => $row['contato_cliente_30_nome'],
					'sobrenomeContato' => $row['contato_cliente_30_sobrenome'],
					'idContato' => $row['contato_cliente_10_id'],
					'nomeEmpresa' => $rowEmpresa['cliente_30_nome']
				);
				array_push($json, $resultado);
			}
		}else{
			$cliente = $_POST['cliente'];

			$sql = mysql_query("SELECT * FROM sta_contatos_cliente WHERE cliente_10_id = ".$cliente." ORDER BY contato_cliente_30_nome");

			while($row = mysql_fetch_array($sql))
			{
				$resultado = array(
					'nomeContato' => $row['contato_cliente_30_nome'],
					'sobrenomeContato' => $row['contato_cliente_30_sobrenome'],
					'idContato' => $row['contato_cliente_10_id']
				);
				array_push($json, $resultado);
			}
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>