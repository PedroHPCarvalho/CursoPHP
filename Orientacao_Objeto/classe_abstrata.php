<div class="Titulo">Abstrata</div>

<?php
abstract class Abstrata {
  public abstract function metodo1();
  abstract protected function metodo2($parametros);
}

abstract class FilhaAbstrata extends Abstrata{
  public function metodo1(){
    echo "Executando metodo1 <br>";
  }
  abstract public function metodo3();
}

class Concreta extends FilhaAbstrata{
  public function metodo1(){
    echo "Executando método 1 extendido <br>";
    parent::metodo1();
  }
  
  protected function metodo2($parametros){
    echo "Executando método 2, com parametros $parametro<br>";
  }

  public function metodo3(){
   echo "Executando método 3<br>";
   $this->metodo2('interno');
  }
}

$c = new Concreta();
$c->metodo1();
$c->metodo3();

