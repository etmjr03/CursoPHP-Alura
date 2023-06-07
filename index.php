<?php 

// tipos primitivos do PHP

$nome = 'juninho';
$idade = 24;
$porcentagem = 99.99;
$jogos = ['LOL', 'CS', 'Sea Of Thieves'];
$gamer = true;
$prints = [
    $nome,
    $idade,
    $porcentagem,
    $jogos,
    $gamer
];

echo "A ordem dos dados são: juninho, 24, 99.99, jogos é um array, true";

foreach($prints as $values) {
    $tipoDeDado = gettype($values);
    echo "<br> tipo de dado é: " .$tipoDeDado;
}