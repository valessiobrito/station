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
						alert('Ocorreu um erro na gravação1.')
						window.location = '".$urlUnidades."/novaSala.php';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação2.')
					window.location = '".$urlUnidades."/novaSala.php';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação3.')
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
           
            if ($produto_10_id != "" && $nome != "" && $descCurta != "" && $descCompleta != "" && $prazoProducao != "" && $larguraMinima != "" && $alturaMinima != "" && $minimoFotos != "") {

                $produtoClass = new Produto();
                $produtoController = new ProdutoController();

                $produtoClass->setId($produto_10_id);
                $produtoClass->setNome($nome);
                $produtoClass->setDescCurta($descCurta);
                $produtoClass->setDescCompleta($descCompleta);
                $produtoClass->setPrazoProducao($prazoProducao);
                $produtoClass->setLarguraMinima($larguraMinima);
                $produtoClass->setAlturaMinima($alturaMinima);
                $produtoClass->setMinimoFotos($minimoFotos);
                $produtoClass->setTipo($prd_tipo);

                if ($produtoController->editAction($produtoClass)) {
                    echo("<script>
						alert('Sala editada com sucesso!')
						window.location = '".$urlUnidades."/listarUnidade.php';
						</script>");
                } else {
                    header("Location: $urlProdutos/listarProduto.php?type=error&editar=novo&erron=1");
                }
            } else {
                header("Location: $urlProdutos/listarProduto.php?type=error&case=editar&erron=5");
            }
        } else {
            header("Location: $urlProdutos/listarProduto.php?type=error&case=editar&erron=2");
        }

        break;
    case "deletar":
        $resposta = 'erro';
	
		$idSala = $_POST['is'];
		
		$query = "DELETE FROM sta_salas WHERE sala_10_id = ".$idSala;
		$deletar = mysql_query($query);
		if($deletar){
			$resposta = 'ok';
		}
		
		echo $resposta;
    case "listar":
    default:
        header("Location: $urlProdutos/listarProduto.php");

        break;
}
?>