<?php
require_once 'Conexao.php';


class UsuariosPendentesDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
      $conn = new Conexao();        
      $this->conexao = $conn->getConexao();
      $this->tabela = "UsuariosPendentes";
    }

    
    

}