<?php namespace Outro\Nome; ?>
<div class="Titulo">Use/As </div>

<?php
echo __NAMESPACE__ . '<br>';
echo '<hr>';//////////

//Utilizamos o include para adicionar as funcionalidades desse arquivo no nosso código atual
include('use_as_arquivo.php');

echo '<hr>';/////////

function soma($a,$b){
  return $a . $b;  // concatenação
}

class Classe {
  public $var; 

  function func(){
    echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
  }
}

// acessar a constante do arquivo incluido
echo \Nome\Bem\Grande\constante . '<br>';
// usamos const para definir para uso a contante do namespace definido
use const \Nome\Bem\Grande\constante;
echo constante  .  '<br>';
//aqui alem do use, utilizamos o ctx para dar um apelido ao nome 
use Nome\Bem\Grande as ctx;

echo '<hr>';

echo soma(1,2) . '<br>';
echo ctx\soma(1,2) . '<br>';

echo '<hr>';

//use function Nome\Bem\Grande\soma;
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100,800) . '<br>';

echo '<hr>';

//Usa a função do namespace incluido
$a = new Classe ();
$a -> func();

echo '<hr>';

//Usa a função do namespace incluido
$b = new \Nome\Bem\Grande\Classe();
$b->func();

echo '<hr>';

//Usa a função do namespace incluido,
$c = new ctx\Classe();
$c->func();

echo '<hr>';

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();   