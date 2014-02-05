<?php

class UnidadeController {

    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "unidade_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_unidades WHERE ".implode(" AND ", $whereQuery);

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