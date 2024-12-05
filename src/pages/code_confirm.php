<?php

require_once '../../backend/controle/Conexao.php';
require_once '../../backend/controle/UsuariosDAO.php';
require_once '../../backend/controle/ProntuariosDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    //email existe no banco de dados? Se sim:, senao imprimir um alert na tela dizendo: Email não encontrado
    if($email){

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Confirmação do código</title>
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
                    Enviamos um código de verificação de 6 digítos no seu email.<br>
                    Confirme Abaixo:
                </div>
                <form class="flex flex-col" action="email_confirm.php" method="post" name="loginform">                  
                    <input class="input" type="email" name="email" id="email" placeholder="Email" maxlength="100" required> 
                
                    <br>
                    <input class="button" type="submit" value="Confirmar" onclick="validar()">
                    <!--- Test --->
                </form>
            </div>

        </div>
    </main>
</body>
</html>