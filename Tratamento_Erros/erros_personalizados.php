<div class="Titulo">Erros Personalizados</div>

<?php
//Criamos uma exceção personalizada para o erro de faixa etaria 
class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null){
        echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

//Função que verifica a idade
function calcularTempoAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException('Ainda está muito longe');
    }

    if($idade > 70){
        throw new FaixaEtariaException('Já esta aposentado');
    }
    return 70 - $idade;
}
 
//array com idade para passarem pelo teste
$idadesAvaliadas = [15,30,60,80];


//laço foreach que passa por cada idade e verifica a faixa etaria
foreach($idadesAvaliadas as $idade){
    try{
        echo '<hr>';
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes";
        //caso tenha erros, apresentamos a mensagem como errro
    } catch (FaixaEtariaException $e) {
        echo "Não foi possível calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";

    }
}

echo "<br>Fim!";