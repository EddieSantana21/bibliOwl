<?php

require_once("Conexao2.php");

Class Telefone{
  private $idTelefone;
  private $numTelefone;

  public function getIdTelefone(){
    return $this->idTelefone;
  }
  public function getNumTelefone(){
    return $this->numTelefone;
  }
  public function setIdTelefone($idTelefone){
    $this->idTelefone = $idTelefone;
  }
  public function setTelefone($numTelefone){
    $this->numTelefone = $numTelefone;
  }

  public function cadastrar($telefone){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbTelefones(telefone) VALUES(?)");
    $stmt->bindValue(1, $telefone->getNumTelefone());
    $stmt->execute();
}
public function listar(){
  $conexao = Conexao::conectar();
  $querySelect = "SELECT id_telefone, telefone from tbTelefone";
  $resultado = $conexao->query($querySelect);
  $lista = $resultado->fetchAll();
  return $lista;   
}
}