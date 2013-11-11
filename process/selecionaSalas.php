<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$unidade = $_POST['unidade'];
		$dataCru = $_POST['data'];
		$dataArr = explode("/", $dataCru);
		$data = $dataArr[2]."-".$dataArr[1]."-".$dataArr[0];
		$periodo = $_POST['periodo'];
		$idReserva = $_POST['idReserva'];

		$json = array();

		$resultado = array(
			'idSelecao' => '',
			'nomeSelecao' => 'Salas disponíveis:',
			'classe' => ''
		);

		$classe = '';

		array_push($json, $resultado);

		$sqlSalas = mysql_query("SELECT * FROM sta_salas WHERE unidade_10_id = '".$unidade."' ORDER BY sala_30_nome");
		while($dadosSala = mysql_fetch_array($sqlSalas)){
			$idSala = $dadosSala['sala_10_id'];
			$nomeSala = $dadosSala['sala_30_nome'];

			if($periodo == "4"){
				$sql = mysql_query("SELECT * FROM sta_reservas WHERE sala_10_id = '".$idSala."' AND reserva_22_data = '".$data."' AND reserva_10_id != '".$idReserva."'");
			}else{
				$sql = mysql_query("SELECT * FROM sta_reservas WHERE sala_10_id = '".$idSala."' AND reserva_22_data = '".$data."' AND reserva_10_id != '".$idReserva."' AND (reserva_12_periodo = '".$periodo."' OR reserva_12_periodo = '4')");
			}

			if(mysql_num_rows($sql) == 0){
				$classe = 'disponivel';
			}else{
				while($dadosReserva = mysql_fetch_array($sql)){
					$idProposta = $dadosReserva['proposta_10_id'];
					$sqlProposta = mysql_query("SELECT * FROM sta_propostas WHERE proposta_10_id = '".$idProposta."'");
					$dadosProposta = mysql_fetch_array($sqlProposta);
					$idStatus = $dadosProposta['proposta_12_status'];
					if($idStatus == '1'){
						$classe = 'oportunidade';
					}else if($idStatus == '2'){
						$classe = 'indisponivel';
					}else if($idStatus == '3'){
						$classe = 'disponivel';
					}else if($idStatus == '4'){
						$classe = 'vencida';
					}
				}
			}

			$resultado = array(
				'idSelecao' => $idSala,
				'nomeSelecao' => $nomeSala,
				'classe' => $classe
			);
			array_push($json, $resultado);
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>