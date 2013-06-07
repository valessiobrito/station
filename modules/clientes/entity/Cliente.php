<?php

class Cliente {
    
    protected $id;
    
    protected $nome;
    
    protected $cnpj;
    
    protected $razaoSocial;
    
    protected $inscMunicipal;
    
    protected $inscEstadual;
    
    protected $endereco;
    
    protected $complemento;
    
    protected $cidade;
    
    protected $estado;
    
    protected $cep;
    
    protected $nomeResponsavel;
    
    protected $sobrenomeResponsavel;
    
    protected $emailResponsavel;
	
	protected $telefoneResponsavel;
	
	protected $celularResponsavel;
	
	protected $idPai;
    
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

    public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	public function getRazaoSocial(){
		return $this->razaoSocial;
	}

	public function setRazaoSocial($razaoSocial){
		$this->razaoSocial = $razaoSocial;
	}

	public function getInscMunicipal(){
		return $this->inscMunicipal;
	}

	public function setInscMunicipal($inscMunicipal){
		$this->inscMunicipal = $inscMunicipal;
	}

	public function getInscEstadual(){
		return $this->inscEstadual;
	}

	public function setInscEstadual($inscEstadual){
		$this->inscEstadual = $inscEstadual;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getNomeResponsavel(){
		return $this->nomeResponsavel;
	}

	public function setNomeResponsavel($nomeResponsavel){
		$this->nomeResponsavel = $nomeResponsavel;
	}

	public function getSobrenomeResponsavel(){
		return $this->sobrenomeResponsavel;
	}

	public function setSobrenomeResponsavel($sobrenomeResponsavel){
		$this->sobrenomeResponsavel = $sobrenomeResponsavel;
	}

	public function getEmailResponsavel(){
		return $this->emailResponsavel;
	}

	public function setEmailResponsavel($emailResponsavel){
		$this->emailResponsavel = $emailResponsavel;
	}

	public function getTelefoneResponsavel(){
		return $this->telefoneResponsavel;
	}

	public function setTelefoneResponsavel($telefoneResponsavel){
		$this->telefoneResponsavel = $telefoneResponsavel;
	}

	public function getCelularResponsavel(){
		return $this->celularResponsavel;
	}

	public function setCelularResponsavel($celularResponsavel){
		$this->celularResponsavel = $celularResponsavel;
	}

	public function getIdPai(){
		return $this->idPai;
	}

	public function setIdPai($idPai){
		$this->idPai = $idPai;
	}

    public function assocEntity(){
        
        $fields = array(
            "cliente_10_id"       				=> $this->getId(),
            "cliente_30_nome"     				=> $this->getNome(),
            "cliente_30_cnpj"  					=> $this->getCnpj(),
            "cliente_30_razaoSocial"  			=> $this->getRazaoSocial(),
            "cliente_30_inscMunicipal" 			=> $this->getInscMunicipal(),
            "cliente_30_inscEstadual"   		=> $this->getInscEstadual(),
            "cliente_30_endereco" 				=> $this->getEndereco(),
            "cliente_30_complemento" 			=> $this->getComplemento(),
            "cliente_30_cidade" 				=> $this->getCidade(),
            "cliente_30_estado" 				=> $this->getEstado(),
            "cliente_30_cep"   					=> $this->getCep(),
            "cliente_30_nomeResponsavel"   		=> $this->getNomeResponsavel(),
            "cliente_30_sobrenomeResponsavel"   => $this->getSobrenomeResponsavel(),
			"cliente_30_emailResponsavel"   	=> $this->getEmailResponsavel(),
			"cliente_30_telefoneResponsavel"   	=> $this->getTelefoneResponsavel(),
			"cliente_30_celularResponsavel"   	=> $this->getCelularResponsavel(),
			"cliente_10_idPai"   				=> $this->getIdPai()
        );
        
        return $fields;
        
    }
    
    public function fetchEntity($row){
        
        $this->setId($row['cliente_10_id']);
        $this->setNome($row['cliente_30_nome']);
        $this->setCnpj($row['cliente_30_cnpj']);
        $this->setRazaoSocial($row['cliente_30_razaoSocial']);
        $this->setInscMunicipal($row['cliente_30_inscMunicipal']);
        $this->setInscEstadual($row['cliente_30_inscEstadual']);
        $this->setEndereco($row['cliente_30_endereco']);
        $this->setComplemento($row['cliente_30_complemento']);
        $this->setCidade($row['cliente_30_cidade']);
        $this->setEstado($row['cliente_30_estado']);
        $this->setCep($row['cliente_30_cep']);
        $this->setNomeResponsavel($row['cliente_30_nomeResponsavel']);
        $this->setSobrenomeResponsavel($row['cliente_30_sobrenomeResponsavel']);
		$this->setEmailResponsavel($row['cliente_30_emailResponsavel']);
		$this->setTelefoneResponsavel($row['cliente_30_telefoneResponsavel']);
		$this->setCelularResponsavel($row['cliente_30_celularResponsavel']);
		$this->setIdPai($row['cliente_10_idPai']);
        
        return $this;
    }
    
    public function tableName(){
        return "sta_clientes";
    }
}
?>