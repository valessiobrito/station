<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$unidade = $_POST['unidade'];

		$json = array();

		$sql = mysql_query("SELECT * FROM sta_unidades WHERE unidade_10_id = ".$unidade);

		while($row = mysql_fetch_array($sql))
		{
			$resultado = array(
				'nomeUnidade' => $row['unidade_30_nome'],
				'logradouro' => $row['unidade_30_logradouro'],
				'numero' => $row['unidade_30_numero'],
				'bairro' => $row['unidade_30_bairro'],
				'complemento' => $row['unidade_30_complemento'],
				'cidade' => $row['unidade_30_cidade'],
				'estado' => $row['unidade_30_estado'],
				'cep' => $row['unidade_30_cep'],
				'ddd' => $row['unidade_30_ddd'],
				'telefone' => $row['unidade_30_telefone'],
				'nomeContato' => $row['unidade_30_nomeContato']
			);
			array_push($json, $resultado);
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>