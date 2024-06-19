<div class="Titulo">Valor por Referência</div>

<?php
//Atribuição por Valor
$variavelA1 = 'valor 1';
echo "<br> $variavelA1";
$variavelA2 = $variavelA1;
echo "<br> $variavelA2 . A2";


//Atribuição por Referencia (Utilizando o endereço da memória)
$variavelReferencia = &$variavelA1;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavelA1 $variavelReferencia";
