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

*/

$salario = "3000";
$valorDaCompra = "1500";

function parcelamento($salario, $valorDaCompra, $parcelas){
    $qntDaParcela = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
    $valorParcela = $valorDaCompra / ($qntDaParcela[$parcelas]--);

    $porcentagemSalario = ($salario * 30) / 100;

    if($valorParcela > $porcentagemSalario){
        echo "O valor da parcela é muito grande para o seu sálario atual, compra negada!";
    }elseif($valorParcela < $porcentagemSalario){
        $parcelas += 1;
        echo "A compra parcelada em $parcelas" . "X fica $valorParcela cada." . " Compra aceita!";
    }
}

$parcelas = rand(0, 11);
parcelamento($salario, $valorDaCompra, $parcelas);