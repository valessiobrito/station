<?php
	include ("conexao.php");
	
	$sala = $_POST['sala'];
	$numero = $_POST['numero'];
	$valorManha = number_format($_POST['valorManha'],2,'.',',');
	$valorManha = str_replace(',','',$valorManha);
	$valorTarde = number_format($_POST['valorTarde'],2,'.',',');
	$valorTarde = str_replace(',','',$valorTarde);
	$valorNoite = number_format($_POST['valorNoite'],2,'.',',');
	$valorNoite = str_replace(',','',$valorNoite);
	$valorIntegral = number_format($_POST['valorIntegral'],2,'.',',');
	$valorIntegral = str_replace(',','',$valorIntegral);
	$metros = $_POST['metros'];
	$uMesa = $_POST['uMesa'];
	$uSimples = $_POST['uSimples'];
	$grupos = $_POST['grupos'];
	$escolar = $_POST['escolar'];
	$auditorio = $_POST['auditorio'];
	$unidade = $_POST['unidade'];
	
	$query = "INSERT INTO sta_salas(sala_30_nome,sala_30_numero,sala_15_valorManha,sala_15_valorTarde,sala_15_valorNoite,sala_15_valorIntegral,sala_20_metros,sala_20_uMesa,sala_20_uSimples,sala_20_grupos,sala_20_escolar,sala_20_auditorio,unidade_10_id) VALUES ('".$sala."','".$numero."','".$valorManha."','".$valorTarde."','".$valorNoite."','".$valorIntegral."','".$metros."','".$uMesa."','".$uSimples."','".$grupos."','".$escolar."','".$auditorio."','".$unidade."')";
	$gravar = mysql_query($query);
	if($gravar){
		echo("<script>
			alert('Sala salva com sucesso!')
			window.location = '../unidades.php';
			</script>");
	}else{
		echo("<script>
			alert('Ocorreu um erro na gravação.')
			window.location = '../novaSala.php';
			</script>");
	}
?>