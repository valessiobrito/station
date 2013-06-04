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
    
    protected $nomeResposavel;
    
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

	public function getNomeResposavel(){
		return $this->nomeResposavel;
	}

	public function setNomeResposavel($nomeResposavel){
		$this->nomeResposavel = $nomeResposavel;
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
            "cliente_30_nomeResponsavel"   		=> $this->getNomeResposavel(),
            "cliente_30_sobrenomeResponsavel"   => $this->getSobrenomeResponsavel(),
			"cliente_30_emailResponsavel"   	=> $this->getEmailResponsavel(),
			"cliente_30_telefoneResponsavel"   	=> $this->getTelefoneResponsavel(),
			"cliente_30_celularResponsavel"   	=> $this->getCelularResponsavel(),
			"cliente_10_idPai"   				=> $this->getIdPai()
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