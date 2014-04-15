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

function validaContato(){
	if(document.getElementById("clientes").value == "")
	{
		alert("Preencha o cliente");
		document.getElementById("clientes").focus();
		return false;
	}
	document.gravarContato.submit();
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

function validaUsuario(metodo){
	if(document.getElementById("nome").value == "")
	{
		alert("Preencha o nome");
		document.getElementById("nome").focus();
		return false;
	}
	if(document.getElementById("login").value == "")
	{
		alert("Preencha o login");
		document.getElementById("login").focus();
		return false;
	}
	if(metodo == 'salvar'){
		if(document.getElementById("senha").value == "")
		{
			alert("Preencha a senha");
			document.getElementById("senha").focus();
			return false;
		}
	}
	if(document.getElementById("tipo").value == "")
	{
		alert("Selecione o tipo de permissão");
		document.getElementById("tipo").focus();
		return false;
	}
	if(document.getElementById("ativo").value == "")
	{
		alert("Selecione o status do usuário");
		document.getElementById("ativo").focus();
		return false;
	}
	document.gravarUsuario.submit();
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

function pesquisarUsuarios(idUsuario)
{
	if(idUsuario == "")
	{
		alert("Selecione o usuário");
		document.getElementById("usuarios").focus();
		return false;
	}

	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarUsuarios.php',
		{usuario:idUsuario},

		function(data){

			$("#tabelaBusca").append("<tr><th>Nome</th><th>Login</th><th>Ações</th></tr>");
			$.each(data, function(i,data){
				if(data.idUsuario == "1"){
					$("#tabelaBusca").append("<tr><td>"+data.nomeUsuario+"</td><td>"+data.loginUsuario+"</td><td><a href='editarUsuario.php?id="+data.idUsuario+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a></td></tr>");
				}else{
					$("#tabelaBusca").append("<tr><td>"+data.nomeUsuario+"</td><td>"+data.loginUsuario+"</td><td><a href='editarUsuario.php?id="+data.idUsuario+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a><a onclick=\"deletaUsuario('"+data.idUsuario+"')\" class='btn btn-danger' style='float:left;'>Deletar</a></td></tr>");
				}
			});
		},'json');

	$("#resultadoBusca").show();
}
function deletaUsuario(idUsuario){
	if(confirm("Deseja realmente deletar esse usuário?")){
		$.ajax({
			type: "POST",
			url: "/agenda/process/deletarUsuario.php",
			data: "iu="+idUsuario,
			success: function(resposta){
				if(resposta == 'ok'){
					alert("Usuário deletado!");
					pesquisarUsuarios(idUsuario);
				}else{
					alert("Ocorreu um erro");
				}
			}
		});
	}else{
		return false;
	}
}

function pesquisarContatos(idContato)
{
	if(idContato == "")
	{
		alert("Selecione o contato");
		document.getElementById("contato").focus();
		return false;
	}

	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarContatos.php',
		{metodo:"contato",contato:idContato},

		function(data){

			$("#tabelaBusca").append("<tr><th>Nome</th><th>Sobrenome</th><th>Empresa</th><th>Ações</th></tr>");
			$.each(data, function(i,data){
				$("#tabelaBusca").append("<tr><td>"+data.nomeContato+"</td><td>"+data.sobrenomeContato+"</td><td>"+data.nomeEmpresa+"</td><td><a href='editarContato.php?id="+data.idContato+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a><a onclick=\"deletaContato('"+data.idContato+"')\" class='btn btn-danger' style='float:left;'>Deletar</a></td></tr>");
			});
		},'json');

	$("#resultadoBusca").show();
}

function pesquisarContatosByCliente(idCliente)
{
	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarContatos.php',
		{metodo:"cliente",cliente:idCliente},

		function(data){

			$("#tabelaBusca").append("<tr><th>Nome</th><th>Sobrenome</th></tr>");
			$.each(data, function(i,data){
				$("#tabelaBusca").append("<tr><td>"+data.nomeContato+"</td><td>"+data.sobrenomeContato+"</td></tr>");
			});
		},'json');

	$("#resultadoBusca").show();
}

