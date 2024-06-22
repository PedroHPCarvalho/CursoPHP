<div class="Titulo">Closure e Callable</div>

<?php
$soma1 = function($a, $b){
    return $a + $b;
};

function soma2 ($a, $b){
    return $a + $b;
};

echo $soma1(2,3) . ' ';
echo(is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; 

echo soma2(2,3) . ' ';
echo(is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao){
  $result = $funcao($a,$b) ?? 'Nada';
  echo "$a $op $b = $result<br>";
}

echo '<br>';
executar1(2,3,'+',$soma1);
executar1(2,3,'+',soma2);

function executar2($a, $b, $op, Closure $funcao){
  $result = $funcao($a,$b) ?? 'Nada';
  echo "$a $op $b = $result<br>";
}


