<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Adicionar Cliente";
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
                <li><a href="/agenda/modules/clientes/listarCliente.php">Clientes</a> <span class="divider">/</span></li>
                <li class="active">Novo Cliente</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Novo Cliente</h1>
                </div>
                <form name="gravarCliente" method="post" action="<?php echo $urlClientes;?>/action/crudCliente.php?op=novo">
                    <h4>Informações da Empresa</h4>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span3" id="nome" name="nome" placeholder="Nome da Empresa">
                            <input type="text" class="span3" id="cnpj" name="cnpj" placeholder="CNPJ">
                            <input type="text" class="span3" id="razaoSocial" name="razaoSocial" placeholder="Razão Social">
                            <input type="text" class="span3" id="inscMunicipal" name="inscMunicipal" placeholder="Inscrição Comercial">
                            <input type="text" class="span3" id="inscEstadual" name="inscEstadual" placeholder="Inscrição Municipal">
                            <br>
                            <input type="text" class="span5" id="endereco" name="endereco" placeholder="Endereço Completo">
                            <input type="text" class="span4" id="complemento" name="complemento" placeholder="Complemento">
                            <br />
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
                    <br>
                    <h4>Responsável Financeiro</h4>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span3" id="nomeResponsavel" name="nomeResponsavel" placeholder="Primeiro Nome">
                            <input type="text" class="span4" id="sobrenomeResponsavel" name="sobrenomeResponsavel" placeholder="Sobrenome">
                            <br>
                            <input type="text" class="span3" id="emailResponsavel" name="emailResponsavel" placeholder="E-mail">
                            <input type="text" class="span2" id="telefoneResponsavel" name="telefoneResponsavel" placeholder="Telefone Comercial">
                            <input type="text" class="span2" id="celularResponsavel" name="celularResponsavel" placeholder="Celular">
                        </div>
                    </div>
                    <br>
                    <h4>Vincular a outra empresa</h4>
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="clientes" name="clientes">
                                <option value="">Escolha a empresa:</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <input type="button" onclick="validaCliente()" class="btn btn-info btn-large" value="Salvar" />
                </form>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>