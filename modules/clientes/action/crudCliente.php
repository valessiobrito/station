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
            
            if ($nome != "" && $cnpj != "" && $razaoSocial != "" && $inscEstadual != "" && $endereco != "" && $cidade != "" && $estado != "" && $cep != "" && $nomeResponsavel != "" && $sobrenomeResponsavel != "" && $emailResponsavel != "" && $telefoneResponsavel != "" && $celularResponsavel != "") {

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
				$clienteClass->setNomeResposavel($nomeResponsavel);
				$clienteClass->setSobrenomeResponsavel($sobrenomeResponsavel);
				$clienteClass->setEmailResponsavel($emailResponsavel);
				$clienteClass->setTelefoneResponsavel($telefoneResponsavel);
				$clienteClass->setCelularResponsavel($celularResponsavel);
				
				if($clientePai == ""){
					$clientePai = 0;
				}
				
				$clienteClass->setIdPai($clientePai);
                
                $clienteId = $clienteController->insertAction($clienteClass);
				
				$contatoController = new ContatoController();
				foreach($nomeContato as $kProduto => $vProduto){
					if ($nomeContato[$kProduto] != "" && $sobrenomeContato[$kProduto] != "" && $emailContato[$kProduto] != "" && $telefoneContato[$kProduto] != "" && $celularContato[$kProduto] != ""){
						$contatoClass = new Contato();
						
						$contatoClass->setNome($nomeContato[$kProduto]);
						$contatoClass->setSobrenome($sobrenomeContato[$kProduto]);
						$contatoClass->setEmail($emailContato[$kProduto]);
						$contatoClass->setTelefone($telefoneContato[$kProduto]);
						$contatoClass->setCelular($celularContato[$kProduto]);
						$contatoClass->setClienteId($clienteId);
					
						$contatoId = $contatoController->insertAction($contatoClass);
					}
				}
				 
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