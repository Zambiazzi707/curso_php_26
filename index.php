<?php 

$avião; // Sempre declarar a variável antes

$avião = "Boeing747";
/**
 * Tipos primitivos de var
 * string 'texto qualquer' || 'A' || "A" (Não possui diferença entre as aspas)
 * char || character 'A'
 * int || integer '23'
 * float '23.8' (Valor real pequeno)
 * double '23.8' (Valor real grande)
 * decimal '23.8'
 */

$valor1 = 81;
$valor2 = 27;
$soma = $valor1 + $valor2; // 10 = 15 -> 25 
// mesma coisa
$soma = $soma + 3; //28
$soma +=3; //28 

$multiplicação = $valor1 * $valor2 ;
$divisão = $valor1 / $valor2 ;

echo "Ao Multiplicar $valor1 e $valor2 <br> temos = &nbsp;" . $multiplicação;
echo "<br>";
echo "<br>";
echo "Ao Dividir $valor1 e $valor2 <br> temos = &nbsp;" . $divisão;

echo "<br>";
echo "<br>";

$valor3 = 75;
$valor4 = 6;
$restoDivisão = $valor3 % $valor4;
$Dividir = $valor3 / $valor4;
echo "Ao Dividir $valor3 por $valor4. <br> O resultado será = $Dividir e o resto dessa Divisão será de = " . $restoDivisão;