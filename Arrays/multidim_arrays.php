<div class="Titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Maria",
        "idade"=> 28,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Jão",
        "idade"=> 18,
        "naturalidade" => "Minas Gerais"
    ]
];

print_r($dados);
//acessar dados de um array que esta dentro de outro
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

//Adicionar um array dentro de outro
$dados[] = [
    "nome" => "Florinda",
    "idade"=> 40,
    "naturalidade" => "Minas Gerais"
];

echo '<br>';
echo '<br>';
print_r($dados);
echo '<br>';

//Adicionar um novo componente no Array mais interno
$dados[2]['Vizinho'] = "Chaves";
echo '<br>';
print_r($dados[2]);
echo '<br>';

//Apagar um array do array de arrays
unset($dados [2]);
echo '<br>';
print_r($dados);


