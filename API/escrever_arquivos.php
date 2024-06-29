<div class="Titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt','w');
fwrite($arquivo, $str);
$str = "Segunda Linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt','w');
fwrite($arquivo, "Novo Conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt','a');
fwrite($arquivo,"com novos valores\n");
fwrite($arquivo,"Adicionados em segundo momento");
fclose($arquivo);

ini_set('display_errors',1);
$arquivo = fopen('teste.txt','x');



