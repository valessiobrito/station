<?php

class Sala {
    
    protected $id;
    
    protected $nome;
    
    protected $numero;
    
    protected $valorManha;
    
    protected $valorTarde;
    
    protected $valorNoite;
    
    protected $valorIntegral;
    
    protected $metros;
    
    protected $uMesa;
    
    protected $uSimples;
    
    protected $grupos;
    
    protected $escolar;
    
    protected $auditorio;
    
    protected $unidadeId;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getValorManha() {
        return $this->valorManha;
    }

    public function setValorManha($valorManha) {
        $this->valorManha = $valorManha;
    }

    public function getValorTarde() {
        return $this->valorTarde;
    }

    public function setValorTarde($valorTarde) {
        $this->valorTarde = $valorTarde;
    }
	
	public function getValorNoite() {
        return $this->valorNoite;
    }

    public function setValorNoite($valorNoite) {
        $this->valorNoite = $valorNoite;
    }
	
	public function getValorIntegral() {
        return $this->valorIntegral;
    }

    public function setValorIntegral($valorIntegral) {
        $this->valorIntegral = $valorIntegral;
    }
	
	public function getMetros() {
        return $this->metros;
    }

    public function setMetros($metros) {
        $this->metros = $metros;
    }
	
	public function getUMesa() {
        return $this->uMesa;
    }

    public function setUMesa($uMesa) {
        $this->uMesa = $uMesa;
    }
	
	public function getUSimples() {
        return $this->uSimples;
    }

    public function setUSimples($uSimples) {
        $this->uSimples = $uSimples;
    }
	
	public function getGrupos() {
        return $this->grupos;
    }

    public function setGrupos($grupos) {
        $this->grupos = $grupos;
    }
	
	public function getEscolar() {
        return $this->escolar;
    }

    public function setEscolar($escolar) {
        $this->escolar = $escolar;
    }
	
	public function getAuditorio() {
        return $this->auditorio;
    }

    public function setAuditorio($auditorio) {
        $this->auditorio = $auditorio;
    }
	
	public function getUnidadeId() {
        return $this->unidadeId;
    }

    public function setUnidadeId($unidadeId) {
        $this->unidadeId = $unidadeId;
    }

    public function assocEntity(){
        
        $fields = array(
            "sala_10_id"       		=> $this->getId(),
            "sala_30_nome"     		=> $this->getNome(),
            "sala_30_numero"  		=> $this->getNumero(),
            "sala_15_valorManha"  	=> $this->getValorManha(),
            "sala_15_valorTarde" 	=> $this->getValorTarde(),
            "sala_15_valorNoite"   	=> $this->getValorNoite(),
            "sala_15_valorIntegral" => $this->getValorIntegral(),
            "sala_20_metros" 		=> $this->getMetros(),
            "sala_20_uMesa" 		=> $this->getUMesa(),
            "sala_20_uSimples" 		=> $this->getUSimples(),
            "sala_20_grupos"   		=> $this->getGrupos(),
            "sala_20_escolar"   	=> $this->getEscolar(),
            "sala_20_auditorio"   	=> $this->getAuditorio(),
			"unidade_10_id"   		=> $this->getUnidadeId()
        );
        
        return $fields;
        
    }
    
    public function fetchEntity($row){
        
        $this->setId($row['sala_10_id']);
        $this->setNome($row['sala_30_nome']);
        $this->setNumero($row['sala_30_numero']);
        $this->setValorManha($row['sala_15_valorManha']);
        $this->setValorTarde($row['sala_15_valorTarde']);
        $this->setValorNoite($row['sala_15_valorNoite']);
        $this->setValorIntegral($row['sala_15_valorIntegral']);
        $this->setMetros($row['sala_20_metros']);
        $this->setUMesa($row['sala_20_uMesa']);
        $this->setUSimples($row['sala_20_uSimples']);
        $this->setGrupos($row['sala_20_grupos']);
        $this->setEscolar($row['sala_20_escolar']);
        $this->setAuditorio($row['sala_20_auditorio']);
		$this->setUnidadeId($row['unidade_10_id']);
        
        return $this;
    }
    
    public function tableName(){
        return "sta_salas";
    }
}
?>