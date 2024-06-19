<div class="Titulo">Operadores Lógicos</div>

<?php
echo "<p>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not, inverte o valor booleano

echo "<h3>Tabela Verdade 'AND' (E)</h3><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo '<br>';
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<h3>Tabela Verdade 'OR' (OU)</h3><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo '<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<h3>Tabela Verdade 'XOR' (OU Exclusivo)</h3><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo '<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<h3>EXEMPLO</h3><hr>";
$idade = 65;
$sexo = 'M';

// //Utilizando o AND e OR
// $pagouPrevidencia = true;
// $criterioHomem = ($idade >= 65 and $sexo === 'M');
// $criterioMulher = ($idade >= 60 and $sexo === 'F');
// $atingiuCriterio = $criterioHomem or $criterioMulher;
// $podeSeAposentar = $pagouPrevidencia and $atingiuCriterio;
// echo "Pode se aposentar -> $podeSeAposentar.<br>";

//Utilizando o && e ||
$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo ==='F'){
    echo "Pode se aposentar -> $sexo";
} else if ($idade >= 65 && sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Ainda não";
};





