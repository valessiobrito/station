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

			$contatoId = 0;

			$contatoController = new ContatoController();
			foreach($nomeContato as $kContato => $vContato){
				if ($nomeContato[$kContato] != "" && $clientes != ""){
					$contatoClass = new Contato();

					$contatoClass->setNome($nomeContato[$kContato]);
					$contatoClass->setSobrenome($sobrenomeContato[$kContato]);
					$contatoClass->setEmail($emailContato[$kContato]);
					$contatoClass->setTelefone($telefoneContato[$kContato]);
					$contatoClass->setCelular($celularContato[$kContato]);
					$contatoClass->setClienteId($clientes);

					$contatoId = $contatoController->insertAction($contatoClass);
				}
			}

            if ($contatoId != 0) {
                echo("<script>
					alert('Contato salvo com sucesso!')
					window.location = '".$urlContatos."/listarContato.php';
					</script>");
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlContatos."/novoContato.php';
					</script>");
            }

        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlContatos."/novoContato.php';
				</script>");
        }

        break;
    case "editar":

        if (isset($_POST)) {
            // Se o POST estiver setado
            foreach ($_POST as $k => $v) {
                $$k = $v;
            }

            if ($id != "" && $clientes != "" && $nomeContato != "") {

				$contatoController = new ContatoController();
				$contatoClass = new Contato();

				$contatoClass->setNome($nomeContato);
				$contatoClass->setSobrenome($sobrenomeContato);
				$contatoClass->setEmail($emailContato);
				$contatoClass->setTelefone($telefoneContato);
				$contatoClass->setCelular($celularContato);
				$contatoClass->setClienteId($clientes);
				$contatoClass->setId($id);

				if ($contatoController->editAction($contatoClass)) {
                    echo("<script>
						alert('Contato editado com sucesso!')
						window.location = '".$urlContatos."/listarContato.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlContatos."/editarContato.php?id=".$id."';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlContatos."/editarContato.php?id=".$id."';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlContatos."/editarContato.php?id=".$id."';
				</script>");
        }

        break;
    case "listar":
    default:
        header("Location: $urlClientes/listarCliente.php");

        break;
}
?>