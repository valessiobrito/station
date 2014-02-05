<?php
$geralClass = $_SERVER['DOCUMENT_ROOT']."/agenda/modules";

// Configuração dos módulos

$unidadesClass = $geralClass."/unidades";
$produtosClass = $geralClass."/produtos";
$clientesClass = $geralClass."/clientes";
$contatosClass = $geralClass."/contatos";
$usuariosClass = $geralClass."/usuarios";
$oportunidadesClass = $geralClass."/oportunidades";

/* Unidades Module */
include_once $unidadesClass.'/entity/Sala.php';
include_once $unidadesClass.'/controller/SalaController.php';
include_once $unidadesClass.'/controller/UnidadeController.php';
/* /Unidades Module */

/* Unidades Module */
include_once $produtosClass.'/entity/Produto.php';
include_once $produtosClass.'/controller/ProdutoController.php';
/* /Unidades Module */

/* Clientes Module */
include_once $clientesClass.'/entity/Cliente.php';
include_once $clientesClass.'/controller/ClienteController.php';
/* /Clientes Module */

/* Contatos Module */
include_once $contatosClass.'/entity/Contato.php';
include_once $contatosClass.'/controller/ContatoController.php';
/* Contatos Module */

/* Propostas Module */
include_once $oportunidadesClass.'/entity/Oportunidade.php';
include_once $oportunidadesClass.'/controller/OportunidadeController.php';
include_once $oportunidadesClass.'/entity/Reserva.php';
include_once $oportunidadesClass.'/controller/ReservaController.php';
include_once $oportunidadesClass.'/entity/ReservaEquipamento.php';
include_once $oportunidadesClass.'/controller/ReservaEquipamentoController.php';
include_once $oportunidadesClass.'/entity/Briefing.php';
include_once $oportunidadesClass.'/controller/BriefingController.php';
include_once $oportunidadesClass.'/entity/BriefingEquipamento.php';
include_once $oportunidadesClass.'/controller/BriefingEquipamentoController.php';
/* /Propostas Module */
?>