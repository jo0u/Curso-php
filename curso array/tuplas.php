<?php

$dados = [
    'nome' => 'Vinicius',
   'nota'=> 10,
   'idade'=> 24,
];

//['nome' => $nome, 'nota' => $nota,'idade'=> $idade] = $dados;

extract($dados);//pega um array e separa as  variaveis
var_dump(compact('nome','nota','idade')); // essa pega as variveis e cria um array 

var_dump($nome,$nota,$idade);