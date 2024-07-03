<div class="Titulo">Excluir Registros #02</div>

<?php
require_once "conexao_bd.php";

$registro = [];
$conexao = novaConexao();

if($_GET['excluir'] {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
})

$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registro[] = $row;
    }
} elseif ($conexao->error){
    echo "Error: " . $conexao->error;
}

$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id']?></td>
                <td><?= $registro['nome']?></td>
                <td><?= $registro['email']?></td>
                <td><?= $registro['nascimento']?></td>
                <td>
                    <?=
                        date('d/m/Y',strtotime($registro['nascimento']));
                    ?>
                </td>
                <td>
                    <a href="/exer.php?dir=DB&file=excluir_2&excluir=<?=$registro['id']?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>