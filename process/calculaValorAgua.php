<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$qtdeAgua = $_POST['qtdeAgua'];
		$periodoAgua = $_POST['periodoAgua'];

		if($_SERVER['SERVER_ADDR'] == "127.0.0.1" || $_SERVER['SERVER_ADDR'] == "::1"){
			$idAgua = "3";
		}else{
			$idAgua = "4";
		}

		$qryValor = mysql_query("SELECT produto_15_valor FROM sta_produtos WHERE produto_10_id = '".$idAgua."'");
		$resultadoValor = mysql_fetch_array($qryValor);
		$valor = $resultadoValor['produto_15_valor'];

		$valor = $valor * $qtdeAgua;

		if($periodoAgua == '3'){
			$valor = $valor * 2;
		}

		$valor = number_format($valor,2,'.',',');
		$valor = str_replace(',','',$valor);
		echo $valor;
?>