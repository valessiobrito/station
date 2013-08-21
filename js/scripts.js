function validaOportunidade(modSalvar){
	if(modSalvar == 'aplicar'){
		$("#modSalvar").val(modSalvar);
	}
	if($("#jaCliente").val() == "2" && $("#nome").val() == "")
	{
		alert("Preencha pelo menos o nome da empresa");
		document.getElementById("nome").focus();
		return false;
	}
	if($("#jaContato").val() == "2" && $("#nomeContato").val() == "")
	{
		alert("Preencha pelo menos o nome do contato");
		document.getElementById("nomeContato").focus();
		return false;
	}
	$(".cloneInv").remove();
	document.gravarOportunidade.submit();
}
function validaSala(){
	if(document.getElementById("unidade").value == "")
	{
		alert("Selecione a unidade");
		document.getElementById("unidade").focus();
		return false;
	}
	if(document.getElementById("sala").value == "")
	{
		alert("Preencha o nome da sala");
		document.getElementById("sala").focus();
		return false;
	}
	if(document.getElementById("numero").value == "")
	{
		alert("Preencha o Número");
		document.getElementById("numero").focus();
		return false;
	}
	if(document.getElementById("valorManha").value == "")
	{
		alert("Preencha o valor da manhã");
		document.getElementById("valorManha").focus();
		return false;
	}
	if(document.getElementById("valorTarde").value == "")
	{
		alert("Preencha o valor da tarde");
		document.getElementById("valorTarde").focus();
		return false;
	}
	if(document.getElementById("valorNoite").value == "")
	{
		alert("Preencha o valor da noite");
		document.getElementById("valorNoite").focus();
		return false;
	}
	if(document.getElementById("valorIntegral").value == "")
	{
		alert("Preencha o valor integral");
		document.getElementById("valorIntegral").focus();
		return false;
	}
	if(document.getElementById("metros").value == "")
	{
		alert("Preencha os metros quadrados");
		document.getElementById("metros").focus();
		return false;
	}
	if(document.getElementById("uMesa").value == "")
	{
		alert("Preencha U com mesa");
		document.getElementById("uMesa").focus();
		return false;
	}
	if(document.getElementById("uSimples").value == "")
	{
		alert("Preencha U simples");
		document.getElementById("uSimples").focus();
		return false;
	}
	if(document.getElementById("grupos").value == "")
	{
		alert("Preencha grupos");
		document.getElementById("grupos").focus();
		return false;
	}
	if(document.getElementById("escolar").value == "")
	{
		alert("Preencha escolar");
		document.getElementById("escolar").focus();
		return false;
	}
	if(document.getElementById("auditorio").value == "")
	{
		alert("Preencha auditório");
		document.getElementById("auditorio").focus();
		return false;
	}
	document.gravarSala.submit();
}

function validaProduto(tipo){
	if(document.getElementById("tipo").value == "")
	{
		alert("Selecione o tipo");
		document.getElementById("tipo").focus();
		return false;
	}
	if(tipo == 'novo'){
		var nomes = document.getElementsByName('nome[]');
		var valores = document.getElementsByName('valor[]');
		var quantidades = document.getElementsByName('quantidade[]');
		if(nomes[0].value == '' || valores[0].value == '' || quantidades[0].value == '')
		{
			alert("Preencha pelo menos nome, valor e quantidade do primeiro produto!");
			return false;
		}
		document.gravarProduto.submit();
	}else{
		if(document.getElementById("nome").value == "")
		{
			alert("Preencha o nome");
			document.getElementById("nome").focus();
			return false;
		}
		if(document.getElementById("valor").value == "")
		{
			alert("Preencha o valor");
			document.getElementById("valor").focus();
			return false;
		}
		if(document.getElementById("quantidade").value == "")
		{
			alert("Preencha a quantidade");
			document.getElementById("quantidade").focus();
			return false;
		}
		document.gravarProduto.submit();
	}
}

