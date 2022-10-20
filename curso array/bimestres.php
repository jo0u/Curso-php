<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Vinicius'=> 6,
    'João' => 8,
    'Roberto' => 7,
   'Maria' => 9,
];

$notasBimestre2 = [
    'Ana' => 9,
     'João' => 8,
   'Roberto' => 7,
 
];

$alunosFaltantes = array_diff_key($notasBimestre1,$notasBimestre2);

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);


var_dump(array_combine($notasAlunos,$nomesAlunos));

//var_dump(array_keys($alunosFaltantes));
//var_dump(array_values($alunosFaltantes));
//var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2));