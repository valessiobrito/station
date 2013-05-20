<?php
	include ("conexao.php");
	
	$resposta = 0;
	
	$nome = $_POST['nome'];
	$logradouro = $_POST['logradouro'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$ddd = $_POST['ddd'];
	$telefone = $_POST['telefone'];
	$nomeContato = $_POST['nomeContato'];
	
	$query = "INSERT INTO sta_unidades (unidade_30_nome,unidade_30_logradouro,unidade_30_numero,unidade_30_bairro,unidade_30_complemento,unidade_30_cidade,unidade_30_estado,unidade_30_cep,unidade_30_ddd,unidade_30_telefone,unidade_30_nomeContato) VALUES ('".$nome."','".$logradouro."','".$numero."','".$bairro."','".$complemento."','".$cidade."','".$estado."','".$cep."','".$ddd."','".$telefone."','".$nomeContato."')";
	$gravar = mysql_query($query);
	if($gravar){
		$resposta = mysql_insert_id();
	}
	
	echo $resposta;
?>