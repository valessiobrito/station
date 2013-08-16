<?php

class ReservaEquipamento {

    protected $id;

    protected $produtoId;

    protected $quantidade;

    protected $reservaId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getProdutoId()
    {
        return $this->produtoId;
    }

    public function setProdutoId($produtoId)
    {
        return $this->produtoId = $produtoId;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        return $this->quantidade = $quantidade;
    }

    public function getReservaId()
    {
        return $this->reservaId;
    }

    public function setReservaId($reservaId)
    {
        return $this->reservaId = $reservaId;
    }

    public function assocEntity(){

        $fields = array(
            "reserva_equipamento_10_id"            => $this->getId(),
            "produto_10_id"     		           => $this->getProdutoId(),
            "reserva_equipamento_20_quantidade"    => $this->getQuantidade(),
            "reserva_10_id"                        => $this->getReservaId()
            );

        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['reserva_equipamento_10_id']);
        $this->setProdutoId($row['produto_10_id']);
        $this->setQuantidade($row['reserva_equipamento_20_quantidade']);
        $this->setReservaId($row['reserva_10_id']);

        return $this;
    }

    public function tableName(){
        return "sta_reservas_equipamentos";
    }
}
?>