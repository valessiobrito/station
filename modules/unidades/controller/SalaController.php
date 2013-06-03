<?php

class SalaController {

    public function insertAction(Sala $sala) {
			
        if ($sala->getNome() != "" && $sala->getNumero() != "" && $sala->getValorManha() != "" && $sala->getValorTarde() != "" && $sala->getValorNoite() != "" && $sala->getValorIntegral() != "" && $sala->getMetros() != "" && $sala->getUMesa() != "" && $sala->getUSimples() != "" && $sala->getGrupos() != "" && $sala->getEscolar() != "" && $sala->getAuditorio() != "" && $sala->getUnidadeId() != ""){

            $salaAr = $sala->assocEntity();

            $fields = implode("`, `", array_keys($salaAr));
            $values = implode("', '", $salaAr);

            $strQuery = "INSERT INTO " . $sala->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);
			
            $salaId = mysql_insert_id();

            return $salaId;
        } else {
            return 0;
        }
    }

    public function editAction(Sala $sala){
        
        if ($sala->getNome() != "" && $sala->getNumero() != "" && $sala->getValorManha() != "" && $sala->getValorTarde() != "" && $sala->getValorNoite() != "" && $sala->getValorIntegral() != "" && $sala->getMetros() != "" && $sala->getUMesa() != "" && $sala->getUSimples() != "" && $sala->getGrupos() != "" && $sala->getEscolar() != "" && $sala->getAuditorio() != ""){
			
            $salaAr = $sala->assocEntity();
            
            $setQuery = array();
            foreach ($salaAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }
            
            $setQuery = implode($setQuery, ", ");
            
            $sqlQuery = "UPDATE ".$sala->tableName()."` SET $setQuery WHERE `sala_10_id` = ". $sala->getId();
            mysql_query($sqlQuery);
            
            return true;
        }else{
            return false;
        }
        
    }
    
    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "sala_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_salas WHERE ".implode(" AND ", $whereQuery);
		
        $result = mysql_query($strQuery);

        $retArr = array();
        $i = 1;

        if (mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                $retArr[$i] = $row;
                $i++;
            }
        }
		
		echo "<pre>".var_dump($retArr)."</pre>";
		break;
        return $retArr;
    }

    public function getSalaAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);
        
        $strQuery = "SELECT * FROM sta_salas WHERE ".$field . " = '" . $value."'";
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
    
	public function formataValor($valor, $action){
		
		if($action == 'gravar'){
			$valorFormatado = number_format($valor,2,'.',',');
			$valorFormatado = str_replace(',','',$valorFormatado);
		}else{
			$valorFormatado = number_format($valor,2,',','.');
			$valorFormatado = str_replace('.','',$valorFormatado);
		}
		return $valorFormatado;
	}
	
}

?>