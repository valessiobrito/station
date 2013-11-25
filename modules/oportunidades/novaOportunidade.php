<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Adicionar Oportunidade";
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
                carregaComboClone('tipoCoffeeBriefing','');
				carregaComboClone('tipoProduto','');

				$("#status").val("1");

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
                    $("#"+newLineId+" #rm_produtoClone_tr_produtos_clone").attr("id","rm_produtoClone"+newLineNr+"_tr_produtos_"+newLineId);
                    $("#"+newLineId+" #tipoProduto_clone").attr("id","tipoProduto_"+newLineId).attr("name","tipoProduto_"+newLineId+"[]");
                    $("#"+newLineId+" #produtos_clone").attr("id","produtos_"+newLineId).attr("name","produtos_"+newLineId+"[]");
                    $("#"+newLineId+" #quantidadeProduto_clone").attr("id","quantidadeProduto_"+newLineId).attr("name","quantidadeProduto_"+newLineId+"[]");
                    $("#"+newLineId+" #tr_produtos_clone").attr("id","tr_produtos_"+newLineId);
                    $("#"+newLineId+" #tr_produtos_clone_inv").attr("id","tr_produtos_"+newLineId+"_inv");
                    $("#"+newLineId+" #show_clone").attr("id","show_"+newLineId);
                    $("#"+newLineId+" #min_clone").attr("id","min_"+newLineId);
                    $("#"+newLineId+" #nrClone").val(newLineId);

					dataPicker = newLine.find(".data").datepicker({format:'dd/mm/yyyy'}).on('changeDate', function(ev){
						dataPicker.datepicker('hide');
						dataPicker.blur();
						verificaData(this);
					});

                    copiaBriefing(newLineId);

                    trParentId = $(this).closest("tr").attr("id");
                    minimizarReserva($("#"+trParentId+" .minReserva"));
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
					newLine.attr("class","");
					newLine.attr("id",newLineId);
					newLine.appendTo("#tbody_"+$(this).attr("id"));

					$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_"+$(this).attr("id"));

				});

                $(".lineRemoveProduto").live("click",function(){

                    slices = $(this).attr("id");
                    slices = slices.split("_");
                    nrLinhas = $('#tbody_'+slices[2]+'_'+slices[3]+'_'+slices[4]+' tr').length;
                    if(nrLinhas > 2){
                        $("#"+slices[1]).remove();
                    }

                });

                $(".minReserva").live("click",function(){
                    minimizarReserva(this);
                });

                $(".showData").live("click",function(){
                    slices = $(this).attr("id");
                    slices = slices.split("_");
                    $("#"+slices[1]+" td:eq(0)").hide();
                    $("#"+slices[1]+" td:eq(1)").show("slow");
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
                <form name="gravarOportunidade" method="post" action="<?php echo $urlOportunidades;?>/action/crudOportunidade.php?op=novo">
                    <h4>Informações Básicas</h4>
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="status" name="status">
                                <option value="">Escolha o status:</option>
                                <option value="1">Oportunidade</option>
                                <option value="2">Aprovada</option>
                                <option value="3">Recusada</option>
                                <option value="4">Vencida</option>
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

<!-- Inicio Briefing -->
                    <br>
                    <h4>Briefing</h4>
                    <input type="text" class="span2 qtdeParticipantesBriefing" id="qtdeParticipantesBriefing" name="qtdeParticipantesBriefing" placeholder="Qtde. Participantes">
                    <div class="row">
                        <div class="span10">
                            <select class="span6 unidade" id="unidadeBriefing" name="unidadeBriefing" onchange="verificaUnidadeBriefing(this)">
                                <option value="">Escolha a Unidade:</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="periodoBriefing" name="periodoBriefing" style="display:none;" onchange="verificaPeriodoBriefing()">
                                <option value="">Período preferencial:</option>
                                <option value="1">Manhã</option>
                                <option value="2">Tarde</option>
                                <option value="3">Noite</option>
                                <option value="4">Integral</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="rowSalaBriefing" style="display:none">
                        <div class="span10">
                            <select class="span4" id="salasBriefing" name="salasBriefing">
                                <option value="">Sala preferencial:</option>
                            </select>
                            <select class="span2" id="formatoSalaBriefing" name="formatoSalaBriefing" style="display:none;">
                                <option value="">Formato da Sala:</option>
                                <option value="1">"U" com mesa</option>
                                <option value="2">"U" simples</option>
                                <option value="3">Grupos</option>
                                <option value="4">Escolar</option>
                                <option value="5">Auditório</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="coffeeBriefing" name="coffeeBriefing" onchange="verificaCoffeeBriefing(this)">
                                <option value="">Coffee Break?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <select class="span3 tipoCoffeeBriefing detalhesCoffeBriefing" style="display:none;" id="tipoCoffeeBriefing" name="tipoCoffeeBriefing">
                                <option value="">Qual Coffee?</option>
                            </select>
                            <input type="text" class="span2 detalhesCoffeBriefing" style="display:none;" id="qtdeCoffeeBriefing" name="qtdeCoffeeBriefing" placeholder="Qtde. Pessoas">
                            <select class="span3 detalhesCoffeBriefing" style="display:none;" id="periodoCoffeeBriefing" name="periodoCoffeeBriefing">
                                <option value="">Período Coffee?</option>
                                <option value="1">Apenas Manhã</option>
                                <option value="2">Apenas Tarde</option>
                                <option value="3">Manhã e Tarde</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="cafeBriefing" name="cafeBriefing" onchange="verificaCafeBriefing(this)">
                                <option value="">Jarras de Café?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <input type="text" class="span2 detalhesCafeBriefing" style="display:none;" id="qtdeCafeBriefing" name="qtdeCafeBriefing" placeholder="Quantidade">
                            <select class="span3 detalhesCafeBriefing" style="display:none;" id="periodoCafeBriefing" name="periodoCafeBriefing">
                                <option value="">Período Café?</option>
                                <option value="1">Apenas Manhã</option>
                                <option value="2">Apenas Tarde</option>
                                <option value="3">Manhã e Tarde</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="aguaBriefing" name="aguaBriefing" onchange="verificaAguaBriefing(this)">
                                <option value="">Água?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <input type="text" class="span2 detalhesAguaBriefing" style="display:none;" id="qtdeAguaBriefing" name="qtdeAguaBriefing" placeholder="Quantidade">
                            <select class="span3 detalhesAguaBriefing" style="display:none;" id="periodoAguaBriefing" name="periodoAguaBriefing">
                                <option value="">Período Água?</option>
                                <option value="1">Apenas Manhã</option>
                                <option value="2">Apenas Tarde</option>
                                <option value="3">Manhã e Tarde</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <table id="tbody_tr_produtos_cloneBriefing">
                                <tr id="produtoCloneBriefing">
                                    <td>
                                        <select class="span3 tipoProduto" id="tipoProduto_cloneBriefing" name="tipoProduto_cloneBriefing[]" onchange="verificaTipoProduto(this);">
                                            <option value="">Tipos de Produto</option>
                                        </select>
                                        <select class="span3 produtos" id="produtos_cloneBriefing" name="produtos_cloneBriefing[]">
                                            <option value="">Produtos</option>
                                        </select>

                                        <div class="input-append">
                                            <input type="text" class="span2 quantidadeProduto" id="quantidadeProduto_cloneBriefing" name="quantidadeProduto_cloneBriefing[]" placeholder="Quantidade" />
                                            <input type="button" id="tr_produtos_cloneBriefing" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
                                            <input type="button" class="btn btn-danger lineRemoveProduto" value="Remover Produto" id="rm_produtoCloneBriefing_tr_produtos_cloneBriefing" />
                                        </div>
                                    </td>
                                </tr>
                                <tr id="tr_produtos_cloneBriefing_inv" style="display: none;" class="cloneInv">
                                    <td>
                                        <select class="span3 tipoProduto" id="tipoProduto_cloneBriefing" name="tipoProduto_cloneBriefing[]" onchange="verificaTipoProduto(this);">
                                            <option value="">Tipos de Produto</option>
                                        </select>
                                        <select class="span3 produtos" id="produtos_cloneBriefing" name="produtos_cloneBriefing[]">
                                            <option value="">Produtos</option>
                                        </select>
                                        <div class="input-append">
                                            <input type="text" class="span2 quantidadeProduto" id="quantidadeProduto_cloneBriefing" name="quantidadeProduto_cloneBriefing[]" placeholder="Quantidade" />
                                            <input type="button" id="tr_produtos_cloneBriefing" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
                                            <input type="button" class="btn btn-danger lineRemoveProduto" value="Remover Produto" />
                                        </div>
                                    </td>
                                 </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <textarea class="span6" id="obsCoffeeBriefing" name="obsCoffeeBriefing" placeholder="Observações do Coffee"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <textarea class="span6" id="observacoesBriefing" name="observacoesBriefing" placeholder="Observações do Briefing"></textarea>
                        </div>
                    </div>
                    <br>
                    <h4>Agenda</h4>
                    <div class="row">
                        <div class="span10">
                            <select class="span3" id="criarAgenda" name="criarAgenda" onchange="verificaCriarAgenda(this)">
                                <option value="">Criar agenda agora?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                        </div>
                    </div>

<!-- Inicio Agenda -->
                    <div id="agendaReservas" style="display:none;">
                        <table id="tbody_tr_reserva">
                            <tr id="primeiraReserva">
                                <td style="display:none;">
                                    <div class="row showData" id="show_primeiraReserva"><h5>+ Data</h5></div>
                                </td>
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
                                            <select class="span6" id="periodo" name="periodo[]" style="display:none;" onchange="verificaPeriodo(this,'0')">
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
                                            <select class="span2 detalhesSala" id="formatoSala" name="formatoSala[]" style="display:none;" onchange="verificaFormatoSala(this)">
                                                <option value="">Formato da Sala:</option>
                                                <option value="1">"U" com mesa</option>
                                                <option value="2">"U" simples</option>
                                                <option value="3">Grupos</option>
                                                <option value="4">Escolar</option>
                                                <option value="5">Auditório</option>
                                            </select>
                                            <input type="text" class="span2 detalhesSala" id="capSala" name="capSala[]" placeholder="Cap. Sala" style="display:none;" readonly>
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
                                        <div class="span12">
                                        	<table id="tbody_tr_produtos_clone1">
                                                <tr id="produtoClone1">
                                                	<td>
                                                        <select class="span3 tipoProduto" id="tipoProduto_clone1" name="tipoProduto_clone1[]" onchange="verificaTipoProduto(this);">
                                                            <option value="">Tipos de Produto</option>
                                                        </select>
                                                        <select class="span3 produtos" id="produtos_clone1" name="produtos_clone1[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <div class="input-append">
                                                            <input type="text" class="span2 quantidadeProduto" id="quantidadeProduto_clone1" name="quantidadeProduto_clone1[]" placeholder="Quantidade" />
                                                            <input type="button" id="tr_produtos_clone1" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
                                                            <input type="button" class="btn btn-danger lineRemoveProduto" value="Remover Produto" id="rm_produtoClone1_tr_produtos_clone1" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="tr_produtos_clone1_inv" style="display: none;" class="cloneInv">
                            						<td>
                                                    	<select class="span3 tipoProduto" id="tipoProduto_clone1" name="tipoProduto_clone1[]" onchange="verificaTipoProduto(this);">
                                                            <option value="">Tipos de Produto</option>
                                                        </select>
                                                        <select class="span3 produtos" id="produtos_clone1" name="produtos_clone1[]">
                                                            <option value="">Produtos</option>
                                                        </select>

                                                        <div class="input-append">
                                                            <input type="text" class="span2 quantidadeProduto" id="quantidadeProduto_clone1" name="quantidadeProduto_clone1[]" placeholder="Quantidade" />
                                                            <input type="button" id="tr_produtos_clone1" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
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
                                            <textarea class="span6" id="obsBriefing" name="obsBriefing[]" placeholder="Observações do Briefing"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span10">
                                            <textarea class="span6" id="observacoes" name="observacoes[]" placeholder="Observações da Data"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span10">
                                            <div class="input-append">
                                                <input type="button" id="tr_reserva" class="btn btn-success lineClone" value="Adicionar nova data a proposta" />
                                                <input type="button" id="min_primeiraReserva" class="btn btn-info minReserva" value="Minimizar data" />
                                            </div>
                                            <input type="hidden" id="nrClone" name="nrClone[]" value="clone1" />
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr id="tr_reserva_inv" style="display: none;" class="cloneInv">
                                <td style="display:none;">
                                    <div class="row showData" id="show_clone"><h5>+ Data</h5></div>
                                </td>
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
                                            <select class="span6" id="periodo" name="periodo[]" style="display:none;" onchange="verificaPeriodo(this,'0')">
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
                                            <select class="span2 detalhesSala" id="formatoSala" name="formatoSala[]" style="display:none;" onchange="verificaFormatoSala(this)">
                                                <option value="">Formato da Sala:</option>
                                                <option value="1">"U" com mesa</option>
                                                <option value="2">"U" simples</option>
                                                <option value="3">Grupos</option>
                                                <option value="4">Escolar</option>
                                                <option value="5">Auditório</option>
                                            </select>
                                            <input type="text" class="span2 detalhesSala" id="capSala" name="capSala[]" placeholder="Cap. Sala" style="display:none;" readonly>
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
                                        <div class="span12">
                                        	<table id="tbody_tr_produtos_clone">
                                                <tr id="produtoClone">
                                                	<td>
                                                        <select class="span3 tipoProduto" id="tipoProduto_clone" name="tipoProduto_clone[]" onchange="verificaTipoProduto(this);">
                                                            <option value="">Tipos de Produto</option>
                                                        </select>
                                                        <select class="span3 produtos" id="produtos_clone" name="produtos_clone[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <div class="input-append">
                                                            <input type="text" class="span2 quantidadeProduto" id="quantidadeProduto_clone" name="quantidadeProduto_clone[]" placeholder="Quantidade" />
                                                            <input type="button" id="tr_produtos_clone" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
                                                            <input type="button" class="btn btn-danger lineRemoveProduto" value="Remover Produto" id="rm_produtoClone_tr_produtos_clone" />
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="tr_produtos_clone_inv" style="display: none;" class="cloneInv">
                            						<td>
                                                    	<select class="span3 tipoProduto" id="tipoProduto_clone" name="tipoProduto_clone[]" onchange="verificaTipoProduto(this);">
                                                            <option value="">Tipos de Produto</option>
                                                        </select>
                                                        <select class="span3 produtos" id="produtos_clone" name="produtos_clone[]">
                                                            <option value="">Produtos</option>
                                                        </select>
                                                        <div class="input-append">
                                                            <input type="text" class="span2 quantidadeProduto" id="quantidadeProduto_clone" name="quantidadeProduto_clone[]" placeholder="Quantidade" />
                                                            <input type="button" id="tr_produtos_clone" class="btn btn-success lineCloneProduto" value="Adicionar Mais" />
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
                                            <textarea class="span6" id="obsBriefing" name="obsBriefing[]" placeholder="Observações do Briefing"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span10">
                                            <textarea class="span6" id="observacoes" name="observacoes[]" placeholder="Observações da Data"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span10">
                                            <div class="input-append">
                                                <input type="button" id="tr_reserva" class="btn btn-success lineClone" value="Adicionar nova data a proposta" />
                                                <input type="button" class="btn btn-danger lineRemove" value="Remover data" />
                                                <input type="button" id="min_clone" class="btn btn-info minReserva" value="Minimizar data" />
                                            </div>
                                            <input type="hidden" id="nrClone" name="nrClone[]" />
                                        </div>
                                    </div>
                                </td>
                        	</tr>
                        </table>
                    </div>
                 	<br>
                    <input type="hidden" id="modSalvar" name="modSalvar" value="salvar" />
                    <input type="button" onclick="validaOportunidade('aplicar')" class="btn btn-info btn-large" value="Aplicar" />
                    <input type="button" onclick="validaOportunidade('novo')" class="btn btn-success btn-large" value="Salvar e Fechar" />
                </form>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>