function deletaContato(idContato){
	if(confirm("Deseja realmente deletar esse contato?")){
		$.ajax({
			type: "POST",
			url: "/agenda/process/deletarContato.php",
			data: "ic="+idContato,
			success: function(resposta){
				if(resposta == 'ok'){
					alert("Contato deletado!");
					pesquisarContatos(idContato);
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
				if(elemento == 'clientes'){
					$( option[i] ).attr('class',obj.classe);
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
function verificaUnidadeBriefing(el){
	valor = $(el).val();
	if(valor == ""){
		$("#periodoBriefing").hide();
		$("#periodoBriefing").val(0);
		$("#rowSalaBriefing").hide();
		$("#salasBriefing").val(0);
		$("#formatoSalaBriefing").val(0);
	}else{
		$("#periodoBriefing").show();
		$("#periodoBriefing").val(0);
		$("#rowSalaBriefing").hide();
		$("#salasBriefing").val(0);
		$("#formatoSalaBriefing").val(0);
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
function verificaPeriodo(el,idReserva){
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
		{unidade: unidade, data:data, periodo:valor, idReserva:idReserva},

		function(data){
			var option = new Array();

			$("#"+trParentId+" #salas").empty();
			$("#"+trParentId+" .detalhesSala").hide();
			$("#"+trParentId+" #formatoSala").val(0);
			$("#"+trParentId+" #qtdeParticipantes").val("");

			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).attr( {class : obj.classe} );
				$( option[i] ).append( obj.nomeSelecao );

				$("#"+trParentId+" #salas").append( option[i] );
			});
		},'json');

		$("#"+trParentId+" #rowSala").show();
		calculaValorSala(el);
	}
}
function verificaPeriodoBriefing(modo,objBrie){
	unidade = $("#unidadeBriefing").val();

	if(valor == ""){
		$("#"+trParentId+" #rowSalaBriefing").hide();
		$("#"+trParentId+" #salasBriefing").val(0);
		$("#"+trParentId+" #formatoSalaBriefing").val(0);
	}else{
		$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaSalasBriefing.php',
		{unidade: unidade},

		function(data){
			var option = new Array();

			$("#salasBriefing").empty();
			$(".detalhesSalaBriefing").hide();
			$("#formatoSalaBriefing").val(0);

			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );
				if(modo == "edit"){
					if(objBrie.sala_10_id != "0" && objBrie.sala_10_id == obj.idSelecao){
						$( option[i] ).attr('selected','selected');
					}
					if(objBrie.briefing_12_formatoSala != "0"){
						$("#formatoSalaBriefing").val(objBrie.briefing_12_formatoSala);
					}
				}
				$("#salasBriefing").append( option[i] );
			});
		},'json');

		$("#rowSalaBriefing").show();
		$("#formatoSalaBriefing").val(0).show();
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
		if($("#formatoSalaBriefing").val() != ""){
			$("#"+trParentId+" #formatoSala").val($("#formatoSalaBriefing").val());
			verificaFormatoSala($("#"+trParentId+" #formatoSala"));
		}else{
			$("#"+trParentId+" #formatoSala").val(0);
			$("#"+trParentId+" #qtdeParticipantes").val("");
		}
	}
	calculaValorSala(trParentId, el);
}
function verificaFormatoSala(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	sala = $("#"+trParentId+" #salas").val();

	if(valor == ""){
		sala = $("#"+trParentId+" #capSala").val("");
	}else{
		$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaLotacaoSala.php',
		{sala: sala, tipoLotacao:valor},

		function(data){
			$("#"+trParentId+" #capSala").val(data);
			$("#"+trParentId+" #qtdeParticipantes").val($("#qtdeParticipantesBriefing").val());
		},'json');
	}
}

function verificaCriarAgenda(el){
	valor = $(el).val();
	if(valor == "" || valor == "2"){
		$("#agendaReservas").hide();
	}else{
		$("#agendaReservas").show();
		copiaBriefing('primeiraReserva');
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
	calculaValorCoffee(trParentId, el);
}
function verificaCafe(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == "" || valor == "2"){
		$("#"+trParentId+" .detalhesCafe").hide();
	}else{
		$("#"+trParentId+" .detalhesCafe").show();
	}
	calculaValorCafe(trParentId, el);
}
function verificaAgua(el){
	valor = $(el).val();
	trParentId = $(el).closest("tr").attr("id");
	if(valor == "" || valor == "2"){
		$("#"+trParentId+" .detalhesAgua").hide();
	}else{
		$("#"+trParentId+" .detalhesAgua").show();
	}
	calculaValorAgua(trParentId, el);
}
function verificaCoffeeBriefing(el){
	valor = $(el).val();
	if(valor == "" || valor == "2"){
		$(".detalhesCoffeBriefing").hide();
	}else{
		$(".detalhesCoffeBriefing").show();
		$("#qtdeCoffeeBriefing").val($("#qtdeParticipantesBriefing").val());
	}
}
function verificaCafeBriefing(el){
	valor = $(el).val();
	if(valor == "" || valor == "2"){
		$(".detalhesCafeBriefing").hide();
	}else{
		$(".detalhesCafeBriefing").show();
		$("#qtdeCafeBriefing").val($("#qtdeParticipantesBriefing").val());
	}
}
function verificaAguaBriefing(el){
	valor = $(el).val();
	if(valor == "" || valor == "2"){
		$(".detalhesAguaBriefing").hide();
	}else{
		$(".detalhesAguaBriefing").show();
		$("#qtdeAguaBriefing").val($("#qtdeParticipantesBriefing").val());
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

function verificaTipoProdutoCallback(idLine,idProduto)
{
	valorPai = $("#"+idLine+" .tipoProduto").val();

	$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaGeral.php',
		{elemento: 'produtos', valorPai:valorPai},

		function(data){
			var option = new Array();

			$("#"+idLine+" .produtos").empty();
			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).append( obj.nomeSelecao );

				$("#"+idLine+" .produtos").append( option[i] );
			});

			$("#"+idLine+" .produtos").val(idProduto);

		},'json');
}

