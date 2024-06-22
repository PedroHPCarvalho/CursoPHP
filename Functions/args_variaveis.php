<div class="Titulo">Argumentos Váriaveis</div>

<?php
//Função com argumentos Comuns
function soma($a,$b){
    return $a + $b;
}

echo soma(12,65) . '<br>';
 

//Função com agumentos váriaveis
function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4);

$array = [6,7,8];

function membros($titular,...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes $dep <br>";
        }
    }
}

echo '<br>';
membros("Pedro","Ana","Davi","Julia");



