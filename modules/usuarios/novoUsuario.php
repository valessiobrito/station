<?php
	ob_start();
	session_start();

	if ($_SESSION['LogadoSTATION'] != "1"){
		header("Location: index.php");
	}else{
		$title = "Adicionar Usuário";
?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
        <div class="content">
        	<ul class="breadcrumb">
                <li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/usuarios/listarUsuario.php">Usuários</a> <span class="divider">/</span></li>
                <li class="active">Novo Usuário</li>
            </ul>
            <div class="span10">
            	<div class="page-header">
                	<h1>Novo Usuário</h1>
                </div>
                <form name="gravarUsuario" method="post" action="<?php echo $urlUsuarios;?>/action/crudUsuario.php?op=novo" enctype="multipart/form-data">
                    <h4>Informações do Usuário</h4>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span5" id="nome" name="nome" placeholder="Nome">
                            <br>
                            <input type="text" class="span5" id="email" name="email" placeholder="E-mail">
                            <br>
                            <input type="text" class="span5" id="login" name="login" placeholder="Login">
                            <br>
                            <input type="password" class="span5" id="senha" name="senha" placeholder="Senha">
                            <br>
                            <select name="tipo" id="tipo" class="span5">
                                <option value="">Tipo de permissão:</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuário Comum</option>
                            </select>
                            <br>
                            <span class="span2" style="margin:10px 0 0 0;">Imagem do usuário: </span><input type="file" class="span5" name="imagem" id="imagem">
                            <br>
                            <br>
                            <select name="ativo" id="ativo" class="span5">
                                <option value="">Usuário Ativo?</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <input type="button" onclick="validaUsuario('salvar')" class="btn btn-info btn-large" value="Salvar" />
                </form>
            </div>
        </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>