function verificaPeriodoCallback(lineId,objGeral){

	unidade = $("#"+lineId+" #unidade").val();
	data = $("#"+lineId+" #data").val();

	if(valor == ""){
		$("#"+lineId+" #rowSala").hide();
		$("#"+lineId+" #salas").val(0);
		$("#"+lineId+" #formatoSala").val(0);
		$("#"+lineId+" #qtdeParticipantes").val("");
	}else{
		$.ajax({cache:false});
	$.post(
		'/agenda/process/selecionaSalas.php',
		{unidade: unidade, data:data, periodo:objGeral.reserva_12_periodo, idReserva:objGeral.reserva_10_id},

		function(data){
			var option = new Array();

			$("#"+lineId+" #salas").empty();
			$("#"+lineId+" .detalhesSala").hide();
			$("#"+lineId+" #formatoSala").val(0);
			$("#"+lineId+" #qtdeParticipantes").val("");

			$.each(data, function(i, obj){

				option[i] = document.createElement('option');
				$( option[i] ).attr( {value : obj.idSelecao} );
				$( option[i] ).attr( {class : obj.classe} );
				$( option[i] ).append( obj.nomeSelecao );

				$("#"+lineId+" #salas").append( option[i] );
			});

			$("#"+lineId+" #salas").val(objGeral.sala_10_id);
			if(objGeral.sala_10_id != "0"){
				verificaSala($("#"+lineId+" #salas"));
			}
			if(objGeral.reserva_12_formatoSala != "0"){
				$("#"+lineId+" #formatoSala").val(objGeral.reserva_12_formatoSala);
			}
			if(objGeral.reserva_20_capacidadeSala != ""){
				$("#"+lineId+" #capSala").val(objGeral.reserva_20_capacidadeSala);
			}
			if(objGeral.reserva_20_quantidadeParticipantes != ""){
				$("#"+lineId+" #qtdeParticipantes").val(objGeral.reserva_20_quantidadeParticipantes);
			}

			preencheCloneBriefingReserva(objGeral,lineId);

		},'json');

		$("#"+lineId+" #rowSala").show();
	}
}

