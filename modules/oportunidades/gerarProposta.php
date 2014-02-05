<?php
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: ".$urlGeral."/index.php");
	}else{
		if(!isset($_GET['id']) || !$_GET['id'] > 0){
			header("Location: ".$urlGeral."/index.php");
		}

		$dia = date('d');
		$mes = date('m');
		$ano = date('Y');

		switch ($mes){

		case 1: $mes = "Janeiro"; break;
		case 2: $mes = "Fevereiro"; break;
		case 3: $mes = "Março"; break;
		case 4: $mes = "Abril"; break;
		case 5: $mes = "Maio"; break;
		case 6: $mes = "Junho"; break;
		case 7: $mes = "Julho"; break;
		case 8: $mes = "Agosto"; break;
		case 9: $mes = "Setembro"; break;
		case 10: $mes = "Outubro"; break;
		case 11: $mes = "Novembro"; break;
		case 12: $mes = "Dezembro"; break;

		}

		$dataExtenso = $dia." de ".$mes." de ".$ano;

		$totalProposta = 0.00;
		$conteudoTabela = "";
		$oportunidadeController = new OportunidadeController();
		$oportunidade = $oportunidadeController->listAction($_GET['id']);

		$clienteController = new ClienteController();
		$dadosCliente = $clienteController->listAction($oportunidade[1]["cliente_10_id"]);

		$nomeCliente = $dadosCliente[1]["cliente_30_nome"];

		$contatoController = new ContatoController();
		$dadosContato = $contatoController->listActionByContactId($oportunidade[1]["contato_10_id"]);

		$nomeContato = $dadosContato[1]["contato_cliente_30_nome"];

		$dataCriacaoOportunidade = $oportunidade[1]["proposta_22_data"];
		$dataVencimento = date( "d/m/Y", strtotime("+1 week", strtotime($dataCriacaoOportunidade)));

		foreach ($oportunidade as $kOportunidade => $vOportunidade) {
			$reservaController = new ReservaController();
			$salaController = new SalaController();
			$dadosReserva = $reservaController->listByPropostaAction($_GET['id']);

			$briefingController = new BriefingController();
			$dadosBriefing = $briefingController->listByPropostaAction($_GET['id']);

			$unidadeController = new UnidadeController();
			$dadosUnidade = $unidadeController->listAction($dadosBriefing[1]["unidade_10_id"]);

			$nomeUnidade = $dadosUnidade[1]["unidade_30_nome"];

			$briefingController = new BriefingController();
			$dadosBriefing = $briefingController->listByPropostaAction($_GET['id']);

			foreach ($dadosReserva as $kReserva => $vReserva) {
				$dadosSala = $salaController->listAction($dadosReserva[$kReserva]["sala_10_id"]);

				if($dadosReserva[$kReserva]["reserva_12_periodo"] == "1"){
					$txtPeriodo = "Manhã";
				}else if($dadosReserva[$kReserva]["reserva_12_periodo"] == "2"){
					$txtPeriodo = "Tarde";
				}else if($dadosReserva[$kReserva]["reserva_12_periodo"] == "3"){
					$txtPeriodo = "Noite";
				}else{
					$txtPeriodo = "Integral";
				}

				$dataCru = $dadosReserva[$kReserva]["reserva_22_data"];
				$dataArr = explode("-", $dataCru);
				$dataReserva = $dataArr[2]."/".$dataArr[1]."/".$dataArr[0];
				$conteudoTabela .= '<tr>
										<td>'.$dataReserva.'</td>
										<td>'.$txtPeriodo.'</td>
										<td>'.$dadosSala[1]["sala_30_nome"].'</td>
										<td style="background:#f2f2f2; color:#338a9b">R$ '.$reservaController->formataValor($dadosReserva[$kReserva]["reserva_15_valorTotal"], "exibir").'</td>
									</tr>';
				$totalProposta += $dadosReserva[$kReserva]["reserva_15_valorTotal"];
			}
			$conteudoTabela .= '<tr style="font-size:14px;">
									<td colspan="3" style="background:#f2f2f2; color:#338a9b">TOTAL:</td>
									<td style="background:#f2f2f2; color:#338a9b">R$ '.$reservaController->formataValor($totalProposta, "exibir").'</td>
								</tr>';

		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="pragma" content="no-cache" />
	<title>Proposta</title>
	<style type="text/css">
		@media print and (color) {
			* {
			    -webkit-print-color-adjust: exact;
				print-color-adjust: exact;
			}
			.rodapePagina {
				position: fixed;
				display: block;
				bottom: 0;
		    }
		}
		.containerProposta{
			width:750px;
			margin:0 auto;
			color: #58595b;
			font-size: 12px;
			font-family: Arial,Helvetica,Verdana,sans-serif;
		}
		.paginaProposta{
			padding: 10px;
			page-break-after: always;
			clear: both;
		}
		.topoPagina{
			width: 100%;
			text-align: left;
			clear: both;
		}
		.conteudoPagina{
			padding-bottom: 20px;
		}
		.rodapePagina{
			width: 100%;
			margin-left: 6px;
			clear: both;
		}
		.destaque{
			color:#328a9b;
		}
		td, th{
			border:1px solid #d6d8d7;
		}
	</style>
</head>
<body>
	<div class="containerProposta">
<!-- ------------ Pagina 1 ------------------------------------------------------- -->
		<div class="paginaProposta">
			<div class="topoPagina">
				<img src="<?php echo $urlGeral; ?>/images/topo-proposta.jpg">
			</div>
			<div class="conteudoPagina">
				<br>
				<span class="destaque" style="font-size:20px; float:right;">Espaço para Treinamentos e Eventos</span>
				<br>
				<br>
				<br>
				<span style="font-size:16px; float:right;">Station Centros de Treinamento</span>
			</div>
			<div class="rodapePagina">
				<img src="<?php echo $urlGeral; ?>/images/rodape-proposta.jpg">
			</div>
		</div>

<!-- ------------ Pagina 2 ------------------------------------------------------- -->
		<div class="paginaProposta">
			<div class="topoPagina">
				<img src="<?php echo $urlGeral; ?>/images/logo-proposta.jpg" style="float:left;">
			</div>
			<div class="conteudoPagina">
				<br>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; float:right;">São Paulo, <?php echo $dataExtenso ?></span>
				<br>
				<br>
				<br>
				<br>
				<span>À </span><span class="destaque"><?php echo $nomeCliente ?></span>
				<br>
				<br>
				<span>Prezado (a), </span><span class="destaque"><?php echo $nomeContato ?></span>
				<br>
				<br>
				<br>
				<span>A Station Centros de Treinamento tem o prazer em apresentar a nossa proposta para realização do seu evento em um dos nossos espaços, o </span><span class="destaque"><?php echo $nomeUnidade ?></span><span>. Segue a proposta com as melhores condições para atendê-los.</span>
				<br>
				<br>
				<span>Lembramos que esta proposta tem validade até </span><span class="destaque"><?php echo $dataVencimento ?></span><span> e não garante o bloqueio de salas. Para efetivar o bloqueio da sua reserva, por favor, entre em contato com nossa equipe para que possamos proceder com a confirmação do evento.</span>
				<br>
				<br>
				<span>Desde já, nos colocamos à disposição para esclarecimentos e/ou quaisquer dúvidas.</span>
				<br>
				<br>
				<span>Atenciosamente,</span>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">Nathalia Saporito</span>
				<br>
				<span class="destaque">nathalia@stationct.com.br</span>
				<br>
				<span>(11) 3704-4377</span>
				<br>
				<span>(11) 97252-5691</span>
			</div>
			<div class="rodapePagina">
				<img src="<?php echo $urlGeral; ?>/images/rodape-proposta.jpg">
			</div>
		</div>

<!-- ------------ Pagina 3 ------------------------------------------------------- -->
		<div class="paginaProposta">
			<div class="topoPagina">
				<img src="<?php echo $urlGeral; ?>/images/logo-proposta.jpg" style="float:left;">
			</div>
			<div class="conteudoPagina">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">SALAS</span>
				<br>
				<br>
				<span>Nosso objetivo é proporcionar as melhores condições para o seu evento. Por isso equipamos nossas cinco salas com mesas e cadeiras flexíveis, notebook, sistema de iluminação setorizada, controle de ar condicionado individual, acesso à internet via wi-fi (cortesia), flip chart, projetor multimídia com suporte fixo no teto, mouse sem fio e caixas de som acopladas.
Abaixo tabela com medidas e capacidades das salas:</span>
				<br>
				<br>
				<img src="<?php echo $urlGeral; ?>/images/tabela-proposta.jpg" style="margin-left:55px;">
				<br>
				<br>
				<br>
				<span>• As diárias das salas correspondem ao período das 8h às 18h.</span>
				<br>
				<br>
				<span>• Eventos que necessitem se estender além do previsto deverão ser informados na solicitação da reserva, por motivos operacionais (horas extras dos colaboradores) e disponibilidade, pois locamos também no período noturno.</span>
				<br>
				<br>
				<span>• Quando houver participantes com necessidades especiais é necessário o aviso prévio, para verificação de disponibilidade da sala que possa atender.</span>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">OBSERVAÇÃO</span>
				<br>
				<br>
				<span>Para reservas aos finais de semana, considerar acréscimo de 20% no valor da sala.</span>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">EQUIPAMENTOS</span>
				<br>
				<br>
				<span>No centro de treinamento Station Vila Olímpia, você não precisa se preocupar com a instalação dos equipamentos para projeção. Todos os equipamentos já estão prontos para receber seu notebook. É só plugar e pronto. Caso seja necessário, fazemos a locação de notebooks, mouse, televisores, serviços de cópia e impressão (PB e color).</span>
				<br>
				<br>
				<span>•	A voltagem das salas é de 110 Volts;</span>
				<br>
				<br>
				<span>•	Não nos responsabilizamos pela montagem de equipamentos externos bem como a instalação e o funcionamento dos mesmos.</span>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">ALIMENTOS E BEBIDAS</span>
				<br>
				<br>
				<span>Parte essencial de qualquer evento, disponibilizamos também serviços de coffee break e brunch através de uma parceria com a Bread and Company. Veja o cardápio anexo no e-mail.</span>
				<br>
				<br>
				<span>•	Não será permitido o acesso de nenhuma empresa terceira para fornecimento de coffee break e almoço.</span>
			</div>
			<div class="rodapePagina">
				<img src="<?php echo $urlGeral; ?>/images/rodape-proposta.jpg">
			</div>
		</div>
<!-- ------------ Pagina 4 ------------------------------------------------------- -->
		<div class="paginaProposta">
			<div class="topoPagina">
				<img src="<?php echo $urlGeral; ?>/images/logo-proposta.jpg" style="float:left;">
			</div>
			<div class="conteudoPagina">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">INVESTIMENTO</span>
				<br>
				<br>
				<span>Para a realização do seu evento no centro de treinamento <span class="destaque"><?php echo $nomeUnidade ?></span>, o investimento será de:</span>
				<br>
				<br>
				<table border="0" width="600" cellspacing="0" cellpadding="5" style="color:#767678; font-weight:bold; font-size:12px; margin-left:55px; border:1px solid #d6d8d7;">
					<tr style="background:#338a9b; font-size:18px;">
						<th style="color:#FFFFFF">Data</th>
						<th style="color:#FFFFFF">Periodo</th>
						<th style="color:#FFFFFF">Sala</th>
						<th style="color:#FFFFFF">Valor</th>
					</tr>
					<?php echo $conteudoTabela; ?>
				</table>
				<br>
				<br>
			</div>
			<div class="rodapePagina">
				<img src="<?php echo $urlGeral; ?>/images/rodape-proposta.jpg">
			</div>
		</div>
<!-- ------------ Pagina 5 ------------------------------------------------------- -->
		<div class="paginaProposta">
			<div class="topoPagina">
				<img src="<?php echo $urlGeral; ?>/images/logo-proposta.jpg" style="float:left;">
			</div>
			<div class="conteudoPagina">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">ESTÁ INCLUSO NESTA PROPOSTA:</span>
				<br>
				<br>
				<!-- Parte Editavel com cada linha sendo um item pré-selecionado -->
				<span>•	Locação da sala para os dias descritos</span>
				<br>
				<span>•	Projetor multimídia</span>
				<br>
				<span>•	Notebook</span>
				<br>
				<span>•	Sistema de sonorização</span>
				<br>
				<span>•	Mouse sem fio</span>
				<br>
				<span>•	Flip chart</span>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">FORMA DE PAGAMENTO:</span>
				<br>
				<br>
				<span>Os eventos serão faturados no dia seguinte a sua realização, considerando o valor total contratado para o dia, e enviados ao responsável pela contratação do evento com vencimento para <span class="destaque">{numeroDias}</span> após a emissão da nota.</span>
				<br>
				<span>Quando houver serviços extras, os mesmos serão relacionados e encaminhados ao responsável pela contratação do evento para serem aprovados e serão faturados após aprovação, com vencimento para 10 dias após a data da aprovação.</span>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">CANCELAMENTO:</span>
				<br>
				<br>
				<span>Em caso de cancelamento do evento será cobrado o no show da seguinte forma:</span>
				<br>
				<span>•	15 dias da data marcada, será cobrado no show equivalente a 50% do valor do dia do evento.</span>
				<br>
				<span>•	10 dias da data marcada, será cobrado no show equivalente a 100% do valor do dia do evento.</span>
				<br>
				<br>
				<br>
				<br>
				<span class="destaque" style="font-size:14px; font-weight:bold;">VALIDADE:</span>
				<br>
				<br>
				<span>Esta proposta tem prazo de validade até <span class="destaque"><?php echo $dataVencimento ?></span>.</span>
			</div>
			<div class="rodapePagina">
				<img src="<?php echo $urlGeral; ?>/images/rodape-proposta.jpg">
			</div>
		</div>
	</div>
</body>
</html>
<?php
	}
?>