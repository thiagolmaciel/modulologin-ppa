<?php
include 'controle/CategoriaDAO.php';
$dao = new CategoriaDAO();
$dados = $dao->listarTodos();


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
    <body>
        <h2>Nova Categoria</h2>
        <form action="cadastrarCategoria.php" method="POST">
            <label for="nome" class="">Nome:</label>
            <br />
            <input name="nome" id="nome" placeholder="Escreva seu nome" type="text">
            <br />
            <label for="email">Email:</label>
            <br />
            <input name="email" id="email" placeholder="Escreva seu email" type="text">
            <br />
            <label for="senha">Senha:</label>
            <br />
            <input name="senha" id="senha" placeholder="Escreva sua senha" type="text">
            <br />
            <label for="nivel">Nivel:</label>
            <br />
            <input name="nivel" id="nivel" placeholder="Escreva seu nivel" type="text">
            <br />
            <button type="submit">Cadastrar</button>
        </form>
        

        <?php if (count($dados) < 1) { ?>
            <h3>Não existem registros cadastrados</h3>
        <?php } else {  ?>
            <h3>Categorias Cadastradas</h3>
            <table border='1' class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Nivel</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado) { ?>
                    <tr>
                        <td><?php echo $dado['ctg_idusuario']; ?></td>
                        <td><?php echo $dado['ctg_nome']; ?></td>
                        <td><?php echo $dado['ctg_email']; ?></td>
                        <td><?php echo $dado['ctg_senha']; ?></td>
                        <td><?php echo $dado['ctg_nivel']; ?></td>
                        <td>
                            <a href='exibirCategoria.php?idusuario=<?php echo $dado['ctg_idusuario']; ?>'>
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href='excluirCategoria.php?idusuario=<?php echo $dado['ctg_idusuario']; ?>'>
                                Excluir
                            </a>
                        </td>                         
                    </tr>
                    <?php } ?>    
                </tbody>
            </table>            
        <?php } ?>  
    </body>               
</html>
