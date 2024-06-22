<div class="Titulo">Funções Anônimas</div>

<?php
//Funcao anonima uma função sem nome para uma variavel
$soma = function($a, $b){
  return $a + $b;
};

echo $soma(1,2) . '<br>';

function executar($a,$b,$op,$funcao){
  $result = $funcao($a,$b);
  echo "$a $op $b = $result<br>";
}

executar(2,3,'+',$soma);

$multiplica = function($a,$b){
  return $a * $b;
};

executar(2,3,'*',$multiplica);