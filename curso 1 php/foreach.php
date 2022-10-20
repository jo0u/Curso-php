<?php

$contasCorrentes = [
   "123.456.789-10" => [
    'titular'=> 'Vinicius',
    'saldo' =>1000 
   ],
   "123.485.678-91" => [
    'titular'=>'Maria',
    'saldo'=>10000
   ],
   "123.458.798-12" => [
    'titular'=>'Maria',
    'saldo'=>10000
   ]];
 

   
 
 
   $contasCorrentes["123.458.791-13"] = [
    'titular' => 'Claudia',
    'saldo' => 2000
   ];
//    $contasCorrentes[] = [
//     'titular' => 'Claudia',
//     'saldo' => 2000
//    ];

//    $contasCorrentes[] = [
//     'titular' => 'Claudia2',
//     'saldo' => 2000
//    ];


foreach($contasCorrentes as $cpf => $conta){
    echo $cpf." - ".$conta['titular'].PHP_EOL;

}

