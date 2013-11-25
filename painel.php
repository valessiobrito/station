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
                	<div class="pull-right form-inline">
						<div class="btn-group">
							<button data-calendar-nav="prev" class="btn btn-primary">&lt;&lt; Ante</button>
							<button data-calendar-nav="today" class="btn">Hoje</button>
							<button data-calendar-nav="next" class="btn btn-primary">Prox &gt;&gt;</button>
						</div>
						<div class="btn-group">
							<button data-calendar-view="year" class="btn btn-warning">Ano</button>
							<button data-calendar-view="month" class="btn btn-warning active">Mês</button>
							<button data-calendar-view="week" class="btn btn-warning">Semana</button>
							<button data-calendar-view="day" class="btn btn-warning">Dia</button>
						</div>
					</div>
					<h3>Mes</h3>
                </div>
                <div class="row">
                	<div class="span10">
                		<div id="calendar"></div>
                	</div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo $urlGeral; ?>/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
		    var calendar = $('#calendar').calendar({language: 'pt-BR', events_source: 'process/eventos.php'});
		</script>
<?php include("inc/footer.php");?>
<?php
	}
?>