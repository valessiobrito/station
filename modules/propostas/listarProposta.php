<?php
	ob_start();
	session_start();
	
	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Produtos";
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
		<script>
			$(document).ready(function(){
				carregaCombo('tipo','');
			});	
		</script> 
        
        <div class="content">
        	<ul class="breadcrumb">
                <li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li class="active">Produtos</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Produtos</h1>
                </div>
                <h4>Cadastrar Novo</h4>
                <div class="row">
                    <div class="span10">
                    	<a href="novoProduto.php" role="button" class="btn btn-info">Adicionar Produtos</a>
                	</div>
                </div>
                <br>
                <h4>Pesquisar</h4>
                <div class="row">
                    <div class="span10">
                        <div class="input-append">
                            <select class="span6" id="tipo" name="tipo">
                                <option value="">Escolha o tipo:</option>
                            </select>
                            <a role="button" class="btn" onclick="pesquisarProdutos(document.getElementById('tipo').value)">Mostrar</a>
                        </div>
                    </div>                        
                </div>
                <br>
                <div id="resultadoBusca" style="display:none;">
                    <h4>Resultado da busca:</h4>
                    <div class="row">
                        <table id="tabelaBusca" class="table table-bordered table-striped"></table>
                    </div>
                </div>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}	
?>