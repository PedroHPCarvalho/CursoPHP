<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario) 
VALUES (
    'Davi Doido',
    'davidoido@gmail.com',
    '1998-7-4',
    '',
    0,
    1500
)";

$conexao = novaConexaoPDO();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)){
  $id = $conexao->lastInsertId();
  echo "Novo Cadastro com id $id";
} else {
  echo $conexao->errorCode() . "<br>";
  print_r($conexao->errorInfo());
}

$conexao->close();