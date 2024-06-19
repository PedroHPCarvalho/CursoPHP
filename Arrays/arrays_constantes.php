<div class="Titulo">Arrays Constantes</div>

<?php
echo '<br>';
//POR SEREM CONSTANTES, NÃO É POSSIVEL ALTERAR O ARRAY. SOMENTE LER
const FRUTAS = array('Laranja','Abacaxi');
echo FRUTAS[1];

const CARROS = ["Fiat" => "Uno","Ford" => "Fiesta"];
echo '<br>' . CARROS['Ford'];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[0];