<div class="Titulo">Lendo Arquivos</div>

<?php
//Ler um arquivo
$arquivo = fopen('teste.txt','r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);
echo '<hr>';

//Ler um arquivo usando o tamanho do arquivo obtido por uma função
$arquivo = fopen ('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho , '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

//Ler arquivo Linha por Linha 
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgets ($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';

//Ler arquivo caractere por caractere 
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc ($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';
echo '<br>';
echo '<br>';

//Ler e alterar um arquivo com o fopen em modo r+
$arquivo = fopen('teste.txt', 'r+');
echo fgets ($arquivo);
echo fgets ($arquivo);
fwrite($arquivo ,"\nAdicionado durante a leitura com fopen r+");
fclose($arquivo);

fclose($arquivo);
echo '<br>';
echo 'Fim';