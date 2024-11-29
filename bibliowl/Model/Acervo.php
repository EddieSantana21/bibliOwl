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
  private $autor;
  private $usuario;
  private $tipoIdentificacao;
  private $editora;
  private $genero;

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
  public function getAutor(){
    return $this->autor;
  }
  public function getUsuario(){
    return $this->usuario;
  }
  public function getTipoIdentificacao(){
    return $this->idTipoIdentificacao;
  }
  public function getEditora(){
    return $this->editora;
  }
  public function getGenero(){
    return $this->genero;
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
  public function setStatusAcervo($statusAcervo){
    $this->statusAcervo = $getStatusAcervo;
  }
  public funtion setAutor($autor){
    $this->autor = $autor;
  }
  public function setTipoIdentificacao($tipoIdentificacao){
    $this->tipoIdentificacao = $tipoIdentificacao;
  }
  public function setEditora($editora){
    $this->editora = $editora;
  }
  public function setGenero($genero){
    $this->genero = $genero
  }

  public function cadastrar($acervo){
    //prepare statement
    $con = Conexao::conectar();
    $stmt = $con->prepare("INSERT INTO tbAcervos(id_acervo, titulo_acervo, data_lancamento, qtd_acervo, cod_barras_acervo, isbn_acervo, prateleira_acervo, gondola_acervo, num_chamada_acervo, status_acervo, id_autor, id_tipo_identificacao, id_editora, id_genero)
     VALUES(null, :tituloAcervo, :dtLancamento, :qtdAcervo, :codBarrasAcervo, :isbnAcervo, :prateleiraAcervo, :gondolaAcervo, :numChamadaAcervo, :statusAcervo ,:idAutor, :idTipoIdentificacao, :idEditora, :idGenero)");
    $stmt->bindValue(':tituloAcervo', $acervo->getTituloAcervo());
    $stmt->bindValue(':dtLancamento', $acervo->getDtLancamento());
    $stmt->bindValue(':qtdAcervo', $acervo->getQtdAcervo());
    $stmt->bindValue(':codBarrasAcervo', $acervo->getCodBarrasAcervo());
    $stmt->bindValue(':isbnAcervo', $acervo->getIsbnAcervo());
    $stmt->bindValue(':prateleiraAcervo',$acervo->getPrateleiraAcervo());
    $stmt->bindValue(':gondolaAcervo', $acervo->getGondolaAcervo());
    $stmt->bindValue(':numChamadaAcervo', $acervo->getNumChamadaAcervo());
    $stmt->bindValue(':statusAcervo', $acervo->getStatusAcervo()->getIdStatusAcervo)
    $stmt->bindValue(':idAutor', $acervo->getAutor()->getIdAutor());
    $stmt->bindValue(':idTipoIdentificacao',$acervo->getTipoIdentificacao()->getIdTipoIdentificacao());
    $stmt->bindValue(':idEditora', $acervo->getEditora()->getIdEditora());
    $stmt->bindValue(':idGenero', $acervo->getGenero()->getIdGenero());
    $stmt->execute();
}
  public function listar(){
    $conexao = Conexao::conectar();
    $querySelect = "SELECT * from tbAcervos";
    $resultado = $conexao->query($querySelect);
    $lista = $resultado->fetchAll();
    return $lista;   
  }
}