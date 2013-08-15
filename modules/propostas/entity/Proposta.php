<?php

class Proposta {

    protected $id;

    protected $clienteId;

    protected $contatoId;

    protected $status;

    protected $data;

    protected $observacoes;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getClienteId()
    {
    return $this->clienteId;
    }

    public function setClienteId($clienteId)
    {
    return $this->clienteId = $clienteId;
    }

    public function getContatoId()
    {
    return $this->contatoId;
    }

    public function setContatoId($contatoId)
    {
    return $this->contatoId = $contatoId;
    }

    public function getStatus()
    {
    return $this->status;
    }

    public function setStatus($status)
    {
    return $this->status = $status;
    }

    public function getData()
    {
    return $this->data;
    }

    public function setData($data)
    {
    return $this->data = $data;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function assocEntity(){

        $fields = array(
            "proposta_10_id"       		=> $this->getId(),
            "cliente_10_id"     		=> $this->getClienteId(),
            "contato_10_id"             => $this->getContatoId(),
            "proposta_12_status"        => $this->getStatus(),
            "proposta_22_data"          => $this->getData(),
            "proposta_60_observacoes"   => $this->getObservacoes()
        );

        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['proposta_10_id']);
        $this->setClienteId($row['cliente_10_id']);
        $this->setContatoId($row['contato_10_id']);
        $this->setStatus($row['proposta_12_status']);
        $this->setData($row['proposta_22_data']);
        $this->setObservacoes($row['proposta_60_observacoes']);

        return $this;
    }

    public function tableName(){
        return "sta_propostas";
    }
}
?>