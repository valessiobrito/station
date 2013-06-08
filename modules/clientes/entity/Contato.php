<?php

class Contato {
    
    protected $id;
    
    protected $nome;
    
    protected $sobrenome;
    
    protected $email;
    
    protected $telefone;
    
    protected $celular;
    
    protected $clienteId;
    
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

    public function getSobrenome(){
		return $this->sobrenome;
	}

	public function setSobrenome($sobrenome){
		$this->sobrenome = $sobrenome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}

	public function getCelular(){
		return $this->celular;
	}

	public function setCelular($celular){
		$this->celular = $celular;
	}

	public function getClienteId(){
		return $this->clienteId;
	}

	public function setClienteId($clienteId){
		$this->clienteId = $clienteId;
	}

    public function assocEntity(){
        
        $fields = array(
            "contato_cliente_10_id"       	=> $this->getId(),
            "contato_cliente_30_nome"     	=> $this->getNome(),
            "contato_cliente_30_sobrenome"	=> $this->getSobrenome(),
            "contato_cliente_30_email"  	=> $this->getEmail(),
            "contato_cliente_30_telefone" 	=> $this->getTelefone(),
            "contato_cliente_30_celular"   	=> $this->getCelular(),
            "cliente_10_id" 				=> $this->getClienteId()
        );
        
        return $fields;
        
    }
    
    public function fetchEntity($row){
        
        $this->setId($row['contato_cliente_10_id']);
        $this->setNome($row['contato_cliente_30_nome']);
        $this->setSobrenome($row['contato_cliente_30_sobrenome']);
        $this->setEmail($row['contato_cliente_30_email']);
        $this->setTelefone($row['contato_cliente_30_telefone']);
        $this->setCelular($row['contato_cliente_30_celular']);
        $this->setClienteId($row['cliente_10_id']);
        
        return $this;
    }
    
    public function tableName(){
        return "sta_contatos_cliente";
    }
}
?>