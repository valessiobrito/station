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
function resetaCombo(el){
	$("select[name='"+el+"']").empty();	
}