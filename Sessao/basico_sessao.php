<div class="Titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}
if(!$_SESSION['email']){
    $_SESSION['email'] = 'fulano@gmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href='/Sessao_Cookies/basico_sessao_alterar.php'>
        Alterar Sessão
    <a>    
<p>


