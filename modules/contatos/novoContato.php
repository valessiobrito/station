<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Adicionar Contato";
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
		<script>
			$(document).ready(function(){
				carregaCombo('clientes','');

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
                <li><a href="/agenda/modules/contatos/listarContato.php">Contatos</a> <span class="divider">/</span></li>
                <li class="active">Novo Contato</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Novo Contato</h1>
                </div>
                <form name="gravarContato" method="post" action="<?php echo $urlContatos;?>/action/crudContato.php?op=novo">
                    <h4>Vincular Contatos ao Cliente:</h4>
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="clientes" name="clientes">
                                <option value="">Escolha a empresa:</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h4>Contatos</h4>
                    <table id="tbody_tr_contato">
                        <tr id="2">
                        	<td>
                                <div class="row">
                                    <div class="span10" style="margin-bottom:20px;">
                                        <input type="text" class="span3" id="nomeContato" name="nomeContato[]" placeholder="Primeiro Nome">
                                        <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato[]" placeholder="Sobrenome">
                                        <br>
                                        <input type="text" class="span3" id="emailContato" name="emailContato[]" placeholder="E-mail">
                                        <input type="text" class="span2" id="telefoneContato" name="telefoneContato[]" placeholder="Telefone Comercial">
                                        <input type="text" class="span2" id="celularContato" name="celularContato[]" placeholder="Celular">
                                        <button type="button" class="btn btn-success lineClone" id="tr_contato">Adicionar outro</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr id="tr_contato_inv" style="display: none;">
                        	<td>
                                <div class="row">
                                    <div class="span10" style="margin-bottom:20px;">
                                        <input type="text" class="span3" id="nomeContato" name="nomeContato[]" placeholder="Primeiro Nome">
                                        <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato[]" placeholder="Sobrenome">
                                        <br>
                                        <input type="text" class="span3" id="emailContato" name="emailContato[]" placeholder="E-mail">
                                        <input type="text" class="span2" id="telefoneContato" name="telefoneContato[]" placeholder="Telefone Comercial">
                                        <input type="text" class="span2" id="celularContato" name="celularContato[]" placeholder="Celular">
                                        <button type="button" class="btn btn-danger lineRemove">Deletar</button>
                                    </div>
                                </div>
                            </td>
                    	</tr>
                    </table>
                 	<br>
                    <input type="button" onclick="validaContato()" class="btn btn-info btn-large" value="Salvar" />
                </form>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>