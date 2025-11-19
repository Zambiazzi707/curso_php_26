<?php

//Correção do Tema

// Exercício: Encontrar os 5 primeiros números Primos.
// Fazer exercício com for e com while.

$contadorDeNumPrimos = 0;
$contadorDeDivisores = 0;
$primoOuNao = 5;
$antecessor = $primoOuNao -1;

for ($divisor = 2; $divisor <= $antecessor; $divisor++) {

    if ($contadorDeNumPrimos == 5) {
        break;
    }

    $restoDaDivisao = $primoOuNao % $divisor;
    $ehDivisaoExata = $restoDaDivisao == 0;

    if ($ehDivisaoExata) {
        $primoOuNao++;
        $antecessor = $primoOuNao -1;
        $divisor = 1;
        continue;
    }

    if ($divisor == $antecessor) {
        echo "O número $primoOuNao é primo \n";
        $primoOuNao++;
        $antecessor = $primoOuNao -1;
        $contadorDeNumPrimos++;
        $divisor = 1;
    }
}