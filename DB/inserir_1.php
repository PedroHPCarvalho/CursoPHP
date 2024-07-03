<div class="Titulo">Inserir Registro #1</div>

<?php 
require_once "conexao_bd.php";

$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario) VALUES (
    'ANA',
    '2000-12-17',
    'ana123@gmail.com',
    'https://ana.com.br',
    2,
    13000.90
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
  echo "Sucesso";
} else {
  echo "Erro: ". $conexao->error;
}


$conexao->close();