<?php

require_once("Conexao2.php");

Class Comentario{
  private $idComentario;
  private $txtComentario;
  private $idUsuario;
  
  public function getIdComentario(){
    return $this->idComentario;
  }
  public function getTxtComentario(){
    return $this->txtComentario;
  }
  public function getIdUsuario(){
    return $this->idUsuario;
  }
  public function setIdComentario($idComentario){
    $this->idComentario = $idComentario;
  }
  public function setTxtComentario($txtComentario){
    $this->txtComentario = $txtComentario;
  }
  public function setIdUsuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }

  public function cadastrar($comentario){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbComentario(comentario,id_usuario) VALUES(:txtComentario, :id_usuario)");
    $stmt->bindValue(':txtComentario', $comentario->getTxtComentario());
    $stmt->bindValue(':idUsuario', $comentario->getIdUsuario());
    $stmt->execute();
}
public function listar(){
  $conexao = Conexao::conectar();
  $querySelect = "SELECT id_comentario, comentario, id_usuario from tbComentarios";
  $resultado = $conexao->query($querySelect);
  $lista = $resultado->fetchAll();
  return $lista;   
}
}