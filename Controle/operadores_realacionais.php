<div class="Titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); //true
var_dump(111 === '111'); //false
var_dump(111 != '111'); //false
var_dump(111 !== '111'); //true

echo "<p>Relacionais no If/Else<p><hr>";
$idade = 15;
if($idade < 18){
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos!";
}

echo "<p>Spacesship<p><hr>";
var_dump(500 <=> 1);
var_dump(500 <=> 500);
var_dump(5 <=> 100);

echo "<p>Valores pode ser V ou F<p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");