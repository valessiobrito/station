<?php
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

if ($_SESSION['LogadoSTATION'] != "1" && (isset($_GET['id']) && $_GET['id'] > 0)){
	header("Location: index.php");
}else{

    $salaController = new SalaController();
    $sala = $salaController->listAction($_GET['id'] , 1);

    if (count($sala) == 0){
        header("Location: ".$urlUnidades."/listarUnidade.php");
    }

    $salaClass = new Sala();
    $salaClass->fetchEntity($sala[1]);
	$title = "Editar Unidade/Sala";

?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>

<script>
	$(document).ready(function(){
		carregaCombo('unidade','<?php echo $salaClass->getUnidadeId(); ?>');
		$("#valorManha").maskMoney({showSymbol:false, thousands:'', decimal:','});
		$("#valorTarde").maskMoney({showSymbol:false, thousands:'', decimal:','});
		$("#valorNoite").maskMoney({showSymbol:false, thousands:'', decimal:','});
		$("#valorIntegral").maskMoney({showSymbol:false, thousands:'', decimal:','});
	});
</script>

<div class="content">
			<ul class="breadcrumb">
				<li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/unidades/listarUnidade.php">Unidades e Salas</a> <span class="divider">/</span></li>
				<li class="active">Editar Sala</li>
			</ul>
			<div class="span10">
				<div class="page-header">
					<h1>Editar Sala</h1>
				</div>
				<form name="gravarSala" method="post" action="<?php echo $urlUnidades;?>/action/crudUnidade.php?op=editar">
					<h4>Unidade</h4>
					<div class="row">
						<div class="span10">
							<div class="input-append">
								<select class="span6" id="unidade" name="unidade">
									<option value="">Escolha a unidade:</option>
								</select>
								<a href="#" onclick="editarUnidade()" role="button" class="btn btn-info">Editar</a>
								<a href="#" onclick="novaUnidade()" role="button" class="btn">+</a>
							</div>
						</div>
					</div>
					<br>
					<h4>Informações da Sala</h4>
					<div class="row">
						<div class="span10">
							<input type="text" class="span6" id="sala" name="sala" placeholder="Nome da Sala" value="<?php echo $salaClass->getNome();?>">
							<input type="text" class="span4" id="numero" name="numero" placeholder="Número da Sala" value="<?php echo $salaClass->getNumero();?>">
						</div>
					</div>
					<br>
					<h4>Valor / Período</h4>
					<div class="row">
						<div class="span10">
							<label for="valorManha">Manhã:</label>
							<input type="text" class="span4" id="valorManha" name="valorManha" placeholder="Valor (R$)" value="<?php echo $salaController->formataValor($salaClass->getValorManha(),'editar');?>">
							<label for="valorTarde">Tarde:</label>
							<input type="text" class="span4" id="valorTarde" name="valorTarde" placeholder="Valor (R$)" value="<?php echo $salaController->formataValor($salaClass->getValorTarde(),'editar');?>">
							<label for="valorNoite">Noite:</label>
							<input type="text" class="span4" id="valorNoite" name="valorNoite" placeholder="Valor (R$)" value="<?php echo $salaController->formataValor($salaClass->getValorNoite(),'editar');?>">
							<label for="valorIntegral">Integral:</label>
							<input type="text" class="span4" id="valorIntegral" name="valorIntegral" placeholder="Valor (R$)" value="<?php echo $salaController->formataValor($salaClass->getValorIntegral(),'editar');?>">
						</div>
					</div>
					<br>
					<h4>Formato / Lotação</h4>
					<div class="row">
						<div class="span10">
							<label for="metros">M²:</label>
							<input type="text" class="span4" id="metros" name="metros" placeholder="Lotação Máxima" value="<?php echo $salaClass->getMetros();?>">
							<label for="uMesa">"U" com mesa:</label>
							<input type="text" class="span4" id="uMesa" name="uMesa" placeholder="Lotação Máxima" value="<?php echo $salaClass->getUMesa();?>">
							<label for="uSimples">"U" simples:</label>
							<input type="text" class="span4" id="uSimples" name="uSimples" placeholder="Lotação Máxima" value="<?php echo $salaClass->getUSimples();?>">
							<label for="grupos">Grupos:</label>
							<input type="text" class="span4" id="grupos" name="grupos" placeholder="Lotação Máxima" value="<?php echo $salaClass->getGrupos();?>">
							<label for="escolar">Escolar:</label>
							<input type="text" class="span4" id="escolar" name="escolar" placeholder="Lotação Máxima" value="<?php echo $salaClass->getEscolar();?>">
							<label for="auditorio">Auditório:</label>
							<input type="text" class="span4" id="auditorio" name="auditorio" placeholder="Lotação Máxima" value="<?php echo $salaClass->getAuditorio();?>">
						</div>
					</div>
					<br>
                    <input type="hidden" name="id" value="<?php echo $salaClass->getUnidadeId();?>">
					<input type="button" onclick="validaSala()" class="btn btn-info btn-large" value="Salvar" />
				</form>
			</div>
			<div id="modalNovaUnidade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Nova Unidade</h3>
				</div>
				<div class="modal-body">
					<h4>Informações da Unidade</h4>
					<div class="row">
						<div class="span6">
							<input type="text" class="span6" id="nomeUnidade" name="nomeUnidade" placeholder="Nome da Unidade">
						</div>
					</div>
					<br>
					<h4>Endereço</h4>
					<div class="row">
						<div class="span6">
							<input type="text" class="span4" id="logradouro" name="logradouro" placeholder="Endereço">
							<input type="text" class="span2" id="numeroUnidade" name="numeroUnidade" placeholder="Número">
						</div>
					</div>
					<div class="row">
						<div class="span6">
							<input type="text" class="span4" id="bairro" name="bairro" placeholder="Bairro">
							<input type="text" class="span2" id="cep" name="cep" placeholder="CEP">
						</div>
					</div>
					<div class="row">
						<div class="span6">
							<input type="text" class="span6" id="complemento" name="complemento" placeholder="Complemento">
						</div>
					</div>
					<div class="row">
						<div class="span6">
							<input type="text" class="span4" id="cidade" name="cidade" placeholder="Cidade">
							<select name="estado" id="estado" class="span2">
								<option value="">Selecione o estado:</option>
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
						</div>
					</div>
					<br>
					<h4>Telefone</h4>
					<div class="row">
						<div class="span6">
							<input type="text" class="span2" id="ddd" name="ddd" placeholder="DDD">
							<input type="text" class="span4" id="telefone" name="telefone" placeholder="Telefone">
						</div>
					</div>
					<br>
					<h4>Contato</h4>
					<div class="row">
						<div class="span6">
							<input type="text" class="span6" id="nomeContato" name="nomeContato" placeholder="Nome do Contato">
						</div>
					</div>
					<br>
					<div class="row">
						<input type="button" onclick="validaUnidade()" class="btn btn-info" value="Salvar" style="float:right; margin-right:55px;">
						<input type="hidden" id="idUnidadeEd" name="idUnidadeEd" value="0">
					</div>
				</div>
				<div class="modal-footer">
					<span id="retornoUnidade"></span>
				</div>
			</div>
		</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>