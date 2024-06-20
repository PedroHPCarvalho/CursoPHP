<div class="Titulo">Foreach</div>

<?php

$array = [
    1 => 'Domingo',
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sabado'];

foreach($array as $valor){
    echo "$valor <br>";
}

echo "<hr>";

foreach($array as $indice => $valor)
{
    echo "$indice => $valor <br>";    
}

echo "<hr>";


$matrix = [
    ['a','e','i','o','u'],
    ['a','b','c']
];

foreach($matrix as $linha){
    foreach($linha as $letra){
        echo "$letra ";
    }
   echo "<br>";
};

echo "<hr>";

$numeros = [1,2,3,4,5];

foreach ($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);