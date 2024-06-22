<div class="Titulo">Interfaces</div>

<?php
interface Animal{
  function respirar();
}

interface Mamifero{
  function mamar();
}

interface Canino extends Animal,Mamifero{
  function latir(): string;
}

class Cachorro implements Canino{
  function respirar(){
    return "Irei Respirar";
  }

  function latir(): string{
    return "AU AU";
  }

  function mamar(){
    return "se Alimentar";
  }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
