<?php
require_once "../../backend/controle/Conexao.php";
require_once "../../backend/controle/UsuariosDAO.php";
require_once "../../backend/controle/ProntuariosDAO.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senhaconfirma = $_POST['senhaconfirma'];
    $email = $_POST['email'];

    $usuarioDAO = new UsuariosDAO();
    $prontuarioDAO = new ProntuariosDAO();
    $prontuarioexiste = $prontuarioDAO->prontuarioExiste($usuario);
    $prontuarioinscrito = $prontuarioDAO->estaInscrito($usuario);
    echo($usuario);
    $usuarioexiste = $usuarioDAO->usuarioExiste($usuario);
    $senhaconfere = $usuarioDAO->senhaDuplaConfere($senha, $senhaconfirma);


    if ($prontuarioexiste) {
        if (!$prontuarioinscrito && !$usuarioexiste) {
            if ($senhaconfere) {
                $usuarioDAO->cadastrar($nome, $telefone, $endereco, $usuario, $senha, $senhaconfirma, $email);
                $prontuarioDAO->inscrever($usuario);
                echo"<script>alert('Sucesso!');</script>";
                header("Location: login.php");
                exit;
            } else {
                echo "<script>alert('Senha não confere!');</script>";
            }
        } else {
            echo "<script>alert('Prontuário não encontrado ou conta já criada!');</script>";
        }
    }
    else{
        echo "<script>alert('Prontuário não encontrado!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro</title>
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
            <form id="form" class="flex flex-col" action="cadastro.php" method="post">
                    <input class="input" type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="200" required>
                    <br>
                    <input class="input" type="text" name="usuario" id="usuario" placeholder="Prontuário" minlength="9" maxlength="9" required oninput="enchiridionValidate()">
                    <span class="span-required" id="spanProntuario">Prontuário deve começar com "BV" e ter NOVE caracteres</span>
                    <br>
                    <input class="input" type="email" name="email" id="email" placeholder="Email" maxlength="100" required>
                    <span class="span-required" id="spanEmail">Insira um email válido</span>
                    <br>
                    <input class="input" type="text" name="endereco" id="endereco" placeholder="Seu endereço" maxlength="200" required>
                    <br>
                    <input class="input" type="text" name="telefone" id="telefone" placeholder="Seu telefone" maxlength="11" required oninput="phoneValidate()">
                    <span class="span-required" id="spanTelefone">Insira um número de telefone válido</span>
                    <br>
                    <input class="input" type="password" name="senha" id="senha" placeholder="Sua Senha" maxlength="45" required oninput="passwordValidate()">
                    <span class="span-required" id="spanSenha">A senha deve ter no mínimo OITO caracteres</span>
                    <br>
                    <input class="input" type="password" name="senhaconfirma" id="confirmar" placeholder="Sua senha novamente" maxlength="45" required oninput="comparePassword()">
                    <span class="span-required" id="spanConfirmar">As senhas devem ser compatíveis</span>
                    <br>
                    <input class="button" type="submit" value="Cadastrar">
                </form>
                <a href="../login/login.php">Voltar</a>
            </div>

        </div>
    </main>
</body>

<script>
    const form =   document.getElementById('form');
    const campos = document.querySelectorAll('required');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = "/^\w+([-+.']\w+)@\w+([-.]\w+)\.w+([-.]\w+)*$/";
     
    function setError(index)
    {
        if(index==0)
        {
            $spanProntuario = document.getElementById('spanProntuario');
            $spanProntuario.style.border = '2px solid #e63636';
            $spanProntuario.style.display = 'block';
        } 
        else if(index==1)
        {
            $spanEmail = document.getElementById('spanEmail');
            $spanEmail.style.border = '2px solid #e63636';
            $spanEmail.style.display = 'block';
        }
        else if(index==2)
        {
            $spanTelefone = document.getElementById('spanTelefone');
            $spanTelefone.style.border = '2px solid #e63636';
            $spanTelefone.style.display = 'block';
        }
        else if(index==3)
        {
            $spanSenha = document.getElementById('spanSenha');
            $spanSenha.style.border = '2px solid #e63636';
            
        }
        else if(index==4)
        {
            $spanConfirmar = document.getElementById('spanConfirmar');
            $spanConfirmar.style.border = '2px solid #e63636';
            $spanConfirmar.style.display = 'block';
        }
    }

    function removeError(index)
    {
        if(index==0)
        {
            $spanProntuario = document.getElementById('spanProntuario');
            $spanProntuario.style.border = '';
            $spanProntuario.style.display = 'none';
        }
        else if(index==1)
        {
            $spanEmail = document.getElementById('spanEmail');
            $spanEmail.style.border = '';
            $spanEmail.style.display = 'none';
        }
        else if(index==2)
        {
            $spanTelefone = document.getElementById('spanTelefone');
            $spanTelefone.style.border = '';
            $spanTelefone.style.display = 'none';
        }
        else if(index==3)
        {
            $spanSenha = document.getElementById('spanSenha');
            $spanSenha.style.border = '';
            $spanSenha.style.display = 'none';
        }
        else if(index==4)
        {
            $spanConfirmar = document.getElementById('spanConfirmar');
            $spanConfirmar.style.border = '';
            $spanConfirmar.style.display = 'none';
        }
    }

    function enchiridionValidate(){
        $usuario = document.getElementById('usuario');
        
    if(usuario.value.length != 9)
    {
        setError(0);
    }
    else{
        removeError(0);
    }
    }

    function emailValidate(){
        $email = document.getElementById('email');

    if(!emailRegex.test(email.value))
    {
        setError(1);
    }
    else{
        removeError(1);
    }
    }

    function phoneValidate(){
        $telefone = document.getElementById('telefone');
    if(telefone.value.length != 11)
    {
        setError(2);
    }
    else{
        removeError(2);
    }
    }

    function passwordValidate(){
        $senha = document.getElementById('senha');
    if(senha.value.length < 8)
    {
        setError(3);
    }
    else{
        removeError(3);
        comparePassword();
    }
    }

    function comparePassword(){
    if(senha.value =! confirmar.value && confirmar.value.length >=8)
    {
        removeError(4);
    }
    else{
        setError(4);
    }
    }
</script>
</html>