function copiaBriefing(trParentId){
	idUnidade = $("#unidadeBriefing").val();
	valorCoffe = $("#coffeeBriefing").val();
	valorCafe = $("#cafeBriefing").val();
	valorAgua = $("#aguaBriefing").val();

	$("#"+trParentId+" #unidade").val(idUnidade);
	$("#"+trParentId+" #coffee").val(valorCoffe);
	$("#"+trParentId+" #cafe").val(valorCafe);
	$("#"+trParentId+" #agua").val(valorAgua);

	if(idUnidade != ""){
		verificaUnidade($("#"+trParentId+" #unidade"));
	}

	if(valorCoffe == "" || valorCoffe == "2"){
		$("#"+trParentId+" .detalhesCoffe").hide();
	}else{
		$("#"+trParentId+" .detalhesCoffe").show();

		$("#"+trParentId+" #tipoCoffee").val($("#tipoCoffeeBriefing").val());
		$("#"+trParentId+" #qtdeCoffee").val($("#qtdeCoffeeBriefing").val());
		$("#"+trParentId+" #periodoCoffee").val($("#periodoCoffeeBriefing").val());
	}

	if(valorCafe == "" || valorCafe == "2"){
		$("#"+trParentId+" .detalhesCafe").hide();
	}else{
		$("#"+trParentId+" .detalhesCafe").show();

		$("#"+trParentId+" #qtdeCafe").val($("#qtdeCafeBriefing").val());
		$("#"+trParentId+" #periodoCafe").val($("#periodoCafeBriefing").val());
	}

	if(valorAgua == "" || valorAgua == "2"){
		$("#"+trParentId+" .detalhesAgua").hide();
	}else{
		$("#"+trParentId+" .detalhesAgua").show();

		$("#"+trParentId+" #qtdeAgua").val($("#qtdeAguaBriefing").val());
		$("#"+trParentId+" #periodoAgua").val($("#periodoAguaBriefing").val());
	}

	var tiposProdutoBriefing = document.getElementsByName('tipoProduto_cloneBriefing[]');
	var produtosBriefing = document.getElementsByName('produtos_cloneBriefing[]');
	var quantidadeProdutoBriefing = document.getElementsByName('quantidadeProduto_cloneBriefing[]');

	var idClone;

	if(trParentId == "primeiraReserva"){
		idClone = "clone1";
		trId = "1";
		idTbody = "tr_produtos_clone1";
	}else{
		idClone = trParentId;
		trId = trParentId;
		idTbody = "tr_produtos_"+idClone;
	}

	produtos = new Array();
	quantidades = new Array();

	for (var i=0; i <= tiposProdutoBriefing.length - 1; i++) {
		if(i == 0){
			if(trParentId == "primeiraReserva"){
				newLineId = "produtoClone"+trId;
			}else{
				newLineId = "produto"+trParentId.substr(0,1).toUpperCase()+trParentId.substr(1);
			}
		}else if(i == 1){
			newLineId = "InvClone"+idClone;
			$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_tr_produtos_"+idClone);
		}else{
			invLine = "tr_produtos_"+idClone+"_inv";

			newLine = $("#"+invLine).clone();

			numPossibilidades = 90231290523432 - 1;
			aleat = Math.random() * numPossibilidades;
			aleat = Math.floor(aleat);

			newLineId = "produtoClone"+parseInt(1) + aleat;

			newLine.attr("style","");
			newLine.attr("class","");
			newLine.attr("id",newLineId);
			newLine.appendTo("#tbody_"+idTbody);

			$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_tr_produtos_"+idClone);
		}

		preencheCloneProduto(tiposProdutoBriefing[i].value,produtosBriefing[i].value,quantidadeProdutoBriefing[i].value,newLineId,trParentId);

		if(produtosBriefing[i].value != "" && quantidadeProdutoBriefing[i].value != ""){
			produtos.push(produtosBriefing[i].value);
			quantidades.push(quantidadeProdutoBriefing[i].value);
		}
	}

	if(produtos.length > 0){
		$.ajax({
			type: "POST",
			url: "/agenda/process/calculaValorEquipamentos.php",
			data: "produtos="+produtos+"&quantidades="+quantidades,
			success: function(resposta){
				$("#"+trParentId+" #txtValorEquipamentos").html(resposta.replace(".",","));
				$("#"+trParentId+" #valorEquipamentos").val(resposta);
				calculaTotalReserva(trParentId);
			}
		});
	}

	calculaValorCoffee(trParentId, $("#"+trParentId+" #qtdeCoffee"));
	calculaValorCafe(trParentId, $("#"+trParentId+" #qtdeCafe"));
	calculaValorAgua(trParentId, $("#"+trParentId+" #qtdeAgua"));

	$("#"+trParentId+" #obsCoffee").val($("#obsCoffeeBriefing").val());
	$("#"+trParentId+" #obsBriefing").val($("#observacoesBriefing").val());
}

function preencheCloneProduto(idTipoProduto,idProduto,quantidade,lineId,trParentId){
	$("#"+lineId+" .tipoProduto").val(idTipoProduto);
	verificaTipoProdutoCallback(lineId,idProduto);
	$("#"+lineId+" .quantidadeProduto").val(quantidade);
}

function preencheCloneReserva(obj,lineId){
	if(obj.unidade_10_id != "0"){
		$("#"+lineId+" #unidade").val(obj.unidade_10_id);
		verificaUnidade($("#"+lineId+" #unidade"));
	}
	if(obj.reserva_22_data != ""){
		$("#"+lineId+" #data").val(obj.reserva_22_data);
		verificaData($("#"+lineId+" #data"));
	}
	if(obj.reserva_15_valorSala != "0.00"){
		$("#"+lineId+" #txtValorSala").html(obj.reserva_15_valorSala.replace(".",","));
		$("#"+lineId+" #valorSala").val(obj.reserva_15_valorSala);
	}
	if(obj.reserva_15_valorCoffee != "0.00"){
		$("#"+lineId+" #txtValorCoffee").html(obj.reserva_15_valorCoffee.replace(".",","));
		$("#"+lineId+" #valorCoffee").val(obj.reserva_15_valorCoffee);
	}
	if(obj.reserva_15_valorCafe != "0.00"){
		$("#"+lineId+" #txtValorCafe").html(obj.reserva_15_valorCafe.replace(".",","));
		$("#"+lineId+" #valorCafe").val(obj.reserva_15_valorCafe);
	}
	if(obj.reserva_15_valorAgua != "0.00"){
		$("#"+lineId+" #txtValorAgua").html(obj.reserva_15_valorAgua.replace(".",","));
		$("#"+lineId+" #valorAgua").val(obj.reserva_15_valorAgua);
	}
	if(obj.reserva_15_valorEquipamentos != "0.00"){
		$("#"+lineId+" #txtValorEquipamentos").html(obj.reserva_15_valorEquipamentos.replace(".",","));
		$("#"+lineId+" #valorEquipamentos").val(obj.reserva_15_valorEquipamentos);
	}
	if(obj.reserva_15_valorDesconto != "0.00" && obj.reserva_15_valorDesconto != ""){
		$("#"+lineId+" #valorDesconto").val(obj.reserva_15_valorDesconto.replace(".",","));
	}
	if(obj.reserva_15_valorTotal != "0.00"){
		$("#"+lineId+" #txtValorTotal").html(obj.reserva_15_valorTotal.replace(".",","));
		$("#"+lineId+" #valorTotal").val(obj.reserva_15_valorTotal);
	}
	if(obj.reserva_12_periodo != "0"){
		$("#"+lineId+" #periodo").val(obj.reserva_12_periodo);
		$("#"+lineId+" #periodo").attr("onchange","verificaPeriodo(this,'"+obj.reserva_10_id+"')")
		verificaPeriodoCallback(lineId,obj);
	}
}

