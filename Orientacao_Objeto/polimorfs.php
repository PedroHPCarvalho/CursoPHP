<div class="Titulo">Polimorfismo</div>

<?php
abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{

}

class Pessoa{
  public $peso;

  function __construct($peso){
      $this->peso = $peso;
  }

  public function comer(Comida $comida){
    $this->peso += $comida->peso;
  }
}

$c1 = new Arroz();
$c1->peso = 6.68;

$c2 = new Sorvete();
$c2->peso = 0.18;

$p = new Pessoa(75.4);
$p->comer($c1);
$p->comer($c2);

echo $p->peso;