<?php
require_once"Conexao2.php"

class Sancao{
    private $idSancao;
    private $punicao;
    private $situacaoSancao;
    private $usuario;

    public function getIdSancao(){
        return $this->idSancao;
    }
    public function getPunicao(){
        return $this->punicao;
    }
    public function getSituacaoSancao(){
        return $this->getSituacaoSancao;
    }
    public function getUsuario(){
        return $this->usuario;
    }

    public function setIdSancao($idSancao){
        $this->idSancao = $idSancao;
    }
    public function setPunicao($punicao){
        $this->punicao = $punicao;
    }
    public function setSituacaoSancao($situacaoSancao){
        $this->getSituacaoSancao = $situacaoSancao;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function cadastrar($sancao){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbSancoes(id_sancao, punicao, id_usuario, situacao_sancao) VALUES(null, :punicao, :idUsuario, :situacaoSancao)");
        $stmt->bindValue(':punicao', $sancao->getPunicao());
        $stmt->bindValue(':idUsuario', $sancao->getUsuario()->getIdUsuario());
        $stmt->bindValue(':situacaoSancao', $sancao->getSituacaoSancao());
        $stmt->execute();
    }
      public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * from tbSancoes";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
      }
}