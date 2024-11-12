<?php
require_once "modelo/Categoria.php";
require_once "controle/CategoriaDAO.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];


$categoria = new Categoria();
$categoria->setNome($nome);
$categoria->setEmail($email);
$categoria->setSenha($senha);
$categoria->setNivel($nivel);

echo"$nivel";
$dao = new CategoriaDAO();

$dao->cadastrar($categoria);

echo"$nivel";

header("location:categorias.php");


?>
