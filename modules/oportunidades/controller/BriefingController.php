<?php

class BriefingController {

    public function insertAction(Briefing $briefing) {

        if ($briefing->getPropostaId() != ""){

            $briefingAr = $briefing->assocEntity();

            $fields = implode("`, `", array_keys($briefingAr));
            $values = implode("', '", $briefingAr);

            $strQuery = "INSERT INTO " . $briefing->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);

            $briefingId = mysql_insert_id();

            return $briefingId;
        } else {
            return 0;
        }
    }

    public function editAction(Briefing $briefing){

        if ($briefing->getId() != "" && $briefing->getPropostaId() != ""){

            $briefingAr = $briefing->assocEntity();

            $setQuery = array();
            foreach ($briefingAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }

            $setQuery = implode($setQuery, ", ");

            $sqlQuery = "UPDATE ".$briefing->tableName()." SET $setQuery WHERE `briefing_10_id` = ". $briefing->getId();
            mysql_query($sqlQuery);

            return true;
        }else{
            return false;
        }

    }

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "briefing_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_briefings WHERE ".implode(" AND ", $whereQuery);

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

        $strQuery = "SELECT * FROM sta_briefings WHERE ".implode(" AND ", $whereQuery);

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

    public function getBriefingAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);

        $strQuery = "SELECT * FROM sta_briefings WHERE ".$field . " = '" . $value."'";
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