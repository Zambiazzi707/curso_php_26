<?php 

/*$texto = "Antedegemon";
function imprimeTexto ($texto,$nome = "", $idade = 0){
    echo $texto; 
}
    function imprimeTexto3 ($texto){
   return $texto; 

}  

imprimetexto("Hermes");
$retorno = imprimeTexto("Hermes3");
echo "<br>";
echo imprimeTexto("Hermes");


$texto = "Login do INSS <br> \n";
$nome = "Paulo <br> \n";
$idade = "83 <br> \n";
function imprimeTexto ($texto, $nome = "", $idade = 0){
    echo $texto; 
    echo $nome; 
    echo $idade; 
}
imprimetexto($texto, $nome, $idade);
*/

// Calcular quantos segundos tem em 2h e 30min

$horas = 2;
$minutos = 30;

function calcularSegundoEmHoras($horas, $minutos){
    $horasParaMinutos = $horas * 60;
    $minutosParaSegundo = ($minutos + $horasParaMinutos) * 60;
    echo "$horas horas e $minutos minutos possuem $minutosParaSegundo segundos.<br> <br> \n \n";
}
calcularSegundoEmHoras($horas, $minutos);

//Altura de 1.8m
$peso = 90;
$altura = 1.8;

function calcularOIMC ($peso, $altura){
    $imc = round($peso / ($altura ** 2), 0);
    echo "O IMC de uma pessoa com $peso Kg e $altura metros é $imc <br>";
}

calcularOIMC ($peso, $altura);