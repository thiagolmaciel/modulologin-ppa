<?php
  require_once 'Conexao.php';

  class Usuario{
    private $usuario;
    private $senha;
    private $acesso_poder;
    private $telefone;
    private $nome;
    private $email;


    public function fromArray(array $data) {
        $this->usuario = $data['usuario'] ?? null;
        $this->nome = $data['nome'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->senha = $data['senha'] ?? null;
        $this->telefone = $data['telefone'] ?? null;
        $this->acesso_poder = $data['acesso_poder'] ?? null;
    }

    function iniciarSession(){
        session_start();
        $_SESSION['usuario'] = $this->usuario;
        $_SESSION['nome'] = $this->nome;
        $_SESSION['email'] = $this->email;
        $_SESSION['acesso_poder'] = $this->acesso_poder;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAcesso_poder() {
        return $this->acesso_poder;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAcesso_poder($acesso_poder) {
        $this->acesso_poder = $acesso_poder;
    }

  }

  

?>