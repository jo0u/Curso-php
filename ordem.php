<?php

$aluno = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' =>6,
    ],
    [
        'aluno'=>'Ana',
        'nota'=> 9,
    ],
    ];



function ordenaNotas(array $nota1 , array $nota2): int 
{
   return $nota2['nota'] <=> $nota1['nota'];
  
}


usort($aluno, 'ordenaNotas');

var_dump($aluno);


