<div class="Titulo">Include vs Require</div>

<?php
ini_set('display_errors',1);

echo 'Usando include com arquivos inexistentes...<br>';
include('arquivo_inexistente.php');

echo '<hr>';

echo 'Usando require com arquivos inexistentes...<br>';
require('arquivo_inexistente.php');

echo 'Não achou...';
