<?php 

$nome = 'juninho';
$idade = 24;
$porcentagem = 99.99;
$jogos = ['LOL', 'CS', 'Sea Of Thieves'];
$prints = [
    $nome,
    $idade,
    $porcentagem,
    $jogos
];

foreach($prints as $values) {
    $tipoDeDado = gettype($values);
    echo "<br> tipo de dado é: " .$tipoDeDado;
}