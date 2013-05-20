<?php
        header("Content-Type: text/html; charset=utf-8");
		include ("conexao.php");
		
		$unidade = $_POST['unidade'];
		
		$qryNome = mysql_query("SELECT unidade_30_nome FROM sta_unidades WHERE unidade_10_id = ".$unidade);
		$resultadoNome = mysql_fetch_array($qryNome);
		$nomeUnidade = $resultadoNome['unidade_30_nome'];

		$json = array();

		$sql = mysql_query("SELECT * FROM sta_salas WHERE unidade_10_id = ".$unidade." ORDER BY sala_30_nome");
		
		while($row = mysql_fetch_array($sql))     
		{
			$resultado = array(
				'nomeUnidade' => $nomeUnidade,
				'nomeSala' => $row['sala_30_nome']." - ".$row['sala_30_numero'],
				'idSala' => $row['sala_10_id']				
			);
			array_push($json, $resultado);
		}		

		$jsonstring = json_encode($json);

		echo $jsonstring;		
?>