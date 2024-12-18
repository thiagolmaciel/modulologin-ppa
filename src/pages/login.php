<?php
// Include the necessary files
session_start();
require_once '../../backend/controle/Conexao.php';
require_once '../../backend/controle/UsuariosDAO.php';
require_once '../../backend/controle/ProntuariosDAO.php';
 
if(isset($_SESSION['usuario'])){
    header('Location: ../../src/pages/painel.php');
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $usuariosDAO = new UsuariosDAO();

    $usuarioEncontrado = $usuariosDAO->logar($usuario, $senha); 

    if ($usuarioEncontrado) {
            $usuarioEncontrado->iniciarSession();
            header("Location: painel.php");
            exit;
        }

    } else {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        echo('<script>alert("Senha incorreta ou usuário não encontrado!")</script>');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ea58ad5b7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=error" />
</head>

<body class="h-screen w-screen flex flex-col justify-center items-center">

 <!--<form action="OBJ1", method="post">-->
    <main>
        <div class="container shadow-xl shadow-black rounded-xl overflow-hidden">
            <div class="left-side flex justify-center items-center">
                <div class="content">
                    <img src="../../public/ppalogo.svg" height="250px" width="250px">
                </div>
            </div>
            <div class="right-side items-center justify-center">
                <div class="warn w-full flex items-center justify-left p-5 font-bold">
                    <span class="material-symbols-outlined mr-5">
                        error
                    </span>
                    Mesmo que seja ingressado, se inscreva!
                </div>
                <form class="flex flex-col" action="login.php" method="post" name="loginform">
                    <input class="input" type="text" name="usuario" id="usuario" placeholder="Prontuário" maxlength="9" required></input>
                    <br>                    
                    <input class="input" type="password" name="senha" id="senha" placeholder="Senha" maxlength="45" required>
                    <br>
                    <a href="email_confirm.php">Esqueci minha senha?</a>
                    <input class="button" type="submit" value="Login" onclick="validar()">
                    <p>Não tem conta? <a href="cadastro.php" >Se inscreva</a></p>
                </form>
            </div>

        </div>
    </main>
</body>

</html>