function preencheCloneBriefingReserva(obj,lineId){
	if(obj.reserva_12_coffee != "0"){
		$("#"+lineId+" #coffee").val(obj.reserva_12_coffee);
		verificaCoffee($("#"+lineId+" #coffee"));

		if(obj.reserva_12_coffee == "1"){
			$("#"+lineId+" #tipoCoffee").val(obj.coffe_10_id);
			$("#"+lineId+" #qtdeCoffee").val(obj.coffee_20_quantidade);
			$("#"+lineId+" #periodoCoffee").val(obj.coffee_12_periodo);
		}
	}
	if(obj.reserva_12_cafe != "0"){
		$("#"+lineId+" #cafe").val(obj.reserva_12_cafe);
		verificaCafe($("#"+lineId+" #cafe"));

		if(obj.reserva_12_cafe == "1"){
			$("#"+lineId+" #qtdeCafe").val(obj.reserva_20_quantidadeCafe);
			$("#"+lineId+" #periodoCafe").val(obj.reserva_12_periodoCafe);
		}
	}
	if(obj.reserva_12_agua != "0"){
		$("#"+lineId+" #agua").val(obj.reserva_12_agua);
		verificaAgua($("#"+lineId+" #agua"));

		if(obj.reserva_12_agua == "1"){
			$("#"+lineId+" #qtdeAgua").val(obj.reserva_20_quantidadeAgua);
			$("#"+lineId+" #periodoAgua").val(obj.reserva_12_periodoAgua);
		}
	}

	$("#"+lineId+" #obsCoffee").val(obj.reserva_60_coffeeObs);
	$("#"+lineId+" #obsBriefing").val(obj.reserva_60_briefingObs);
	$("#"+lineId+" #observacoes").val(obj.reserva_60_observacoes);
}

