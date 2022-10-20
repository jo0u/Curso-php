<?php

require 'src/Conta.php';










$contaUm = new Conta();

$contaUm->depositar(500);

$contaDois = new Conta();


$contaUm->transferir(200,$contaDois);


var_dump($contaUm);
var_dump($contaDois);


/*
$primeiraConta = new Conta();


$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = "123.456.789-10";
$primeiraConta->nomeTitular = "Jou Oliveira";


$segundaConta = new Conta();

$segundaConta->saldo = 1500;
$segundaConta->cpfTitular = '778.987.159-55';
$segundaConta->nomeTitular = 'Patrcia Oliveira';

$primeiraConta->sacar(150 );


$umaConta = new Conta();

$umaConta->saldo = 0;


$umaConta->depositar(100);




//var_dump($segundaConta);

//var_dump($primeiraConta);


var_dump($umaConta);