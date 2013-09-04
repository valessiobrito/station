<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/classLoader.php");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/config.php");

		$idOportunidade = $_POST['idOportunidade'];

		$json = array();

		$oportunidadeController = new OportunidadeController();
		$oportunidade = $oportunidadeController->listAction($idOportunidade);

		foreach ($oportunidade as $kOportunidade => $vOportunidade) {
			$briefingController = new BriefingController();
			$dadosBriefing = $briefingController->listByPropostaAction($idOportunidade);

			foreach ($dadosBriefing as $kBriefing => $vBriefing) {
				$briefingEquipamentoController = new BriefingEquipamentoController();
				$equipamentosBriefing = $briefingEquipamentoController->listByBriefingAction($dadosBriefing[$kBriefing]['briefing_10_id']);
				$dadosBriefing[$kBriefing]['briefingEquipamentos'] = $equipamentosBriefing;
			}

			$reservaController = new ReservaController();
			$dadosReserva = $reservaController->listByPropostaAction($idOportunidade);

			foreach ($dadosReserva as $kReserva => $vReserva) {
				$reservaEquipamentoController = new ReservaEquipamentoController();
				$equipamentosReserva = $reservaEquipamentoController->listByReservaAction($dadosReserva[$kReserva]['reserva_10_id']);
				$dadosReserva[$kReserva]['reservaEquipamentos'] = $equipamentosReserva;
			}

			$oportunidade[$kOportunidade]['dadosBriefing'] = $dadosBriefing;
			$oportunidade[$kOportunidade]['dadosReserva'] = $dadosReserva;
		}

		$jsonstring = json_encode($oportunidade);

		echo $jsonstring;
?>