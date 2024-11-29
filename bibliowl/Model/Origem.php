<?php
require_once"Conexao2.php";

class Origem{
    private $idOrigem;
    private $origemAcervo;

    public function getIdOrigem(){
        return $this->idOrigem;
    }
    public function getOrigemAcervo(){
        return $this->origemAcervo;
    }

    public function setIdOrigem($idOrigem){
        $this->idOrigem = $idOrigem;
    }

    public function setOrigemAcervo($origemAcervo){
        $this->getOrigemAcervo = $origemAcervo;
    }

    public function cadastrar($origem){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbOrigens(id_origem, origem_acervo) VALUES(null, :origem_acervo)");
        $stmt->bindValue(':origemAcervo', $origem->getOrigemAcervo());
        $stmt->execute();
    }
      public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * from tbOrigens";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
      }
}