<?php
session_start(); 
unset($_SESSION['LogadoSTATION']); 
unset($_SESSION['NomeSTATION']); 
unset($_SESSION['TipoSTATION']); 
session_destroy();
header("Location: ../index.php");
?>