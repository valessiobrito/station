<?php

class ClienteController {

    public function insertAction(Cliente $cliente) {
			
        if ($cliente->getNome() != "" && $cliente->getCnpj() != "" && $cliente->getRazaoSocial() != "" && $cliente->getInscEstadual() != "" && $cliente->getEndereco() != "" && $cliente->getCidade() != "" && $cliente->getEstado() != "" && $cliente->getCep() != "" && $cliente->getNomeResponsavel() != "" && $cliente->getSobrenomeResponsavel() != "" && $cliente->getEmailResponsavel() != "" && $cliente->getTelefoneResponsavel() != "" && $cliente->getCelularResponsavel() != ""){

            $clienteAr = $cliente->assocEntity();

            $fields = implode("`, `", array_keys($clienteAr));
            $values = implode("', '", $clienteAr);

            $strQuery = "INSERT INTO " . $cliente->tableName() . " (`" . $fields . "`) VALUES('" . $values . "');";

            mysql_query($strQuery);
			
            $clienteId = mysql_insert_id();

            return $clienteId;
        } else {
            return 0;
        }
    }

    public function editAction(Cliente $cliente){
        
        if ($cliente->getId() != "" && $cliente->getNome() != "" && $cliente->getCnpj() != "" && $cliente->getRazaoSocial() != "" && $cliente->getInscEstadual() != "" && $cliente->getEndereco() != "" && $cliente->getCidade() != "" && $cliente->getEstado() != "" && $cliente->getCep() != "" && $cliente->getNomeResponsavel() != "" && $cliente->getSobrenomeResponsavel() != "" && $cliente->getEmailResponsavel() != "" && $cliente->getTelefoneResponsavel() != "" && $cliente->getCelularResponsavel() != ""){
			
            $clienteAr = $cliente->assocEntity();
            
            $setQuery = array();
            foreach ($clienteAr as $k => $v){
                if ($v != ""){
                    $setQuery[] = "`".$k."` = '".$v."'";
                }
            }
            
            $setQuery = implode($setQuery, ", ");
            
            $sqlQuery = "UPDATE ".$cliente->tableName()." SET $setQuery WHERE `cliente_10_id` = ". $cliente->getId();
            mysql_query($sqlQuery);
            
            return true;
        }else{
            return false;
        }
        
    }
    
    public function listAction($id = false) {

        $whereQuery[] = (!$id) ? "1 = 1" : "cliente_10_id = " . $id;

        $strQuery = "SELECT * FROM sta_clientes WHERE ".implode(" AND ", $whereQuery);
		
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

    public function getClienteAction($field, $value, $op = "=") {

        $field = addslashes($field);
        $value = addslashes($value);
        
        $strQuery = "SELECT * FROM sta_clientes WHERE ".$field . " = '" . $value."'";
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