function carregaEdicaoOportunidade(idOportunidade){
	$.ajax({cache:false});
		$.post(
			'/agenda/process/selecionaOportunidade.php',
			{idOportunidade: idOportunidade},

			function(data){
				$.each(data, function(i, obj){
					$("#status").val(obj.proposta_12_status);
					if(obj.cliente_10_id != "0"){
						$("#jaCliente").val("1");
						verificaJaCliente($("#jaCliente"));
						$("#clientes").val(obj.cliente_10_id);
						if(obj.contato_10_id != "0"){
							$("#jaContato").val("1");
							verificaJaContato($("#jaContato"));
							carregaComboDependente("contatos",obj.contato_10_id,$("#clientes"));
						}
					}
					$("#itensProposta").val(obj.proposta_60_itens);
					$("#vencimentoFatura").val(obj.proposta_12_vencimentoFatura);

					$.each(obj.dadosBriefing, function(j, objBrie){
						if(objBrie.briefing_20_quantidadeParticipantes != ""){
							$("#qtdeParticipantesBriefing").val(objBrie.briefing_20_quantidadeParticipantes);
						}
						if(objBrie.unidade_10_id != "0"){
							$("#unidadeBriefing").val(objBrie.unidade_10_id);
							verificaUnidadeBriefing($("#unidadeBriefing"));
						}
						if(objBrie.briefing_12_periodo != "0"){
							$("#periodoBriefing").val(objBrie.briefing_12_periodo);
							verificaPeriodoBriefing('edit',objBrie);
						}
						if(objBrie.briefing_12_coffee != "0"){
							$("#coffeeBriefing").val(objBrie.briefing_12_coffee);
							verificaCoffeeBriefing($("#coffeeBriefing"));
							if(objBrie.briefing_12_coffee == "1"){
								$("#tipoCoffeeBriefing").val(objBrie.coffe_10_id);
								$("#qtdeCoffeeBriefing").val(objBrie.coffee_20_quantidade);
								$("#periodoCoffeeBriefing").val(objBrie.coffee_12_periodo);
							}
						}
						if(objBrie.briefing_12_cafe != "0"){
							$("#cafeBriefing").val(objBrie.briefing_12_cafe);
							verificaCafeBriefing($("#cafeBriefing"));
							if(objBrie.briefing_12_cafe == "1"){
								$("#qtdeCafeBriefing").val(objBrie.briefing_20_quantidadeCafe);
								$("#periodoCafeBriefing").val(objBrie.briefing_12_periodoCafe);
							}
						}
						if(objBrie.briefing_12_agua != "0"){
							$("#aguaBriefing").val(objBrie.briefing_12_agua);
							verificaAguaBriefing($("#aguaBriefing"));
							if(objBrie.briefing_12_agua == "1"){
								$("#qtdeAguaBriefing").val(objBrie.briefing_20_quantidadeAgua);
								$("#periodoAguaBriefing").val(objBrie.briefing_12_periodoAgua);
							}
						}
						$.each(objBrie.briefingEquipamentos, function(k, objBrieEquip){
							if(k == "1"){
								newLineId = "produtoCloneBriefing";
							}else{
								invLine = "tr_produtos_cloneBriefing_inv";

								newLine = $("#"+invLine).clone();

								numPossibilidades = 90231290523432 - 1;
								aleat = Math.random() * numPossibilidades;
								aleat = Math.floor(aleat);

								newLineId = "produtoClone"+parseInt(1) + aleat;

								newLine.attr("style","");
								newLine.attr("class","");
								newLine.attr("id",newLineId);
								newLine.appendTo("#tbody_tr_produtos_cloneBriefing");

								$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_tr_produtos_cloneBriefing");
							}
							preencheCloneProduto(objBrieEquip.tipo_produto_10_id,objBrieEquip.produto_10_id,objBrieEquip.briefing_equipamento_20_quantidade,newLineId);
						});

						$("#obsCoffeeBriefing").val(objBrie.briefing_60_coffeeObs);
						$("#observacoesBriefing").val(objBrie.briefing_60_observacoes);
					});

					if(obj.dadosReserva != ""){
						$("#criarAgenda").val("1");
						$("#agendaReservas").show();
					}

					$.each(obj.dadosReserva, function(l, objRes){
						if(l == "1"){
							newLineResId = "primeiraReserva"
						}else{
							invLine = "tr_reserva_inv";

							newLine = $("#"+invLine).clone();

							numPossibilidades = 90231290523432 - 1
							aleat = Math.random() * numPossibilidades
							aleat = Math.floor(aleat)

							newLineNr = parseInt(1) + aleat;
							newLineResId = "clone"+ newLineNr;

							newLine.attr("style","");
							newLine.attr("class","");
							newLine.attr("id",newLineResId);
							newLine.appendTo("#tbody_tr_reserva");

							$("#"+newLineResId+" .lineRemove").attr("id","rm_"+newLineResId+"_"+$(this).attr("id"));
		                    $("#"+newLineResId+" #tbody_tr_produtos_clone").attr("id","tbody_tr_produtos_"+newLineResId);
							$("#"+newLineResId+" #produtoClone").attr("id","produtoClone"+newLineNr);
		                    $("#"+newLineResId+" #tipoProduto_clone").attr("id","tipoProduto_"+newLineResId).attr("name","tipoProduto_"+newLineResId+"[]");
		                    $("#"+newLineResId+" #produtos_clone").attr("id","produtos_"+newLineResId).attr("name","produtos_"+newLineResId+"[]");
		                    $("#"+newLineResId+" #quantidadeProduto_clone").attr("id","quantidadeProduto_"+newLineResId).attr("name","quantidadeProduto_"+newLineResId+"[]");
		                    $("#"+newLineResId+" #tr_produtos_clone").attr("id","tr_produtos_"+newLineResId);
		                    $("#"+newLineResId+" #tr_produtos_clone_inv").attr("id","tr_produtos_"+newLineResId+"_inv");
		                    $("#"+newLineResId+" #show_clone").attr("id","show_"+newLineResId);
                    		$("#"+newLineResId+" #min_clone").attr("id","min_"+newLineResId);
		                    $("#"+newLineResId+" #nrClone").val(newLineResId);
		                    newLine.find(".valor").maskMoney({showSymbol:false, thousands:'', decimal:','});

							dataPicker = newLine.find(".data").datepicker({format:'dd/mm/yyyy'}).on('changeDate', function(ev){
								dataPicker.datepicker('hide');
								dataPicker.blur();
								verificaData(this);
							});
						}

						preencheCloneReserva(objRes, newLineResId);

						$.each(objRes.reservaEquipamentos, function(m, objResEquip){
							if(m == "1"){
								if(newLineResId == "primeiraReserva"){
									newLineId = "produtoClone1";
									rmLineId = "tr_produtos_clone1";
								}else{
									newLineId = "produto"+newLineResId.substr(0,1).toUpperCase()+newLineResId.substr(1);
									rmLineId = "tr_produtos_"+newLineResId;
								}

								$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_"+rmLineId);
							}else{
								if(newLineResId == "primeiraReserva"){
									invLine = "tr_produtos_clone1_inv";
									rmLineId = "tr_produtos_clone1";
									tBody = "#tbody_tr_produtos_clone1";
								}else{
									invLine = "tr_produtos_"+newLineResId+"_inv";
									rmLineId = "tr_produtos_"+newLineResId;
									tBody = "#tbody_tr_produtos_"+newLineResId;
								}


								newLine = $("#"+invLine).clone();

								numPossibilidades = 90231290523432 - 1;
								aleat = Math.random() * numPossibilidades;
								aleat = Math.floor(aleat);

								newLineId = "produtoClone"+parseInt(1) + aleat;

								newLine.attr("style","");
								newLine.attr("class","");
								newLine.attr("id",newLineId);
								newLine.appendTo(tBody);

								$("#"+newLineId+" .lineRemoveProduto").attr("id","rm_"+newLineId+"_"+rmLineId);
							}

							preencheCloneProduto(objResEquip.tipo_produto_10_id,objResEquip.produto_10_id,objResEquip.reserva_equipamento_20_quantidade,newLineId);
						});
					});
				});
			},'json');
}
function pesquisarOportunidade()
{
	$("#tabelaBusca").empty();
	$.post(
		'/agenda/process/buscarOportunidades.php',
		{nrOportunidade:$("#nrOportunidade").val(),status:$("#status").val(),cliente:$("#clientes").val(),contato:$("#contatos").val()},

		function(data){

			$("#tabelaBusca").append("<tr><th>Número</th><th>Status</th><th>Cliente</th><th>Contato</th><th>Data</th><th>Ações</th></tr>");
			$.each(data, function(i,data){
				$("#tabelaBusca").append("<tr><td>"+data.idOportunidade+"</td><td>"+data.status+"</td><td>"+data.nomeCliente+"</td><td>"+data.nomeContato+"</td><td>"+data.dtOportunidade+"</td><td><a href='editarOportunidade.php?id="+data.idOportunidade+"' class='btn btn-info' style='float:left; margin-right:10px;'>Editar</a><a onclick=\"deletaOportunidade('"+data.idOportunidade+"',this)\" class='btn btn-danger' style='float:left;'>Deletar</a></td></tr>");
			});
		},'json');

	$("#resultadoBusca").show();
}

