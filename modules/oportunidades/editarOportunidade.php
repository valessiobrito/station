<?php
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

if ($_SESSION['LogadoSTATION'] != "1" && (isset($_GET['id']) && $_GET['id'] > 0)){
	header("Location: index.php");
}else{
    
    $produtoController = new ProdutoController();
    $produto = $produtoController->listAction($_GET['id'] , 1);
    
    if (count($produto) == 0){
        header("Location: ".$urlProdutos."/listarProduto.php");
    }
	
    $produtoClass = new Produto();
    $produtoClass->fetchEntity($produto[1]);
	$title = "Editar Produto";

?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>

<script>
	$(document).ready(function(){
		carregaCombo('tipo','<?php echo $produtoClass->getTipoId(); ?>');
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
					<h1>Editar Produto</h1>
				</div>
				<form name="gravarProduto" method="post" action="<?php echo $urlProdutos;?>/action/crudProduto.php?op=editar">
					<h4>Unidade</h4>
					<div class="row">
						<div class="span10">
							<div class="input-append">
                            	<select class="span6" id="tipo" name="tipo">
                                	<option value="">Escolha o tipo:</option>
                                </select>
                                <a href="#modalNovoTipo" role="button" class="btn" data-toggle="modal">+</a>
                            </div>
						</div>                        
					</div>
					<br>
                    <h4>Informações do Produto</h4>
                    <div class="row">
                        <div class="span10">
                            <input type="text" class="span4" id="nome" name="nome" placeholder="Nome do Produto" value="<?php echo $produtoClass->getNome();?>">
                            <input type="text" class="span2" id="valor" name="valor" placeholder="Valor do Produto" value="<?php echo $produtoController->formataValor($produtoClass->getValor(),'editar');?>">
                            <input type="text" class="span2" id="quantidade" name="quantidade" placeholder="Valor do Produto" value="<?php echo $produtoClass->getQuantidade();?>">
                            <textarea class="span4" id="observacoes" name="observacoes" placeholder="Observações"><?php echo $produtoClass->getObservacoes();?></textarea>
                        </div>
                    </div>
                 	<br>
                    <input type="hidden" name="id" value="<?php echo $produtoClass->getId();?>">
					<input type="button" onclick="validaProduto('edicao')" class="btn btn-info btn-large" value="Salvar" />
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