<?php

class Reserva {

    protected $id;

    protected $propostaId;

    protected $unidadeId;

    protected $salaId;

    protected $periodo;

    protected $data;

    protected $coffeeId;

    protected $coffeePeriodo;

    protected $coffeeQuantidade;

    protected $cafe;

    protected $quantidadeCafe;

    protected $agua;

    protected $quantidadeAgua;

    protected $quantideParticipantes;

    protected $formatoSala;

    protected $coffeObs;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPropostaId()
    {
    return $this->propostaId;
    }

    public function setPropostaId($propostaId)
    {
    return $this->propostaId = $propostaId;
    }

    public function getUnidadeId()
    {
    return $this->unidadeId;
    }

    public function setUnidadeId($unidadeId)
    {
    return $this->unidadeId = $unidadeId;
    }

    public function getSalaId()
    {
    return $this->salaId;
    }

    public function setSalaId($salaId)
    {
    return $this->salaId = $salaId;
    }

    public function getPeriodo()
    {
    return $this->periodo;
    }

    public function setPeriodo($periodo)
    {
    return $this->periodo = $periodo;
    }

    public function getData()
    {
    return $this->data;
    }

    public function setData($data)
    {
    return $this->data = $data;
    }

    public function getCoffeeId()
    {
    return $this->coffeeId;
    }

    public function setCoffeeId($coffeeId)
    {
    return $this->coffeeId = $coffeeId;
    }

    public function getCoffeePeriodo()
    {
    return $this->coffeePeriodo;
    }

    public function setCoffeePeriodo($coffeePeriodo)
    {
    return $this->coffeePeriodo = $coffeePeriodo;
    }

    public function getCoffeeQuantidade()
    {
    return $this->coffeeQuantidade;
    }

    public function setCoffeeQuantidade($coffeeQuantidade)
    {
    return $this->coffeeQuantidade = $coffeeQuantidade;
    }

    public function getCafe()
    {
    return $this->cafe;
    }

    public function setCafe($cafe)
    {
    return $this->cafe = $cafe;
    }

    public function getQuantidadeCafe()
    {
    return $this->QuantidadeCafe;
    }

    public function setQuantidadeCafe($QuantidadeCafe)
    {
    return $this->QuantidadeCafe = $QuantidadeCafe;
    }

    public function getAgua()
    {
    return $this->agua;
    }

    public function setAgua($agua)
    {
    return $this->agua = $agua;
    }

    public function getQuantidadeAgua()
    {
    return $this->QuantidadeAgua;
    }

    public function setQuantidadeAgua($QuantidadeAgua)
    {
    return $this->QuantidadeAgua = $QuantidadeAgua;
    }

    public function getQuantideParticipantes()
    {
    return $this->quantideParticipantes;
    }

    public function setQuantideParticipantes($quantideParticipantes)
    {
    return $this->quantideParticipantes = $quantideParticipantes;
    }

    public function getFormatoSala()
    {
    return $this->formatoSala;
    }

    public function setFormatoSala($formatoSala)
    {
    return $this->formatoSala = $formatoSala;
    }

    public function getCoffeObs()
    {
    return $this->coffeObs;
    }

    public function setCoffeObs($coffeObs)
    {
    return $this->coffeObs = $coffeObs;
    }

    public function assocEntity(){

        $fields = array(
            "reserva_10_id"       		            => $this->getId(),
            "proposta_10_id"     		            => $this->getPropostaId(),
            "unidade_10_id"  		                => $this->getUnidadeId(),
            "sala_10_id"  	                        => $this->getSalaId(),
            "reserva_12_periodo" 	                => $this->getPeriodo(),
            "reserva_22_data"    	                => $this->getData(),
            "coffe_10_id"                           => $this->getCoffeeId(),
            "coffee_12_periodo"                     => $this->getCoffeePeriodo(),
            "coffee_20_quantidade"                  => $this->getCoffeeQuantidade(),
            "reserva_12_cafe"                       => $this->getCafe(),
            "reserva_20_quantidadeCafe"             => $this->getQuantidadeCafe(),
            "reserva_12_agua"                       => $this->getAgua(),
            "reserva_20_quantidadeAgua"             => $this->getQuantidadeAgua(),
            "reserva_20_quantidadeParticipantes"    => $this->getQuantideParticipantes(),
            "reserva_20_formatoSala"                => $this->getFormatoSala(),
            "reserva_60_coffeeObs"                  => $this->getCoffeObs()
        );

        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['reserva_10_id']);
        $this->setPropostaId($row['proposta_10_id']);
        $this->setUnidadeId($row['unidade_10_id']);
        $this->setSalaId($row['sala_10_id']);
        $this->setPeriodo($row['reserva_12_periodo']);
        $this->setData($row['reserva_22_data']);
        $this->setCoffeeId($row['coffe_10_id']);
        $this->setCoffeePeriodo($row['coffee_12_periodo']);
        $this->setCoffeeQuantidade($row['coffee_20_quantidade']);
        $this->setCafe($row['reserva_12_cafe']);
        $this->setQuantidadeCafe($row['reserva_20_quantidadeCafe']);
        $this->setAgua($row['reserva_12_agua']);
        $this->setQuantidadeAgua($row['reserva_20_quantidadeAgua']);
        $this->setQuantideParticipantes($row['reserva_20_quantidadeParticipantes']);
        $this->setFormatoSala($row['reserva_20_formatoSala']);
        $this->setCoffeObs($row['reserva_60_coffeeObs']);

        return $this;
    }

    public function tableName(){
        return "sta_produtos";
    }
}
?>