<?php

class BriefingEquipamentoController {

    public function insertAction(BriefingEquipamento $briefingEquipamento) {

        if ($briefingEquipamento->getBriefingId() != ""){

            $briefingEquipamentoAr = $briefingEquipamento->assocEntity();

            $fields = implode("`, `", array_keys($briefingEquipamentoAr));
            $values = implode("', '", $briefingEquipamentoAr);

            $strQuery = "INSERT INTO " . $briefingEquipamento->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);

            $briefingEquipamentoId = mysql_insert_id();

            return $briefingEquipamentoId;
        } else {
            return 0;
        }
    }

    public function editAction(ReservaEquipamento $briefingEquipamento){

        if ($briefingEquipamento->getId() != "" && $briefingEquipamento->getBriefingId() != ""){

            $briefingEquipamentoAr = $briefingEquipamento->assocEntity();

            $setQuery = array();
            foreach ($briefingEquipamentoAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }

            $setQuery = implode($setQuery, ", ");

            $sqlQuery = "UPDATE ".$briefingEquipamento->tableName()." SET $setQuery WHERE `briefing_equipamento_10_id` = ". $briefingEquipamento->getId();
            mysql_query($sqlQuery);

            return true;
        }else{
            return false;
        }

    }

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "briefing_equipamento_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_briefings_equipamento WHERE ".implode(" AND ", $whereQuery);

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

	public function listByBriefingAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "briefing_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_briefings_equipamento WHERE ".implode(" AND ", $whereQuery);

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

    public function getBriefingEquipamentoAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);

        $strQuery = "SELECT * FROM sta_briefings_equipamento WHERE ".$field . " = '" . $value."'";
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

    public function deleteByBriefingAction($id = false){

            $whereQuery[] = (!$id) ? "1 = 1" : "briefing_10_id = " . $id;

            $sqlQuery = "DELETE FROM sta_briefings_equipamento WHERE ".implode(" AND ", $whereQuery);

            $deletar = mysql_query($sqlQuery);

       if($deletar){
            return true;
        }else {
            return false;
        }

    }

}

?>