function validaCliente(){
	if(document.getElementById("nome").value == "")
	{
		alert("Preencha o nome");
		document.getElementById("nome").focus();
		return false;
	}
	if(document.getElementById("cnpj").value == "")
	{
		alert("Preencha o CNPJ");
		document.getElementById("cnpj").focus();
		return false;
	}
	if(document.getElementById("razaoSocial").value == "")
	{
		alert("Preencha a razão social");
		document.getElementById("razaoSocial").focus();
		return false;
	}
	if(document.getElementById("inscEstadual").value == "")
	{
		alert("Preencha a inscrição estadual");
		document.getElementById("inscEstadual").focus();
		return false;
	}
	if(document.getElementById("endereco").value == "")
	{
		alert("Preencha o endereço");
		document.getElementById("endereco").focus();
		return false;
	}
	if(document.getElementById("cidade").value == "")
	{
		alert("Preencha a cidade");
		document.getElementById("cidade").focus();
		return false;
	}
	if(document.getElementById("estado").value == "")
	{
		alert("Selecione o estado");
		document.getElementById("estado").focus();
		return false;
	}
	if(document.getElementById("cep").value == "")
	{
		alert("Preencha o CEP");
		document.getElementById("cep").focus();
		return false;
	}
	if(document.getElementById("nomeResponsavel").value == "")
	{
		alert("Preencha o nome do responsável financeiro");
		document.getElementById("nomeResponsavel").focus();
		return false;
	}
	if(document.getElementById("sobrenomeResponsavel").value == "")
	{
		alert("Preencha o sobrenome do responsável financeiro");
		document.getElementById("sobrenomeResponsavel").focus();
		return false;
	}
	if(document.getElementById("emailResponsavel").value == "")
	{
		alert("Preencha o e-mail do responsável financeiro");
		document.getElementById("emailResponsavel").focus();
		return false;
	}
	if(document.getElementById("telefoneResponsavel").value == "")
	{
		alert("Preencha o telefone do responsável financeiro");
		document.getElementById("telefoneResponsavel").focus();
		return false;
	}
	if(document.getElementById("celularResponsavel").value == "")
	{
		alert("Preencha o celular do responsável financeiro");
		document.getElementById("celularResponsavel").focus();
		return false;
	}
	document.gravarCliente.submit();
}

function validaUnidade(){
	if(document.getElementById("nomeUnidade").value == "")
	{
		alert("Preencha o nome da unidade");
		document.getElementById("unidade").focus();
		return false;
	}
	if(document.getElementById("logradouro").value == "")
	{
		alert("Preencha o Endereço");
		document.getElementById("logradouro").focus();
		return false;
	}
	if(document.getElementById("numeroUnidade").value == "")
	{
		alert("Preencha o Número");
		document.getElementById("numeroUnidade").focus();
		return false;
	}
	if(document.getElementById("bairro").value == "")
	{
		alert("Preencha o Bairro");
		document.getElementById("bairro").focus();
		return false;
	}
	if(document.getElementById("cep").value == "")
	{
		alert("Preencha o CEP");
		document.getElementById("cep").focus();
		return false;
	}
	if(document.getElementById("cidade").value == "")
	{
		alert("Preencha a Cidade");
		document.getElementById("cidade").focus();
		return false;
	}
	if(document.getElementById("estado").value == "")
	{
		alert("Selecione o Estado");
		document.getElementById("estado").focus();
		return false;
	}
	if(document.getElementById("ddd").value == "")
	{
		alert("Preencha o DDD");
		document.getElementById("ddd").focus();
		return false;
	}
	if(document.getElementById("telefone").value == "")
	{
		alert("Preencha o telefone");
		document.getElementById("telefone").focus();
		return false;
	}
	if(document.getElementById("nomeContato").value == "")
	{
		alert("Preencha o nome do contato");
		document.getElementById("nomeContato").focus();
		return false;
	}

	$.ajax({
		type: "POST",
		url: "/agenda/process/gravarUnidade.php",
		data: "nome="+document.getElementById("nomeUnidade").value+"&logradouro="+document.getElementById("logradouro").value+"&numero="+document.getElementById("numeroUnidade").value+"&bairro="+document.getElementById("bairro").value+"&cep="+document.getElementById("cep").value+"&complemento="+document.getElementById("complemento").value+"&cidade="+document.getElementById("cidade").value+"&estado="+document.getElementById("estado").value+"&ddd="+document.getElementById("ddd").value+"&telefone="+document.getElementById("telefone").value+"&nomeContato="+document.getElementById("nomeContato").value,
		success: function(resposta){
			if(resposta != '0'){
				$('#modalNovaUnidade').modal('hide');
				carregaCombo('unidade',resposta);
			}else{
				$('#retornoUnidade').attr('class', 'text-error');
				$('#retornoUnidade').html('Ocorreu um erro na gravação');
			}
		}
	});
}

