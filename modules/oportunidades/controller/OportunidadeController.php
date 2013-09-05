<?php

class OportunidadeController {

    public function insertAction(Oportunidade $oportunidade) {

            $oportunidadeAr = $oportunidade->assocEntity();

            $fields = implode("`, `", array_keys($oportunidadeAr));
            $values = implode("', '", $oportunidadeAr);

            $strQuery = "INSERT INTO " . $oportunidade->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            $gravar = mysql_query($strQuery);

            $oportunidadeId = mysql_insert_id();
        if($gravar){
            return $oportunidadeId;
        } else {
            return 0;
        }
    }

    public function editAction(Oportunidade $oportunidade){

        if ($oportunidade->getId() != ""){

            $oportunidadeAr = $oportunidade->assocEntity();

            $setQuery = array();
            foreach ($oportunidadeAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }

            $setQuery = implode($setQuery, ", ");

            $sqlQuery = "UPDATE ".$oportunidade->tableName()." SET $setQuery WHERE `proposta_10_id` = ". $oportunidade->getId();
            mysql_query($sqlQuery);

            return true;
        }else{
            return false;
        }

    }

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "proposta_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_propostas WHERE ".implode(" AND ", $whereQuery);

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

    public function getPropostaAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);

        $strQuery = "SELECT * FROM sta_propostas WHERE ".$field . " = '" . $value."'";
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

    public function deleteAction($id = false){

            $whereQuery[] = (!$id) ? "1 = 1" : "proposta_10_id = " . $id;

            $sqlQuery = "DELETE FROM sta_propostas WHERE ".implode(" AND ", $whereQuery);

            $deletar = mysql_query($sqlQuery);

       if($deletar){
            return true;
        }else {
            return false;
        }

    }

}

?>