<?php
	include ("conexao.php");
	
	$idSala = $_POST['is'];
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
	
	$query = "UPDATE sta_salas SET sala_30_nome = '".$sala."',sala_30_numero = '".$numero."',sala_15_valorManha = '".$valorManha."',sala_15_valorTarde = '".$valorTarde."',sala_15_valorNoite = '".$valorNoite."',sala_15_valorIntegral = '".$valorIntegral."',sala_20_metros = '".$metros."',sala_20_uMesa = '".$uMesa."',sala_20_uSimples = '".$uSimples."',sala_20_grupos = '".$grupos."',sala_20_escolar = '".$escolar."',sala_20_auditorio = '".$auditorio."',unidade_10_id = '".$unidade."' WHERE sala_10_id = '".$idSala."'";
	
	$gravar = mysql_query($query);
	if($gravar){
		echo("<script>
			alert('Sala editada com sucesso!')
			window.location = '../unidades.php';
			</script>");
	}else{
		echo("<script>
			alert('Ocorreu um erro na gravação.')
			window.location = '../editarSala.php?is=".$idSala."';
			</script>");
	}
?>