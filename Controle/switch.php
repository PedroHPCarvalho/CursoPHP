<div class="Titulo">Switch</div>

<?php
$categoria = 'LUXO';
$preco = 0.0;
$carro = '';

$categoria = 'SUV';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 280000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'Honda CRV';
        $preco = 100000;
        break;
    case 'sedan':
        $carro = 'Astra';
        $preco = 45000;
        break;
    default:
        $carro = 'GOL';
        $preco = 11000;
        break;
};

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro <br> Preço: $preco<p>";