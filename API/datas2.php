<div class="Titulo">Data parte 2</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoData3 = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);
echo '<br>';

echo '<hr>';

echo $agora->format($formatoData1) . '<br>';

echo '<hr>';

setlocale(LC_TIME, 'pt-BR');
echo strftime ($formatoData2, $agora->getTimestamp()). '<br>';

echo '<hr>';

$dataFixa = new DateTime('1975-01-25');
echo strftime($formatoData3, $dataFixa->getTimestamp()) . '<br>';

echo '<hr>';

$amanha = new DateTime('+2 week');
echo strftime ($formatoData2, $amanha->getTimestamp()). '<br>';

$amanha->modify('+1 day');
echo strftime($formatoData3, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000,05,20);
echo strftime($formatoData3, $amanha->getTimestamp()) . '<br>';

echo '<hr>';

$dataPassada = new DateTime('2000-06-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
echo ($amanha > $dataPassada ? 'Maior': 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior': 'Menor') . '<br>';
echo $outraData == $dataFutura ? 'Igual' : 'Diferente';

echo '<hr>';

$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');