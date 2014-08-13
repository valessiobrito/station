<?php
	header("Content-Type: text/html; charset=utf-8");
	include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

	$resposta = 0;

	$idUnidade = $_POST['idUnidade'];
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

	if($idUnidade == '0'){
		$query = "INSERT INTO sta_unidades (unidade_30_nome,unidade_30_logradouro,unidade_30_numero,unidade_30_bairro,unidade_30_complemento,unidade_30_cidade,unidade_30_estado,unidade_30_cep,unidade_30_ddd,unidade_30_telefone,unidade_30_nomeContato) VALUES ('".$nome."','".$logradouro."','".$numero."','".$bairro."','".$complemento."','".$cidade."','".$estado."','".$cep."','".$ddd."','".$telefone."','".$nomeContato."')";
		$gravar = mysql_query($query);
		if($gravar){
			$resposta = mysql_insert_id();
		}
	}else{
		$query = "UPDATE sta_unidades SET unidade_30_nome = '".$nome."',unidade_30_logradouro = '".$logradouro."',unidade_30_numero = '".$numero."',unidade_30_bairro = '".$bairro."',unidade_30_complemento = '".$complemento."',unidade_30_cidade = '".$cidade."',unidade_30_estado = '".$estado."',unidade_30_cep = '".$cep."',unidade_30_ddd = '".$ddd."',unidade_30_telefone = '".$telefone."',unidade_30_nomeContato = '".$nomeContato."' WHERE unidade_10_id = '".$idUnidade."'";
		$gravar = mysql_query($query);
		if($gravar){
			$resposta = $idUnidade;
		}
	}
	echo $resposta;
?>