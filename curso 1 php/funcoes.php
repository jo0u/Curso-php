<?php




function sacar(array $conta, float $valorASacar): array
{

    if ($valorASacar > $conta['saldo'])  {
        exibeMensagem("Você não pode sacar este valor");
       
    } else {
        $conta['saldo'] -= $valorASacar;
    }
        
    return $conta;

}


function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta,float $valorADepositar){
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("Favor depositar um valor positivo");
    }
   
    return $conta;
}