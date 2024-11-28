<?php
require_once("Conexao2.php");

Class Genero{
  private $idGenero;
  private $nomeGenero;
  private $subGenero;

  public function getIdGenero(){
    return $this->idGenero;
  }
  public function getNomeGenero(){
    return $this->nomeGenero;
  }
  public function getSubGenero(){
    return $this->subGenero;
  }
  public function setIdGenero($idGenero){
    $this->idGenero = $idGenero;
  }
  public function setNomeGenero($nomeGenero){
    $this->nomeGenero = $nomeGenero;
  }
  public function setSubGenero($subGenero){
    $this->subGenero = $subGenero;
  }

  public function cadastrar($genero){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbGeneros(id_genero, nome_genero, sub_genero) VALUES(null, :nomeGenero, :subGenero)");
    $stmt->bindValue('nomeGenero', $genero->getNomeGenero());
    $stmt->bindValue(':subGenero', $genero->getSubGenero());
    $stmt->execute();
}
  public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT id_genero, nome_genero, sub_genero from tbGeneros";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
  }
}