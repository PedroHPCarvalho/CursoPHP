<div class="Titulo">Do While/While</div>

<?php
const VALOR_LIMITE = 6;
$contador = 0;

while($contador < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}

echo '<br><hr><br>';

$contador = 100;
do {
    echo "Repetição $contador Do While";
    $contador++;
} while ($contador <= VALOR_LIMITE);


echo '<br><hr><br>';

$contador = 0 ;
while(true){
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}

echo "FIM";

