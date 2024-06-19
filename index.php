<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">

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
              <h3>Básico</h3>
              <ul>
                <li>
                  <a href="exer.php?dir=Basico&file=ola">
                    Olá PHP
                  </a>
                </li>
                <li>
                  <a href="exer.php?dir=Basico&file=html">
                    Integração HTML
                  </a>
                </li>
                <li>
                  <a href="exer.php?dir=Basico&file=css">
                    Integração CSS
                  </a>
                </li>
                </li>
                  <li>
                    <a href="exer.php?dir=Basico&file=comentarios">
                      Comentarios PHP
                    </a>
                </li>
                <li>
                  <a href="exer.php?dir=Basico&file=desafio">
                    Desafio
                  </a>
                </li>
              </ul>
            </div>
            <div class="modulo vermelho">
              <h3>Tipos</h3>
              <ul>
                  <li>
                    <a href="exer.php?dir=Tipos&file=int">
                      Inteiros
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Tipos&file=float">
                      Float
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Tipos&file=aritmeticas">
                      Operações Arítmeticas
                    </a>
                  </li>    
                  <li>
                    <a href="exer.php?dir=Tipos&file=string">
                      Tipo String
                    </a>
                  </li>    
                  <li>
                    <a href="exer.php?dir=Tipos&file=booleana">
                      Tipo Booleano
                    </a>
                  </li>    
                  <li>
                    <a href="exer.php?dir=Tipos&file=conversoes">
                      Conversões de Tipos
                    </a>
                  </li>    
              </ul>
            </div>
            <div class="modulo azul">
              <h3>Tipos</h3>
              <ul>
                  <li>
                    <a href="exer.php?dir=Variaveis&file=basico">
                      Básico Váriaveis
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Variaveis&file=atribuicoes">
                      Atribuições
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Variaveis&file=interpolacao">
                      Interpolação
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Variaveis&file=variaveis_variaveis">
                      Váviaveis Váviaveis
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Variaveis&file=valor_referencia">
                      Valor por Referência
                    </a>
                  </li>
                  <li>
                    <a href="exer.php?dir=Variaveis&file=constantes">
                      Constantes
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