<?php

class IdentPubAcervo{
  private $idTipoIdentificacao;
  private $nomeTipoIdentificacao;

  public function getIdTipoIdentificacao(){
    return $this->idTipoIdentificacao;
  }
  public function getNomeTipoIdentificacao(){
    return $this->nomeTipoIdentificacao;
  }

  public function setIdTipoIdentificacao($idTipoIdentificacao){
    $this->idTipoIdentificacao = $idTipoIdentificacao;
  }
  public function setNomeTipoIdentificacao($nomeTipoIdentificacao){
    $this->nomeTipoIdentificacao = $nomeTipoIdentificacao;
  }
  public function cadastrar($identPubAutor){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbIdentificacaoPublicacaoAcervos(id_tipo_publicacao, nome_tipo_identificacao) VALUES(:idTipoIdentificacao, :idNomeTipoIdentificacao)");
    $stmt->bindValue('idNomeIdentificacao', $identPubAutor->getNomeTipoIdentificacao());
    $stmt->execute();
}
  public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT id_tipo_identificacao, nome_tipo_identificacao from tbIdentificacaoPublicacaoAcervos";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
  }
}