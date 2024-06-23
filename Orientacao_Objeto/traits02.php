<div class="Titulo">Traits 01</div>

<?php
trait validacao{
  public $a = "Valor a";

  public function validarString($str) {
      return isset($str) && $str !== '';
  }
}

trait validacaoMelhor{
    public function validarString($str){
      return isset($str) && trim($str);
    }
}

class Usuario{
    use validacao,validacaoMelhor{
      //para evitar conflitos por mesmo nome escolhemos qual iremos considerar para essa classe
      validacaoMelhor::validarString insteadOf validacao;
      //validacao::validarString insteadOf validacaoMelhor;

      //podemos mudar nomes para evitar conflitos
      validacao::validarString as validacaoSimples;
    }

  public function imprimirValor(){
      echo '<br>', $this->c;
  }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));

