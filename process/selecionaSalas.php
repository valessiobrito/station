<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$unidade = $_POST['unidade'];
		$dataCru = $_POST['data'];
		$dataArr = explode("/", $dataCru);
		$data = $dataArr[2]."-".$dataArr[1]."-".$dataArr[0];
		$periodo = $_POST['periodo'];
		
		$json = array();
		
		$resultado = array(
			'idSelecao' => '',
			'nomeSelecao' => 'Salas disponíveis:'
		);
		
		array_push($json, $resultado);
		
		$sqlSalas = mysql_query("SELECT * FROM sta_salas WHERE unidade_10_id = '".$unidade."' ORDER BY sala_30_nome");
		while($dadosSala = mysql_fetch_array($sqlSalas)){
			$idSala = $dadosSala['sala_10_id'];
			$nomeSala = $dadosSala['sala_30_nome'];
			
			$sql = mysql_query("SELECT * FROM sta_reservas WHERE sala_10_id = '".$idSala."' AND reserva_22_data = '".$data."' AND (reserva_12_periodo = '".$periodo."' OR reserva_12_periodo = '4')");
			
			if(mysql_num_rows($sql) == 0){
				$resultado = array(
					'idSelecao' => $idSala,
					'nomeSelecao' => $nomeSala
				);
				array_push($json, $resultado);
			}
		}
		
		$jsonstring = json_encode($json);

		echo $jsonstring;
?>