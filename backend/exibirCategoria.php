<?php
require_once "controle/CategoriaDAO.php";

$dao = new CategoriaDAO();
$dados = $dao->listarPorId($_GET['idusuario']);

$idusuario = $dados['ctg_idusuario'];
$nome = $dados['ctg_nome'];
$email = $dados['ctg_email'];
$senha = $dados['ctg_senha'];
$nivel = $dados['ctg_nivel'];

?>

<!doctype html>

    <html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="ptBR">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>CRUD - Modelo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" /> 
    </head>                          
    <body>
        <h2>Editar Categoria</h2>        
        <form action="editarCategoria.php" method="POST">
            <label for="nome" class="">Nome:</label>
            <br />
            <input name="nome" id="nome" placeholder="Escreva seu nome" type="text" value="<?php echo $nome;?>"  />
            <br />
            <label for="email">email:</label>
            <br />
            <input name="email" id="email" placeholder="Escreva seu email" type="text" value="<?php echo $email;?>"  />
            <br />
            <label for="senha">senha:</label>
            <br />
            <input name="senha" id="senha" placeholder="Escreva sua senha" type="text" value="<?php echo $senha;?>"  />
            <br />
            <label for="nivel">nivel:</label>
            <br />
            <input name="nivel" id="nivel" placeholder="Escreva seu nivel" type="text" value="<?php echo $nivel;?>"  />
            <br />
            <input type="hidden" name="idusuario" value="<?php echo $idusuario;?>"/>
            <button type="submit">Editar</button>
        </form>
    </body>    
</html>
