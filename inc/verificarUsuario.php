<?php include("conexao.php");?>
<?php
	$login = mysql_real_escape_string($_POST['login']);
	$senha = mysql_real_escape_string($_POST['senha']);
	$senha = md5($senha);
	$senha = base64_encode($senha);

	$qry = "SELECT * FROM sta_usuarios WHERE usuario_20_login='".$login."' AND usuario_20_senha='".$senha."' AND usuario_12_ativo ='1'";
	
	$logar = mysql_query($qry) or die("erro ao selecionar");
	
	if(mysql_num_rows($logar) > 0){
		$dados = mysql_fetch_array($logar);
		$logado = "1";
		session_start();
		$_SESSION['LogadoSTATION'] = $logado;
		$_SESSION['NomeSTATION'] = $dados['usuario_30_nome'];
		$_SESSION['TipoSTATION'] = $dados['usuario_12_tipo'];
		$_SESSION['FotoUrlSTATION'] = $dados['usuario_20_fotoUrl'];
		header("Location: ../painel.php");
	}else{
		header("Location: ../index.php?err=1");
	}
?>