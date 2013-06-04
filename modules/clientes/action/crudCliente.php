<?php

include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/agenda/conf/classLoader.php';

$op = isset($_GET['op']) ? $_GET['op'] : "listar";

switch ($op) {
    case "novo":

        if (isset($_POST)) {
            // Se o POST estiver setado
            foreach ($_POST as $k => $v) {
                $$k = $v;
            }
            
            if ($sala != "" && $numero != "" && $valorManha != "" && $valorTarde != "" && $valorNoite != "" && $valorIntegral != "" && $metros != "" && $uMesa != "" && $uSimples != "" && $grupos != "" && $escolar != "" && $auditorio != "" && $unidade != "") {

                $salaClass = new Sala();
                $salaController = new SalaController();

                $salaClass->setNome($sala);
                $salaClass->setNumero($numero);
				$salaClass->setValorManha($salaController->formataValor($valorManha,'gravar'));
				$salaClass->setValorTarde($salaController->formataValor($valorTarde,'gravar'));
				$salaClass->setValorNoite($salaController->formataValor($valorNoite,'gravar'));
				$salaClass->setValorIntegral($salaController->formataValor($valorIntegral,'gravar'));
				$salaClass->setMetros($metros);
				$salaClass->setUMesa($uMesa);
				$salaClass->setUSimples($uSimples);
				$salaClass->setGrupos($grupos);
				$salaClass->setEscolar($escolar);
				$salaClass->setAuditorio($auditorio);
				$salaClass->setUnidadeId($unidade);
                
                $salaId = $salaController->insertAction($salaClass);

                if ($salaId != 0) {
                    echo("<script>
						alert('Sala salva com sucesso!')
						window.location = '".$urlUnidades."/listarUnidade.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlUnidades."/novaSala.php';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlUnidades."/novaSala.php';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlUnidades."/novaSala.php';
				</script>");
        }

        break;
    case "editar":

        if (isset($_POST)) {
            // Se o POST estiver setado
            foreach ($_POST as $k => $v) {
                $$k = $v;
            }
           
            if ($id != "" && $sala != "" && $numero != "" && $valorManha != "" && $valorTarde != "" && $valorNoite != "" && $valorIntegral != "" && $metros != "" && $uMesa != "" && $uSimples != "" && $grupos != "" && $escolar != "" && $auditorio != "" && $unidade != "") {

                $salaClass = new Sala();
                $salaController = new SalaController();

                $salaClass->setId($id);
                $salaClass->setNome($sala);
                $salaClass->setNumero($numero);
				$salaClass->setValorManha($salaController->formataValor($valorManha,'gravar'));
				$salaClass->setValorTarde($salaController->formataValor($valorTarde,'gravar'));
				$salaClass->setValorNoite($salaController->formataValor($valorNoite,'gravar'));
				$salaClass->setValorIntegral($salaController->formataValor($valorIntegral,'gravar'));
				$salaClass->setMetros($metros);
				$salaClass->setUMesa($uMesa);
				$salaClass->setUSimples($uSimples);
				$salaClass->setGrupos($grupos);
				$salaClass->setEscolar($escolar);
				$salaClass->setAuditorio($auditorio);
				$salaClass->setUnidadeId($unidade);

                if ($salaController->editAction($salaClass)) {
                    echo("<script>
						alert('Sala editada com sucesso!')
						window.location = '".$urlUnidades."/listarUnidade.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlUnidades."/editarSala.php?id=".$id."';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlUnidades."/editarSala.php?id=".$id."';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlUnidades."/editarSala.php?id=".$id."';
				</script>");
        }

        break;
    case "listar":
    default:
        header("Location: $urlClientes/listarCliente.php");

        break;
}
?>