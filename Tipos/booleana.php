<div class="Titulo">Tipo Booleana</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(TRUE);
echo '<br>' . var_dump(FALSE);
echo '<br>' . var_dump('false');
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('true');

//fazer as regras de conversão

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0);  // apenas 0 é convertido para falso nos numeros
echo '<br>' . var_dump((bool) 20);  
echo '<br>' . var_dump((bool) -10);  
echo '<br>' . var_dump((bool) 0.00000);  
echo '<br>' . var_dump((bool) "");  // false
echo '<br>' . var_dump((bool) " "); 
echo '<br>' . var_dump((bool) "0"); // false 

echo '<br>' . var_dump(!!"false"); 
