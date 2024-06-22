<div class="Titulo">Declarando Tipos</div>

<?php

function somar1($a,$b){
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}
echo '<br>';
echo somar1(1,2) . '<br>';
echo somar1(1.6,2.7) . '<br>';
echo somar1(1,'4dois') . '<br>';

echo '<br><hr><br>';

function somar2(int $a,int $b){
  echo "<span>Somando $a + $b = </spawn>";
  return $a + $b;
}

echo somar2(1,2) . '<br>';
echo somar2(1.6,2.7) . '<br>';
// echo somar2(1,'4dois') . '<br>';

echo '<br><hr><br>';

function somar3($a, float $b):int{
  echo "<span>Somando $a + $b = </spawn>";
  return $a + $b;
}

echo somar3(1,2) . '<br>';
echo somar3(1.6,2.7) . '<br>';
echo somar3(1,'4dois') . '<br>';
