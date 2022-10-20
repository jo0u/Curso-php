<?php


$notas = [
    'um',
    'dois',
    'tres'
];

/*
$notas = [
    10,
    8,
    9,
    7
];
*/


$aluno = [
    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'Vinicius',
        'nota' =>6
        ]
    ];

$notasOrdenadas = $notas;

sort($notasOrdenadas);


echo 'Desordenadas';
var_dump($notas);


echo'Ordenadas';
var_dump($notasOrdenadas);

