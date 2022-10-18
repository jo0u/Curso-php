<?php

$notas = [
    'Ana' => 10,
    //'Vinicius'=> 6,
    'João' => 8,
    'Roberto' => 7,
   'Maria' => 9,
];


krsort($notas);

//arsort($notas);

//var_dump(isset($notas['Vinicius  ']));

//echo 'Ana fez a prova:'.PHP_EOL;


//echo 'Alguem tirou 10?'.PHP_EOL;
//var_dump(in_array(10,$notas,true)); // verifica se a chave existe

echo 'Quem tirou 10?'.PHP_EOL;
echo array_search(10,$notas);

//echo gettype($notas).PHP_EOL;

//var_dump(key_exists('Vinicius',$notas)); verifica se a chave existe
//isset = verifica se a chave existe e não é nula

/*
if(is_array($notas)){
    echo 'é um array';
}



/*
if( gettype($notas) === 'array'){
    echo 'é um array';
}