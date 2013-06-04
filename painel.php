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

<?php include("inc/footer.php");?>
<?php
	}	
?>