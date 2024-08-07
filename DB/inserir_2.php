<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="Titulo">Inserir Registro #1</div>


<?php
if(count($_POST) > 0){
    $dados = $_POST;
    $erros = [];


     if(trim($dados['nome']) === ""){
        $erros['nome'] = 'Nome é Obrigatório';
    }
    if(!isset($dados['nascimento'])){
        $data = DateTime::createFromFormat('d/m/y',$dados['nascimento']);
        if(!$data){
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/yyyy';
        }
    }
    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $erros['email'] = 'Email inválido';
    }
    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)){
        $erros['site'] = 'Site inválido';
    }

    
    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 10]];
    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0){
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20)';
    }

    
    $salarioConfig = ['options' => ['decimal' => ',']];
    if(!filter_var($dados['salario'],FILTER_VALIDATE_FLOAT,$salarioConfig)){
         $erros['salario'] = 'Salário inválido';
    }

    if(!count($erros)){
        require_once "conexao.php";
        $sql = "INSERT INTO cadastro
        (nome,nascimento,email,site,filhos,salario)
        VALUES (?,?,?,?,?,?)";

        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $date->format('Y-m-d') : null,
            $dados['eamil'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'],
        ];
        $stmt->bind_param("ssssid", ...$params); 

        if($stmt->execute()){
            unset($dados);
        }
    }
}
?>


<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?=$erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome']?>">
            <div class="invalid-feedback"><?= $erros['nome']?></div>
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?=$erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento']?>">
            <div class="invalid-feedback"><?= $erros['nascimento']?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?=$erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Nome" value="<?= $dados['email']?>">
            <div class="invalid-feedback"><?= $erros['email']?></div>
        </div>

        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?=$erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $dados['site']?>">
            <div class="invalid-feedback"><?= $erros['site']?></div>
        </div>
    </div>
    
    <div class="form-row"> 

        <div class="form-group col-md-6">
            <label for="filhos">Qtd de Filhos</label>
            <input type="number" class="form-control <?=$erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtd de Filhos" value="<?= $dados['filhos']?>">
            <div class="invalid-feedback"><?= $erros['filhos']?></div>

        </div>

        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?=$erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $dados['salario']?>">
            <div class="invalid-feedback"><?= $erros['salario']?></div>
        </div>

    </div>
    <button class="btn tbn-primary btn-lg">Enviar</button>
</form>