function validaTipoProduto(){
	if(document.getElementById("nomeTipo").value == "")
	{
		alert("Preencha o nome do tipo");
		document.getElementById("nomeTipo").focus();
		return false;
	}

	$.ajax({
		type: "POST",
		url: "/agenda/process/gravarTipoProduto.php",
		data: "nome="+document.getElementById("nomeTipo").value,
		success: function(resposta){
			if(resposta != '0'){
				$('#modalNovoTipo').modal('hide');
				carregaCombo('tipo',resposta);
			}else{
				$('#retornoTipo').attr('class', 'text-error');
				$('#retornoTipo').html('Ocorreu um erro na gravação');
			}
		}
	});
}

function pesquisarSalas(idUnidade)
{
	if(idUnidade == "")
	{
		alert("Selecione a unidade");
		document.getElementById("unidade").focus();
		return false;
	}

	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarSalas.php',
		{unidade:idUnidade},

		function(data){

			$("#tabelaBusca").append("<tr><th>Unidade</th><th>Sala</th><th>Número</th><th>Ações</th></tr>");
			$.each(data, function(i,data){
				$("#tabelaBusca").append("<tr><td>"+data.nomeUnidade+"</td><td>"+data.nomeSala+"</td><td>"+data.nrSala+"</td><td><a href='editarSala.php?id="+data.idSala+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a><a onclick=\"deletaSala('"+data.idSala+"','"+idUnidade+"')\" class='btn btn-danger' style='float:left;'>Deletar</a></td></tr>");
			});
		},'json');

	$("#resultadoBusca").show();
}
function deletaSala(idSala,idUnidade){
	if(confirm("Deseja realmente deletar essa sala?")){
		$.ajax({
			type: "POST",
			url: "/agenda/process/deletarSala.php",
			data: "is="+idSala,
			success: function(resposta){
				if(resposta == 'ok'){
					alert("Sala deletada!");
					pesquisarSalas(idUnidade);
				}else{
					alert("Ocorreu um erro");
				}
			}
		});
	}else{
		return false;
	}
}

function pesquisarProdutos(idTipo)
{
	if(idTipo == "")
	{
		alert("Selecione o tipo");
		document.getElementById("tipo_produto").focus();
		return false;
	}

	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarProdutos.php',
		{tipo:idTipo},

		function(data){

			$("#tabelaBusca").append("<tr><th>Produto</th><th>Quantidade</th><th>Ações</th></tr>");
			$.each(data, function(i,data){
				$("#tabelaBusca").append("<tr><td>"+data.nomeProduto+"</td><td>"+data.quantidade+"</td><td><a href='editarProduto.php?id="+data.idProduto+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a><a onclick=\"deletaProduto('"+data.idProduto+"','"+idTipo+"')\" class='btn btn-danger' style='float:left;'>Deletar</a></td></tr>");
			});
		},'json');

	$("#resultadoBusca").show();
}
function deletaProduto(idProduto,idTipo){
	if(confirm("Deseja realmente deletar esse produto?")){
		$.ajax({
			type: "POST",
			url: "/agenda/process/deletarProduto.php",
			data: "ip="+idProduto,
			success: function(resposta){
				if(resposta == 'ok'){
					alert("Produto deletado!");
					pesquisarProdutos(idProduto);
				}else{
					alert("Ocorreu um erro");
				}
			}
		});
	}else{
		return false;
	}
}

