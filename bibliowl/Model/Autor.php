<?php 
require_once("Conexao2.php");

Class Autor{
  private $idAutor;
  private $nomeAutor;

  public function getIdAutor(){
    return $this->idAutor;
  }
  public function getNomeAutor(){
    return $this->nomeAutor;
  }

  public function setIdAutor($idAutor){
    $this->idAutor = $idAutor;
  }
  public function setNomeAutor($nomeAutor){
    $this->nomeAutor = $nomeAutor;
  }
  public function cadastrar($autor){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbAutores(id_autor, nome_autor) VALUES(null, :nomeAutor)");
    $stmt->bindValue(':nomeAutor', $autor->getNomeAutor());
    $stmt->execute();
}
  public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT id_autor, nome_autor from tbAutores";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
  }
}