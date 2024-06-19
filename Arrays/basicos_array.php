<div class="Titulo">Básicos Sobre Array</div>

<?php
$lista = array(1,2,3.4,"texto");
// echo $lista . '<br>';
// var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse é o texto';
echo '<br>' . $texto[0];
echo '<br>' . $texto[6];
echo '<br>' . $texto[9];
echo '<br>' . mb_stristr($texto, 10, 1);
