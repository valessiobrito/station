<?php
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

if ($_SESSION['LogadoSTATION'] != "1" && (isset($_GET['id']) && $_GET['id'] > 0)){
	header("Location: index.php");
}else{

    $usuarioController = new UsuarioController();
    $usuario = $usuarioController->listAction($_GET['id'] , 1);

    if (count($usuario) == 0){
        header("Location: ".$urlUsuarios."/listarUsuario.php");
    }

    $usuarioClass = new Usuario();
    $usuarioClass->fetchEntity($usuario[1]);
	$title = "Editar Usuário";

?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tipo").val(<?php echo $usuarioClass->getTipo();?>);
        $("#ativo").val(<?php echo $usuarioClass->getAtivo();?>);
    });
</script>

<div class="content">
			<ul class="breadcrumb">
				<li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/usuarios/listarUsuario.php">Usuários</a> <span class="divider">/</span></li>
				<li class="active">Editar Usuário</li>
			</ul>
			<div class="span10">
				<div class="page-header">
					<h1>Editar Usuário</h1>
				</div>
                <form name="gravarUsuario" method="post" action="<?php echo $urlUsuarios;?>/action/crudUsuario.php?op=editar" enctype="multipart/form-data">
                    <h4>Informações do Usuário</h4>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span5" id="nome" name="nome" placeholder="Nome" value="<?php echo $usuarioClass->getNome();?>">
                            <br>
                            <input type="text" class="span5" id="email" name="email" placeholder="E-mail" value="<?php echo $usuarioClass->getEmail();?>">
                            <br>
                            <input type="text" class="span5" id="login" name="login" placeholder="Login" value="<?php echo $usuarioClass->getLogin();?>">
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
                    <input type="hidden" name="id" value="<?php echo $usuarioClass->getId();?>">
                    <input type="button" onclick="validaUsuario('editar')" class="btn btn-info btn-large" value="Salvar" />
                </form>
			</div>
		</div>
<?php include("inc/footer.php");?>
<?php
	}
?>