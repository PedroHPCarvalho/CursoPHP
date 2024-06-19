<div class="Titulo">Mapa Array</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "amarelo",
    "peso" => 5.5
);

print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>' ;
var_dump($dados["Outra Info"]);

$lista = array(
    "a",
    "CINCO" => "B",
    6 => "C" 
);

$lista[] = 1;
echo '<br>';
$lista[4] = "zuuum";
echo '<br>';

print_r($lista);