<?php
	ob_start();
	session_start();
	
	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Adicionar Produto";
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
		<script>
			$(document).ready(function(){
				carregaCombo('tipo','');
				$("#valor").maskMoney({showSymbol:false, thousands:'', decimal:','});
			});	
		</script> 
    
        <div class="content">
        	<ul class="breadcrumb">
                <li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/produtos/listarProduto.php">Produtos</a> <span class="divider">/</span></li>
                <li class="active">Novo Produto</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Novo Produto</h1>
                </div>
                <form name="gravarProduto" method="post" action="<?php echo $urlProdutos;?>/action/crudProduto.php?op=novo">
                    <h4>Tipo</h4>
                    <div class="row">
                        <div class="span10">
                        	<div class="input-append">
                            	<select class="span6" id="tipo" name="tipo">
                                	<option value="">Escolha a unidade:</option>
                                </select>
                                <a href="#modalNovoTipo" role="button" class="btn" data-toggle="modal">+</a>
                            </div>
                        </div>                        
                    </div>
                    <br>
                    <h4>Informações do Produto</h4>
                    <div class="row">
                        <div class="span10">
                            <input type="text" class="span4" id="nome" name="nome[]" placeholder="Nome do Produto">
                            <input type="text" class="span2" id="valor" name="valor[]" placeholder="Valor do Produto">
                            <input type="text" class="span2" id="quantidade" name="quantidade[]" placeholder="Valor do Produto">
                            <textarea class="span4" id="observacoes" name="observacoes[]" placeholder="Observações"></textarea>
                        </div>
                    </div>
                 	<br>
                    <input type="button" onclick="validaProduto('novo')" class="btn btn-info btn-large" value="Salvar" />
                </form>
            </div>
            <div id="modalNovoTipo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Novo Tipo Produto</h3>
                </div>
                <div class="modal-body">
                	<h4>Informações do Tipo</h4>
                    <div class="row">
                        <div class="span6">
                            <input type="text" class="span6" id="nomeTipo" name="nomeTipo" placeholder="Nome do Tipo">
                        </div>
                    </div>
                    <div class="row">
                    	<input type="button" onclick="validaTipoProduto()" class="btn btn-info" value="Salvar" style="float:right; margin-right:55px;" />
                    </div>
                </div>
                <div class="modal-footer">
                    <span id="retornoTipo"></span>
                </div>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}	
?>