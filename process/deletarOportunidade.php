<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/config.php");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/classLoader.php");

	$oportunidadeController = new OportunidadeController();
	$briefingController = new BriefingController();
	$briefingEquipamentoController = new BriefingEquipamentoController();
	$reservaController = new ReservaController();
	$reservaEquipamentoController = new ReservaEquipamentoController();

	$resposta = 'erro';

	$idOportunidade = $_POST['io'];

	$briefing = $briefingController->listByPropostaAction($idOportunidade);
	$briefingEquipamentoController->deleteByBriefingAction($briefing[1]['briefing_10_id']);
	$briefing = $briefingController->deleteByPropostaAction($idOportunidade);

	$reservas = $reservaController->listByPropostaAction($idOportunidade);
	for ($i=1;$i<=count($reservas);$i++) {
		$reservaEquipamentoController->deleteByReservaAction($reservas[$i]['reserva_10_id']);
	}
	$reservaController->deleteByPropostaAction($idOportunidade);

	$deletar = $oportunidadeController->deleteAction($idOportunidade);

	if($deletar){
		$resposta = 'ok';
	}

	echo $resposta;
?>