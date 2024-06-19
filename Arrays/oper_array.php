<div class="Titulo">Operações com Arrays</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

//Soma de Arrays
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // 1 = true
echo '<br>' . count($dadosCompletos); // 3 componentes no array
echo '<br>';
echo '<br>';
echo '<br>';

$indice = array_rand($dadosCompletos); // gera dados alearórios para o array
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
echo "{$dadosCompletos['idade']}"; //formas de exibir o valor[indice] do array
echo '<br>';
echo "${dadosCompletos['idade']}"; //formas de exibir o valor[indice] do array


echo "<h3>Unset<h3>";

unset($dadosCompletos["nome"]);// Descartamos o indice nome
echo '<br>';
print_r ($dadosCompletos);

unset($dadosCompletos); // Descartamos todo o array, liberando espaço na memória
echo '<br>';
var_dump($dadosCompletos);
echo '<br>';

echo "<h3>Merge e Sort<h3>";


// Como juntar dois arrays sem sobre escreve-los e ainda colocar em ordem
$pares = [1,3,5,7,9];
$impares = [0,2,4,6,8];

$decimais = array_merge($pares, $impares); // junta os dois arrays, porém com a ordem de chegada. nesse caso primeiro pares e dps os impares
sort($decimais); //organiza o array de forma correta
print_r($decimais);







