<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Adicionar Proposta";
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
		<script>
			$(document).ready(function(){
				var dataPicker = $('#primeiraReserva #data').datepicker({format:'dd/mm/yyyy'}).on('changeDate', function(ev){
					dataPicker.datepicker('hide');
					dataPicker.blur();
					verificaData(this);
				});

				carregaCombo('clientesCadastrados','');
				carregaCombo('clientes','');
                carregaComboClone('unidade','');
                carregaComboClone('tipoCoffee','');
				carregaComboClone('tipoProduto','');

				$(".lineClone").live("click",function(){

					invLine = $(this).attr("id")+"_inv";

					newLine = $("#"+invLine).clone();

					numPossibilidades = 90231290523432 - 1
					aleat = Math.random() * numPossibilidades
					aleat = Math.floor(aleat)

					newLineNr = parseInt(1) + aleat;
					newLineId = "clone"+ newLineNr;

					newLine.attr("style","");
					newLine.attr("class","");
					newLine.attr("id",newLineId);
					newLine.appendTo("#tbody_"+$(this).attr("id"));

					$("#"+newLineId+" .lineRemove").attr("id","rm_"+newLineId+"_"+$(this).attr("id"));
                    $("#"+newLineId+" #tbody_tr_produtos_clone").attr("id","tbody_tr_produtos_"+newLineId);
					$("#"+newLineId+" #produtoClone").attr("id","produtoClone"+newLineNr);
                    $("#"+newLineId+" #tipoProduto_clone").attr("id","tipoProduto_"+newLineId).attr("name","tipoProduto_"+newLineId+"[]");
                    $("#"+newLineId+" #produtos_clone").attr("id","produtos_"+newLineId).attr("name","produtos_"+newLineId+"[]");
                    $("#"+newLineId+" #tr_produtos_clone").attr("id","tr_produtos_"+newLineId);
                    $("#"+newLineId+" #tr_produtos_clone_inv").attr("id","tr_produtos_"+newLineId+"_inv");
                    $("#"+newLineId+" #nrClone").val(newLineId);

					dataPicker = newLine.find(".data").datepicker({format:'dd/mm/yyyy'}).on('changeDate', function(ev){
						dataPicker.datepicker('hide');
						dataPicker.blur();
						verificaData(this);
					});
				});

				$(".lineRemove").live("click",function(){

					slices = $(this).attr("id");
                    slices = slices.split("_");
                    $("#"+slices[1]).remove();

				});

				$(".lineCloneProduto").live("click",function(){

					invLine = $(this).attr("id")+"_inv";

					newLine = $("#"+invLine).clone();

					numPossibilidades = 90231290523432 - 1
					aleat = Math.random() * numPossibilidades
					aleat = Math.floor(aleat)

					newLineId = "produtoClone"+parseInt(1) + aleat;

					newLine.attr("style","");
					newLine.attr("id",newLineId);
					newLine.appendTo("#tbody_"+$(this).attr("id"));

					$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_"+$(this).attr("id"));

				});

                $(".lineRemoveProduto").live("click",function(){

                    slices = $(this).attr("id");
                    slices = slices.split("_");
                    $("#"+slices[1]).remove();

                });

			});
		</script>

        <div class="content">
        	<ul class="breadcrumb">
                <li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/oportunidades/listarOportunidade.php">Oportunidades</a> <span class="divider">/</span></li>
                <li class="active">Nova Oportunidade</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Nova Oportunidade</h1>
                </div>
                <form name="gravarProposta" method="post" action="<?php echo $urlOportunidades;?>/action/crudOportunidade.php?op=novo">
                    <h4>Informações Básicas</h4>
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="status" name="status">
                                <option value="">Escolha o status:</option>
                                <option value="1">Oportunidade</option>
                                <option value="2">Aprovada</option>
                                <option value="3">Recusada</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="jaCliente" name="jaCliente" onchange="verificaJaCliente(this);">
                                <option value="">Já é cliente?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <select class="span4" id="clientes" name="clientes" style="display:none;" onchange="carregaComboDependente('contatos','',this)">
                                <option value="">Escolha a empresa:</option>
                            </select>
                        </div>
                    </div>

                    <div id="novoCliente" class="boxExtra" style="margin-bottom:10px; display:none;">
                        <h4>Novo Cliente</h4>
                        <div class="row">
                            <div class="span10">
                                <input type="text" class="span3" id="nome" name="nome" placeholder="Nome da Empresa">
                                <input type="text" class="span3" id="cnpj" name="cnpj" placeholder="CNPJ">
                                <input type="text" class="span3" id="razaoSocial" name="razaoSocial" placeholder="Razão Social">
                                <input type="text" class="span3" id="inscMunicipal" name="inscMunicipal" placeholder="Inscrição Comercial">
                                <input type="text" class="span3" id="inscEstadual" name="inscEstadual" placeholder="Inscrição Municipal">
                                <br>
                                <input type="text" class="span5" id="endereco" name="endereco" placeholder="Endereço Completo">
                                <input type="text" class="span4" id="complemento" name="complemento" placeholder="Complemento">
                                <br>
                                <input type="text" class="span4" id="cidade" name="cidade" placeholder="Cidade">
                                <select name="estado" id="estado" class="span2">
                                    <option value="">Estado:</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RO">RO</option>
                                    <option value="RS">RS</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                                <input type="text" class="span3" id="cep" name="cep" placeholder="CEP">
                            </div>
                        </div>
                        <h4>Responsável Financeiro</h4>
                        <div class="row">
                            <div class="span10">
                                <input type="text" class="span3" id="nomeResponsavel" name="nomeResponsavel" placeholder="Primeiro Nome">
                                <input type="text" class="span4" id="sobrenomeResponsavel" name="sobrenomeResponsavel" placeholder="Sobrenome">
                                <br>
                                <input type="text" class="span3" id="emailResponsavel" name="emailResponsavel" placeholder="E-mail">
                                <input type="text" class="span2" id="telefoneResponsavel" name="telefoneResponsavel" placeholder="Telefone Comercial">
                                <input type="text" class="span2" id="celularResponsavel" name="celularResponsavel" placeholder="Celular">
                            </div>
                        </div>
                        <h4>Vincular a outra empresa</h4>
                        <div class="row">
                            <div class="span10">
                                <select class="span6" id="clientesCadastrados" name="clientesCadastrados">
                                    <option value="">Escolha a empresa:</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="jaContato" name="jaContato" onchange="verificaJaContato(this);">
                                <option value="">Já é contato?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <select class="span4" id="contatos" name="contatos" style="display:none;">
                                <option value="">Escolha o contato:</option>
                            </select>
                        </div>
                    </div>

                    <div id="novoContato" class="boxExtra" style="display:none;">
                    	<h4>Novo Contato</h4>
                    	<div class="row">
                            <div class="span10">
                                <input type="text" class="span3" id="nomeContato" name="nomeContato" placeholder="Primeiro Nome">
                                <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato" placeholder="Sobrenome">
                                <br>
                                <input type="text" class="span3" id="emailContato" name="emailContato" placeholder="E-mail">
                                <input type="text" class="span2" id="telefoneContato" name="telefoneContato" placeholder="Telefone Comercial">
                                <input type="text" class="span2" id="celularContato" name="celularContato" placeholder="Celular">
                            </div>
                        </div>
                    </div>

                    <br>
                    <h4>Briefing</h4>
                    <table id="tbody_tr_reserva">
                        <tr id="primeiraReserva">
                        	<td>
                            	<div class="row">
                                    <div class="span10">
                                        <select class="span6 unidade" id="unidade" name="unidade[]" onchange="verificaUnidade(this)">
                                            <option value="">Escolha a Unidade:</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <input type="text" class="span6 data" id="data" name="data[]" placeholder="Data do treinamento" style="display:none;">
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="span10">
                                        <select class="span6" id="periodo" name="periodo[]" style="display:none;" onchange="verificaPeriodo(this)">
                                            <option value="">Escolha o período:</option>
                                            <option value="1">Manhã</option>
                                            <option value="2">Tarde</option>
                                            <option value="3">Noite</option>
                                            <option value="4">Integral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" id="rowSala" style="display:none">
                                    <div class="span10">
                                        <select class="span4" id="salas" name="salas[]" onchange="verificaSala(this)">
                                            <option value="">Salas disponíveis:</option>
                                        </select>
                                        <select class="span4 detalhesSala" id="formatoSala" name="formatoSala[]" style="display:none;" onchange="verificaFormatoSala(this)">
                                            <option value="">Formato da Sala:</option>
                                            <option value="1">"U" com mesa</option>
                                            <option value="2">"U" simples</option>
                                            <option value="3">Grupos</option>
                                            <option value="4">Escolar</option>
                                            <option value="5">Auditório</option>
                                        </select>
                                        <input type="text" class="span2 detalhesSala" id="qtdeParticipantes" name="qtdeParticipantes[]" placeholder="Qtde. Participantes" style="display:none;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="coffee" name="coffee[]" onchange="verificaCoffee(this)">
                                            <option value="">Coffee Break?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <select class="span3 tipoCoffee detalhesCoffe" style="display:none;" id="tipoCoffee" name="tipoCoffee[]">
                                            <option value="">Qual Coffee?</option>
                                        </select>
                                        <input type="text" class="span2 detalhesCoffe" style="display:none;" id="qtdeCoffee" name="qtdeCoffee[]" placeholder="Qtde. Pessoas">
                                        <select class="span3 detalhesCoffe" style="display:none;" id="periodoCoffee" name="periodoCoffee[]">
                                            <option value="">Período Coffee?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="cafe" name="cafe[]" onchange="verificaCafe(this)">
                                            <option value="">Jarras de Café?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <input type="text" class="span2 detalhesCafe" style="display:none;" id="qtdeCafe" name="qtdeCafe[]" placeholder="Quantidade">
                                        <select class="span3 detalhesCafe" style="display:none;" id="periodoCafe" name="periodoCafe[]">
                                            <option value="">Período Café?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="agua" name="agua[]" onchange="verificaAgua(this)">
                                            <option value="">Água?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <input type="text" class="span2 detalhesAgua" style="display:none;" id="qtdeAgua" name="qtdeAgua[]" placeholder="Quantidade">
                                        <select class="span3 detalhesAgua" style="display:none;" id="periodoAgua" name="periodoAgua[]">
                                            <option value="">Período Água?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                    	<table id="tbody_tr_produtos_clone1">
                                            <tr id="produtoClone1">
                                            	<td>
                                                    <select class="span3 tipoProduto" id="tipoProduto_clone1" name="tipoProduto_clone1[]" onchange="verificaTipoProduto(this);">
                                                        <option value="">Tipos de Produto</option>
                                                    </select>
                                                    <div class="input-append">
                                                        <select class="span3" id="produtos_clone1" name="produtos_clone1[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <input type="button" id="tr_produtos_clone1" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="tr_produtos_clone1_inv" style="display: none;">
                        						<td>
                                                	<select class="span3 tipoProduto" id="tipoProduto_clone1" name="tipoProduto_clone1[]" onchange="verificaTipoProduto(this);">
                                                        <option value="">Tipos de Produto</option>
                                                    </select>
                                                    <div class="input-append">
                                                        <select class="span3" id="produtos_clone1" name="produtos_clone1[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <input type="button" class="btn btn-danger lineRemoveProduto" value="Remover Produto" />
                                                    </div>
                                              	</td>
                                             </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <textarea class="span6" id="obsCoffee" name="obsCoffee[]" placeholder="Observações do Coffee"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <textarea class="span6" id="observacoes" name="observacoes[]" placeholder="Observações da Reserva"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <input type="button" id="tr_reserva" class="btn btn-success lineClone" value="Adicionar nova data a proposta" />
                                        <input type="hidden" id="nrClone" name="nrClone[]" value="clone1" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr id="tr_reserva_inv" style="display: none;">
                        	<td>
                            	<div class="row" style="margin-top:15px;">
                                    <div class="span10">
                                        <select class="span6 unidade" id="unidade" name="unidade[]" onchange="verificaUnidade(this)">
                                            <option value="">Escolha a Unidade:</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <input type="text" class="span6 data" id="data" name="data[]" placeholder="Data do treinamento" style="display:none;">
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="span10">
                                        <select class="span6" id="periodo" name="periodo[]" style="display:none;" onchange="verificaPeriodo(this)">
                                            <option value="">Escolha o período:</option>
                                            <option value="1">Manhã</option>
                                            <option value="2">Tarde</option>
                                            <option value="3">Noite</option>
                                            <option value="4">Integral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row" id="rowSala" style="display:none">
                                    <div class="span10">
                                        <select class="span4" id="salas" name="salas[]" onchange="verificaSala(this)">
                                            <option value="">Salas disponíveis:</option>
                                        </select>
                                        <select class="span4 detalhesSala" id="formatoSala" name="formatoSala[]" style="display:none;" onchange="verificaFormatoSala(this)">
                                            <option value="">Formato da Sala:</option>
                                            <option value="1">"U" com mesa</option>
                                            <option value="2">"U" simples</option>
                                            <option value="3">Grupos</option>
                                            <option value="4">Escolar</option>
                                            <option value="5">Auditório</option>
                                        </select>
                                        <input type="text" class="span2 detalhesSala" id="qtdeParticipantes" name="qtdeParticipantes[]" placeholder="Qtde. Participantes" style="display:none;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="coffee" name="coffee[]" onchange="verificaCoffee(this)">
                                            <option value="">Coffee Break?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <select class="span3 tipoCoffee detalhesCoffe" style="display:none;" id="tipoCoffee" name="tipoCoffee[]">
                                            <option value="">Qual Coffee?</option>
                                        </select>
                                        <input type="text" class="span2 detalhesCoffe" style="display:none;" id="qtdeCoffee" name="qtdeCoffee[]" placeholder="Qtde. Pessoas">
                                        <select class="span3 detalhesCoffe" style="display:none;" id="periodoCoffee" name="periodoCoffee[]">
                                            <option value="">Período Coffee?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="cafe" name="cafe[]" onchange="verificaCafe(this)">
                                            <option value="">Jarras de Café?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <input type="text" class="span2 detalhesCafe" style="display:none;" id="qtdeCafe" name="qtdeCafe[]" placeholder="Quantidade">
                                        <select class="span3 detalhesCafe" style="display:none;" id="periodoCafe" name="periodoCafe[]">
                                            <option value="">Período Café?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="agua" name="agua[]" onchange="verificaAgua(this)">
                                            <option value="">Água?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <input type="text" class="span2 detalhesAgua" style="display:none;" id="qtdeAgua" name="qtdeAgua[]" placeholder="Quantidade">
                                        <select class="span3 detalhesAgua" style="display:none;" id="periodoAgua" name="periodoAgua[]">
                                            <option value="">Período Água?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                    	<table id="tbody_tr_produtos_clone">
                                            <tr id="produtoClone">
                                            	<td>
                                                    <select class="span3 tipoProduto" id="tipoProduto_clone" name="tipoProduto_clone[]" onchange="verificaTipoProduto(this);">
                                                        <option value="">Tipos de Produto</option>
                                                    </select>
                                                    <div class="input-append">
                                                        <select class="span3" id="produtos_clone" name="produtos_clone[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <input type="button" id="tr_produtos_clone" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="tr_produtos_clone_inv" style="display: none;">
                        						<td>
                                                	<select class="span3 tipoProduto" id="tipoProduto_clone" name="tipoProduto_clone[]" onchange="verificaTipoProduto(this);">
                                                        <option value="">Tipos de Produto</option>
                                                    </select>
                                                    <div class="input-append">
                                                        <select class="span3" id="produtos_clone" name="produtos_clone[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <input type="button" class="btn btn-danger lineRemoveProduto" value="Remover Produto" />
                                                    </div>
                                              	</td>
                                             </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <textarea class="span6" id="obsCoffee" name="obsCoffee[]" placeholder="Observações do Coffee"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <textarea class="span6" id="observacoes" name="observacoes[]" placeholder="Observações da Reserva"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <input type="button" class="btn btn-danger lineRemove" value="Remover data" />
                                        <input type="hidden" id="nrClone" name="nrClone[]" />
                                    </div>
                                </div>
                            </td>
                    	</tr>
                    </table>
                 	<br>
                    <input type="button" onclick="validaProposta('novo')" class="btn btn-info btn-large" value="Aplicar" />
                    <input type="submit" class="btn btn-success btn-large" value="Salvar e Fechar" />
                </form>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>