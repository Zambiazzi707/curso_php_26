<?php

/*Ver onde se pode aplicar if e else (Tema de casa feito em aula)
Simular uma calculadora com if e else
operadores: - + * /
Dica: variável "$operador"
*/

//Dados da Calculadora
$operador = "-";
$valor1 =2;
$valor2 =6;

if ($valor1 < $valor2){
    $temporaria = $valor1;
    $valor1 = $valor2;
    $valor2 = $temporaria;
}

//Calculadora
if ($operador == "+"){
    $resultado = $valor1 + $valor2;
    echo "A Soma de $valor1 + $valor2 = $resultado";
}else if ($operador == "-"){
    $resultado = $valor1 - $valor2;
    echo "A Subtração de $valor1 - $valor2 = $resultado";
}else if ($operador == "*"){
    $resultado = $valor1 * $valor2;
    echo "A Multiplicação de $valor1 * $valor2 = $resultado";
}else if ($operador == "/"){
    $resultado = $valor1 / $valor2;
    echo "A Divisão de $valor1 / $valor2 = $resultado";
}
echo "<br><br><br>";
echo "NOTAS:";
echo "<br>";

/* Exercício 8 página 15 apostila
NÃO utilizar array
Utilizar os exrcícios das médias e aplicar a lógica que valida se o aluno passou de ano
*/

//Aritimética
$Nota1 = 12;
$Nota2 = 8;
$Nota3 = 4;
$Nota4 = 24;
$Nota5 = 12;

$soma1 = ($Nota1 + $Nota2 + $Nota3 + $Nota4 + $Nota5) / 5;
echo "<br>";
echo "A média aritimética das notas é $soma1";
echo "<br>";
if ($soma1 > 6){
    echo "APROVADO! com nota $soma1";
} else if ($soma1 < 6){
    echo "REPROVADO! com nota $soma1";
}
echo "<br>";
//Ponderada
$V1 = 10;
$V2 = 12;
$V3 = 6;
$V4 = 3;
$V5 = 21;

$P1 = 12;
$P2 = 12;
$P3 = 8;
$P4 = 4;
$P5 = 24;

$soma2 = (($V1 * $P1) + ($V2 * $P2) + ($V3 * $P3) + ($V4 * $P4) + ($V5 * $P5)) / ($P1 + $P2 + $P3 + $P4 + $P5);
echo "<br>";
echo "A Média Ponderada do meu semestre escolar foi de $soma2";
echo "<br>";
if ($soma2 > 6){
    echo "APROVADO! com nota $soma2";
} else if ($soma2 < 6){
    echo "REPROVADO! com nota $soma2";
}
echo "<br>";

//Harmonica
$KM1 = 7;
$KM2 = 3;
$KM3 = 4;
$KM4 = 9;
$KM5 = 2;
$KMT = 5;
$soma3 = round ($KMT / (( 1 / $KM1 ) + ( 1 / $KM2 ) + ( 1 / $KM3 ) + ( 1 / $KM4 ) + (1 / $KM5)), 2);
echo "<br>";
echo "A Média Harmonica das minhas notas é $soma3";
echo "<br>";
if ($soma3 > 6){
    echo "APROVADO! com nota $soma3";
} else if ($soma3 < 6){
    echo "REPROVADO! com nota $soma3";
}
echo "<br>";

//Exercício 9 página 16.
echo "<br>";
$fulano = "Jair";
$idadeDoFulano = "43";
echo "$fulano tentou acessar esse site, permissão por idade necessária.";
echo "<br>";
if ($idadeDoFulano > 18){
    echo "$fulano é maior de 18, ele possui $idadeDoFulano anos. Acesso concedido.";
}else if ($idadeDoFulano < 18){
    echo "$fulano não é maior de 18, ele possui $idadeDoFulano anos. Acesso negado.";
}