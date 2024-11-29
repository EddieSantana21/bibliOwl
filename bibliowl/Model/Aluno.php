<?php

require_once("Conexao2.php");

Class Aluno{
  private $idAluno;
  private $usuario;
  private $curso;
  private $periodo;

  public function getIdAluno(){
    return $this->idAluno;
  }

  public function getUsuario(){
    return $this->usuario;
  }
  
  public function getCurso(){
    return $this->curso;
  }

  public function getPeriodo(){
    return $this->periodo;
  }
  
  public function setIdAluno($idAluno){
    $this->idAluno = $idAluno;
  }

  public function setUsuario($usuario){
    $this->usuario = $usuario;
  }

  public function setCurso($curso){
    $this->curso = $curso;
  }

  public function setPeriodo($periodo){
    $this->periodo = $periodo;
  }

  public function cadastrar($aluno){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbAlunos(id_usuario, id_curso, id_periodo) VALUES(?,?,?,?)");
    $stmt->bindValue(1, $aluno->getUsuario()->getIdUsuario());
    $stmt->bindValue(2, $aluno->getCurso()->getIdCurso());
    $stmt->bindValue(3, $aluno->getPeriodo()->getIdPeriodo());
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