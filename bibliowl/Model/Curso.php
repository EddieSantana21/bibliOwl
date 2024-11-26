<?php
require_once("Conexao.php");

Class Curso{
  private $idCurso;
  private $nomeCurso;

  public function getIdCurso(){
    return $this->idCurso;
  }

  public function getNomeCurso(){
    return $this->nomeCurso;
  }

  public function setIdCurso($idCurso){
    $this->idCurso = $idCurso;
  }

  public function setNomeCurso($nomeCurso){
    $this->nomeCurso = $nomeCurso;
  }

  public function cadastrar($usuario){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbCursos(nome_curso) VALUES(?)");
    $stmt->bindValue(1, $usuario->getNomeCurso());
    $stmt->execute();
}

  public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT id_curso, nome_curso from tbCursos";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;
  }
}
