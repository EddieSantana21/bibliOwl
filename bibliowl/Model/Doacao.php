<?php
require_once"Conexao2.php"

class Doacao{
    private $idDoacao;
    private $acervo;
    private $origem;
    private $usuario;
    
    public function getIdDoacao(){
        return $this->idDoacao;
    }
    public function getAcervo(){
        return $this->acervo;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function getUsuario(){
        return $this->usuario;
    }

    public function setIdDoacao($idDoacao){
        $this->idDoacao = $idDoacao;
    }
    public function setAcervo($acervo){
        $this->acervo = $acervo;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function cadastrar($doacao){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbDoacoes(id_doacao, id_acervo, id_origem, id_doador, id_receptor) VALUES(null, :idAcervo, :idOrigem, :idDoador, :idReceptor)");
        $stmt->bindValue(':idAcervo', $doacao->getAcervo()->getIdAcervo());
        $stmt->bindValue(':idOrigem', $doacao->getOrigem()->getIdOrigem());
        $stmt->bindValue(':idDoador', $doacao->getUsuario()->getIdUsuario());
        $stmt->bindValue(':idReceptor', $doacao->getUsuario()->getIdUsuario());
        $stmt->execute();
    }
      public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * from tbDoacoes";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
      }
}