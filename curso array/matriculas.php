<?php 

$alunos2021 = [
    0=>'Ana' ,
    1=> 'Vinicius',
    2 =>'João' ,
   3=> 'Roberto' ,
   4=>'Maria' ,
];

$novosAlunos = [
   5=>'Patricia',
    6=>'Nico',
    7=>'Kilderson',
    8=>'Daiane',

];




$alunos2022 = [...$alunos2021,'Jou Alexandre', ...$novosAlunos];

array_push($alunos2022,'Alice','Bob','Charlie'); // coloca dentro do array no ultimo elemento

$alunos2022[] = 'Luiz';

array_unshift($alunos2022,'Stephane','Rafaela'); // coloca no primeiro elemento os valores
echo array_shift($alunos2022).PHP_EOL;; // remove o primeiro elemento



echo array_pop($alunos2022).PHP_EOL;


var_dump($alunos2022);

//$alunos2022 = $alunos2021 + $novosAlunos; // junta os array com index diferente

//$alunos2022 = array_merge($alunos2021,$novosAlunos); // sobreescreve os arrays e junta todos


//var_dump($alunos2022);



/*

funcao(...[1,2,3]);


function funcao(int $a,int $b, int $c){

}