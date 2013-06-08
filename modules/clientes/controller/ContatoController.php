<?php

class ContatoController {

    public function insertAction(Contato $contato) {
			
        if ($contato->getNome() != "" && $contato->getSobrenome() != "" && $contato->getEmail() != "" && $contato->getTelefone() != "" && $contato->getCelular() != "" && $contato->getClienteId() != ""){

            $contatoAr = $contato->assocEntity();

            $fields = implode("`, `", array_keys($contatoAr));
            $values = implode("', '", $contatoAr);

            $strQuery = "INSERT INTO " . $contato->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);
			
            $contatoId = mysql_insert_id();

            return $contatoId;
        } else {
            return 0;
        }
    }

    public function editAction(Contato $contato){
        
        if ($contato->getId() != "" && $contato->getNome() != "" && $contato->getSobrenome() != "" && $contato->getEmail() != "" && $contato->getTelefone() != "" && $contato->getCelular() != "" && $contato->getClienteId() != ""){
			
            $contatoAr = $contato->assocEntity();
            
            $setQuery = array();
            foreach ($contatoAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }
            
            $setQuery = implode($setQuery, ", ");
            
            $sqlQuery = "UPDATE ".$contato->tableName()." SET $setQuery WHERE `contato_cliente_10_id` = ". $contato->getId();
            mysql_query($sqlQuery);
            
            return true;
        }else{
            return false;
        }
        
    }
    
    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "cliente_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_contatos_cliente WHERE ".implode(" AND ", $whereQuery);
		
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
            
            $whereQuery[] = (!$id) ? "1 = 1" : "cliente_10_id = " . $id;

        	$sqlQuery = "DELETE FROM sta_contatos_cliente WHERE ".implode(" AND ", $whereQuery);
			
            $deletar = mysql_query($sqlQuery);
			
       if($deletar){     
            return true;
        }else {
            return false;
        }
        
    }

    public function getContatoAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);
        
        $strQuery = "SELECT * FROM sta_contatos_cliente WHERE ".$field . " = '" . $value."'";
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