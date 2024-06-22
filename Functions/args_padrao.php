<div class="Titulo">Argumentos Padrão</div>

<?php
//Nesse caso vamos definir Senhor e Cliente como padrão para os argumentos
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente"){
  return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao(); //Utilizando o padrão
echo saudacao(NULL);
echo saudacao(null,null);
echo saudacao("Pedro","Carvalho");

//Nesse caso vamos definir água como padrão para o argumento Bebida
//OBS: normalmente para um melhor aproveitamento dos argumentos padrão é necessário que eles estejam por ultimo nos parametros informados
function anotarPedido($comida,$bebida = 'Água'){
  echo "Para comar: $comida <br>";
  echo "Para comar: $bebida <br>";
}

echo "<hr>";
anotarPedido("Arroz e Bife");
echo "<hr>";
anotarPedido("Pizza","Coca");