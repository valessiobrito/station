<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$periodo = $_POST['periodo'];
		if($periodo == '1'){
			$campo = 'sala_15_valorManha';
		}else if($periodo == '2'){
			$campo = 'sala_15_valorTarde';
		}else if($periodo == '3'){
			$campo = 'sala_15_valorNoite';
		}else if($periodo == '4'){
			$campo = 'sala_15_valorIntegral';
		}
		$sala = $_POST['sala'];

		$qryValor = mysql_query("SELECT ".$campo." FROM sta_salas WHERE sala_10_id = ".$sala);
		$resultadoValor = mysql_fetch_array($qryValor);
		$valor = $resultadoValor[$campo];

		$valor = number_format($valor,2,'.',',');
		$valor = str_replace(',','',$valor);
		echo $valor;
?>