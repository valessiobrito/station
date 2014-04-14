<?php
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

if ($_SESSION['LogadoSTATION'] != "1" && (isset($_GET['id']) && $_GET['id'] > 0)){
	header("Location: index.php");
}else{

    $contatoController = new ContatoController();
    $contato = $contatoController->listActionByContactId($_GET['id']);

    if (count($contato) == 0){
        header("Location: ".$urlContatos."/listarContato.php");
    }

    $contatoClass = new Contato();
    $contatoClass->fetchEntity($contato[1]);
	$title = "Editar Contato";

?>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/header.php");?>

<script>
	$(document).ready(function(){
		carregaCombo('clientes','<?php echo $contatoClass->getClienteId(); ?>');
	});
</script>

<div class="content">
			<ul class="breadcrumb">
				<li><a href="/agenda/painel.php">Home</a> <span class="divider">/</span></li>
                <li><a href="/agenda/modules/contatos/listarContato.php">Contatos</a> <span class="divider">/</span></li>
				<li class="active">Editar Contato</li>
			</ul>
			<div class="span10">
				<div class="page-header">
					<h1>Editar Contato</h1>
				</div>
                <form name="gravarContato" method="post" action="<?php echo $urlContatos;?>/action/crudContato.php?op=editar">
                    <div class="row">
                        <div class="span10">
                            <select class="span6" id="clientes" name="clientes">
                                <option value="">Escolha a empresa:</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="span10" style="margin-bottom:20px;">
                            <input type="text" class="span3" id="nomeContato" name="nomeContato" placeholder="Primeiro Nome" value="<?php echo $contatoClass->getNome(); ?>">
                            <input type="text" class="span4" id="sobrenomeContato" name="sobrenomeContato" placeholder="Sobrenome" value="<?php echo $contatoClass->getSobrenome(); ?>">
                            <br>
                            <input type="text" class="span3" id="emailContato" name="emailContato" placeholder="E-mail" value="<?php echo $contatoClass->getEmail(); ?>">
                            <input type="text" class="span2" id="telefoneContato" name="telefoneContato" placeholder="Telefone Comercial" value="<?php echo $contatoClass->getTelefone(); ?>">
                            <input type="text" class="span2" id="celularContato" name="celularContato" placeholder="Celular" value="<?php echo $contatoClass->getCelular(); ?>">
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $contatoClass->getId();?>">
                    <input type="button" onclick="validaContato()" class="btn btn-info btn-large" value="Salvar" />
                </form>
			</div>
		</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/agenda/inc/footer.php");?>
<?php
	}
?>