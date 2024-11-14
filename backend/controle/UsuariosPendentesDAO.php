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

    public function senhaconfere($senha, $confirmarsenha){
      return $senha==$confirmarsenha;
    }

    public function usuarioExiste($usuario) {
      $this->sql = 'SELECT 1 FROM Usuarios WHERE usuario = :usuario LIMIT 1';        
      $this->resultado = $this->conexao->prepare($this->sql);
      $this->resultado->bindParam(':usuario', $usuario);
      $this->resultado->execute();
      return $this->resultado->fetch() ? true : false;
  }
  
    public function cadastrar($nome, $telefone, $endereco, $usuario, $senha, $confirmarsenha, $email){
          $this->sql = 'INSERT INTO UsuariosPendentes (nome, telefone, endereco, usuario, senha, email, acesso_poder) VALUES (:nome, :telefone, :endereco, :usuario, :senha, :email, false)';
          $this->resultado = $this->conexao->prepare($this->sql);
          $this->resultado->bindParam(':usuario', $usuario);
          $this->resultado->bindParam(':nome', $nome);
          $this->resultado->bindParam(':telefone', $telefone);
          $this->resultado->bindParam(':endereco', $endereco);
          $this->resultado->bindParam(':usuario', $usuario);
          $this->resultado->bindParam(':senha', $senha);
          $this->resultado->bindParam(':email', $email);
          if($this->resultado->execute()){
            return true;
          }
          else{
            return false;
          }
        }          
    

}