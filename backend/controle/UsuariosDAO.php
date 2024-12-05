<?php
require_once 'Conexao.php';
require_once 'Usuario.php';
require_once 'ProntuariosDAO.php';
class UsuariosDAO
{

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct ()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "Usuarios";
    }

    public function logar($usuario, $senha)
    {
        $this->sql = 'SELECT * FROM ' . $this->tabela . ' WHERE usuario = :usuario AND senha = :senha';
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':usuario', $usuario);
        $this->resultado->bindParam(':senha', $senha);
        $this->resultado->execute();

        if ($dadosUsuario = $this->resultado->fetch(PDO::FETCH_ASSOC)) {
            $usuarioObj = new Usuario();
            $usuarioObj->fromArray($dadosUsuario);
            return $usuarioObj;
        } else {
            return false;
        }
    }


    public function senhaDuplaConfere($senha, $confirmarsenha)
    {
        return $senha == $confirmarsenha;
    }


    function usuarioExiste($usuario)
    {
        $this->sql = 'SELECT 1 FROM ' . $this->tabela . ' WHERE usuario = :usuario LIMIT 1';
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':usuario', $usuario);
        $this->resultado->execute();
        if ($this->resultado->fetch()) {
            return true;
        } else {
            return false;
        };
    }

    function emailExiste($email)
    {
        try {
            $this->sql = 'SELECT 1 FROM ' . $this->tabela . ' WHERE email = :email LIMIT 1';
            $this->resultado = $this->conexao->prepare($this->sql);
            $this->resultado->bindParam(':email', $email);
            $this->resultado->execute();
            if ($this->resultado->fetch()) {
                return true;
            } else {
                    return false;
            }
        } catch (PDOException $e) {
            error_log("Error checking email: " . $e->getMessage());
            return false;
        }
    }

    function cadastrar($nome, $telefone, $endereco, $usuario, $senha, $email)
    {
        $this->sql = 'INSERT INTO Usuarios (nome, telefone, endereco, usuario, senha, email, acesso_poder) VALUES (:nome, :telefone, :endereco, :usuario, :senha, :email, false)';
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $nome);
        $this->resultado->bindParam(':telefone', $telefone);
        $this->resultado->bindParam(':endereco', $endereco);
        $this->resultado->bindParam(':usuario', $usuario);
        $this->resultado->bindParam(':senha', $senha);
        $this->resultado->bindParam(':email', $email);
        if ($this->resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function logout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); // Inicia a sessão, caso ainda não tenha sido iniciada
        }
        session_destroy();
        header('Location: ../../src/pages/login.php');
    }
}
