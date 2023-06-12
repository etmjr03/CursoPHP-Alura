<?php

include 'funcoes.php';
echo '<link rel="stylesheet" href="style.css">';
echo '<div class="container">';
// Funções para exemplos de uma conta

$conta = [
    '01-c' => [
        'nome' => 'juninho',
        'tipo' => 'corrente',
        'saldo' => 1000.00
    ],

    '02-c' => [
        'nome' => 'ana',
        'tipo' => 'corrente',
        'saldo' => 500.00
    ]
];

echo "<h3>Arrays de contas</h3>";

echo '<pre>';
print_r($conta);
echo '</pre>';

echo "<h4>Utilizando funções sacar e depositar</h4>";
$conta['01-c']['saldo'] = sacar($conta['01-c'], 1001);
$conta['02-c']['saldo'] = depositar($conta['02-c'], 1000.00);

echo '<pre>';
print_r($conta);
echo '</pre>';

echo "<h4>Função para deixar o nome do titular com letra maiúsculas</h4>";
letraMaiuscula($conta['01-c']);

echo '<pre>';
print_r($conta);
echo '</pre>';

echo "</div>";