function deletaOportunidade(idOportunidade,el){
	if(confirm("Deseja realmente deletar essa oportunidade e suas reservas?")){
		$.ajax({
			type: "POST",
			url: "/agenda/process/deletarOportunidade.php",
			data: "io="+idOportunidade,
			success: function(resposta){
				if(resposta == 'ok'){
					alert("Oportunidade deletada!");
					$(el).closest("tr").remove();
				}else{
					alert("Ocorreu um erro");
				}
			}
		});
	}else{
		return false;
	}
}

function minimizarReserva(el){
	slices = $(el).attr("id");
    slices = slices.split("_");
    $("#"+slices[1]+" td:eq(1)").hide("slow");
    if($("#"+slices[1]+" #data").val() != ''){
        $("#"+slices[1]+" .showData h5").html("+ " + $("#"+slices[1]+" #data").val() + " - R$" + $("#"+slices[1]+" #valorTotal").val().replace(".",","));
    }else{
    	$("#"+slices[1]+" .showData h5").html("+ Data" + " - R$" + $("#"+slices[1]+" #valorTotal").val().replace(".",","));
    }
    $("#"+slices[1]+" td:eq(0)").show();
}

function calculaValorSala(trParentId, el){
	if ($("#"+trParentId+" #periodo").val() != '' && $("#"+trParentId+" #salas").val() != '') {
		$.ajax({
			type: "POST",
			url: "/agenda/process/calculaValorSala.php",
			data: "periodo="+$("#"+trParentId+" #periodo").val()+"&sala="+$("#"+trParentId+" #salas").val(),
			success: function(resposta){
				$("#"+trParentId+" #txtValorSala").html(resposta.replace(".",","));
				$("#"+trParentId+" #valorSala").val(resposta);
				calculaTotalReserva(trParentId);
			}
		});
	}
}

function calculaValorCoffee(trParentId, el){
	if($("#"+trParentId+" #coffee").val() == '1'){
		if ($("#"+trParentId+" #tipoCoffee").val() != '' && $("#"+trParentId+" #qtdeCoffee").val() != '' && $("#"+trParentId+" #periodoCoffee").val() != '') {
			$.ajax({
				type: "POST",
				url: "/agenda/process/calculaValorCoffee.php",
				data: "idCoffee="+$("#"+trParentId+" #tipoCoffee").val()+"&qtdeCoffee="+$("#"+trParentId+" #qtdeCoffee").val()+"&periodoCoffee="+$("#"+trParentId+" #periodoCoffee").val(),
				success: function(resposta){
					$("#"+trParentId+" #txtValorCoffee").html(resposta.replace(".",","));
					$("#"+trParentId+" #valorCoffee").val(resposta);
					calculaTotalReserva(trParentId);
				}
			});
		}
	}else{
		$("#"+trParentId+" #txtValorCoffee").html("0,00");
		$("#"+trParentId+" #valorCoffee").val("0.00");
	}
}

