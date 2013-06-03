<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");
		
		$elemento = $_POST['elemento'];
		
		if($elemento == 'unidade'){
			$table = 'sta_unidades';
			$colId = 'unidade_10_id';
			$colNome = 'unidade_30_nome';
		}

		$json = array();

		$sql = mysql_query("SELECT * FROM ".$table." ORDER BY ".$colNome);

		$resultado = array(
			'idSelecao' => '',
			'nomeSelecao' => 'Escolha '.$elemento				
		);

		array_push($json, $resultado);
		
		while($row = mysql_fetch_array($sql))     
		{
			$resultado = array(
				'idSelecao' => $row[$colId],
				'nomeSelecao' => $row[$colNome]				
			);
			array_push($json, $resultado);
		}		

		$jsonstring = json_encode($json);

		echo $jsonstring;		
?>