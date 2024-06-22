<div class="Titulo">Primeira Classe</div>

<?php
class Cliente{
  public $nome = 'Usuário';
  public $idade = 25;

  public function apresentar(){
    return "Nome: {$this->nome} Idade: {$this->idade}";
  }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>';
$c1->idade = 25;

$c2 = new Cliente();
$c2->nome = 'Cliente';
$c2->idade = 23;

echo $c1->apresentar(), '<br>';
echo $c2->apresentar(), '<br>';

