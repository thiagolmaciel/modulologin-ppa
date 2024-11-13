<?php

class Login {

    private $usuario;
    private $acesso_poder;
    private $email;
    private $senha;

    public function __construct() {
        
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

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAcesso_poder($acesso_poder) {
        $this->acesso_poder = $acesso_poder;
    }




}
?>

