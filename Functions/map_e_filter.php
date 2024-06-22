<div class="Titulo">Map e Filter</div>

<?php
$notas = [5.1, 9.2, 6.4, 8.9];
$notasFinais1 = [];

// Usando foreach para arredondar as notas
foreach($notas as $nota){
  $notasFinais1[] = round($nota);
}
print_r($notasFinais1);

echo '<br>';

// Usando array_map com 'round' como string
$notasFinais2 = array_map('round', $notas);

print_r($notasFinais2);

// Usando foreach e if para filtrar as notas
$apenasOsAprovados1 = [];
foreach($notas as $nota){
  if($nota >= 7){
    $apenasOsAprovados1[] = $nota;
  }
}

echo '<br>';
print_r($apenasOsAprovados1);

function aprovados($nota){
  return $nota >= 7;
}

echo '<br>';
// Usando array_filter com a function 'aprovados' como string para filtrar o array
$apenasOsAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasOsAprovados2);

