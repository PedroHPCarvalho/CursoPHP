<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="Titulo">Consultar Registros</div>

<?php

require_once "conexao_bd.php";

$sql = "SELECT id,nome,nascimento,email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
      $registros[] = $row;
    }
} elseif ($conexao->error){
    echo "Erro: " . $conexao->error;
}

print_r($registros);

$conexao->close();
?>

<table class="table">
  <thead>
      <th>Id</th>
      <th>Nome</th>
      <th>nascimento</th>
      <th>E-mail</th>
  </thead>
  <tbody>
    <?php foreach($registros as $registro):?>
      <tr>
        <td><?= $registro['id']?></td>
        <td><?= $registro['nome']?></td>
        <td>
            <?= 
              date("d/m/Y", strtotime($registro['nascimento']));
            ?>
        </td>
        <td><?= $registro['email']?></td>
      </tr>
    <?php endforeach ?> 
  </tbody>
</table>

<style>
  table > * {
      font-size: 1.2rem;
  }
</style>