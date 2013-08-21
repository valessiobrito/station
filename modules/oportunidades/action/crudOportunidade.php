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
			
            $oportunidadeController = new OportunidadeController();
            $oportunidadeClass = new Oportunidade();

            if($jaCliente != "2"){
            	$clienteId = $clientes;
            }else{
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

				if($clientesCadastrados == ""){
					$clientesCadastrados = 0;
				}

				$clienteClass->setIdPai($clientesCadastrados);

                $clienteId = $clienteController->insertAction($clienteClass);
            }

            if($jaContato != "2"){
            	$contatoId = $contatos;
            }else{
            	$contatoClass = new Contato();
            	$contatoController = new ContatoController();

            	$contatoClass->setNome($nomeContato);
				$contatoClass->setSobrenome($sobrenomeContato);
				$contatoClass->setEmail($emailContato);
				$contatoClass->setTelefone($telefoneContato);
				$contatoClass->setCelular($celularContato);
				$contatoClass->setClienteId($clienteId);

				$contatoId = $contatoController->insertAction($contatoClass);
            }

            $oportunidadeClass->setClienteId($clienteId);
            $oportunidadeClass->setContatoId($contatoId);
            $oportunidadeClass->setStatus($status);
            $oportunidadeClass->setData(date("Y-m-d"));
            $oportunidadeId = $oportunidadeController->insertAction($oportunidadeClass);
			
            $reservaController = new ReservaController();
            $reservaEquipamentoController = new ReservaEquipamentoController();
            foreach($unidade as $kReserva => $vReserva){
				$reservaClass = new Reserva();
				$cloneId = $nrClone[$kReserva];
				$reservaClass->setPropostaId($oportunidadeId);
				$reservaClass->setUnidadeId($unidade[$kReserva]);
				$reservaClass->setSalaId($salas[$kReserva]);
				$reservaClass->setPeriodo($periodo[$kReserva]);
				$dataCru = $data[$kReserva];
				$dataArr = explode("/", $dataCru);
				$dataEd = $dataArr[2]."-".$dataArr[1]."-".$dataArr[0];
				$reservaClass->setData($dataEd);
				$reservaClass->setCoffee($coffee[$kReserva]);
				$reservaClass->setCoffeeId($tipoCoffee[$kReserva]);
				$reservaClass->setCoffeePeriodo($periodoCoffee[$kReserva]);
				$reservaClass->setCoffeeQuantidade($qtdeCoffee[$kReserva]);
				$reservaClass->setCafe($cafe[$kReserva]);
				$reservaClass->setQuantidadeCafe($qtdeCafe[$kReserva]);
				$reservaClass->setPeriodoCafe($periodoCafe[$kReserva]);
				$reservaClass->setAgua($agua[$kReserva]);
				$reservaClass->setQuantidadeAgua($qtdeAgua[$kReserva]);
				$reservaClass->setPeriodoAgua($periodoAgua[$kReserva]);
				$reservaClass->setQuantideParticipantes($qtdeParticipantes[$kReserva]);
				$reservaClass->setFormatoSala($formatoSala[$kReserva]);
				$reservaClass->setCoffeObs($obsCoffee[$kReserva]);
				$reservaClass->setObservacoes($observacoes[$kReserva]);
				$reservaId = $reservaController->insertAction($reservaClass);

				foreach(${'tipoProduto_'.$cloneId} as $kProduto => $vProduto){
						$tipoProduto = ${'tipoProduto_'.$cloneId}[$kProduto];
						$produtoId = ${'produtos_'.$cloneId}[$kProduto];
						$reservaEquipamentoClass = new ReservaEquipamento();
						$reservaEquipamentoClass->setTipoProdutoId($tipoProduto);
						$reservaEquipamentoClass->setProdutoId($produtoId);
						$reservaEquipamentoClass->setReservaId($reservaId);
						
						$reservaEquipamentoId = $reservaEquipamentoController->insertAction($reservaEquipamentoClass);
				}
            }
			if($modSalvar == 'aplicar'){
				echo("<script>
					window.location = '".$urlOportunidades."/editarOportunidade.php?id=".$oportunidadeId."';
					</script>");
			}else{
				echo("<script>
					alert('Oportunidade salva com sucesso!')
					window.location = '".$urlOportunidades."/listarOportunidade.php';
					</script>");
			}

        } else {
            echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlOportunidades."/novaOportunidade.php';
					</script>");
        }

        break;
    case "editar":

        if (isset($_POST)) {
            // Se o POST estiver setado
            foreach ($_POST as $k => $v) {
                $$k = $v;
            }

            if ($id != "" && $nome != "" && $valor != "" && $quantidade != "" && $tipo != "") {

                $produtoClass = new Produto();
                $produtoController = new ProdutoController();

				$produtoClass->setId($id);
                $produtoClass->setNome($nome);
				$produtoClass->setValor($produtoController->formataValor($valor,'gravar'));
				$produtoClass->setQuantidade($quantidade);
				$produtoClass->setObservacoes($observacoes);
				$produtoClass->setTipoId($tipo);

                if ($produtoController->editAction($produtoClass)) {
                    echo("<script>
						alert('Produto editado com sucesso!')
						window.location = '".$urlProdutos."/listarProduto.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlProdutos."/editarProduto.php?id=".$id."';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlProdutos."/editarProduto.php?id=".$id."';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlProdutos."/editarProduto.php?id=".$id."';
				</script>");
        }

        break;
    case "listar":
    default:
        header("Location: $urlProdutos/listarProduto.php");

        break;
}
?>