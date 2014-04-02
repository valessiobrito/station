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

            if ($nome != "" && $cnpj != "" && $razaoSocial != "" && $endereco != "" && $cidade != "" && $estado != "" && $cep != "") {

                $clienteClass = new Cliente();
                $clienteController = new ClienteController();

                $clienteClass->setNome($nome);
				$clienteClass->setCnpj($cnpj);
				$clienteClass->setRazaoSocial($razaoSocial);
				$clienteClass->setInscMunicipal($inscMunicipal);
				$clienteClass->setInscEstadual($inscEstadual);
				$clienteClass->setEndereco($endereco);
				$clienteClass->setComplemento($complemento);
				$clienteClass->setCidade($cidade);
				$clienteClass->setEstado($estado);
				$clienteClass->setCep($cep);
				$clienteClass->setNomeResponsavel($nomeResponsavel);
				$clienteClass->setSobrenomeResponsavel($sobrenomeResponsavel);
				$clienteClass->setEmailResponsavel($emailResponsavel);
				$clienteClass->setTelefoneResponsavel($telefoneResponsavel);
				$clienteClass->setCelularResponsavel($celularResponsavel);

				if($clientes == ""){
					$clientes = 0;
				}

				$clienteClass->setIdPai($clientes);

                $clienteId = $clienteController->insertAction($clienteClass);

                if ($clienteId != 0) {
                    echo("<script>
						alert('Cliente salvo com sucesso!')
						window.location = '".$urlClientes."/listarCliente.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlClientes."/novoCliente.php';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlClientes."/novoCliente.php';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlClientes."/novoCliente.php';
				</script>");
        }

        break;
    case "editar":

        if (isset($_POST)) {
            // Se o POST estiver setado
            foreach ($_POST as $k => $v) {
                $$k = $v;
            }

            if ($id != "" && $nome != "" && $cnpj != "" && $razaoSocial != "" && $endereco != "" && $cidade != "" && $estado != "" && $cep != "") {

                $clienteClass = new Cliente();
                $clienteController = new ClienteController();

				$clienteClass->setId($id);
                $clienteClass->setNome($nome);
				$clienteClass->setCnpj($cnpj);
				$clienteClass->setRazaoSocial($razaoSocial);
				$clienteClass->setInscMunicipal($inscMunicipal);
				$clienteClass->setInscEstadual($inscEstadual);
				$clienteClass->setEndereco($endereco);
				$clienteClass->setComplemento($complemento);
				$clienteClass->setCidade($cidade);
				$clienteClass->setEstado($estado);
				$clienteClass->setCep($cep);
				$clienteClass->setNomeResponsavel($nomeResponsavel);
				$clienteClass->setSobrenomeResponsavel($sobrenomeResponsavel);
				$clienteClass->setEmailResponsavel($emailResponsavel);
				$clienteClass->setTelefoneResponsavel($telefoneResponsavel);
				$clienteClass->setCelularResponsavel($celularResponsavel);

				if($clientes == ""){
					$clientes = 0;
				}

				$clienteClass->setIdPai($clientes);

                if ($clienteController->editAction($clienteClass)) {
                    echo("<script>
						alert('Cliente editado com sucesso!')
						window.location = '".$urlClientes."/listarCliente.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlClientes."/editarCliente.php?id=".$id."';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlClientes."/editarCliente.php?id=".$id."';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlClientes."/editarCliente.php?id=".$id."';
				</script>");
        }

        break;
    case "listar":
    default:
        header("Location: $urlClientes/listarCliente.php");

        break;
}
?>