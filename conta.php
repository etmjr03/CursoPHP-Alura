<?php
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

function sacar($conta, float $valorSaque) {
    if($valorSaque > $conta['saldo']) {
        echo "Saldo indisponível para saque, o saldo atual da sua conta é: {$conta['saldo']}";

        return $conta['saldo'];
    } else {
        $saque = $conta['saldo'] -= $valorSaque;

        return $saque;
    }
}

function depositar($conta, float $valorDeposito) {
        $deposito = $conta['saldo'] += $valorDeposito;

        return $deposito;
}

echo '<pre>';
print_r($conta);
echo '</pre>';

$conta['01-c'] = sacar($conta['01-c'], 1001);
$conta['02-c'] = depositar($conta['02-c'], 1000.00);

echo '<pre>';
print_r($conta);
echo '</pre>';