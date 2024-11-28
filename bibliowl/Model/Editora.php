<?php
require_once("Conexao2.php");

Class Editora{
  private $idEditora;
  private $nomeEditora;

  public function getIdEditora(){
    return $this->idEditora;
  }
  public function getNomeEditora(){
    return $this->nomeEditora;
  }
  public function setIdEditora($idEditora){
    $this->idEditora = $idEditora;
  }
  public function setNomeEditora($nomeEditora){
    $this->nomeEditora = $nomeEditora;
  }

  public function cadastrar($editora){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbEditoras(id_editora,nome_editora) VALUES(null, :nomeEditora)");
    $stmt->bindValue(':nomeEditora', $editora->getNomeEditora());
    $stmt->execute();
}
  public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT id_editora, nome_editora from tbEditoras";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
  }
}