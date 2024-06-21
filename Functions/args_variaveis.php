<div class="Titulo">Argumentos Váriaveis</div>

<?php
//Função com argumentos Comuns
function soma($a,$b){
    return $a + $b;
}

echo soma(12.65). '<br>';

//Função com argumentos Váriaveis
function somaVariavel(...$numero){
    $soma = 0;
    foreach($numero as $nun){
        $soma += $num;
    }
    return $soma;
}

echo somaVariavel(1,5,43,8);
