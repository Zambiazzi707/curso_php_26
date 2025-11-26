<?php

$contadorDeNumPrimos = 0;

for ($primoOuNao = 3; $contadorDeNumPrimos < 5; $primoOuNao++) {

    $antecessor = $primoOuNao -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

        $restoDaDivisao = $primoOuNao % $divisor;
        $ehDivisaoExata = $restoDaDivisao == 0;

        if ($ehDivisaoExata) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo == true){
        echo "O número $primoOuNao é primo <br> \n";
        $contadorDeNumPrimos++;
    }

}

