<div class="Titulo">Retornando Funções</div>

<?php
function soma($a){
  return function ($b) use ($a){
      return $a + $b;
  };
}

echo soma(13)(2);

$doisMaisAlgo = soma(2);
echo '<br>', $doisMaisAlgo(20);
echo '<br>', $doisMaisAlgo(0);