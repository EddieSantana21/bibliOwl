<?php
require_once("Conexao2.php");

Class Classificacao{
    private $idClassificacao;
    private $qtdEstrelas;
    private $acervo;
    private $usuario;

    public function getIdClassificacao(){
        return $this->idClassificacao;
    }
    public function getQtdEstrelas(){
        return $this->qtdestrelas;
    }
    public function getAcervo(){
        return $this->acervo;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setIdClassificacao($idClassificacao){
        $this->idClassificacao = $idClassificacao
    }
    public function setQtdEstrelas($qtdEstrelas){
        $this->getQtdEstrelas = $qtdEstrelas;
    }
    public function setIdAcervo($acervo){
        $this->acervo = $acervo;
    }
    public function setIdUsuario($usuario){
        $this->usuario = $usuario
    }
    public function cadastrar($classificacao){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbClassificacoes(id_classificacao, qtd_estrelas, id_acervo, id_usuario) VALUES(null, :qtdEstrelas, :idAcervo, :idUsuario)");
        $stmt->bindValue(':qtdEstrelas', $classificacao->getQtdEstrelas());
        $stmt->bindValue(':idAcervo', $classificacao->getACervo()->getIdAcervo());
        $stmt->bindValue(':idUsuario', $classificacao->getUsuario()->getIdUsuario());
        $stmt->execute();
    }
      public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * from tbClassificacoes";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
      }

}