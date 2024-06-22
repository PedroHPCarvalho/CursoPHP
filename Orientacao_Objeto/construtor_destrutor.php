<div class="Titulo">Construtor e Destrutor</div>

<?php
class Pessoa{
  public $nome;
  public $idade;

  function __construct($novoNome, $novaIdade = 18){
    echo 'Construtor Invocado! <br>';
    $this->nome = $novoNome;
    $this->idade = $novaIdade;
  }

  function __destruct(){
    echo "Instancia destruida";
  }

  public function apresentar(){
    echo "{$this->nome}, {$this->idade} anos<br>";
  }
}

// $Pessoa = new Pessoa(); // PROBLEMA

$pessoaA = new Pessoa('Ana', 23);
$pessoaB = new Pessoa('Jonas');

$pessoaA->apresentar();
unset($pessoaA);

$pessoaB->apresentar();
$pessoaB = NULL;