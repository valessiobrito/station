<?php
	ob_start();
	session_start();
	if ($_SESSION['LogadoSTATION'] == "1"){
		header("Location: painel.php");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Agenda Station - Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
    	<div class="login">
            <form name="formLogin" class="form-stacked" method="post" action="conf/secUser.php">
                <img src="images/logo.png" border="0" class="logo" />
                <?php
                if(isset($_GET['err'])){
                    $msgErro = "- Dados Incorretos";
                }else{
                    $msgErro = "";
                }
                ?>
                <legend>Faça o login <?=$msgErro?></legend>
                
                <label for="login">Usuário</label>
                <input type="text" name="login" id="login" />
                
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" />
                <br>
                <input type="submit" name="button" id="button" class="btn btn-large btn-info" value="Login" />
            </form>
         </div>
    </div>
<?php include("inc/footer.php");?>
<?php
	session_destroy();
	}	
?>
