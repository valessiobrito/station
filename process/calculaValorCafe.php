<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$qtdeCafe = $_POST['qtdeCafe'];
		$periodoCafe = $_POST['periodoCafe'];

		$qryValor = mysql_query("SELECT produto_15_valor FROM sta_produtos WHERE produto_10_id = '2'");
		$resultadoValor = mysql_fetch_array($qryValor);
		$valor = $resultadoValor['produto_15_valor'];

		$valor = $valor * $qtdeCafe;

		if($periodoCafe == '3'){
			$valor = $valor * 2;
		}

		$valor = number_format($valor,2,'.',',');
		$valor = str_replace(',','',$valor);
		echo $valor;
?>