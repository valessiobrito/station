<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		include($_SERVER['DOCUMENT_ROOT'].'/agenda/conf/connection.php');
		$title = "Painel";
?>
<?php include("inc/header.php");?>
		<div class="content">
            <div class="span10">
            	<div class="page-header">
                	<h1>Home</h1>
                </div>
                <h4>Teremos o calendário geral aqui</h4>
            </div>
        </div>
<?php include("inc/footer.php");?>
<?php
	}
?>