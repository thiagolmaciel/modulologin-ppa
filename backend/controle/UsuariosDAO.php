<?php
require_once 'Conexao.php';
require_once 'Usuario.php';
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

    public function logar($usuario, $senha) {
        $this->sql = 'SELECT * FROM ' . $this->tabela . ' WHERE usuario = :usuario AND senha = :senha';
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':usuario', $usuario);
        $this->resultado->bindParam(':senha', $senha);
        $this->resultado->execute();
        
        if ($dadosUsuario = $this->resultado->fetch(PDO::FETCH_ASSOC)) {
            // Cria o objeto Usuario
            $usuarioObj = new Usuario();
            $usuarioObj->fromArray($dadosUsuario); // Preenche o objeto com os dados
            return $usuarioObj;
        } else {
            return false; // Login inválido
        }
    }

    public function logout(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); // Inicia a sessão, caso ainda não tenha sido iniciada
        }
        session_destroy();
        header('Location: ../../src/pages/login/login.php');
    }
}

?>