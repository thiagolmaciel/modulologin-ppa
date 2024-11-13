<?php
require_once "modelo/Categoria.php";
require_once 'controle/CategoriaDAO.php';


$idusuario = $_POST['idusuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$categoria = new Categoria();

$categoria->setIdusuario($idusuario);
$categoria->setNome($nome);
$categoria->setEmail($email);
$categoria->setSenha($senha);
$categoria->setNivel($nivel);

$dao = new CategoriaDAO();
$dao->editar($categoria);


header("location:categorias.php");




?>
