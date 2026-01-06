<?php 

// $somar = $somar + 1; || $somar += 1; || $somar++;
for ($somar = 1; $somar <= 10; $somar++) {
    echo "<br> O número é $somar";

    $valor5 = 5;
echo "<br>";
echo "Tabuada do 5";
echo "<br>";
$multiplicaçãoV1 = $somar * $valor5;
echo "$somar X $valor5 = $multiplicaçãoV1 . <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//Se quiser parar antes pode-se usar o break

for ($somar = 1; $somar <= 10; $somar++) {
    if ($somar > 7){
        break;
    }
    echo "<br> O número é $somar";


    $valor5 = 5;
echo "<br>";
$multiplicaçãoV1 = $somar * $valor5;
echo "$somar X $valor5 = $multiplicaçãoV1 . <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//Se quiser pular um número pode-se usar o continue

for ($somar = 1; $somar <= 10; $somar++) {
    if ($somar == 7){
        continue;
    }
    echo "<br> O número é $somar";


    $valor5 = 5;
echo "<br>";
$multiplicaçãoV1 = $somar * $valor5;
echo "$somar X $valor5 = $multiplicaçãoV1 . <br>";
}

// Exibir os números em ordm DECRESCENTE 
echo "<br>";
echo "Ordem decrescente <br>";
for ($decrescente = 17; $decrescente > 0; $decrescente -= 1){
    echo "$decrescente <br>";
}

// Contar e exibir os numeros pares de 1 a 50
echo "<br>";
echo "Números pares entre 50 e 0";
echo "<br>";
for ($pares50 = 50; $pares50 >= 0; $pares50 -=2) {
    echo "<br> $pares50";
}

// Calcular o fatorial de um número
echo "<br><br>";
echo "Fatorial de 7";
echo "<br><br>";
$numeral = 7;
for ($fatorial = $numeral-1; $fatorial >= 1; $fatorial--){
   $numeral *= $fatorial;
}
echo "$numeral";
echo "<br>";