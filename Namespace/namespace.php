<?php namespace contexto; ?>

<div class="Titulo">Exemplo Namespace</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 245);
define(__NAMESPACE__ . '\constante3', 354);
define('outro_contexto\constante4', 851);


echo constante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>';
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a,$b){
    return $a + $b;
}

echo \contexto\soma(1,3) . '<br>';
echo soma(1,2) . '<br>';

function strpos($str,$text){
    echo "Buscando o texto '{$texto}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca','busca') . '<br>';
echo \strpos('Texto genérico para busca','busca') . '<br>';