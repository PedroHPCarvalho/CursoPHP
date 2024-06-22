<div class="Titulo">Modificadores de Acesso</div>

<?php 
class A{
  public $publico = 'Público';
  protected $protegido = 'Protegido';
  private $privado = 'Privado';

  public function mostrarA(){
    echo "Classe A) Publico = {$this->publico}<br>";
    echo "Classe A) Protegido = {$this->protegido}<br>";
    echo "Classe A) Privado = {$this->privado}<br>";
  }

  protected function vaiPorHeranca(){
    echo "Transmitido por Herança";
  }

  private function naoMostrar(){
    echo "Não imprimir<br>";
  }
}

$a = new A();
$a->mostrarA();
//$a -> naoMostrar(); o metodo privado não pode ser acessado fora da classe

class B extends A{
  public function mostrarB(){
    echo "Classe B) Publico = {$this->publico}<br>";
    echo "Classe B) Protegido = {$this->protegido}<br>";
    echo "Classe B) Privado = {$this->privado}<br>";  }
}

echo '<br>';
$b = new B();
$b->mostrarB();
$B->vaiPorHeranca();
