<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Agenda Station - <?php echo $title; ?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.icon-large.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="topo" class="clearfix">
        <img src="images/logo.png" border="0" class="logo" />
        <div class="logado">
        	<img src="images/upload/usuarios/<?php echo $_SESSION['FotoUrlSTATION']; ?>" alt="Foto - <?php echo $_SESSION['NomeSTATION']; ?>" width="45">
        	<span>Olá, <?php echo $_SESSION['NomeSTATION']; ?></span>
        </div>
    </div>
    <div id="menu" class="clearfix">
        <ul class="nav">
            <?php
                if($_SESSION["TipoSTATION"] != "3"){
            ?>
                <li>
                	<a id="dropProdutos" href="unidades.php" role="button">
                    	<i class="icon-large icon-home"></i>
                		<br>
                        <span>Unidades</span>
                    </a>
                </li>
            <?php
                }
            ?>
            <?php
                if($_SESSION["TipoSTATION"] == "1"){
            ?>
                <li>
                	<a id="dropProdutos" href="usuarios.php" role="button">
                    	<i class="icon-large icon-user"></i>
                		<br>
                        <span>Usuários</span>
                    </a>
                </li>
            <?php
                }
            ?>
            <li>
            	<a href="inc/logout.php">
                	<i class="icon-large icon-off"></i>
                	<br>
                	<span>Sair</span>
                </a>
            </li>
        </ul>
    </div>