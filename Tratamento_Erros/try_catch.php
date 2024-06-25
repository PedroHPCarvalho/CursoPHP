<div class="Titulo">Try/Catch</div>

<?php 
// echo 7 / 0 ;
// echo intdiv(7,0);

try{
    //ele tenta executar uma divisão por 0
    echo intdiv(7,0);
} catch (Error $e) {
    // como detecta um erro executa o echo
    echo 'Teve um erro aqui <br>';
}

try{
    //Disparamos uma noba exceção 
    throw new Exception('Um erro muito estanho');
    //ele tenta executar uma divisão por 0
    echo intdiv(7,0);
    //utilizamos o catch para pegar um erro do tipo Divisão por 0
} catch (DivisionByZeroError $e){
    echo 'Divisão por zero<br>';
    //Erro do tipo lançavel é chamado
} catch (Throwable $e) {
    //pegamos a mensagem do erro
    echo 'Erro encontrado: ' . $e->getMessage(). '<br>';
}

try{
    throw new Exception("Um erro muito estranho") ;
} catch (DivisionByZeroError $e){
    echo 'Divisão por zero<br>';
} catch (Throwable $e){
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
    //Códigos dentro de finally sempre serão executados depois do try ou catch, independente se houve o lançamento de uma exceção
} finally {
    echo 'Sempre executado!<br>'; 
}

echo 'Execução continua... <br>';