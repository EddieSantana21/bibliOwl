<?php 
require_once("Conexao2C.php");

Class Usuario{
  private $idUsuario;
  private $nomeUsuario;
  private $emailUsuario;
  private $senhaUsuario;
  private $telefoneUsuario;
  private $idTipoUsuario;
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

  public function getTelefoneUsuario(){
    return $this -> telefoneUsuario;
  }

  public function getIdTipoUsuario(){
    return $this -> idTipoUsuario;
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

  public function setTelefoneUsuario($telefoneUsuario){
    $this->telefoneUsuario = $telefoneUsuario;
  }

  public function setIdTipoUsuario($idTipoUsuario){
    $this->idTipoUsuario = $idTipoUsuario;
  }

  public function setRegistroUsuario($registroUsuario){
    $this->registroUsuario = $registroUsuario;
  }

  public function cadastrar($usuario){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbUsuarios(id_usuario,nome_usuario, email_usuario, senha_usuario, telefone_usuario, id_tipo, registro_usuario)
                            VALUES(null, :nomeUsuario, :emailUsuario, :senhaUsuario, :telefoneUsuario, :idTipo, :registroUsuario)");
    $stmt->bindValue(':nomeUsuario', $usuario->getNomeUsuario());
    $stmt->bindValue('emailUsuario', $usuario->getEmailUsuario());
    $stmt->bindValue('senhaUsuario', $usuario->getSenhaUsuario());
    $stmt->bindValue('telefoneUsuario', $usuario->getTelefoneUsuario());
    $stmt->bindValue('idTipo', $usuario->getIdTipoUsuario());
    $stmt->bindValue('registroUsuario',$usuario->getRegistroUsuario());
    $stmt->execute();
}

public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT id_usuario, nome_usuario, email_usuario, telefone_usuario, id_tipo, registro_usuario from tbUsuarios";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
}
}

