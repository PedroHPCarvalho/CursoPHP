<div class="Titulo">Básico de Váriaveis</div>

<?php 
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

echo '<br>';
$soma2 = 0;
echo isset($soma2);
unset($soma2);
var_dump($soma2);
echo isset($soma2);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = 'String';
echo '<br>' . $variavel;

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);