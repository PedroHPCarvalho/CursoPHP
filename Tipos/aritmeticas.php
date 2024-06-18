<div class="Titulo">Operações Arítmeticas</div>

<?php

echo 1+1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>'; //soma
echo 10 - 2, '<br>'; //sub
echo 2 * 5, '<br>'; //mult
echo 7 / 4, '<br>'; // divis
echo intdiv(7,4), '<br>'; //divis int
echo round (7/4), '<br>'; //arredonda
echo 7 % 4, '<br>'; //resto da divisão
echo 4 ** 2, '<br>';//potenciação  

//Procedencia de operadores 
//() -> ** -> / -> * % -> + -
echo '<p>Procedencia<p>';
echo 2 + 3 * 4 , '<br>';
echo (2+3)*4 , '<br>';
