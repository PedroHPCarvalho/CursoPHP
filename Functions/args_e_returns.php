<div class="Titulo">Argumentos e Retornos</div>

<?php
function obterMensagem(){
    return "Conteudo da Função obterMensagem";
};

//para exibir o conteudo da função

echo obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
};

echo "<br>", obterMensagemComNome('Pedro');


function soma($a,$b){
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>' , soma($x,$y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavelTroca = 2;
trocaValor($variavelTroca,54);
echo '<br>', $variavelTroca;

function trocaValorVerdadeiro(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorVerdadeiro($variavelTroca, 5000);
echo '<br>', $variavelTroca;