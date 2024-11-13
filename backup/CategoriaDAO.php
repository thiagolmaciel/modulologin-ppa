<?php

require_once 'Conexao.php';


class CategoriaDAO {

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct() {
        $conn = new Conexao();        
        $this->conexao = $conn->getConexao();
        $this->tabela = "categoria";
    }

    public function cadastrar($dados) {
        $this->sql = "insert into $this->tabela (ctg_nome, ctg_email, ctg_senha, ctg_nivel) values (:nome,:email,:senha,:nivel)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':email', $dados->getEmail());
        $this->resultado->bindParam(':senha', $dados->getSenha());
        $this->resultado->bindParam(':nivel', $dados->getNivel());

        $this->resultado->execute();
    }

    public function listarTodos() {
        $this->sql = "SELECT * FROM $this->tabela";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->execute();
        return $this->resultado->fetchAll();
    }

    public function listarPorId($idusuario) {
        $this->sql = "SELECT * FROM $this->tabela where ctg_idusuario=:idusuario";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':idusuario', $idusuario);
        $this->resultado->execute();
        return $this->resultado->fetch();
    }

    public function editar($dados) {

        $this->sql = "update $this->tabela set ctg_nome=:nome, ctg_email=:email,  ctg_senha=:senha, ctg_nivel=:nivel
        where ctg_idusuario=:idusuario";
        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindParam(':nome', $dados->getNome());
        $this->resultado->bindParam(':email', $dados->getEmail());
        $this->resultado->bindParam(':senha', $dados->getSenha());
        $this->resultado->bindParam(':nivel', $dados->getNivel());
        $this->resultado->bindParam(':idusuario', $dados->getIdusuario());
        
        
        $this->resultado->execute();        
    }

    public function excluir($idusuario) {
        $this->sql = "delete from $this->tabela where ctg_idusuario=:idusuario";

        $this->resultado = $this->conexao->prepare($this->sql);

        $this->resultado->bindParam(':idusuario', $idusuario);
        
        $this->resultado->execute();
    }

}

?>