function pesquisarClientes(idCliente)
{
	if(idCliente == "")
	{
		alert("Selecione o cliente");
		document.getElementById("clientes").focus();
		return false;
	}

	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarClientes.php',
		{cliente:idCliente},

		function(data){

			$("#tabelaBusca").append("<tr><th>Nome</th><th>CNPJ</th><th>Ações</th></tr>");
			$.each(data, function(i,data){
				$("#tabelaBusca").append("<tr><td>"+data.nomeCliente+"</td><td>"+data.cnpj+"</td><td><a href='editarCliente.php?id="+data.idCliente+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a><a onclick=\"deletaCliente('"+data.idCliente+"')\" class='btn btn-danger' style='float:left;'>Deletar</a></td></tr>");
			});
		},'json');

	$("#resultadoBusca").show();
}
function deletaCliente(idCliente){
	if(confirm("Deseja realmente deletar esse cliente e seus contatos?")){
		$.ajax({
			type: "POST",
			url: "/agenda/process/deletarCliente.php",
			data: "ic="+idCliente,
			success: function(resposta){
				if(resposta == 'ok'){
					alert("Cliente deletado!");
					pesquisarClientes(idCliente);
				}else{
					alert("Ocorreu um erro");
				}
			}
		});
	}else{
		return false;
	}
}

function verificaJaCliente(el){
	jaCliente = $(el).val();

	if(jaCliente == "1"){
		$("#clientes").show();
		$("#novoCliente").hide();
	}else if(jaCliente == "2"){
		$("#clientes").hide();
		$("#novoCliente").show();
		$("#contatos").hide();
	}else{
		$("#clientes").hide();
		$("#novoCliente").hide();
	}
}

function verificaJaContato(el){
	jaContato = $(el).val();

	if(jaContato == "1"){
		$("#contatos").show();
		$("#novoContato").hide();
	}else if(jaContato == "2"){
		$("#contatos").hide();
		$("#novoContato").show();
	}else{
		$("#contatos").hide();
		$("#novoContato").hide();
	}
}

function carregaCombo(elemento,valorSelecionado)
{
	$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaGeral.php',
		{elemento: elemento},

		function(data){
			var option = new Array();

			resetaCombo(elemento);
			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );
				if(obj.idSelecao == valorSelecionado){
					$( option[i] ).attr('selected','selected');
				}

				$("select[name='"+elemento+"']").append( option[i] );
			});
		},'json');
}
function carregaComboClone(elemento,valorSelecionado)
{
	$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaGeral.php',
		{elemento: elemento},

		function(data){
			var option = new Array();

			resetaComboClone(elemento);
			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );
				if(obj.idSelecao == valorSelecionado){
					$( option[i] ).attr('selected','selected');
				}

				$("."+elemento).append( option[i] );
			});
		},'json');
}
function carregaComboDependente(elemento,valorSelecionado,el)
{
	valorPai = $(el).val();
	$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaGeral.php',
		{elemento: elemento, valorPai:valorPai},

		function(data){
			var option = new Array();

			resetaCombo(elemento);
			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );
				if(obj.idSelecao == valorSelecionado){
					$( option[i] ).attr('selected','selected');
				}

				$("select[name='"+elemento+"']").append( option[i] );
			});
		},'json');
}
function resetaCombo(el){
	$("select[name='"+el+"']").empty();
}
function resetaComboClone(el){
	$("."+el).empty();
}

