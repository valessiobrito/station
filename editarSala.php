<?php
	ob_start();
	session_start();
	
	if ($_SESSION['LogadoSTATION'] != "1" && (isset($_GET['is']) && $_GET['is'] > 0)){
		header("Location: index.php");
	}else{
		$title = "Editar Unidade/Sala";
		include("inc/conexao.php");
		$selecionaSala = mysql_query("SELECT * FROM sta_salas WHERE sala_10_id = ".$_GET['is']);
		$dadosSala = mysql_fetch_array($selecionaSala);
		include("inc/header.php");
		$valorManha = number_format($dadosSala['sala_15_valorManha'],2,',','.');
		$valorManha = str_replace('.','',$valorManha);
		$valorTarde = number_format($dadosSala['sala_15_valorTarde'],2,',','.');
		$valorTarde = str_replace('.','',$valorTarde);
		$valorNoite = number_format($dadosSala['sala_15_valorNoite'],2,',','.');
		$valorNoite = str_replace('.','',$valorNoite);
		$valorIntegral = number_format($dadosSala['sala_15_valorIntegral'],2,',','.');
		$valorIntegral = str_replace('.','',$valorIntegral);
?>
		<script>
			$(document).ready(function(){
				carregaCombo('unidade','<?php echo $dadosSala['unidade_10_id'];?>');
				$("#valorManha").maskMoney({showSymbol:false, thousands:'', decimal:','});
				$("#valorTarde").maskMoney({showSymbol:false, thousands:'', decimal:','});
				$("#valorNoite").maskMoney({showSymbol:false, thousands:'', decimal:','});
				$("#valorIntegral").maskMoney({showSymbol:false, thousands:'', decimal:','});
			});	
		</script> 
	
		<div class="content">
			<ul class="breadcrumb">
				<li><a href="painel.php">Home</a> <span class="divider">/</span></li>
				<li><a href="unidades.php">Unidades e Salas</a> <span class="divider">/</span></li>
				<li class="active">Editar Sala</li>
			</ul>
			<div class="span10">
				<div class="page-header">
					<h1>Editar Sala</h1>
				</div>
				<form name="gravarSala" method="post" action="inc/updateSala.php">
					<h4>Unidade</h4>
					<div class="row">
						<div class="span10">
							<div class="input-append">
								<select class="span6" id="unidade" name="unidade">
									<option value="">Escolha a unidade:</option>
								</select>
								<a href="#modalNovaUnidade" role="button" class="btn" data-toggle="modal">+</a>
							</div>
						</div>                        
					</div>
					<br>
					<h4>Informações da Sala</h4>
					<div class="row">
						<div class="span10">
							<input type="text" class="span6" id="sala" name="sala" placeholder="Nome da Sala" value="<?php echo $dadosSala['sala_30_nome'];?>">
							<input type="text" class="span4" id="numero" name="numero" placeholder="Número da Sala" value="<?php echo $dadosSala['sala_30_numero'];?>">
						</div>
					</div>
					<br>
					<h4>Valor / Período</h4>
					<div class="row">
						<div class="span10">
							<label for="valorManha">Manhã:</label>
							<input type="text" class="span4" id="valorManha" name="valorManha" placeholder="Valor (R$)" value="<?php echo $valorManha;?>">
							<label for="valorTarde">Tarde:</label>
							<input type="text" class="span4" id="valorTarde" name="valorTarde" placeholder="Valor (R$)" value="<?php echo $valorTarde;?>">
							<label for="valorNoite">Noite:</label>
							<input type="text" class="span4" id="valorNoite" name="valorNoite" placeholder="Valor (R$)" value="<?php echo $valorNoite;?>">
							<label for="valorIntegral">Integral:</label>
							<input type="text" class="span4" id="valorIntegral" name="valorIntegral" placeholder="Valor (R$)" value="<?php echo $valorIntegral;?>">
						</div>
					</div>
					<br>
					<h4>Formato / Lotação</h4>
					<div class="row">
						<div class="span10">
							<label for="metros">M²:</label>
							<input type="text" class="span4" id="metros" name="metros" placeholder="Lotação Máxima" value="<?php echo $dadosSala['sala_20_metros'];?>">
							<label for="uMesa">"U" com mesa:</label>
							<input type="text" class="span4" id="uMesa" name="uMesa" placeholder="Lotação Máxima" value="<?php echo $dadosSala['sala_20_uMesa'];?>">
							<label for="uSimples">"U" simples:</label>
							<input type="text" class="span4" id="uSimples" name="uSimples" placeholder="Lotação Máxima" value="<?php echo $dadosSala['sala_20_uSimples'];?>">
							<label for="grupos">Grupos:</label>
							<input type="text" class="span4" id="grupos" name="grupos" placeholder="Lotação Máxima" value="<?php echo $dadosSala['sala_20_grupos'];?>">
							<label for="escolar">Escolar:</label>
							<input type="text" class="span4" id="escolar" name="escolar" placeholder="Lotação Máxima" value="<?php echo $dadosSala['sala_20_escolar'];?>">
							<label for="auditorio">Auditório:</label>
							<input type="text" class="span4" id="auditorio" name="auditorio" placeholder="Lotação Máxima" value="<?php echo $dadosSala['sala_20_auditorio'];?>">
						</div>
					</div>
					<br>
                    <input type="hidden" name="is" value="<?php echo $dadosSala['sala_10_id'];?>">
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
					</div>
				</div>
				<div class="modal-footer">
					<span id="retornoUnidade"></span>
				</div>
			</div>
		</div>
<?php include("inc/footer.php");?>
<?php
	}	
?>