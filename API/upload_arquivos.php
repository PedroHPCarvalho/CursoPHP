<div class="Titulo">Upload de Arquivos</div>;

<?php
print_r($_FILES);

if($_FILES && $_FILES['arquivo']){
    $pastaUpload = '/Users/pedro.carvalho/Desktop/pastateste/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    //Tmp é o diretório temporario do arquivo 
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp,$arquivo))
    {
        echo "<br>Arquivo válido e enviado com sucesso";
    } else {
        echo "<br>Erro no Upload do arquivo";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data"> 
    <!-- multipart/form-data. Este atributo é essencial quando se deseja fazer o upload de arquivos através de um formulário,
     utilizado principalmente quando o formulário contém campos de upload de arquivos (<input type="file">). -->
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button{
        font-size: 1.5rem;
    }
</style>

