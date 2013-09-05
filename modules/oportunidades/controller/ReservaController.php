<?php

class ReservaController {

    public function insertAction(Reserva $reserva) {

        if ($reserva->getPropostaId() != ""){

            $reservaAr = $reserva->assocEntity();

            $fields = implode("`, `", array_keys($reservaAr));
            $values = implode("', '", $reservaAr);

            $strQuery = "INSERT INTO " . $reserva->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);

            $reservaId = mysql_insert_id();

            return $reservaId;
        } else {
            return 0;
        }
    }

    public function editAction(Reserva $reserva){

        if ($reserva->getId() != "" && $reserva->getPropostaId() != ""){

            $reservaAr = $reserva->assocEntity();

            $setQuery = array();
            foreach ($reservaAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }

            $setQuery = implode($setQuery, ", ");

            $sqlQuery = "UPDATE ".$reserva->tableName()." SET $setQuery WHERE `reserva_10_id` = ". $reserva->getId();
            mysql_query($sqlQuery);

            return true;
        }else{
            return false;
        }

    }

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "reserva_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_reservas WHERE ".implode(" AND ", $whereQuery);

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

	public function listByPropostaAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "proposta_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_reservas WHERE ".implode(" AND ", $whereQuery);

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

    public function getReservaAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);

        $strQuery = "SELECT * FROM sta_produtos WHERE ".$field . " = '" . $value."'";
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

    public function deleteByPropostaAction($id = false){

            $whereQuery[] = (!$id) ? "1 = 1" : "proposta_10_id = " . $id;

            $sqlQuery = "DELETE FROM sta_reservas WHERE ".implode(" AND ", $whereQuery);

            $deletar = mysql_query($sqlQuery);

       if($deletar){
            return true;
        }else {
            return false;
        }

    }

}

?>