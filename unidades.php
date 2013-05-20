<?php
	ob_start();
	session_start();
	
	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Unidades e Salas";
?>
<?php include("inc/header.php");?>
		<script>
			$(document).ready(function(){
				carregaCombo('unidade','');
			});	
		</script> 
        
        <div class="content">
        	<ul class="breadcrumb">
                <li><a href="painel.php">Home</a> <span class="divider">/</span></li>
                <li class="active">Unidades e Salas</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Unidades e Salas</h1>
                </div>
                <h4>Cadastrar Nova</h4>
                <div class="row">
                    <div class="span10">
                    	<a href="novaSala.php" role="button" class="btn btn-info">Adicionar Unidade/Sala</a>
                	</div>
                </div>
                <br>
                <form name="gravarSala" method="post" action="inc/gravarSala.php">
                    <h4>Pesquisar</h4>
                    <div class="row">
                        <div class="span10">
                        	<div class="input-append">
                            	<select class="span6" id="unidade" name="unidade">
                                	<option value="">Escolha a unidade:</option>
                                </select>
                                <a role="button" class="btn" onclick="pesquisarSalas()">Mostrar</a>
                            </div>
                        </div>                        
                    </div>
                </form>
                <br>
                <div id="resultadoBusca" style="display:none;">
                    <h4>Resultado da busca:</h4>
                    <div class="row">
                        <table id="tabelaBusca" class="table table-bordered table-striped">
                            <tr>
                                <th>Unidade</th>
                                <th>Sala</th>
                                <th>Ações</th>
                            </tr>
                            
                            <tr>
                                <td><?=$nomeCliente?></td>
                                <td><?=$razaoSocial?></td>
                                <td><a href="editarSala.php?is=<?=$idSala?>" class="btn btn-info" style="float:left; margin-right:10px;">Editar</a><a href="#" onclick="deletaCliente('<?=$codCliente?>')" class="btn btn-danger" style="float:left;">Deletar</a></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php include("inc/footer.php");?>
<?php
	}	
?>