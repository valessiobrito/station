<?php

class ReservaEquipamentoController {

    public function insertAction(ReservaEquipamento $reservaEquipamento) {

        if ($reservaEquipamento->getReservaId() != ""){

            $reservaEquipamentoAr = $reservaEquipamento->assocEntity();

            $fields = implode("`, `", array_keys($reservaEquipamentoAr));
            $values = implode("', '", $reservaEquipamentoAr);

            $strQuery = "INSERT INTO " . $reservaEquipamento->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);

            $reservaEquipamentoId = mysql_insert_id();

            return $reservaEquipamentoId;
        } else {
            return 0;
        }
    }

    public function editAction(ReservaEquipamento $reservaEquipamento){

        if ($reservaEquipamento->getId() != "" && $reservaEquipamento->getReservaId() != ""){

            $reservaEquipamentoAr = $reservaEquipamento->assocEntity();

            $setQuery = array();
            foreach ($reservaEquipamentoAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }

            $setQuery = implode($setQuery, ", ");

            $sqlQuery = "UPDATE ".$reservaEquipamento->tableName()." SET $setQuery WHERE `reserva_equipamento_10_id` = ". $reservaEquipamento->getId();
            mysql_query($sqlQuery);

            return true;
        }else{
            return false;
        }

    }

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "reserva_equipamento_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_reservas_equipamento WHERE ".implode(" AND ", $whereQuery);

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

	public function listByReservaAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "reserva_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_reservas_equipamento WHERE ".implode(" AND ", $whereQuery);

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

    public function getReservaEquipamentoAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);

        $strQuery = "SELECT * FROM sta_reservas_equipamento WHERE ".$field . " = '" . $value."'";
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

    public function deleteByReservaAction($id = false){

            $whereQuery[] = (!$id) ? "1 = 1" : "reserva_10_id = " . $id;

            $sqlQuery = "DELETE FROM sta_reservas_equipamento WHERE ".implode(" AND ", $whereQuery);

            $deletar = mysql_query($sqlQuery);

       if($deletar){
            return true;
        }else {
            return false;
        }

    }

}

?>