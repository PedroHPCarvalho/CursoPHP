<div class="Titulo">Atribuições</div>

<?php
 $title = 'Atribuições';

 $numero = 10;
 echo '<br>' . $numero;

 $numero = $numero - 3;
 echo '<br>' . $numero;

 $numero = $numero + 1.5;
 echo '<br>' . $numero;

 $numero--; //pósfixo de Decremento
 --$numero; //prefixo de Decremento
 echo '<br>' . $numero;

 $numero++; //pósfixo de incremento
 ++$numero; //prefixo de incremento
 echo '<br>' . $numero;

 $numero = 20 ;
 echo '<br>' . $numero;

 $numero -= 5 ;
 echo '<br>' . $numero;

 $numero += 5 ;
 echo '<br>' . $numero;

 $numero *= 10 ;
 echo '<br>' . $numero;

 $numero /= 2 ;
 echo '<br>' . $numero;

 $numero %= 6 ;
 echo '<br>' . $numero;

 $numero **= 4 ;
 echo '<br>' . $numero;

 $numero .= 4 ; //concatenação
 echo '<br>' . $numero;

 $texto = 'Esse é um texto';
 echo '<br>' . $texto;
 $texto = $texto . 'qualquer';
 echo '<br>' . $texto;
 $texto .= 'de verdade';
 echo '<br>' . $texto;

//  $variavelInexistente = 'valor existente';
 echo '<br>' . $variavelInexistente;
 $valor = $variavelInexistente ?? 'valor default';
 echo '<br>' . $valor;






