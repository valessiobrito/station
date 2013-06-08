<?php
$geralClass = $_SERVER['DOCUMENT_ROOT']."/agenda/modules";

// Configuração dos módulos

$unidadesClass = $geralClass."/unidades";
$produtosClass = $geralClass."/produtos";
$clientesClass = $geralClass."/clientes";
$usuariosClass = $geralClass."/usuarios";

/* Unidades Module */
include_once $unidadesClass.'/entity/Sala.php';
include_once $unidadesClass.'/controller/SalaController.php';
/* /Unidades Module */

/* Unidades Module */
include_once $produtosClass.'/entity/Produto.php';
include_once $produtosClass.'/controller/ProdutoController.php';
/* /Unidades Module */

/* Clientes Module */
include_once $clientesClass.'/entity/Cliente.php';
include_once $clientesClass.'/controller/ClienteController.php';
include_once $clientesClass.'/entity/Contato.php';
include_once $clientesClass.'/controller/ContatoController.php';
/* /Clientes Module */
?>