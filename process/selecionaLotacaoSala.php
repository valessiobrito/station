<?php
        header("Content-Type: text/html; charset=utf-8");
		include ($_SERVER['DOCUMENT_ROOT']."/agenda/conf/connection.php");

		$sala = $_POST['sala'];
		$tipoLotacao = $_POST['tipoLotacao'];
		
		if($tipoLotacao == "1"){
			$campo = "sala_20_uMesa";
		}else if($tipoLotacao == "2"){
			$campo = "sala_20_uSimples";
		}else if($tipoLotacao == "3"){
			$campo = "sala_20_grupos";
		}else if($tipoLotacao == "4"){
			$campo = "sala_20_escolar";
		}else if($tipoLotacao == "5"){
			$campo = "sala_20_auditorio";
		}
		
		$sql = mysql_query("SELECT * FROM sta_salas WHERE sala_10_id = '".$sala."'");
		$row = mysql_fetch_array($sql);
		
		echo $row[$campo];
?>