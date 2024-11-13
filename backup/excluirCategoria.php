<?php

require_once 'controle/CategoriaDAO.php';

$dao = new CategoriaDAO();
echo"foi";
$dao->excluir($_GET['idusuario']);


header("location:categorias.php");




?>
