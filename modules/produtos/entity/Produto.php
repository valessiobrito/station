<?php

class Produto {
    
    protected $id;
    
    protected $nome;
    
    protected $valor;
    
    protected $quantidade;
    
    protected $observacoes;
    
    protected $tipoId;
    
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

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }
	
	public function getTipoId() {
        return $this->tipoId;
    }

    public function setTipoId($tipoId) {
        $this->tipoId = $tipoId;
    }

    public function assocEntity(){
        
        $fields = array(
            "produto_10_id"       		=> $this->getId(),
            "produto_30_nome"     		=> $this->getNome(),
            "produto_15_valor"  		=> $this->getValor(),
            "produto_20_quantidade"  	=> $this->getQuantidade(),
            "produto_60_observacoes" 	=> $this->getObservacoes(),
            "tipo_produto_10_id"    	=> $this->getTipoId()
        );
        
        return $fields;
        
    }
    
    public function fetchEntity($row){
        
        $this->setId($row['produto_10_id']);
        $this->setNome($row['produto_30_nome']);
        $this->setValor($row['produto_15_valor']);
        $this->setQuantidade($row['produto_20_quantidade']);
        $this->setObservacoes($row['produto_60_observacoes']);
        $this->setTipoId($row['tipo_produto_10_id']);
        
        return $this;
    }
    
    public function tableName(){
        return "sta_produtos";
    }
}
?>