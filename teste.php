<?php

$emailPesquisado = 'jorge@gmail.com';
$senhadigitadanoform = '1234';

//Ler usuarios.txt e transformar num array
    $contas [] = [
        'Nome' =>  "preto",
        'Email' => 'preto@gmail.com',
        'Senha' => (int)'123'
    ];
$contas [] = [
    'Nome' => 'jorge',
    'Email' => 'jorge@gmail.com',
    'Senha' => (int)'123'
];


$indiceEncontrado = null;

//Encontrar em qual o indice que tem o Email pesquisado
foreach ($contas as $index => $subarray) {
    
    if (in_array($emailPesquisado, $subarray)) {
        $indiceEncontrado = $index;
        break;
    }
}

var_dump($contas[$indiceEncontrado]);

if ($contas[$indiceEncontrado]['Senha'] == $senhadigitadanoform) {
    echo "OK";
}else{
    echo "Não autorizaod";
}

