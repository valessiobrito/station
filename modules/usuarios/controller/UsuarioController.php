<?php

class UsuarioController {

    public function insertAction(Usuario $usuario) {

        if ($usuario->getLogin() != "" && $usuario->getSenha() != "" && $usuario->getNome() != "" && $usuario->getEmail() != "" && $usuario->getTipo() != "" && $usuario->getAtivo() != ""){

            $usuarioAr = $usuario->assocEntity();

            $fields = implode("`, `", array_keys($usuarioAr));
            $values = implode("', '", $usuarioAr);

            $strQuery = "INSERT INTO " . $usuario->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);

            $usuarioId = mysql_insert_id();

            return $usuarioId;
        } else {
            return 0;
        }
    }

    public function editAction(Usuario $usuario){

        if ($usuario->getId() != "" && $usuario->getLogin() != "" && $usuario->getNome() != "" && $usuario->getEmail() != "" && $usuario->getTipo() != "" && $usuario->getAtivo() != ""){

            $usuarioAr = $usuario->assocEntity();

            $setQuery = array();
            foreach ($usuarioAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }

            $setQuery = implode($setQuery, ", ");

            $sqlQuery = "UPDATE ".$usuario->tableName()." SET $setQuery WHERE `usuario_10_id` = ". $usuario->getId();
            mysql_query($sqlQuery);

            return true;
        }else{
            return false;
        }

    }

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "usuario_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_usuarios WHERE ".implode(" AND ", $whereQuery);

        $result = mysql_query($strQuery);

        $retArr = array();
        $i = 1;

        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $retArr[$i] = $row;
                $i++;
            }
        }

        return $retArr;
    }

    public function getUsuarioAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);

        $strQuery = "SELECT * FROM sta_usuarios WHERE ".$field . " = '" . $value."'";
        $result = mysql_query($strQuery);

        $retArr = array();
        $i = 1;

        if (mysql_num_rows($result) > 0) {

            while ($row = mysql_fetch_assoc($result)) {
                $retArr[$i] = $row;
                $i++;
            }
        }

        return $retArr;
    }

}

?>