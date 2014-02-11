<?php

class Usuario {

    protected $id;

    protected $login;

    protected $senha;

    protected $nome;

    protected $email;

    protected $fotoUrl;

    protected $tipo;

    protected $ativo;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLogin()
    {
    	return $this->login;
    }

    public function setLogin($login)
    {
    	$this->login = $login;
    }

    public function getSenha()
    {
    	return $this->senha;
    }

    public function setSenha($senha)
    {
    	$this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail()
    {
    	return $this->email;
    }

    public function setEmail($email)
    {
    	$this->email = $email;
    }

    public function getFotoUrl()
    {
    	return $this->fotoUrl;
    }

    public function setFotoUrl($fotoUrl)
    {
    	$this->fotoUrl = $fotoUrl;
    }

    public function getTipo()
    {
    	return $this->tipo;
    }

    public function setTipo($tipo)
    {
    	$this->tipo = $tipo;
    }

    public function getAtivo()
    {
    	return $this->ativo;
    }

    public function setAtivo($ativo)
    {
    	$this->ativo = $ativo;
    }

    public function assocEntity(){

        $fields = array(
            "usuario_10_id"       	=> $this->getId(),
            "usuario_20_login"      => $this->getLogin(),
            "usuario_20_senha"      => $this->getSenha(),
            "usuario_30_nome"     	=> $this->getNome(),
            "usuario_30_email"     	=> $this->getEmail(),
            "usuario_20_fotoUrl"    => $this->getFotoUrl(),
            "usuario_12_tipo"       => $this->getTipo(),
            "usuario_12_ativo"      => $this->getAtivo()
        );
        return $fields;

    }

    public function fetchEntity($row){

        $this->setId($row['usuario_10_id']);
        $this->setLogin($row['usuario_20_login']);
        $this->setSenha($row['usuario_20_senha']);
        $this->setNome($row['usuario_30_nome']);
        $this->setEmail($row['usuario_30_email']);
        $this->setFotoUrl($row['usuario_20_fotoUrl']);
        $this->setTipo($row['usuario_12_tipo']);
        $this->setAtivo($row['usuario_12_ativo']);

        return $this;
    }

    public function tableName(){
        return "sta_usuarios";
    }

    public function uploadFoto($foto){
        $nomeFoto    = $foto['name'];
        $tamanhoFoto = $foto['size'];
        $tipoFoto    = $foto['type'];
        $tmpnameFoto = $foto['tmp_name'];

        preg_match("/\.(gif|png|jpg|jpeg){1}$/i", $nomeFoto, $ext);

        $nomeUnico = uniqid(time()) . "." . $ext[1];

        $caminho = $_SERVER['DOCUMENT_ROOT'].'/agenda/images/upload/usuarios/';

        $caminhoFoto = $caminho.$nomeUnico;

        $moverFoto = move_uploaded_file($tmpnameFoto, $caminhoFoto);

        $obj = new SimpleImage;
        $obj->load($caminhoFoto);
        $obj->resize(45,45);
        $obj->save();

        return $nomeUnico;
    }

    public function encryptPass($password){
    	$secPass = md5($password);
		$secPass = base64_encode($secPass);

		return $secPass;
    }
}
?>