<div class="Titulo">Laço For</div>

<?php

// Condição inicial ; Condição final; ação a cada execução
for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}
// todas as condições são opicionais, sendo assim, podem existir fors com somente duas ou uma condições
echo "<hr>";

for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15;){
    echo "$cont <br>";
    $cont++;
}

echo "<hr>";

$array = [1 => 'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabado'];

print_r($array);



for ($i=1; $i <=count($array) ; $i++) { 
    echo "{$array[$i]} <br>";
}

echo "<hr>";

$matriz = [
    ['a','e','i','o','u'],
    ['a','b','c']
];

for ($i=0; $i < count($matriz); $i++) { 
    for($j = 0; $j < count($matriz[$i]);$j++){
        echo "{$matriz[$i][$j]} <br>";
    }
    echo "<br>";
};