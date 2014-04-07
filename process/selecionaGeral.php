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
		}else if($elemento == 'tipoCoffee' || $elemento == 'tipoCoffeeBriefing'){
			$valorPai = '3';
			$table = 'sta_produtos';
			$colId = 'produto_10_id';
			$colNome = 'produto_30_nome';
			$colPai = 'tipo_produto_10_id';
		}else if($elemento == 'tipoProduto'){
			$table = 'sta_tipos_produto';
			$colId = 'tipo_produto_10_id';
			$colNome = 'tipo_produto_30_nome';
		}else if($elemento == 'produtos'){
			$valorPai = $_POST['valorPai'];
			$table = 'sta_produtos';
			$colId = 'produto_10_id';
			$colNome = 'produto_30_nome';
			$colPai = 'tipo_produto_10_id';
		}else if($elemento == 'usuarios'){
			$table = 'sta_usuarios';
			$colId = 'usuario_10_id';
			$colNome = 'usuario_30_nome';
		}


		$json = array();

		if($elemento == 'contatos' || $elemento == 'tipoCoffee' || $elemento == 'tipoCoffeeBriefing' || $elemento == 'produtos'){
			$sql = mysql_query("SELECT * FROM ".$table." WHERE ".$colPai." = ".$valorPai." ORDER BY ".$colNome);
		}else{
			$sql = mysql_query("SELECT * FROM ".$table." ORDER BY ".$colNome);
		}

		if ($elemento == 'tipoCoffee' || $elemento == 'tipoCoffeeBriefing') {
			$lblPrimeira = 'Qual Coffee?';
		}else if($elemento == 'tipoProduto'){
			$lblPrimeira = 'Tipos de Produto';
		}else if($elemento == 'produtos'){
			$lblPrimeira = 'Produtos';
		}else if($elemento == 'clientesCadastrados'){
			$lblPrimeira = 'Escolha o cliente';
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
				'nomeSelecao' => utf8_encode($row[$colNome])
			);
			array_push($json, $resultado);
		}

		$jsonstring = json_encode($json);

		echo $jsonstring;
?>