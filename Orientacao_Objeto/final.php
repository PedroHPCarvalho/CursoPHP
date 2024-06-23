<div class="Titulo">Final</div>

<?php
abstract class Abstrata {
  abstract public function metodo1();

  public final function metodo2(){
    echo 'Não vou mudar!<br>';
  }
}

class Classe extends Abstrata{
  public function metodo1(){
    echo 'Executando método 1<br>';
  }
  /*NÃO É POSSIVEL ALTERAR UM METODO FINAL
  public function metodo2(){
      echo 'Executando método 2<br>';
  }
  */
}

$classe = new Classe();
$classe -> metodo1();
$classe -> metodo2();


final class Unica {
  public $attr = 'Valor Único!!';
}

$unica = new Unica();
echo $unica->attr;

//NÃO É POSSIVEL UTILIZAR A HERANÇA PARA GERAR NOVAS CLASSE COM UMA CLASSE FINAL
// classe Duplicata extends Unica{
//    public $att2
//}
