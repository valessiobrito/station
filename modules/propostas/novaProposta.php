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
				carregaCombo('clientesCadastrados','');
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
                <li><a href="/agenda/modules/propostas/listarProposta.php">Propostas</a> <span class="divider">/</span></li>
                <li class="active">Nova Proposta</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Nova Proposta</h1>
                </div>
                <form name="gravarProposta" method="post" action="<?php echo $urlPropostas;?>/action/crudProposta.php?op=novo">
                    <h4>Informações Básicas</h4>
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="status" name="status">
                                <option value="">Escolha o status:</option>
                                <option value="1">Em aberto</option>
                                <option value="2">Fechada</option>
                                <option value="3">Recusada</option>
                            </select>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="jaCliente" name="jaCliente">
                                <option value="">Já é cliente?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <select class="span4" id="clientes" name="clientes">
                                <option value="">Escolha a empresa:</option>
                            </select>
                        </div>                        
                    </div>
                    
                    <div id="novoCliente" class="boxExtra" style="margin-bottom:10px;">
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
                                <select class="span6" id="clientes" name="clientes">
                                    <option value="">Escolha a empresa:</option>
                                </select>
                            </div>                        
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="span10">
                            <select class="span2" id="jaContato" name="jaContato">
                                <option value="">Já é contato?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                            <select class="span4" id="contato" name="contato">
                                <option value="">Escolha o contato:</option>
                            </select>
                        </div>                        
                    </div>
                    
                    <div id="novoContato" class="boxExtra">
                    	<h4>Novo Contato</h4>
                    	<div class="row">
                            <div class="span10">
                                <input type="text" class="span3" id="nomeContato" name="nomeContato[]" placeholder="Primeiro Nome">
                                <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato[]" placeholder="Sobrenome">
                                <br>
                                <input type="text" class="span3" id="emailContato" name="emailContato[]" placeholder="E-mail">
                                <input type="text" class="span2" id="telefoneContato" name="telefoneContato[]" placeholder="Telefone Comercial">
                                <input type="text" class="span2" id="celularContato" name="celularContato[]" placeholder="Celular">
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <h4>Briefing</h4>
                    <table id="tbody_tr_briefing">
                        <tr id="2">
                        	<td>
                            	<div class="row">
                                    <div class="span10">
                                        <select class="span6" id="unidades" name="unidades">
                                            <option value="">Escolha a Unidade:</option>
                                        </select>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <input type="text" class="span6" id="data" name="data" placeholder="Data do treinamento">
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="span10">
                                        <select class="span6" id="periodo" name="periodo">
                                            <option value="">Escolha o período:</option>
                                            <option value="1">Manhã</option>
                                            <option value="2">Tarde</option>
                                            <option value="3">Noite</option>
                                            <option value="4">Integral</option>
                                        </select>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span4" id="salas" name="salas">
                                            <option value="">Escolha a Sala:</option>
                                        </select>
                                        <input type="text" class="span2" id="qtdeParticipantes" name="qtdeParticipantes" placeholder="Qtde. Participantes">
                                        <input type="text" class="span2" id="formatoSala" name="formatoSala" placeholder="Formato da Sala">
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="coffee" name="coffee">
                                            <option value="">Coffee Break?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <select class="span3" id="tipoCoffee" name="tipoCoffee">
                                            <option value="">Qual Coffee?</option>
                                        </select>
                                        <input type="text" class="span2" id="qtdeCoffee" name="qtdeCoffee" placeholder="Qtde. Pessoas">
                                        <select class="span3" id="periodoCoffee" name="periodoCoffee">
                                            <option value="">Período Coffee?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="cafe" name="cafe">
                                            <option value="">Jarras de Café?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <input type="text" class="span2" id="qtdeCafe" name="qtdeCafe" placeholder="Quantidade">
                                        <select class="span3" id="periodoCafe" name="periodoCafe">
                                            <option value="">Período Café?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <select class="span2" id="agua" name="agua">
                                            <option value="">Água?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <input type="text" class="span2" id="qtdeAgua" name="qtdeAgua" placeholder="Quantidade">
                                        <select class="span3" id="periodoAgua" name="periodoAgua">
                                            <option value="">Período Água?</option>
                                            <option value="1">Apenas Manhã</option>
                                            <option value="2">Apenas Tarde</option>
                                            <option value="3">Manhã e Tarde</option>
                                        </select>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                    	<div class="input-append">
                                            <select class="span3" id="equipamentos" name="equipamentos">
                                                <option value="">Equipamentos</option>
                                            </select>
                                            <input type="button" onclick="adicionaEquipamento()" class="btn btn-success" value="Adicionar Mais" />
                                        </div>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="span10">
                                        <input type="button" onclick="adicionarData()" class="btn btn-success" value="Adicionar nova data a proposta" />
                                    </div>                        
                                </div>
                                <br>
                                <div class="row">
                                    <div class="span10">
                                        <textarea class="span6" id="observacoes" name="observacoes" placeholder="Observações Proposta"></textarea>
                                    </div>                        
                                </div>
                            </td>
                        </tr>
                        <tr id="tr_produto_inv" style="display: none;">
                        	<td>
                                
                            </td>
                    	</tr>
                    </table>
                 	<br>
                    <input type="button" onclick="validaProposta('novo')" class="btn btn-info btn-large" value="Salvar" />
                </form>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}	
?>