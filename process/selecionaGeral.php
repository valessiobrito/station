<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$elemento = $_POST['elemento'];

		if($elemento == 'unidade'){
			$table = 'sta_unidades';
			$colId = 'unidade_10_id';
			$colNome = 'unidade_30_nome';
		}else if($elemento == 'tipo'){
			$table = 'sta_tipos_produto';
			$colId = 'tipo_produto_10_id';
			$colNome = 'tipo_produto_30_nome';
		}else if($elemento == 'clientes' || $elemento == 'clientesCadastrados'){
			$table = 'sta_clientes';
			$colId = 'cliente_10_id';
			$colNome = 'cliente_30_nome';
		}else if($elemento == 'contatos'){
			$valorPai = $_POST['valorPai'];
			$table = 'sta_contatos_cliente';
			$colId = 'contato_cliente_10_id';
			$colNome = 'contato_cliente_30_nome';
			$colPai = 'cliente_10_id';
		}else if($elemento == 'tipoCoffee'){
			$valorPai = '3';
			$table = 'sta_produtos';
			$colId = 'produto_10_id';
			$colNome = 'produto_30_nome';
			$colPai = 'tipo_produto_10_id';
		}


		$json = array();

		if($elemento == 'contatos' || $elemento == 'tipoCoffee'){
			$sql = mysql_query("SELECT * FROM ".$table." WHERE ".$colPai." = ".$valorPai." ORDER BY ".$colNome);
		}else{
			$sql = mysql_query("SELECT * FROM ".$table." ORDER BY ".$colNome);
		}

		if ($elemento == 'tipoCoffee') {
			$lblPrimeira = 'Qual Coffee?';
		}else{
			$lblPrimeira = 'Escolha '.$elemento;
		}

		$resultado = array(
			'idSelecao' => '',
			'nomeSelecao' => $lblPrimeira
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