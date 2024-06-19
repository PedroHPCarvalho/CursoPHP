<div class="Titulo">Utilizando POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <select name="estado">
        <option value="SP">São Paulo</option>
        <option value="MG">Minas Gerais</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>' . count($_POST);