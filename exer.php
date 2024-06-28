<?php
session_start();

if($_COOKIE['usuario']){
   $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
   header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/exer.css">

  <title>Exercício</title>

</head>
<body class="exer">
    <header class="cabecalho">
          <h1>Curso PHP</h1>
          <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
      <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
      <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">SEM FORMATAÇÃO</a>
      <a href="index.php" >Voltar</a>
      <a href="logout.php" class="vermelho">Sair</a>
    </nav>

    <main class="principal" >
        <div class="conteudo">
          <?php
              // include('teste/teste.php');
              include("{$_GET['dir']}/{$_GET['file']}.php")
          ?>
        </div>
    </main>

    <footer class="rodape">@Pedro Carvalho <?= date('Y'); ?></footer>
</body>
</html>