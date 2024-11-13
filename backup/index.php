<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="ptBR">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>CRUD - Modelo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />                       
    <body>
        <h2>Nova Categoria</h2>
        <form action="cadastrarCategoria.php" method="POST">
            <label for="nome" class="">Nome:</label>
            <br />
            <input name="nome" id="nome" placeholder="Escreva seu nome" type="text">
            <br />
            <label for="email">email:</label>
            <br />
            <input name="email" id="email" placeholder="Escreva seu email" type="text">
            <br />
            <label for="senha">senha:</label>
            <br />
            <input name="senha" id="senha" placeholder="Escreva sua senha" type="text">
            <br />
            <label for="nivel">nivel:</label>
            <br />
            <input name="nivel" id="nivel" placeholder="Escreva seu nivel" type="text">
            <br />
            <button type="submit">Cadastrar</button>
        </form>       

    </body>               
</html>
