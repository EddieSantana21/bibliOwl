<?php
namespace Model;
use PDO;
use PDOException;

class Conexao2{
  // settar os atributos dentro de uma variável
  private $host = "localhost";
  private $db_name = "bibliow";
  private $username = "root";
  private $password = "";

  public $conn;

  // função para criar conexao com banco de dados
  public function conectar(){
    try{
      $this->conn = new PDO ("mysql:host=$this->host; 
                            db_name=$this->db_name, 
                            $this->username, 
                            $this->password");
      $this->conn->exec("set names utf8");
      echo("teste");
    }catch(PDOException $error){
      echo "Error".$error->getMessage();
    } return $this->conn;
  }
  
}