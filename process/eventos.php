<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$from = $_GET['from'] /1000;
		$to = $_GET['to'] /1000;

		$inicio = date('Y-m-d', $from);
		$fim = date('Y-m-d', $to);

		$json = array();

		$sqlReservas = mysql_query("SELECT * FROM sta_reservas WHERE reserva_22_data BETWEEN '".$inicio."' AND '".$fim."'");

		while($dadosReserva = mysql_fetch_array($sqlReservas)){
			$idReserva = $dadosReserva['reserva_10_id'];
			$idProposta = $dadosReserva['proposta_10_id'];
			$idPeriodo = $dadosReserva['reserva_12_periodo'];
			$periodo = '';
			if($idPeriodo == '1'){
				$periodo = 'Manhã';
			}else if($idPeriodo == '2'){
				$periodo = 'Tarde';
			}else if($idPeriodo == '3'){
				$periodo = 'Noite';
			}else if($idPeriodo == '4'){
				$periodo = 'Integral';
			}

			$idUnidade = $dadosReserva['unidade_10_id'];
			$idSala = $dadosReserva['sala_10_id'];
			$data = strtotime($dadosReserva['reserva_22_data']) * 1000;

			$sqlProposta = mysql_query("SELECT * FROM sta_propostas WHERE proposta_10_id = '".$idProposta."'");
			$dadosProposta = mysql_fetch_array($sqlProposta);
			$idStatus = $dadosProposta['proposta_12_status'];
			$idCliente = $dadosProposta['cliente_10_id'];
			if($idStatus == '1'){
				$classe = 'event-info';
			}else if($idStatus == '2'){
				$classe = 'event-important';
			}else if($idStatus == '3'){
				$classe = 'event-success';
			}else if($idStatus == '4'){
				$classe = 'event-special';
			}

			$sqlCliente = mysql_query("SELECT * FROM sta_clientes WHERE cliente_10_id = '".$idCliente."'");
			$dadosCliente = mysql_fetch_array($sqlCliente);
			$nomeCliente = $dadosCliente['cliente_30_nome'];

			$sqlUnidade = mysql_query("SELECT * FROM sta_unidades WHERE unidade_10_id = '".$idUnidade."'");
			$dadosUnidade = mysql_fetch_array($sqlUnidade);
			$nomeUnidade = $dadosUnidade['unidade_30_nome'];

			$sqlSala = mysql_query("SELECT * FROM sta_salas WHERE sala_10_id = '".$idSala."'");
			$dadosSala = mysql_fetch_array($sqlSala);
			$nomeSala = $dadosSala['sala_30_nome'];
			$numeroSala = $dadosSala['sala_30_numero'];

			$resultado = array(
				'id' => $idReserva,
				'title' => $nomeCliente." - ".$nomeUnidade." - ".$nomeSala." ".$numeroSala." - ".$periodo,
				'url' => '/agenda/modules/oportunidades/editarOportunidade.php?id='.$idProposta,
				'class' => $classe,
				'start' => $data,
				'end' => $data
			);
			array_push($json, $resultado);
		}

		$jsonresponse = array(
			'success' => '1',
			'result' => $json
		);

		$responsestring = json_encode($jsonresponse);

		echo $responsestring;
?>