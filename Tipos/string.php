<div class="Titulo">Tipo String</div>

<?php

echo 'String';
echo '<br>';
var_dump("String2");
echo '<br>';

//Concatenação
echo "String" . " 3" . '<br>';
echo '<br>';

echo "'Teste'" . '"Teste"' . "\"Teste\"";

print("<br> PRINT TESTE");

//Algumas Funções
echo '<br>' . strtoupper('maximidaxo');
echo '<br>' . strtolower('minimizado');
echo '<br>' . ucfirst('só a primeira letra maiuscula');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letas?');
echo '<br>' . mb_strlen('Quantas letas?' , "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7,6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');