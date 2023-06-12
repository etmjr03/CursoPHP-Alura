<?php

function sacar($conta, float $valorSaque) {
    if($valorSaque > $conta['saldo']) {
        // exemplo de string complexa
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

function letraMaiuscula(array &$conta) {
    $conta['nome'] = mb_strtoupper($conta['nome']);

    return $conta['nome'];
}

function removeConta(array &$conta) {
    unset($conta);
}