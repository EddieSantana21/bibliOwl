<?php 
require_once"Conexao2.php";

class Emprestimo{
    private $idEmprestimo;
    private $dataEmprestimo;
    private $dataDevolucao;
    private $tempoEmprestimo;
    private $usuario;
    private $acervo;
    private $situacaoEmprestimo;

    public function getIdEmprestimo(){
        return $this->idEmprestimo;
    }
    public function getDataEmprestimo(){
        return $this->dataEmprestimo;
    }
    public function getDataDevolucao(){
        return $this->dataDevolucao;
    }
    public function getTempoEmprestimo(){
        return $this->tempoEmprestimo;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getAcervo(){
        return $this->acervo;
    }
    public function getSituacaoEmprestimo(){
        return $this->situacaoEmprestimo;
    }

    public function setIdEmprestimo($idEmprestimo){
        $this->idEmprestimo = $idEmprestimo;
    }
    public function setDataEmprestimo($dataEmprestimo){
        $this->dataEmprestimo = $dataEmprestimo;
    }
    public function setDataDevolucao($dataDevolucao){
        $this->dataDevolucao = $dataDevolucao;
    }
    public function setTempoEmprestimo($tempoEmprestimo){
        $this->tempoEmprestimo = $tempoEmprestimo;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setAcervo($acervo){
        $this->acervo = $acervo;
    }
    public function setSituacaoEmprestimo($situacaoEmprestimo){
        $this->getSituacaoEmprestimo = $situacaoEmprestimo;
    }

    public function cadastrar($emprestimo){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbEmprestimos(id_emprestimo, data_emprestimo, data_devolucao, tempo_emprestimo, id_usuario, id_administrador,id_acervo, situacao_emprestimo) VALUES(null, :dataEmprestimo, :dataDevolucao, :tempoEmprestimo, :idUsuario, :idAdministrador,:idAcervo, :situacaoEmprestimo)");
        $stmt->bindValue(':dataEmprestimo', $emprestimo->getDataEmprestimo());
        $stmt->bindValue(':dataDevolucao', $emprestimo->getDataDevolucao());
        $stmt->bindValue(':tempoEmprestimo', $emprestimo->getTempoEmprestimo());
        $stmt->bindValue(':idUsuario', $emprestimo->getUsuario()->getIdUsuario());
        $stmt->bindValue(':idAdministrador', $emprestimo->getUsuario()->getIdUsuario())
        $stmt->bindValue(':idAcervo', $emprestimo->getAcervo()->getIdAcervo());
        $stmt->bindValue(':situacaoEmprestimo', $emprestimo->getSituacaoEmprestimo());
        $stmt->execute();
    }
      public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * from tbEmprestimos";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
      }
}