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

            foreach ($_FILES as $keyImg => $valImg) {
                $$keyImg = $valImg;
            }

            if ($login != "" && $senha != "" && $nome != "" && $email != "" && $tipo != "" && $ativo != "") {

                $usuarioClass = new Usuario();
                $usuarioController = new UsuarioController();

                $usuarioClass->setLogin($login);
                $usuarioClass->setSenha($usuarioClass->encryptPass($senha));
                $usuarioClass->setNome($nome);
                $usuarioClass->setEmail($email);
                if($imagem['name'] == ""){
                	$fotoUrl = "user-nophoto.jpg";
                }else{
                	$fotoUrl = $usuarioClass->uploadFoto($imagem);
                }
				$usuarioClass->setFotoUrl($fotoUrl);
				$usuarioClass->setTipo($tipo);
				$usuarioClass->setAtivo($ativo);

                $usuarioId = $usuarioController->insertAction($usuarioClass);

                if ($usuarioId != 0) {
                    echo("<script>
						alert('Usuario salvo com sucesso!')
						window.location = '".$urlUsuarios."/listarUsuario.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlUsuarios."/novoUsuario.php';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlUsuarios."/novoUsuario.php';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlUsuarios."/novoUsuario.php';
				</script>");
        }

        break;
    case "editar":

        if (isset($_POST)) {
            // Se o POST estiver setado
            foreach ($_POST as $k => $v) {
                $$k = $v;
            }

            foreach ($_FILES as $keyImg => $valImg) {
                $$keyImg = $valImg;
            }

            if ($id != "" && $login != "" && $nome != "" && $email != ""&& $tipo != "" && $ativo != "") {

                $usuarioClass = new Usuario();
                $usuarioController = new UsuarioController();

                $usuarioClass->setLogin($login);
                if($senha != ""){
                	$usuarioClass->setSenha($usuarioClass->encryptPass($senha));
                }
                $usuarioClass->setNome($nome);
                $usuarioClass->setEmail($email);
                if($imagem['name'] != ""){
                	$fotoUrl = $usuarioClass->uploadFoto($imagem);
                	$usuarioClass->setFotoUrl($fotoUrl);
                }
				$usuarioClass->setTipo($tipo);
				$usuarioClass->setAtivo($ativo);
				$usuarioClass->setId($id);
                if ($usuarioController->editAction($usuarioClass)) {
                    echo("<script>
						alert('Usuario editado com sucesso!')
						window.location = '".$urlUsuarios."/listarUsuario.php';
						</script>");
                } else {
                    echo("<script>
						alert('Ocorreu um erro na gravação.')
						window.location = '".$urlUsuarios."/editarUsuario.php?id=".$id."';
						</script>");
                }
            } else {
                echo("<script>
					alert('Ocorreu um erro na gravação.')
					window.location = '".$urlUsuarios."/editarUsuario.php?id=".$id."';
					</script>");
            }
        } else {
            echo("<script>
				alert('Ocorreu um erro na gravação.')
				window.location = '".$urlUsuarios."/editarUsuario.php?id=".$id."';
				</script>");
        }

        break;
    case "listar":
    default:
        header("Location: $urlUsuarios/listarUsuario.php");

        break;
}
?>