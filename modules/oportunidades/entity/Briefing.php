<?php

class Briefing {

    protected $id;

    protected $propostaId;

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

    protected $coffeObs;

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

    public function getCoffeObs()
    {
    	return $this->coffeObs;
    }

    public function setCoffeObs($coffeObs)
    {
    	$this->coffeObs = $coffeObs;
    }

	public function getObservacoes() {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function assocEntity(){

        $fields = array(
            "briefing_10_id"       		            => $this->getId(),
            "proposta_10_id"     		            => $this->getPropostaId(),
			"briefing_12_coffee"    	            => $this->getCoffee(),
            "coffe_10_id"                           => $this->getCoffeeId(),
            "coffee_12_periodo"                     => $this->getCoffeePeriodo(),
            "coffee_20_quantidade"                  => $this->getCoffeeQuantidade(),
            "briefing_12_cafe"                      => $this->getCafe(),
            "briefing_20_quantidadeCafe"            => $this->getQuantidadeCafe(),
			"briefing_12_periodoCafe"               => $this->getPeriodoCafe(),
            "briefing_12_agua"                      => $this->getAgua(),
            "briefing_20_quantidadeAgua"            => $this->getQuantidadeAgua(),
			"briefing_12_periodoAgua"               => $this->getPeriodoAgua(),
            "briefing_60_coffeeObs"                 => $this->getCoffeObs(),
			"briefing_60_observacoes"   		    => $this->getObservacoes()
        );

        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['briefing_10_id']);
        $this->setPropostaId($row['proposta_10_id']);
		$this->setCoffee($row['briefing_12_coffee']);
        $this->setCoffeeId($row['coffe_10_id']);
        $this->setCoffeePeriodo($row['coffee_12_periodo']);
        $this->setCoffeeQuantidade($row['coffee_20_quantidade']);
        $this->setCafe($row['briefing_12_cafe']);
        $this->setQuantidadeCafe($row['briefing_20_quantidadeCafe']);
		$this->setPeriodoCafe($row['briefing_12_periodoCafe']);
        $this->setAgua($row['briefing_12_agua']);
        $this->setQuantidadeAgua($row['briefing_20_quantidadeAgua']);
		$this->setPeriodoAgua($row['briefing_12_periodoAgua']);
        $this->setCoffeObs($row['briefing_60_coffeeObs']);
		$this->setObservacoes($row['briefing_60_observacoes']);

        return $this;
    }

    public function tableName(){
        return "sta_briefings";
    }
}
?>