<div class="Titulo">PDO: Consultar</div> 

<?php
require_once 'conexao_pdo.php';

$conexao = novaConexaoPDO();
$sql = "SELECT * FROM cadastro";
//PDO::FETCH_NUM
//PDO::FETCH_ASSOC
//PDO::FETCH_CLASS
//PDO::FETCH_BOTH
$result = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT 10 OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue('qtde', 2, PDO::PARAM_INT);
$stmt->bindValue('inicio', 3, PDO::PARAM_INT);

if($stmt->execute()){
  $result = $stmt->fetchAll();
  print_r($result);
} else {
  echo "Código: " . $stmt->erroCode() . "<br>";
  print_r($stmt->errorInfo());
}

echo '<hr>';

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
if($stmt->execute([':id' => 1])){
  $result = $stmt->fetch();
  print_r($result);
} else {
  echo "Código: " . $stmt->errorCode() . '<br>';
  print_r($stmt->errorInfo());
}

$conexao->close();