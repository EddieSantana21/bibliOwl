<?php

Class TipoUsuario{
  private $idTipoUsuario;
  private $tipoUsuario;

  public function getIdTipoUsuario(){
    return $this->idTipoUsuario;
  }
  public function getTipoUsuario(){
    return $this->tipoUsuario;
  }
  
  public function setIdTipoUsuario($idTipoUsuario){
    $this->idTipoUsuario = $idTipoUsuario;
  }
  public function setTipoUsuario($tipoUsuario){
    $this->tipoUsuario = $tipoUsuario;
  }

  public function cadastrar($tipoUsuario){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbTipoUsuarios(tipo_usuario) VALUES(?)");
    $stmt->bindValue(1, $tipoUsuario->getTipoUsuario());
    $stmt->execute();
}
public function listar(){
  $conexao = Conexao::conectar();
  $querySelect = "SELECT id_tipo, tipo_usuario from tbTipoUsuarios";
  $resultado = $conexao->query($querySelect);
  $lista = $resultado->fetchAll();
  return $lista;   
}
}