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
            
			$produtoController = new ProdutoController();
            foreach($nome as $kProduto => $vProduto){
				if ($nome[$kProduto] != "" && $valor[$kProduto] != "" && $quantidade[$kProduto] != "" && $tipo != ""){
					$produtoClass = new Produto();	
					
					$produtoClass->setNome($nome[$kProduto]);
					$produtoClass->setValor($produtoController->formataValor($valor[$kProduto],'gravar'));
					$produtoClass->setQuantidade($quantidade[$kProduto]);
					$produtoClass->setObservacoes($observacoes[$kProduto]);
					$produtoClass->setTipoId($tipo);	
					
					$produtoId = $produtoController->insertAction($produtoClass);
					
					if($produtoId == 0){
						echo("<script>
							alert('Ocorreu um erro na gravação.')
							window.location = '".$urlProdutos."/novoProduto.php';
							</script>");
						break;
					}
				}
			}
			
			echo("<script>
				alert('Produtos salvos com sucesso!')
				window.location = '".$urlProdutos."/listarProduto.php';
				</script>");
            
        } else {
            echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlProdutos."/novoProduto.php';
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