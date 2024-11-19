<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: /src/pages/login.php');
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
    if($_SESSION['acesso_poder']){
      echo '<title>Painel - Administrador</title>';
    }
    else{
      echo '<title>Painel - Usuário</title>';
    }
  ?>
  <link rel="stylesheet" href="/src/css/painelstyle.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7ea58ad5b7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=error" />
</head>

<body class="">
  <header>
    <div class="header py-5 px-10 flex justify-between items-center">
      <img src="/public/ppalogo.svg" height="50px" width="100px" alt=""></img>
      <div class="flex flex-row gap-10">
      <p>Olá, <?php echo '<strong>' . $_SESSION['nome'] . '</strong>' ?></p>
      <p><a href='../../../backend/controle/Logout.php'>Sair</a></p>
      </div>
    </div>
  </header>
  <main class="flex min-h-full w-screen flex-row">
    <nav>
      <div class="nav flex px-10 py-5">
        <ul class="flex gap-5">
          <li>
            <a href="">Dados do Aluno</a>
          </li>
          <li>
            <a href="">Inscreva-se</a>
          </li>
          <li>
            <a href="">Minhas Inscrições</a>
          </li>
          <?php
          if ($_SESSION['acesso_poder']) {
            echo '
            <li>
              <a href="">Listar Inscrições</a>
            </li>
            <li>
              <a href="">Gerenciar Notificações</a>
            </li>
            <li>
              <a href="">Gerenciar Pagamentos</a>
            </li>
            <li>
              <a href="">Configurações</a>
            </li>
          ';
          }
          ?>
        </ul>
      </div>
    </nav>
    <div class="page">
      <div class="content text-white p-5">
        <h1>Poem of Lorem Ipsum</h1>

        <p>
          Ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus dolorem, repellat ut, quisquam natus aperiam quaerat optio aliquid magnam voluptatem inventore corporis amet iste dignissimos ipsum. Distinctio omnis fuga doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus nam deleniti, perferendis non totam alias nesciunt velit aperiam? Doloremque fugiat eveniet natus sapiente nihil velit eos doloribus iure Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima iure dolorum quae nostrum non ea magnam at, distinctio, voluptatem nulla. Eaque iusto ducimus corporis exercitationem, animi perferendis nam delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quisquam tempore, illum sit rerum adipisci corrupti est deleniti ipsam quas illo dolorum? Quasi quas sed deserunt sit ut hic possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit est facilis, accusantium, eligendi quis eius perferendis illo ullam officia fugit hic magni unde error ipsam, earum laboriosam adipisci sequi quos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis accusantium, deserunt exercitationem aliquam autem asperiores accusamus aut vitae cumque omnis non ipsa eligendi adipisci laboriosam aspernatur possimus laudantium. Recusandae, laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis, nobis corrupti magni maiores exercitationem laudantium, ipsa sunt et eum deleniti commodi a repellendus eaque aut eos optio consequuntur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sapiente! Commodi et dicta consequatur ducimus blanditiis nihil sequi odio quasi, quos quidem nesciunt, doloribus eveniet. Ullam, recusandae. Facilis, quibusdam. Sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel pariatur impedit reprehenderit repellendus minus veritatis, voluptatibus error provident quis totam neque eaque, facilis, incidunt velit amet ut recusandae distinctio possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minima, quis non voluptatem animi, temporibus ipsum iure laboriosam asperiores dolore et atque veritatis libero quae doloremque totam dolorum voluptates beatae.
          <br><br>
          Ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus dolorem, repellat ut, quisquam natus aperiam quaerat optio aliquid magnam voluptatem inventore corporis amet iste dignissimos ipsum. Distinctio omnis fuga doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus nam deleniti, perferendis non totam alias nesciunt velit aperiam? Doloremque fugiat eveniet natus sapiente nihil velit eos doloribus iure Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima iure dolorum quae nostrum non ea magnam at, distinctio, voluptatem nulla. Eaque iusto ducimus corporis exercitationem, animi perferendis nam delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quisquam tempore, illum sit rerum adipisci corrupti est deleniti ipsam quas illo dolorum? Quasi quas sed deserunt sit ut hic possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit est facilis, accusantium, eligendi quis eius perferendis illo ullam officia fugit hic magni unde error ipsam, earum laboriosam adipisci sequi quos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis accusantium, deserunt exercitationem aliquam autem asperiores accusamus aut vitae cumque omnis non ipsa eligendi adipisci laboriosam aspernatur possimus laudantium. Recusandae, laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis, nobis corrupti magni maiores exercitationem laudantium, ipsa sunt et eum deleniti commodi a repellendus eaque aut eos optio consequuntur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sapiente! Commodi et dicta consequatur ducimus blanditiis nihil sequi odio quasi, quos quidem nesciunt, doloribus eveniet. Ullam, recusandae. Facilis, quibusdam. Sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel pariatur impedit reprehenderit repellendus minus veritatis, voluptatibus error provident quis totam neque eaque, facilis, incidunt velit amet ut recusandae distinctio possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minima, quis non voluptatem animi, temporibus ipsum iure laboriosam asperiores dolore et atque veritatis libero quae doloremque totam dolorum voluptates beatae.
          <br><br>
          Ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus dolorem, repellat ut, quisquam natus aperiam quaerat optio aliquid magnam voluptatem inventore corporis amet iste dignissimos ipsum. Distinctio omnis fuga doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus nam deleniti, perferendis non totam alias nesciunt velit aperiam? Doloremque fugiat eveniet natus sapiente nihil velit eos doloribus iure Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima iure dolorum quae nostrum non ea magnam at, distinctio, voluptatem nulla. Eaque iusto ducimus corporis exercitationem, animi perferendis nam delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quisquam tempore, illum sit rerum adipisci corrupti est deleniti ipsam quas illo dolorum? Quasi quas sed deserunt sit ut hic possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit est facilis, accusantium, eligendi quis eius perferendis illo ullam officia fugit hic magni unde error ipsam, earum laboriosam adipisci sequi quos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis accusantium, deserunt exercitationem aliquam autem asperiores accusamus aut vitae cumque omnis non ipsa eligendi adipisci laboriosam aspernatur possimus laudantium. Recusandae, laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis, nobis corrupti magni maiores exercitationem laudantium, ipsa sunt et eum deleniti commodi a repellendus eaque aut eos optio consequuntur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sapiente! Commodi et dicta consequatur ducimus blanditiis nihil sequi odio quasi, quos quidem nesciunt, doloribus eveniet. Ullam, recusandae. Facilis, quibusdam. Sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel pariatur impedit reprehenderit repellendus minus veritatis, voluptatibus error provident quis totam neque eaque, facilis, incidunt velit amet ut recusandae distinctio possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minima, quis non voluptatem animi, temporibus ipsum iure laboriosam asperiores dolore et atque veritatis libero quae doloremque totam dolorum voluptates beatae.
          <br><br>
          Ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus dolorem, repellat ut, quisquam natus aperiam quaerat optio aliquid magnam voluptatem inventore corporis amet iste dignissimos ipsum. Distinctio omnis fuga doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus nam deleniti, perferendis non totam alias nesciunt velit aperiam? Doloremque fugiat eveniet natus sapiente nihil velit eos doloribus iure Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima iure dolorum quae nostrum non ea magnam at, distinctio, voluptatem nulla. Eaque iusto ducimus corporis exercitationem, animi perferendis nam delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quisquam tempore, illum sit rerum adipisci corrupti est deleniti ipsam quas illo dolorum? Quasi quas sed deserunt sit ut hic possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit est facilis, accusantium, eligendi quis eius perferendis illo ullam officia fugit hic magni unde error ipsam, earum laboriosam adipisci sequi quos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis accusantium, deserunt exercitationem aliquam autem asperiores accusamus aut vitae cumque omnis non ipsa eligendi adipisci laboriosam aspernatur possimus laudantium. Recusandae, laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis, nobis corrupti magni maiores exercitationem laudantium, ipsa sunt et eum deleniti commodi a repellendus eaque aut eos optio consequuntur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sapiente! Commodi et dicta consequatur ducimus blanditiis nihil sequi odio quasi, quos quidem nesciunt, doloribus eveniet. Ullam, recusandae. Facilis, quibusdam. Sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel pariatur impedit reprehenderit repellendus minus veritatis, voluptatibus error provident quis totam neque eaque, facilis, incidunt velit amet ut recusandae distinctio possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minima, quis non voluptatem animi, temporibus ipsum iure laboriosam asperiores dolore et atque veritatis libero quae doloremque totam dolorum voluptates beatae.
          <br><br>
          Ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus dolorem, repellat ut, quisquam natus aperiam quaerat optio aliquid magnam voluptatem inventore corporis amet iste dignissimos ipsum. Distinctio omnis fuga doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus nam deleniti, perferendis non totam alias nesciunt velit aperiam? Doloremque fugiat eveniet natus sapiente nihil velit eos doloribus iure Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima iure dolorum quae nostrum non ea magnam at, distinctio, voluptatem nulla. Eaque iusto ducimus corporis exercitationem, animi perferendis nam delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quisquam tempore, illum sit rerum adipisci corrupti est deleniti ipsam quas illo dolorum? Quasi quas sed deserunt sit ut hic possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit est facilis, accusantium, eligendi quis eius perferendis illo ullam officia fugit hic magni unde error ipsam, earum laboriosam adipisci sequi quos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis accusantium, deserunt exercitationem aliquam autem asperiores accusamus aut vitae cumque omnis non ipsa eligendi adipisci laboriosam aspernatur possimus laudantium. Recusandae, laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis, nobis corrupti magni maiores exercitationem laudantium, ipsa sunt et eum deleniti commodi a repellendus eaque aut eos optio consequuntur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sapiente! Commodi et dicta consequatur ducimus blanditiis nihil sequi odio quasi, quos quidem nesciunt, doloribus eveniet. Ullam, recusandae. Facilis, quibusdam. Sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel pariatur impedit reprehenderit repellendus minus veritatis, voluptatibus error provident quis totam neque eaque, facilis, incidunt velit amet ut recusandae distinctio possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minima, quis non voluptatem animi, temporibus ipsum iure laboriosam asperiores dolore et atque veritatis libero quae doloremque totam dolorum voluptates beatae.
          <br><br>
          Ipsum Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus dolorem, repellat ut, quisquam natus aperiam quaerat optio aliquid magnam voluptatem inventore corporis amet iste dignissimos ipsum. Distinctio omnis fuga doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus nam deleniti, perferendis non totam alias nesciunt velit aperiam? Doloremque fugiat eveniet natus sapiente nihil velit eos doloribus iure Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima iure dolorum quae nostrum non ea magnam at, distinctio, voluptatem nulla. Eaque iusto ducimus corporis exercitationem, animi perferendis nam delectus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quisquam tempore, illum sit rerum adipisci corrupti est deleniti ipsam quas illo dolorum? Quasi quas sed deserunt sit ut hic possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit est facilis, accusantium, eligendi quis eius perferendis illo ullam officia fugit hic magni unde error ipsam, earum laboriosam adipisci sequi quos? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis accusantium, deserunt exercitationem aliquam autem asperiores accusamus aut vitae cumque omnis non ipsa eligendi adipisci laboriosam aspernatur possimus laudantium. Recusandae, laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis, nobis corrupti magni maiores exercitationem laudantium, ipsa sunt et eum deleniti commodi a repellendus eaque aut eos optio consequuntur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sapiente! Commodi et dicta consequatur ducimus blanditiis nihil sequi odio quasi, quos quidem nesciunt, doloribus eveniet. Ullam, recusandae. Facilis, quibusdam. Sequi! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel pariatur impedit reprehenderit repellendus minus veritatis, voluptatibus error provident quis totam neque eaque, facilis, incidunt velit amet ut recusandae distinctio possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam minima, quis non voluptatem animi, temporibus ipsum iure laboriosam asperiores dolore et atque veritatis libero quae doloremque totam dolorum voluptates beatae.
          <br><br>
        </p>
      </div>
    </div>
  </main>
  <footer>
  </footer>
</body>

</html>