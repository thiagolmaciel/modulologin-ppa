<?php
require_once 'Conexao.php';
require_once 'Usuario.php';
class ProntuariosDAO
{

  private $conexao;
  private $sql;
  private $resultado;
  private $tabela;

  public function __construct()
  {
    $conn = new Conexao();
    $this->conexao = $conn->getConexao();
    $this->tabela = "Prontuarios";
  }

  function prontuarioExiste($usuario){
    $this->sql = 'SELECT 1 FROM Prontuarios WHERE usuario = :usuario LIMIT 1';        
    $this->resultado = $this->conexao->prepare($this->sql);
    $this->resultado->bindParam(':usuario', $usuario);
    $this->resultado->execute(); 
    return $this->resultado->fetch() ? true : false;
  }

  function estaInscrito($usuario){
    $this->sql = 'SELECT 1 FROM Prontuarios WHERE usuario = :usuario AND inscrito = TRUE';
    $this->resultado =  $this->conexao->prepare($this->sql);
    $this->resultado->bindParam(':usuario', $usuario);
    $this->resultado->execute(); 
    return $this->resultado->fetch() ? true : false;
  }

  function Inscrever($usuario){
    $this->sql = 'UPDATE Prontuarios SET inscrito = TRUE WHERE usuario = :usuario';
    $this->resultado = $this->conexao->prepare($this->sql);
    $this->resultado->bindParam(':usuario', $usuario);
    return $this->resultado->execute();
    }
         
}

?>