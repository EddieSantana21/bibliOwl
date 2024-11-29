<?php
require_once "Conexao2.php";

Class Reserva{
    private $idReserva;
    private $tempoReserva;
    private $acervo;
    private $usuario;
    private $statusAcervo;

    public function getIdReserva(){
        return $this->idReserva;
    }
    public function getTempoReserva(){
        return $this->tempoReserva;
    }
    public function getAcervo(){
        return $this->acervo;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getStatusAcervo(){
        return $this->statusAcervo;
    }

    public function setIdReserva($idReserva){
        $this->idReserva = $idReserva;
    }
    public function setTempoReserva($tempoReserva){
        $this->tempoReserva = $tempoReserva;
    }
    public function setAcervo($acervo){
        $this->acervo = $acervo;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setStatusAcervo($statusAcervo){
        $this->statusAcervo = $statusAcervo;
    }

    public function cadastrar($reserva){
        //prepare statement
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbReservas(id_reserva, tempo_reserva, id_acervo, id_usuario, status_acervo) VALUES(null, :tempoReserva, :idAcervo, :idUsuario, :statusAcervo)");
        $stmt->bindValue(':tempoReserva', $reserva->getTempoReserva());
        $stmt->bindValue(':idAcervo', $reserva->getAcervo()->getIdAcervo());
        $stmt->bindValue(':idUsuario', $reserva->getUsuario()->getIdUsuario());
        $stmt->bindValue(':statusAcervo', $reserva->getStatusReserva());
        $stmt->execute();
    }
      public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT * from tbReservas";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
      }
}