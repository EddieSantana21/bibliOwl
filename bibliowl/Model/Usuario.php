<?php 
require_once("Conexao.php");

Class Usuario{
  private $idUsuario;
  private $nomeUsuario;
  private $emailUsuario;
  private $senhaUsuario;
  private $telefone;
  private $tipoUsuario;
  private $registroUsuario;

  // getters

  public function getIdUsuario(){
    return $this-> idUsuario;
  }

  public function getNomeUsuario(){
    return $this-> nomeUsuario;
  }

  public function getEmailUsuario(){
    return $this-> emailUsuario;
  }

  public function getSenhaUsuario(){
    return $this-> senhaUsuario;
  }

  public function getTelefone(){
    return $this -> telefone;
  }

  public function tipoUsuario(){
    return $this -> tipoUsuario;
  }

  public function getRegistroUsuario(){
    return $this-> registroUsuario;
  }

  //setters

  public function setIdUsuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }

  public function setNomeUsuario($nomeUsuario){
    $this->nomeUsuario = $nomeUsuario;
  }

  public function setEmailUsuario($emailUsuario){
    $this->emailUsuario = $emailUsuario;
  }

  public function setSenhaUsuario($senhaUsuario){
    $this->senhaUsuario = $senhaUsuario;
  }

  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function setTipoUsuario($tipoUsuario){
    $this->tipoUsuario = $tipoUsuario;
  }

  public function setRegistroUsuario($registroUsuario){
    $this->registroUsuario = $registroUsuario;
  }

  public function cadastrar($usuario){
    //prepare statement
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare("INSERT INTO tbUsuarios(id_usuario,nome_usuario, email_usuario, senha_usuario, telefone_usuario, id_tipo, registro_usuario)
                            VALUES(null, :nomeUsuario, :emailUsuario, :senhaUsuario, :telefoneUsuario, :idTipo, :registroUsuario)");
    $stmt->bindValue(':nomeUsuario', $usuario->getNomeUsuario());
    $stmt->bindValue('emailUsuario', $usuario->getEmailUsuario());
    $stmt->bindValue('senhaUsuario', $usuario->getSenhaUsuario());
    $stmt->bindValue('telefoneUsuario', $usuario->getTelefone()->getIdTelefone());
    $stmt->bindValue('idTipo', $usuario->getTipoUsuario()->getIdTipoUsuario);
    $stmt->bindValue('registroUsuario',$usuario->getRegistroUsuario());
    $stmt->execute();
}

    public function listar() {
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare("SELECT * FROM tbusuarios");
        $stmt->execute();
        return $stmt;
}
}

