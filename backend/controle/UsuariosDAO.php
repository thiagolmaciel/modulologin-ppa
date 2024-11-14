<?php
require_once 'Conexao.php';
class UsuariosDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();        
        $this->conexao = $conn->getConexao();
        $this->tabela = "Usuarios";
    }

      public function logar($usuario, $senha){
        $this->sql = 'SELECT * FROM ' . $this->tabela . ' WHERE usuario = :usuario AND senha = :senha';
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':usuario', $usuario);
        $this->resultado->bindParam(':senha', $senha);
        $this->resultado->execute();
        
        if ($usuarioEncontrado = $this->resultado->fetch(PDO::FETCH_ASSOC)) {
            return $usuarioEncontrado; 
        } else {
            return false;
        }
      }
}