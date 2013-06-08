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
				$(".valor").maskMoney({showSymbol:false, thousands:'', decimal:','});

				$(".lineClone").click(function(){
					
					invLine = $(this).attr("id")+"_inv";
					
					newLine = $("#"+invLine).clone();
					
					numPossibilidades = 90231290523432 - 1
					aleat = Math.random() * numPossibilidades
					aleat = Math.floor(aleat)
					
					newLineId = parseInt(1) + aleat;
					
					newLine.attr("style","");
					newLine.attr("class","");
					newLine.attr("id",newLineId);
					newLine.appendTo("#tbody_"+$(this).attr("id"));
					$("#"+newLineId+">td").children().eq(1).remove();
					newLine.attr("style", "height: 30px");
					
					imgEle = newLine.find("button").attr("id","rm_"+newLineId+"_"+$(this).attr("id"));
					
					valorEle = newLine.find(".valor").maskMoney({showSymbol:false, thousands:'', decimal:','});
					
				});
				
				$(".lineRemove").live("click",function(){
					
					slices = $(this).attr("id");
					slices = slices.split("_");
					
					if ($("#tbody_"+slices[2]+"_"+slices[3]+" tr").length > 2){
						$("#"+slices[1]).remove();
					}
					
				});
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
                                	<option value="">Escolha o tipo:</option>
                                </select>
                                <a href="#modalNovoTipo" role="button" class="btn" data-toggle="modal">+</a>
                            </div>
                        </div>                        
                    </div>
                    <br>
                    <h4>Informações do Produto</h4>
                    <table id="tbody_tr_produto">
                        <tr id="2">
                        	<td>
                                <div class="row">
                                    <div class="span10" style="margin-bottom:20px;">
                                        <input type="text" class="span4" id="nome" name="nome[]" placeholder="Nome do Produto">
                                        <input type="text" class="span2 valor" id="valor" name="valor[]" placeholder="Valor do Produto">
                                        <input type="text" class="span2" id="quantidade" name="quantidade[]" placeholder="Quantidade">
                                        <textarea class="span4" id="observacoes" name="observacoes[]" placeholder="Observações"></textarea>
                                        <button type="button" class="btn btn-success lineClone" id="tr_produto">Adicionar outro</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr id="tr_produto_inv" style="display: none;">
                        	<td>
                                <div class="row">
                                    <div class="span10" style="margin-bottom:20px;">
                                        <input type="text" class="span4" id="nome" name="nome[]" placeholder="Nome do Produto">
                                        <input type="text" class="span2 valor" id="valor" name="valor[]" placeholder="Valor do Produto">
                                        <input type="text" class="span2" id="quantidade" name="quantidade[]" placeholder="Quantidade">
                                        <textarea class="span4" id="observacoes" name="observacoes[]" placeholder="Observações"></textarea>
                                        <button type="button" class="btn btn-danger lineRemove">Deletar</button>
                                    </div>
                                </div>
                            </td>
                    	</tr>
                    </table>
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