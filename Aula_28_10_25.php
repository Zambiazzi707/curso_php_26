<?php

//Conversão de temperaturas

//Fahrenheint para Celsius. 95ºF -> ?ºC (35).

$fac = 95;
$FormFA = 5/9;
echo "<br>";
$cef = $FormFA * ($fac - 32);
echo "Ao converter 95ºF para Cº obtemos $cef" . "ºC";
echo "<br>";

//Celsius para Kelvin. 
$cek = $cef;
echo "<br>";
$kec = $cek + 273.15;
echo "Ao converter $cef" . "ºC em ºK obtemos $kec" . "ºK";
echo "<br>";

//Kelvin para Celsius

echo "<br>";
$cek = $kec - 273.15;
echo "Ao converter $kec" . "ºK em ºC obtemos $cek" . "ºC";
echo "<br>";

$Aleatória = 4;

$TenhoDinheiro = true;
$QueroUmCafe = true;
if($TenhoDinheiro && $QueroUmCafe)
{
    $Aleatória = 3; // esse valor só existe aqui
    echo "Compro um café <br>";
} else if ($TenhoDinheiro && !$QueroUmCafe){
    echo "Vou comprar chocolate <br>";
} else {
    echo "Não vou comprar nada <br>";
}

// if = Definir algo, usado para começar, obrigatório, "Se..."
// else if = Define outro if, "Se o último não funcionar..."
// else =  Encerra por fim o escobo/contexto "Se nada de tudo acima funcionar..."