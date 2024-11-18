<?php
require_once 'UsuariosDAO.php';
session_start();
    $usuarioDAO = new UsuariosDAO();
    $usuarioDAO->logout();
?>