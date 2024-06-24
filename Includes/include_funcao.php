<div class="Titulo">Include em Funções</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregandoArquivos(){
    include('include_arquivo.php');
    echo '<hr>';
    echo 'DENTRO DA FUNCAO<br>';
    echo $variavel . '<br>';
    echo soma(5,9) . '!<br>';
    echo '<hr>';

}

echo 'Novamente no arquivo include_funcao';
//Só é possivel ter acesso a função do arquivo incluido depois de invocarmos o metodo em que ele foi carregado
carregandoArquivos();
echo soma(4,6);

echo '<br>';
//Não é possivel acessar uma variável que esta em outro escopo
// echo "Variável =  '{$variavel]'.";
// var_dump($variavel);



