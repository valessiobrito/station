<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Oportunidades";
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
		<script>
			$(document).ready(function(){
				carregaCombo('clientes','');
			});
		</script>

        <div class="content">
        	<ul class="breadcrumb">
                <li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li class="active">Oportunidades</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Oportunidades</h1>
                </div>
                <h4>Cadastrar Nova</h4>
                <div class="row">
                    <div class="span10">
                    	<a href="novaOportunidade.php" role="button" class="btn btn-info">Adicionar Oportunidade</a>
                	</div>
                </div>
                <br>
                <h4>Pesquisar</h4>
                <div class="row">
                    <div class="span10">
                        <input type="text" class="span5" id="nrOportunidade" name="nrOportunidade" placeholder="Número da Oportunidade">
                        <select class="span5" id="status" name="status">
                            <option value="">Escolha o status:</option>
                            <option value="1">Oportunidade</option>
                            <option value="2">Aprovada</option>
                            <option value="3">Recusada</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="span10">
                        <div class="input-append">
                            <select class="span5" id="clientes" name="clientes" onchange="carregaComboDependente('contatos','',this)">
                                <option value="">Escolha o cliente:</option>
                            </select>
                            <select class="span5" id="contatos" name="contatos">
                                <option value="">Escolha o contato:</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span10">
                        <a role="button" class="btn" onclick="pesquisarOportunidade()">Mostrar</a>
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