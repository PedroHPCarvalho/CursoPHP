<?php namespace Outro\Nome; ?>
<div class="Titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a,$b){
    return $a . $b;
}

class Classe{
    public $var;

    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ '->' . __METHOD__ . '<br>';
    }
}

use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;

echo soma(1,2) . '<br>';
echo ctx\soma(1,3) . '<br>';

//use function Nome\Bem\Grande\soma as somaReal; <--- Não é possivel utilizar o mesmo nome
echo somaReal(100,120).'<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();


