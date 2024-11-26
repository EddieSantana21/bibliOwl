<?php

require_once("Conexao2.php");

Class Aluno{
  private $idAluno;
  private $idUsuario;
  private $idCurso;
  private $idPeriodo;

  public function getIdAluno(){
    return $this->idAluno;
  }

  public function getIdUsuario(){
    return $this->idUsuario;
  }
  
  public function getIdCurso(){
    return $this->idCurso;
  }

  public function getIdPeriodo(){
    return $this->idPeriodo;
  }
  
  public function setIdAluno($idAluno){
    $this->idAluno = $idAluno;
  }

  public function setIdUsuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }

  public function setIdCurso($idCurso){
    $this->idCurso = $idCurso;
  }

  public function setIdPeriodo($idPeriodo){
    $this->idPeriodo = $idPeriodo;
  }

  public function cadastrar($aluno){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbAlunos(id_usuario, id_curso, id_periodo) VALUES(?,?,?,?)");
    $stmt->bindValue(1, $aluno->getIdUsuario());
    $stmt->bindValue(2, $aluno->getidCurso());
    $stmt->bindValue(3, $aluno->getIdPeriodo());
    $stmt->execute();
}
public function listar(){
  $conexao = Conexao::conectar();
  $querySelect = "SELECT id_aluno, id_usuario, id_curso, id_periodo from tbAlunos";
  $resultado = $conexao->query($querySelect);
  $lista = $resultado->fetchAll();
  return $lista;   
}
}