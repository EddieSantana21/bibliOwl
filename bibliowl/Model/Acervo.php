<?php 
require_once("Conexao2.php");

class Acervo{
  private $idAcervo;
  private $tituloAcervo;
  private $dtLancamento;
  private $qtdAcervo;
  private $codBarrasAcervo;
  private $isbnAcervo;
  private $prateleiraAcervo;
  private $gondolaAcervo;
  private $numChamadaAcervo;
  private $statusAcervo;
  private $idAutor;
  private $idUsuario;
  private $idTipoIdentificacao;
  private $idEditora;
  private $idGenero;

  public function getIdAcervo(){
    return $this->idAcervo;
  }
  public function getTituloAcervo(){
    return $this->tituloAcervo;
  }
  public function getDtLancamento(){
    return $this->dtLancamento;
  }
  public function getQtdAcervo(){
    return $this->qtdAcervo;
  }
  public function getCodBarrasAcervo(){
    return $this->codBarrasAcervo;
  }
  public function getIsbnAcervo(){
    return $this->isbnAcervo;
  }
  public function getPrateleiraAcervo(){
    return $this->prateleiraAcervo;
  }
  public function getGondolaAcervo(){
    return $this->gondolaAcervo;
  }
  public function getNumChamadaAcervo(){
    return $this->numChamadaAcervo;
  }
  public function getStatusAcervo(){
    return $this->statusAcervo;
  }
  public function getIdAutor(){
    return $this->idAutor;
  }
  public function getIdUsuario(){
    return $this->idUsuario;
  }
  public function getIdTipoIdentificacao(){
    return $this->idTipoIdentificacao;
  }
  public function getIdEditora(){
    return $this->idEditora;
  }
  public function getIdGenero(){
    return $this->idGenero;
  }
  
  public function setIdAcervo($idAcervo){
    $this->idAcervo = $idAcervo;
  }
  public function setTituloAcervo($tituloAcervo){
    $this->tituloAcervo = $tituloAcervo;
  }
  public function setDtLancamento($dtLancamento){
    $this->dtLancamento = $dtLancamento;
  }
  public function setQtdAcervo($qtdAcervo){
    $this->qtdAcervo = $qtdAcervo;
  }
  public function setCodBarrasAcervo($codBarrasAcervo){
    $this->codBarrasAcervo = $codBarrasAcervo;
  }
  public function setIsbnAcervo($isbnAcervo){
    $this->isbnAcervo = $isbnAcervo;
  }
  public function setPrateleiraAcervo($prateleiraAcervo){
    $this->prateleiraAcervo = $prateleiraAcervo;
  }
  public function setGondolaAcervo($gondolaAcervo){
    $this->gondolaAcervo = $gondolaAcervo;
  }
  public function setNumChamadaAcervo($numChamadaAcervo){
    $this->numChamadaAcervo = $numChamadaAcervo;
  }
}