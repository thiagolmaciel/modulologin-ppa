<?php
require_once "../../../backend/controle/Conexao.php";
require_once "../../../backend/controle/UsuariosPendentesDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senhaconfirma = $_POST['senhaconfirma'];
    $email = $_POST['email'];

    $usuariospendentesDAO = new UsuariosPendentesDAO();
    $usuarioexiste = $usuariospendentesDAO->usuarioexiste($usuario);
    $senhaconfere = $usuariospendentesDAO->senhaconfere($senha, $senhaconfirma);

    if($usuarioexiste){
        //MENSAGEM ERRO: USUARIO JA CADASTRADO
    }
    else{
      if($senhaconfere){
        $usuariospendentesDAO->cadastrar($nome, $telefone, $endereco, $usuario, $senha, $senhaconfirma , $email);
        header("Location: /src/pages/login/login.php");
        exit;
      }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
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
                    <img src="/public/ppalogo.svg" height="250px" width="250px">
                </div>
            </div>
            <div class="right-side items-center justify-center">
                <form class="flex flex-col" action="cadastro.php" method="post">
                    <input class="input" type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="200" required>
                    <br>
                    <input class="input" type="text" name="usuario" id="usuario" placeholder="Prontuário" maxlength="9" required>
                    <br>
                    <input class="input" type="email" name="email" id="email" placeholder="Email" maxlength="100" required>
                    <br>
                    <input class="input" type="text" name="endereco" id="endereco" placeholder="Seu endereço" maxlength="200" required>
                    <br>
                    <input class="input" type="text" name="telefone" id="telefone" placeholder="Seu telefone" maxlength="11" required>
                    <br>
                    <input class="input" type="password" name="senha" id="senha" placeholder="Sua Senha" maxlength="45" required>
                    <br>
                    <input class="input" type="password" name="senhaconfirma" id="senhaconfirma" placeholder="Sua senha novamente" maxlength="45" required>
                    <br>
                    <input class="button" type="submit" value="Cadastrar">
                </form>
            </div>

        </div>
    </main>
</body>

</html>