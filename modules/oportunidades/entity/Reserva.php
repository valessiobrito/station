<?php

class Reserva {

    protected $id;

    protected $propostaId;

    protected $unidadeId;

    protected $salaId;

    protected $periodo;

    protected $data;

	protected $coffee;

    protected $coffeeId;

    protected $coffeePeriodo;

    protected $coffeeQuantidade;

    protected $cafe;

    protected $quantidadeCafe;

	protected $periodoCafe;

    protected $agua;

    protected $quantidadeAgua;

	protected $periodoAgua;

    protected $quantideParticipantes;

    protected $formatoSala;

    protected $coffeObs;

    protected $briefingObs;

	protected $observacoes;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPropostaId()
    {
    	return $this->propostaId;
    }

    public function setPropostaId($propostaId)
    {
    	$this->propostaId = $propostaId;
    }

    public function getUnidadeId()
    {
    	return $this->unidadeId;
    }

    public function setUnidadeId($unidadeId)
    {
    	$this->unidadeId = $unidadeId;
    }

    public function getSalaId()
    {
    	return $this->salaId;
    }

    public function setSalaId($salaId)
    {
    	$this->salaId = $salaId;
    }

    public function getPeriodo()
    {
    	return $this->periodo;
    }

    public function setPeriodo($periodo)
    {
    	$this->periodo = $periodo;
    }

    public function getData()
    {
    	return $this->data;
    }

    public function setData($data)
    {
    	$this->data = $data;
    }

    public function getCoffee()
    {
    	return $this->coffee;
    }

    public function setCoffee($coffee)
    {
    	$this->coffee = $coffee;
    }

	public function getCoffeeId()
    {
    	return $this->coffeeId;
    }

    public function setCoffeeId($coffeeId)
    {
    	$this->coffeeId = $coffeeId;
    }

    public function getCoffeePeriodo()
    {
    	return $this->coffeePeriodo;
    }

    public function setCoffeePeriodo($coffeePeriodo)
    {
    	$this->coffeePeriodo = $coffeePeriodo;
    }

    public function getCoffeeQuantidade()
    {
    	return $this->coffeeQuantidade;
    }

    public function setCoffeeQuantidade($coffeeQuantidade)
    {
    	$this->coffeeQuantidade = $coffeeQuantidade;
    }

    public function getCafe()
    {
    	return $this->cafe;
    }

    public function setCafe($cafe)
    {
    	$this->cafe = $cafe;
    }

    public function getQuantidadeCafe()
    {
    	return $this->quantidadeCafe;
    }

    public function setQuantidadeCafe($quantidadeCafe)
    {
    	$this->quantidadeCafe = $quantidadeCafe;
    }

	public function getPeriodoCafe()
    {
    	return $this->periodoCafe;
    }

    public function setPeriodoCafe($periodoCafe)
    {
    	$this->periodoCafe = $periodoCafe;
    }

    public function getAgua()
    {
    	return $this->agua;
    }

    public function setAgua($agua)
    {
    	$this->agua = $agua;
    }

    public function getQuantidadeAgua()
    {
    	return $this->quantidadeAgua;
    }

    public function setQuantidadeAgua($quantidadeAgua)
    {
    	$this->quantidadeAgua = $quantidadeAgua;
    }

	public function getPeriodoAgua()
    {
    	return $this->periodoAgua;
    }

    public function setPeriodoAgua($periodoAgua)
    {
    	$this->periodoAgua = $periodoAgua;
    }

    public function getQuantideParticipantes()
    {
    	return $this->quantideParticipantes;
    }

    public function setQuantideParticipantes($quantideParticipantes)
    {
    	$this->quantideParticipantes = $quantideParticipantes;
    }

    public function getFormatoSala()
    {
    	return $this->formatoSala;
    }

    public function setFormatoSala($formatoSala)
    {
    	$this->formatoSala = $formatoSala;
    }

    public function getCoffeObs()
    {
    	return $this->coffeObs;
    }

    public function setCoffeObs($coffeObs)
    {
    	$this->coffeObs = $coffeObs;
    }

    public function getBriefingObs()
    {
        return $this->briefingObs;
    }

    public function setBriefingObs($briefingObs)
    {
        $this->briefingObs = $briefingObs;
    }

	public function getObservacoes() {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function assocEntity(){

        $fields = array(
            "reserva_10_id"       		            => $this->getId(),
            "proposta_10_id"     		            => $this->getPropostaId(),
            "unidade_10_id"  		                => $this->getUnidadeId(),
            "sala_10_id"  	                        => $this->getSalaId(),
            "reserva_12_periodo" 	                => $this->getPeriodo(),
            "reserva_22_data"    	                => $this->getData(),
			"reserva_12_coffee"    	                => $this->getCoffee(),
            "coffe_10_id"                           => $this->getCoffeeId(),
            "coffee_12_periodo"                     => $this->getCoffeePeriodo(),
            "coffee_20_quantidade"                  => $this->getCoffeeQuantidade(),
            "reserva_12_cafe"                       => $this->getCafe(),
            "reserva_20_quantidadeCafe"             => $this->getQuantidadeCafe(),
			"reserva_12_periodoCafe"                => $this->getPeriodoCafe(),
            "reserva_12_agua"                       => $this->getAgua(),
            "reserva_20_quantidadeAgua"             => $this->getQuantidadeAgua(),
			"reserva_12_periodoAgua"                => $this->getPeriodoAgua(),
            "reserva_20_quantidadeParticipantes"    => $this->getQuantideParticipantes(),
            "reserva_12_formatoSala"                => $this->getFormatoSala(),
            "reserva_60_coffeeObs"                  => $this->getCoffeObs(),
            "reserva_60_briefingObs"                => $this->getBriefingObs(),
			"reserva_60_observacoes"   				=> $this->getObservacoes()
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
		$this->setCoffee($row['reserva_12_coffee']);
        $this->setCoffeeId($row['coffe_10_id']);
        $this->setCoffeePeriodo($row['coffee_12_periodo']);
        $this->setCoffeeQuantidade($row['coffee_20_quantidade']);
        $this->setCafe($row['reserva_12_cafe']);
        $this->setQuantidadeCafe($row['reserva_20_quantidadeCafe']);
		$this->setPeriodoCafe($row['reserva_12_periodoCafe']);
        $this->setAgua($row['reserva_12_agua']);
        $this->setQuantidadeAgua($row['reserva_20_quantidadeAgua']);
		$this->setPeriodoAgua($row['reserva_12_periodoAgua']);
        $this->setQuantideParticipantes($row['reserva_20_quantidadeParticipantes']);
        $this->setFormatoSala($row['reserva_12_formatoSala']);
        $this->setCoffeObs($row['reserva_60_coffeeObs']);
        $this->setBriefingObs($row['reserva_60_briefingObs']);
		$this->setObservacoes($row['reserva_60_observacoes']);

        return $this;
    }

    public function tableName(){
        return "sta_reservas";
    }
}
?>