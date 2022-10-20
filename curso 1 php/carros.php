<?php
$carros = [[
    "marca" => 'VW',
    "modelo" => 'Golf',
    "placa" => 'LMS-2312'
],
[
    "marca" => 'FIAT',
    "modelo" => 'FIAT UNO',
    "placa" => 'LMS-2311'
],
[
    "marca" => 'CHEVROLET',
    "modelo" => 'CHEVROLET CELTA',
    "placa" => 'LMS-3412'
],

[
    "marca" => 'HONDA',
    "modelo" => 'HONDA FIT',
    "placa" => 'LSM-3342'
],
];
echo "******************MARCAS DE CARROS****************".PHP_EOL;
foreach($carros as $c){
    echo "Marcas - ".$c['marca'].PHP_EOL;
    echo "Modelos - ".$c['modelo'].PHP_EOL;
    echo "Placa - ".$c['placa'].PHP_EOL;
    echo "*********************************".PHP_EOL;

}
  