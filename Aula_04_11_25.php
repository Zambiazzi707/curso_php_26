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