function calculaValorCafe(trParentId, el){
	if($("#"+trParentId+" #cafe").val() == '1'){
		if ($("#"+trParentId+" #qtdeCafe").val() != '' && $("#"+trParentId+" #periodoCafe").val() != '') {
			$.ajax({
				type: "POST",
				url: "/agenda/process/calculaValorCafe.php",
				data: "qtdeCafe="+$("#"+trParentId+" #qtdeCafe").val()+"&periodoCafe="+$("#"+trParentId+" #periodoCafe").val(),
				success: function(resposta){
					$("#"+trParentId+" #txtValorCafe").html(resposta.replace(".",","));
					$("#"+trParentId+" #valorCafe").val(resposta);
					calculaTotalReserva(trParentId);
				}
			});
		}
	}else{
		$("#"+trParentId+" #txtValorCafe").html("0,00");
		$("#"+trParentId+" #valorCafe").val("0.00");
	}
}

function calculaValorAgua(trParentId, el){
	if($("#"+trParentId+" #agua").val() == '1'){
		if ($("#"+trParentId+" #qtdeAgua").val() != '' && $("#"+trParentId+" #periodoAgua").val() != '') {
			$.ajax({
				type: "POST",
				url: "/agenda/process/calculaValorAgua.php",
				data: "qtdeAgua="+$("#"+trParentId+" #qtdeAgua").val()+"&periodoAgua="+$("#"+trParentId+" #periodoAgua").val(),
				success: function(resposta){
					$("#"+trParentId+" #txtValorAgua").html(resposta.replace(".",","));
					$("#"+trParentId+" #valorAgua").val(resposta);
					calculaTotalReserva(trParentId);
				}
			});
		}
	}else{
		$("#"+trParentId+" #txtValorAgua").html("0,00");
		$("#"+trParentId+" #valorAgua").val("0.00");
	}
}

function calculaValorEquipamentos(trParentId){
	regex = /inv\b/;
	produtos = new Array();
	quantidades = new Array();

	idTable = $('#'+trParentId).find('table').attr("id");

 	slices = idTable.split("_");
 	lastSliceNr = slices.length -1;
 	nrLinhas = $('#'+idTable+' tr:last').index() + 1;

	$("#"+idTable+" tr").each(function(){
		idRow = $(this).attr("id")
		if(!regex.test(idRow)){
			if($("#"+idRow+" select[id='produtos_"+slices[lastSliceNr]+"']").val() != "" && $("#"+idRow+" input[id='quantidadeProduto_"+slices[lastSliceNr]+"']").val() != ""){
				produtos.push($("#"+idRow+" select[id='produtos_"+slices[lastSliceNr]+"']").val());
				quantidades.push($("#"+idRow+" input[id='quantidadeProduto_"+slices[lastSliceNr]+"']").val());
			}
		}
	});

	if(produtos.length > 0){
		$.ajax({
			type: "POST",
			url: "/agenda/process/calculaValorEquipamentos.php",
			data: "produtos="+produtos+"&quantidades="+quantidades,
			success: function(resposta){
				$("#"+trParentId+" #txtValorEquipamentos").html(resposta.replace(".",","));
				$("#"+trParentId+" #valorEquipamentos").val(resposta);
				calculaTotalReserva(trParentId);
			}
		});
	}

}

function calculaTotalReserva(trParentId){
	valorSala = parseFloat($("#"+trParentId+" #valorSala").val());
	valorCoffee = parseFloat($("#"+trParentId+" #valorCoffee").val());
	valorAgua = parseFloat($("#"+trParentId+" #valorAgua").val());
	valorCafe = parseFloat($("#"+trParentId+" #valorCafe").val());
	valorEquipamentos = parseFloat($("#"+trParentId+" #valorEquipamentos").val());
	valorDesconto = parseFloat(($("#"+trParentId+" #valorDesconto").val()).replace(".",",")) || 0;

	total = ((valorSala + valorCoffee + valorAgua + valorCafe + valorEquipamentos) - valorDesconto).toFixed(2);

	$("#"+trParentId+" #txtValorTotal").html(total.replace(".",","));
	$("#"+trParentId+" #valorTotal").val(total);
}

function calculaDesconto(el){
	trParentId = $(el).closest("table").closest("tr").attr("id");
	calculaTotalReserva(trParentId);
}
