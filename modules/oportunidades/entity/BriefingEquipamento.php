<?php

class BriefingEquipamento {

    protected $id;

	protected $tipoProdutoId;

    protected $produtoId;

	protected $quantidade;

    protected $briefingId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

	public function getTipoProdutoId()
    {
        return $this->tipoProdutoId;
    }

    public function setTipoProdutoId($tipoProdutoId)
    {
        $this->tipoProdutoId = $tipoProdutoId;
    }

    public function getProdutoId()
    {
        return $this->produtoId;
    }

    public function setProdutoId($produtoId)
    {
        $this->produtoId = $produtoId;
    }

	public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getBriefingId()
    {
        return $this->briefingId;
    }

    public function setBriefingId($briefingId)
    {
        $this->briefingId = $briefingId;
    }

    public function assocEntity(){

        $fields = array(
            "briefing_equipamento_10_id"            => $this->getId(),
			"tipo_produto_10_id"     		       => $this->getTipoProdutoId(),
            "produto_10_id"     		           => $this->getProdutoId(),
			"briefing_equipamento_20_quantidade"    => $this->getQuantidade(),
            "briefing_10_id"                        => $this->getBriefingId()
            );

        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['briefing_equipamento_10_id']);
		$this->setTipoProdutoId($row['tipo_produto_10_id']);
        $this->setProdutoId($row['produto_10_id']);
		$this->setQuantidade($row['briefing_equipamento_20_quantidade']);
        $this->setBriefingId($row['briefing_10_id']);

        return $this;
    }

    public function tableName(){
        return "sta_briefings_equipamento";
    }
}
?>