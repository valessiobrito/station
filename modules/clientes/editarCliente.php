<?php
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

if ($_SESSION['LogadoSTATION'] != "1" && (isset($_GET['id']) && $_GET['id'] > 0)){
	header("Location: index.php");
}else{
    
    $clienteController = new ClienteController();
    $cliente = $clienteController->listAction($_GET['id'] , 1);
    
    if (count($cliente) == 0){
        header("Location: ".$urlClientes."/listarCliente.php");
    }
	
    $clienteClass = new Cliente();
    $clienteClass->fetchEntity($cliente[1]);
	$title = "Editar Cliente/Contatos";

?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>

<script>
	$(document).ready(function(){
		carregaCombo('clientes','<?php echo $clienteClass->getIdPai(); ?>');
		
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
		
		$(".lineRemoveExistente").live("click",function(){
			
			slices = $(this).attr("id");
			slices = slices.split("_");
			
			if ($("#tbody_"+slices[2]+"_"+slices[3]+" tr").length > 2){
				$("#"+slices[1]).remove();
			}
			
			$('#lastRow').append('<input type="hidden" id="ce" name="ce[]" value="'+slices[1]+'" />');
			
		});
	});	
</script>

<div class="content">
			<ul class="breadcrumb">
				<li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/clientes/listarCliente.php">Clientes e Contatos</a> <span class="divider">/</span></li>
				<li class="active">Editar Cliente</li>
			</ul>
			<div class="span10">
				<div class="page-header">
					<h1>Editar Cliente</h1>
				</div>
                <form name="gravarCliente" method="post" action="<?php echo $urlClientes;?>/action/crudCliente.php?op=editar">
                    <h4>Contatos</h4>
                    <table id="tbody_tr_contato">
                    	<?php
							$contatosController = new ContatoController();
    						$contatos = $contatosController->listAction($_GET['id']);
							foreach($contatos as $contato){
						?>
                    	<tr id="<?php echo $contato['contato_cliente_10_id']; ?>">
                        	<td>
                                <div class="row">
                                    <div class="span10" style="margin-bottom:20px;">
                                        <input type="text" class="span3" id="nomeContato" name="nomeContato[]" placeholder="Primeiro Nome" value="<?php echo $contato['contato_cliente_30_nome']; ?>">
                                        <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato[]" placeholder="Sobrenome" value="<?php echo $contato['contato_cliente_30_sobrenome']; ?>">
                                        <br>
                                        <input type="text" class="span3" id="emailContato" name="emailContato[]" placeholder="E-mail" value="<?php echo $contato['contato_cliente_30_email']; ?>">
                                        <input type="text" class="span2" id="telefoneContato" name="telefoneContato[]" placeholder="Telefone Comercial" value="<?php echo $contato['contato_cliente_30_telefone']; ?>">
                                        <input type="text" class="span2" id="celularContato" name="celularContato[]" placeholder="Celular" value="<?php echo $contato['contato_cliente_30_celular']; ?>">
                                        <input type="hidden" id="edicao" name="edicao[]" value="<?php echo $contato['contato_cliente_10_id']; ?>">
                                        <button type="button" class="btn btn-danger lineRemoveExistente" id="rm_<?php echo $contato['contato_cliente_10_id']; ?>_tr_contato">Deletar</button>
                                    </div>
                                </div>
                            </td>
                    	</tr>
                        <?php
							}
						?>
                        <tr id="original">
                        	<td>
                                <div class="row">
                                    <div class="span10" style="margin-bottom:20px;">
                                        <input type="text" class="span3" id="nomeContato" name="nomeContato[]" placeholder="Primeiro Nome">
                                        <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato[]" placeholder="Sobrenome">
                                        <br>
                                        <input type="text" class="span3" id="emailContato" name="emailContato[]" placeholder="E-mail">
                                        <input type="text" class="span2" id="telefoneContato" name="telefoneContato[]" placeholder="Telefone Comercial">
                                        <input type="text" class="span2" id="celularContato" name="celularContato[]" placeholder="Celular">
                                        <input type="hidden" id="edicao" name="edicao[]" value="0">
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
                                        <input type="hidden" id="edicao" name="edicao[]" value="0">
                                        <button type="button" class="btn btn-danger lineRemove">Deletar</button>
                                    </div>
                                </div>
                            </td>
                    	</tr>
                    </table>
                 	<br>
                    <h4>Informações da Empresa</h4>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span3" id="nome" name="nome" placeholder="Nome da Empresa" value="<?php echo $clienteClass->getNome();?>">
                            <input type="text" class="span3" id="cnpj" name="cnpj" placeholder="CNPJ" value="<?php echo $clienteClass->getCnpj();?>">
                            <input type="text" class="span3" id="razaoSocial" name="razaoSocial" placeholder="Razão Social" value="<?php echo $clienteClass->getRazaoSocial();?>">
                            <input type="text" class="span3" id="inscMunicipal" name="inscMunicipal" placeholder="Inscrição Comercial" value="<?php echo $clienteClass->getInscMunicipal();?>">
                            <input type="text" class="span3" id="inscEstadual" name="inscEstadual" placeholder="Inscrição Municipal" value="<?php echo $clienteClass->getInscEstadual();?>">
                            <br>
                            <input type="text" class="span5" id="endereco" name="endereco" placeholder="Endereço Completo" value="<?php echo $clienteClass->getEndereco();?>">
                            <input type="text" class="span4" id="complemento" name="complemento" placeholder="Complemento" value="<?php echo $clienteClass->getComplemento();?>">
                            <br />
                            <input type="text" class="span4" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $clienteClass->getCidade();?>">
                            <select name="estado" id="estado" class="span2">
                            	<option value="<?php echo $clienteClass->getEstado();?>"><?php echo $clienteClass->getEstado();?></option>
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
                            <input type="text" class="span3" id="cep" name="cep" placeholder="CEP" value="<?php echo $clienteClass->getCep();?>">
                        </div>
                    </div>
                    <br>
                    <h4>Responsável Financeiro</h4>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span3" id="nomeResponsavel" name="nomeResponsavel" placeholder="Primeiro Nome" value="<?php echo $clienteClass->getNomeResponsavel();?>">
                            <input type="text" class="span4" id="sobrenomeResponsavel" name="sobrenomeResponsavel" placeholder="Sobrenome" value="<?php echo $clienteClass->getSobrenomeResponsavel();?>">
                            <br>
                            <input type="text" class="span3" id="emailResponsavel" name="emailResponsavel" placeholder="E-mail" value="<?php echo $clienteClass->getEmailResponsavel();?>">
                            <input type="text" class="span2" id="telefoneResponsavel" name="telefoneResponsavel" placeholder="Telefone Comercial" value="<?php echo $clienteClass->getTelefoneResponsavel();?>">
                            <input type="text" class="span2" id="celularResponsavel" name="celularResponsavel" placeholder="Celular" value="<?php echo $clienteClass->getCelularResponsavel();?>">
                        </div>
                    </div>
                    <br>
                    <h4>Vincular a outra empresa</h4>
                    <div class="row" id="lastRow">
                        <div class="span10">
                            <select class="span6" id="clientes" name="clientes">
                                <option value="">Escolha a empresa:</option>
                            </select>
                        </div>                        
                    </div>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $clienteClass->getId();?>">
                    <input type="button" onclick="validaCliente()" class="btn btn-info btn-large" value="Salvar" />
                </form>
			</div>
		</div>
<?php include("inc/footer.php");?>
<?php
	}	
?>                                