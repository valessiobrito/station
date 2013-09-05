<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/config.php");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/classLoader.php");

		$nrOportunidade = $_POST['nrOportunidade'];
		$status = $_POST['status'];
		$cliente = $_POST['cliente'];
		$contato = $_POST['contato'];

		$whereQuery[] = "1 = 1";

		if($nrOportunidade != ""){
			$whereQuery[] = "proposta_10_id = " . $nrOportunidade;
		}
		if($status != ""){
			$whereQuery[] = "proposta_12_status = " . $status;
		}
		if($cliente != ""){
			$whereQuery[] = "cliente_10_id = " . $cliente;
		}
		if($contato != ""){
			$whereQuery[] = "contato_10_id = " . $contato;
		}

		$json = array();

		$query = "SELECT * FROM sta_propostas WHERE ".implode(" AND ", $whereQuery)." ORDER BY proposta_10_id DESC";

		$sql = mysql_query($query);

		while($row = mysql_fetch_array($sql))
		{
			$clienteController = new ClienteController;
			$contatoController = new ContatoController;

			if ($row['cliente_10_id'] != "0"){
				$cliente = $clienteController->listAction($row['cliente_10_id']);
				$nomeCliente = $cliente[1]['cliente_30_nome'];
			}else{
				$nomeCliente = "Nenhum";
			}

			if ($row['cliente_10_id'] != "0"){
				$contato = $contatoController->listActionByContactId($row['contato_10_id']);
				$nomeContato = $contato[1]['contato_cliente_30_nome'];
			}else{
				$nomeContato = "Nenhum";
			}

			$dataCru = $row['proposta_22_data'];
			$dataArr = explode("-", $dataCru);
			$data = $dataArr[2]."/".$dataArr[1]."/".$dataArr[0];

			$resultado = array(
				'idOportunidade' => $row['proposta_10_id'],
				'status' => $row['proposta_12_status'],
				'dtOportunidade' => $data,
				'nomeCliente' => $nomeCliente,
				'nomeContato' => $nomeContato
			);
			array_push($json, $resultado);
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>