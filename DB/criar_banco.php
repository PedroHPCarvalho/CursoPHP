<div class="Titulo">Criar Banco</div>

<?php 

require_once "conexao_bd.php";
//DDL - DATA DEFINITION LANGUAGE
$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if($resultado){
  echo "Sucesso";
} else {
  echo "Erro: ". $conexao->error;
}

$conexao->close();