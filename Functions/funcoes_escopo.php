<div class="Titulo">Funções e Escopo</div>

<?php
function imprimirMensagem(){
    echo "Imprimindo a Função <br>";
};

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();


echo "<br><hr><br>";

//Mudar o valor de uma váriavel global por meio de uma função 

$variavel = 1;

function trocaDeValor(){

    global $variavel;
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
};

echo "Antes: $variavel <br>";
trocaDeValor();
echo "Depois: $variavel <br>";

