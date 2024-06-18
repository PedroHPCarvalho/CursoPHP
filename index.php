<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/style.css">

  <title>Curso PHP</title>

</head>
<body>
    <header class="cabecalho">
          <h1>Curso PHP</h1>
          <h2>Índice dos Exercícios</h2>
    </header>

    <main class="principal" >
        <div class="conteudo">
          <nav class="modulos">
            <div class="modulo verde">
              <h3>Módulo 01</h3>
              <ul>
                  <li><a href="exer.php?dir=Basico&file=ola">
                    EXERCICIO A
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </main>

    <footer class="rodape">@Pedro Carvalho <?= date('Y'); ?></footer>
</body>
</html>