<div class="Titulo">Constantes</div>

<?php
// primeira forma de definir uma constante
define('TAXA_DE_JUROS' , 9.6);
echo TAXA_DE_JUROS;


// segunda forma de definir uma constante
const NOVA_TAXA = 8.2;
echo '<br>' ;
echo NOVA_TAXA;

//O PHP possui uma limitação em definir o valor da constante 
//a partir de uma variavel pelo metodo const. para resolver isso utilizamos o define()
echo '<br>' ;
$valorVariavel = 3;
define('TAXA_DE_JUROS_ATUALIZADA', $valorVariavel);
echo '<br>' . TAXA_DE_JUROS_ATUALIZADA;
$valorVariavel = 8;
echo '<br>' ;
echo '<br>' . TAXA_DE_JUROS_ATUALIZADA;



