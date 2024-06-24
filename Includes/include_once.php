<div class="Titulo">Include Once & Require Once</div>

<?php
ini_set('display_errors',1);

echo "<hr>";

include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "<hr>";


echo "Váriavel = '{$variavel}'.<br>";
$variavel = 'Váriavel Alterada';
echo "Váriavel = '{$variavel}'.<br>";

echo "<hr>";


include('include_once_arquivo.php');
echo "Váriavel = '{$variavel}'.<br>";
$variavel = 'Váriavel Alterada';
echo "Váriavel = '{$variavel}'.<br>";

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}.<br>'";

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}.<br>'";


echo "<hr>";
$variavel = 'Váriavel Alterada Novamente';
echo "Váriavel = '{$variavel}'.<br>";
