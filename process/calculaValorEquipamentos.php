<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$produtos = explode(",", $_POST['produtos']);
		$quantidades = explode(",", $_POST['quantidades']);
		$valorTotal = 0;

		for ($i=0; $i <= (count($produtos)-1); $i++) {
			$qryValor = mysql_query("SELECT produto_15_valor FROM sta_produtos WHERE produto_10_id = ".$produtos[$i]);
			$resultadoValor = mysql_fetch_array($qryValor);
			$valor = $resultadoValor["produto_15_valor"] * $quantidades[$i];
			$valorTotal += $valor;
		}

		$valorTotal = number_format($valorTotal,2,'.',',');
		$valorTotal = str_replace(',','',$valorTotal);
		echo $valorTotal;
?>