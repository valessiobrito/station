<?php

class Oportunidade {

    protected $id;

    protected $clienteId;

    protected $contatoId;

    protected $status;

    protected $data;

    public function getId() 
	{
        return $this->id;
    }

    public function setId($id) 
	{
        $this->id = $id;
    }

    public function getClienteId()
    {
    	return $this->clienteId;
    }

    public function setClienteId($clienteId)
    {
    	$this->clienteId = $clienteId;
    }

    public function getContatoId()
    {
    	return $this->contatoId;
    }

    public function setContatoId($contatoId)
    {
    	$this->contatoId = $contatoId;
    }

    public function getStatus()
    {
    	return $this->status;
    }

    public function setStatus($status)
    {
    	$this->status = $status;
    }

    public function getData()
    {
    	return $this->data;
    }

    public function setData($data)
    {
    	$this->data = $data;
    }

    public function assocEntity(){

        $fields = array(
            "proposta_10_id"       		=> $this->getId(),
            "cliente_10_id"     		=> $this->getClienteId(),
            "contato_10_id"             => $this->getContatoId(),
            "proposta_12_status"        => $this->getStatus(),
            "proposta_22_data"          => $this->getData()
        );

        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['proposta_10_id']);
        $this->setClienteId($row['cliente_10_id']);
        $this->setContatoId($row['contato_10_id']);
        $this->setStatus($row['proposta_12_status']);
        $this->setData($row['proposta_22_data']);

        return $this;
    }

    public function tableName(){
        return "sta_propostas";
    }
}
?>