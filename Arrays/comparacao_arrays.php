<div class="Titulo">Comparação de Arrays</div>

<?php
$arr1 = ['nome' => 'Ana','idade' =>23];
$arr2 = ['nome' => 'Pedro','idade' =>20];
echo '<br>'. var_dump($arr1 == $arr2);
echo '<br>' .var_dump($arr1 === $arr2);

$arr3 = ['idade' =>20,'nome' => 'Pedro'];
echo '<br>';
echo '<br>' . var_dump($arr1 == $arr3);
echo '<br>' . var_dump($arr1 === $arr3);
echo '<br>' . var_dump($arr1 != $arr3);
echo '<br>' . var_dump($arr1 !== $arr3);

echo '<br>';
$arr4 = ['idade' => '20','nome' => 'Pedro'];
echo '<br>' . var_dump($arr2 == $arr4);
echo '<br>' . var_dump($arr2 === $arr4);