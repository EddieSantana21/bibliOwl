<?php
require_once("Conexao2.php");

Class Periodos{
  private $idPeriodo;
  private $nomePeriodo;

  public function getIdPeriodo(){
    return $this->idPeriodo;
  }
  public function getNomePeriodo(){
    return $this->nomePeriodo;
  }

  public function setIdPeriodo($idPeriodo){
    $this->idPeriodo = $idPeriodo;
  }

  public function setNomePeriodo($nomePeriodo){
    $this->nomePeriodo = $nomePeriodo;
  }

  public function cadastrar($periodo){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbPeriodos(nome_periodo) VALUES(?)");
    $stmt->bindValue(1, $periodo->getNomePeriodo());
    $stmt->execute();
}

public function listar(){
  $conexao = Conexao::conectar();
  $querySelect = "SELECT id_periodo, nome_periodo from tbPeriodo";
  $resultado = $conexao->query($querySelect);
  $lista = $resultado->fetchAll();
  return $lista;
}
}