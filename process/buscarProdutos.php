<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
		
		$tipo = $_POST['tipo'];

		$json = array();

		$sql = mysql_query("SELECT * FROM sta_produtos WHERE tipo_produto_10_id = ".$tipo." ORDER BY produto_30_nome");
		
		while($row = mysql_fetch_array($sql))     
		{
			$resultado = array(
				'nomeProduto' => $row['produto_30_nome'],
				'quantidade' => $row['produto_20_quantidade'],
				'idProduto' => $row['produto_10_id']				
			);
			array_push($json, $resultado);
		}		

		$jsonstring = json_encode($json);

		echo $jsonstring;		
?>