<?php

$contasCorrentes = [
   12345678910 => [
    'titular'=> 'Vinicius',
    'saldo' =>1000 
   ],
   123485678911 => [
    'titular'=>'Maria',
    'saldo'=>10000
   ],
   1234587912 => [
    'titular'=>'Maria',
    'saldo'=>10000
   ]];
 
   $contasCorrentes[12345678810] = [
    'titular' => 'Claudia',
    'saldo' => 2000
   ];


foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'].PHP_EOL;

}

