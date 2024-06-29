<div class="Titulo">Datas parte 1</div>

<?php
echo time() . '<br>';
echo '<hr>';
echo date('D ,d \d\e M \d\e Y H:i A'). '<br>';
echo '<hr>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>';
header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_TIME, 'pt-BR', 'pt-BR.UTF-8','portuguese');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';


echo '<hr>';
$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

echo '<hr>';
$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

echo '<hr>';
$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);

