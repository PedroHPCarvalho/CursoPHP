<div class="Titulo">Static</div>

<?php
class A{
  public $naoStatic = "Váriavel de instancia";
  public static $static = "Váriavel de classe (estática)";

  public function mostrarA(){
    echo "Não estática = {$this->naoStatic}<br>";
    //Tentativa 1
    //echo "Estática = {$this->static}<br>";
    //Tentativa 2
    //echo "Estática = {self::$static}<br>";
    echo "Estática = " . self::$static . "<br>";
  }

  public static function mostrarStaticA(){
    echo "Estática = ". self::$static . "<br>";
  }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); //não é a forma correta

echo '<br>'; 
echo A::$static , '<br>'; //acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = "Alterando membro da classe!";
echo A::$static , '<br>'; //acessar diretamente pela classe