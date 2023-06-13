<?php

echo '<link rel="stylesheet" href="style.css">';

echo '<h3>Desafio números ímpares de 1 até 100</h3>';

for($numero = 0; $numero <= 100; $numero++) {
    if($numero % 2 == 1) {
        echo "$numero - ";
    }
}

echo '<h3>Taboada de 0 - 10 de um número</h3>';

$numero = 3;

for($i = 0; $i <= 10; $i++) {
    $resultado = $numero * $i;

    echo "$numero x $i = $resultado <br>";
}

echo '<h3>Cálculo IMC</h3>';

$altura = 1.7;
$peso = 65.5;

$imc = $peso / ($altura * $altura);
$fomataImc = number_format($imc, 2, '.', '');

if($imc < 18.5) {
    echo "Seu IMC está Baixo";
} elseif ($imc < 25) {
    echo "Seu IMC está Dentro";
} else {
    echo "Seu IMC está Alto";
}

echo ", seu valor é: $fomataImc";