function verificaUnidade(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == ""){
		$("#"+trParentId+" #data").hide();
		$("#"+trParentId+" #data").val("");
		$("#"+trParentId+" #periodo").hide();
		$("#"+trParentId+" #periodo").val(0);
		$("#"+trParentId+" #rowSala").hide();
		$("#"+trParentId+" #salas").val(0);
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}else{
		$("#"+trParentId+" #data").show();
		$("#"+trParentId+" #data").val("");
		$("#"+trParentId+" #periodo").hide();
		$("#"+trParentId+" #periodo").val(0);
		$("#"+trParentId+" #rowSala").hide();
		$("#"+trParentId+" #salas").val(0);
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}
}
function verificaData(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == ""){
		$("#"+trParentId+" #periodo").hide();
		$("#"+trParentId+" #periodo").val(0);
		$("#"+trParentId+" #rowSala").hide();
		$("#"+trParentId+" #salas").val(0);
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}else{
		$("#"+trParentId+" #periodo").show();
		$("#"+trParentId+" #periodo").val(0);
		$("#"+trParentId+" #rowSala").hide();
		$("#"+trParentId+" #salas").val(0);
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}
}
function verificaPeriodo(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	unidade = $("#"+trParentId+" #unidade").val();
	data = $("#"+trParentId+" #data").val();
	
	if(valor == ""){
		$("#"+trParentId+" #rowSala").hide();
		$("#"+trParentId+" #salas").val(0);
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}else{
		$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaSalas.php',
		{unidade: unidade, data:data, periodo:valor},

		function(data){
			var option = new Array();

			$("#"+trParentId+" #salas").empty();
			$("#"+trParentId+" .detalhesSala").hide();
			$("#"+trParentId+" #formatoSala").val(0);
			$("#"+trParentId+" #qtdeParticipantes").val("");
			
			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );

				$("#"+trParentId+" #salas").append( option[i] );
			});
		},'json');
		
		$("#"+trParentId+" #rowSala").show();
	}
}
function verificaSala(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == ""){
		$("#"+trParentId+" .detalhesSala").hide();
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}else{
		$("#"+trParentId+" .detalhesSala").show();
		$("#"+trParentId+" #formatoSala").val(0);
		$("#"+trParentId+" #qtdeParticipantes").val("");
	}
}
function verificaFormatoSala(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	sala = $("#"+trParentId+" #salas").val();
	
	if(valor == ""){
		sala = $("#"+trParentId+" #qtdeParticipantes").val("");
	}else{
		$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaLotacaoSala.php',
		{sala: sala, tipoLotacao:valor},

		function(data){
			$("#"+trParentId+" #qtdeParticipantes").val(data);
		},'json');
	}
}
function verificaCoffee(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == "" || valor == "2"){
		$("#"+trParentId+" .detalhesCoffe").hide();
	}else{
		$("#"+trParentId+" .detalhesCoffe").show();
	}
}
function verificaCafe(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == "" || valor == "2"){
		$("#"+trParentId+" .detalhesCafe").hide();
	}else{
		$("#"+trParentId+" .detalhesCafe").show();
	}
}
function verificaAgua(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == "" || valor == "2"){
		$("#"+trParentId+" .detalhesAgua").hide();
	}else{
		$("#"+trParentId+" .detalhesAgua").show();
	}
}
function verificaTipoProduto(el)
{
	valorPai = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	
	cloneIdCru = $(el).closest("table").attr("id");
	cloneIdArr = cloneIdCru.split("_");
	cloneId = cloneIdArr[3];
	
	$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaGeral.php',
		{elemento: 'produtos', valorPai:valorPai},

		function(data){
			var option = new Array();

			$("#"+trParentId+" #produtos_"+cloneId).empty();
			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );

				$("#"+trParentId+" #produtos_"+cloneId).append( option[i] );
			});
		},'json');
}