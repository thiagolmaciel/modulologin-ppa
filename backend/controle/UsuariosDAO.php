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
        $this->tabela = "Usuario";
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

    // public function cadastrar($dados) {
    //     $this->sql = "insert into $this->tabela (ctg_nome, ctg_email, ctg_senha, ctg_nivel) values (:nome,:email,:senha,:nivel)";

    //     $this->resultado = $this->conexao->prepare($this->sql);
    //     $this->resultado->bindParam(':nome', $dados->getNome());
    //     $this->resultado->bindParam(':email', $dados->getEmail());
    //     $this->resultado->bindParam(':senha', $dados->getSenha());
    //     $this->resultado->bindParam(':nivel', $dados->getNivel());

    //     $this->resultado->execute();
    // }

    // public function listarTodos() {
    //     $this->sql = "SELECT * FROM $this->tabela";
    //     $this->resultado = $this->conexao->prepare($this->sql);
    //     $this->resultado->execute();
    //     return $this->resultado->fetchAll();
    // }

    // public function listarPorId($usuario) {
    //     $this->sql = "SELECT * FROM $this->tabela where ctg_idusuario=:idusuario";
    //     $this->resultado = $this->conexao->prepare($this->sql);
    //     $this->resultado->bindParam(':idusuario', $idusuario);
    //     $this->resultado->execute();
    //     return $this->resultado->fetch();
    // }

    // public function editar($dados) {

    //     $this->sql = "update $this->tabela set ctg_nome=:nome, ctg_email=:email,  ctg_senha=:senha, ctg_nivel=:nivel
    //     where ctg_idusuario=:idusuario";
    //     $this->resultado = $this->conexao->prepare($this->sql);
    //     $this->resultado->bindParam(':nome', $dados->getNome());
    //     $this->resultado->bindParam(':email', $dados->getEmail());
    //     $this->resultado->bindParam(':senha', $dados->getSenha());
    //     $this->resultado->bindParam(':nivel', $dados->getNivel());
    //     $this->resultado->bindParam(':idusuario', $dados->getIdusuario());
        
        
    //     $this->resultado->execute();        
    // }

    // public function excluir($idusuario) {
    //     $this->sql = "delete from $this->tabela where ctg_idusuario=:idusuario";

    //     $this->resultado = $this->conexao->prepare($this->sql);

    //     $this->resultado->bindParam(':idusuario', $idusuario);
        
    //     $this->resultado->execute();
    // }

}