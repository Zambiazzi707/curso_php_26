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