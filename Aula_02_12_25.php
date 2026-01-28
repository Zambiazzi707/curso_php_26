<?php

/* Tipos Primitivos
Int | Integer == 1, 2, 3 ...
Float | Double == 1.0, 2.0, 3.0 ...
String |Char-Character == "Oi", 'o' ...
*/

$texto = ""; //String vazia

//Tipos Compostos | Coleção de dados: Array | Vetor
$numeros = array(); //Array vazio 
$numeros = []; //Array vazio

$numero = 10;
$numero = 11; //Consegue pegar apenas 1 valor


$numeros = [10, 11, 12, 5.5, 52.99, "Robopac"]; // Consegue 1 ou mais valores
$numeros = [10, 11, 12, 5.5, 52.99, "Robopac"]; // Tamanho; 6
//           0   1   2   3   4     5        6
//Todo número tem uma posição definida por números, array começa no 0
//echo $numeros; //Erro, echo só funciona para tipos Primitivos

/*for ($i = 0; $i < 6; $i++){
    
    echo $numeros [$i] . "<br>";
}

print_r ($numeros); //
echo "<br>";        // Nunca usado, apenas para achar a raiz dos problemas
var_dump ($numeros);//

echo "<br> implode:<br>";
echo implode("<br>", $numeros); // mostra igual o for com uma string antes
*/
//Atividade 

$i = 0;
while($i < 6) {
    echo $numeros [$i] . "<br>";
    $i++;
}


// Exercício: Encontrar os 5 primeiros números Primos.
// Salvar os números em array

$contador = [];

for($a = 0; $a <= 10; $a++) {
    // $contador[$a] = $a
    // $contador[0] = 0

    $contador[] = $a; //A variável vai ter o mesmo valor do índice
}


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
        // array_push($arrayDePrimos, $primoOuNao)
        $arrayDePrimos[] = $primoOuNao;
        $contadorDeNumPrimos++;
    }

}

for ($i = 0; $i < 5; $i++){
    
    echo $arrayDePrimos[$i] . "<br>";
}
echo "<br> . <br> . <br>";
/*
Somar arrays:
$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];
Resultado esperado:
$arraySoma = [15, 100, 80];


Multiplicar arrays:
$arrayInicio = [5, 10, 8];
$arrayFim = [10, 100, 3];
Resultado esperado:
$arraySoma = [50, 1000, 24];
*/

$arrayInicioS = [5, 10, 50];
$arrayFimS = [10, 90, 30];
$arraySoma = [];

for ($i = 0; $i < 3; $i++) {
    $arraySoma[$i] = $arrayInicioS[$i] + $arrayFimS[$i];
}
echo "<br> ArraySoma = ";
echo implode (", ", $arraySoma);

$arrayInicioM = [5, 10, 8];
$arrayFimM = [10, 100, 3];
$arrayMultiplicacao = [];

for ($i = 0; $i < 3; $i++) {
    $arrayMultiplicacao[$i] = $arrayInicioM[$i] * $arrayFimM[$i];
}
echo "<br> ArrayMultiplicação = ";
echo implode (", ", $arrayMultiplicacao);
