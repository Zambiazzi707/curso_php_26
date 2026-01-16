<?php
/*
//TEMA 1 ----------------------------------------------------------------------------------------------------

$valor1 =1;
$valor2 =2;
$valor3 =3;
$valor4 =4;
$valor5 =5;
$valor6 =6;
$valor7 =7;
$valor8 =8;
$valor9 =9;
$valor10 =10;
echo "\n";
echo "Tabuada do 5";
echo "\n";
$multiplicaçãoV1 = $valor1 * $valor5;
$multiplicaçãoV2 = $valor2 * $valor5;
$multiplicaçãoV3 = $valor3 * $valor5;
$multiplicaçãoV4 = $valor4 * $valor5;
$multiplicaçãoV5 = $valor5 * $valor5;
$multiplicaçãoV6 = $valor6 * $valor5;
$multiplicaçãoV7 = $valor7 * $valor5;
$multiplicaçãoV8 = $valor8 * $valor5;
$multiplicaçãoV9 = $valor9 * $valor5;
$multiplicaçãoV10 = $valor10 * $valor5;
echo "\n";
echo "$valor1 X $valor5 = $multiplicaçãoV1";
echo "\n";
echo "$valor2 X $valor5 = $multiplicaçãoV2";
echo "\n";
echo "$valor3 X $valor5 = $multiplicaçãoV3";
echo "\n";
echo "$valor4 X $valor5 = $multiplicaçãoV4";
echo "\n";
echo "$valor5 X $valor5 = $multiplicaçãoV5";
echo "\n";
echo "$valor6 X $valor5 = $multiplicaçãoV6";
echo "\n";
echo "$valor7 X $valor5 = $multiplicaçãoV7";
echo "\n";
echo "$valor8 X $valor5 = $multiplicaçãoV8";
echo "\n";
echo "$valor9 X $valor5 = $multiplicaçãoV9";
echo "\n";
echo "$valor10 X $valor5 = $multiplicaçãoV10";
echo "\n";
echo "\n";
echo "Tabuada do 6";
echo "\n";
$multiplicaçãoVI1 = $valor1 * $valor6;
$multiplicaçãoVI2 = $valor2 * $valor6;
$multiplicaçãoVI3 = $valor3 * $valor6;
$multiplicaçãoVI4 = $valor4 * $valor6;
$multiplicaçãoVI5 = $valor5 * $valor6;
$multiplicaçãoVI6 = $valor6 * $valor6;
$multiplicaçãoVI7 = $valor7 * $valor6;
$multiplicaçãoVI8 = $valor8 * $valor6;
$multiplicaçãoVI9 = $valor9 * $valor6;
$multiplicaçãoVI10 = $valor10 * $valor6;
echo "\n";
echo "$valor1 X $valor6 = $multiplicaçãoVI1";
echo "\n";
echo "$valor2 X $valor6 = $multiplicaçãoVI2";
echo "\n";
echo "$valor3 X $valor6 = $multiplicaçãoVI3";
echo "\n";
echo "$valor4 X $valor6 = $multiplicaçãoVI4";
echo "\n";
echo "$valor5 X $valor6 = $multiplicaçãoVI5";
echo "\n";
echo "$valor6 X $valor6 = $multiplicaçãoVI6";
echo "\n";
echo "$valor7 X $valor6 = $multiplicaçãoVI7";
echo "\n";
echo "$valor8 X $valor6 = $multiplicaçãoVI8";
echo "\n";
echo "$valor9 X $valor6 = $multiplicaçãoVI9";
echo "\n";
echo "$valor10 X $valor6 = $multiplicaçãoVI10";
echo "\n";

//Tema 2 ----------------------------------------------------------------------------------------------------

//Aritimética
$Nota1 = 12;
$Nota2 = 8;
$Nota3 = 4;
$Nota4 = 24;
$Nota5 = 12;

$soma1 = ($Nota1 + $Nota2 + $Nota3 + $Nota4 + $Nota5) / 5;
echo "\n";
echo "A média aritimética das notas é $soma1";
echo "\n";

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
echo "\n";
echo "A Média Ponderada do meu semestre escolar foi de $soma2";
echo "\n";

//Harmonica
$KM1 = 7;
$KM2 = 3;
$KM3 = 4;
$KM4 = 9;
$KM5 = 2;
$KMT = 5;
$soma3 = $KMT / (( 1 / $KM1 ) + ( 1 / $KM2 ) + ( 1 / $KM3 ) + ( 1 / $KM4 ) + (1 / $KM5));
echo "\n";
echo "A Média Harmonica da minha viagem é $soma3";

echo "\n" . "\n";

//Tema 04/11/25 ----------------------------------------------------------------------------------------------------

$parOuImpar = 17;

if($parOuImpar % 2 == 0){
    echo "$parOuImpar é par";
}else{
    echo "$parOuImpar é ímpar";
} 

//Tema 11/11/25 -----------------------------------------------------------------------------------------------------

echo "\n\n\n";

echo "Tabuada do 5 (while):";
$numero = 5;
$multiplicador = 1;
while ($multiplicador < 11){
    echo "\n $numero X $multiplicador = " . $numero * $multiplicador;
    $multiplicador++;
}

echo "\n\n\n";

echo "Par ou Ímpar? (while)";
$imparOuPar = 0;
while ($imparOuPar <= 10){
    if ($imparOuPar % 2 == 0){
        echo "\n $imparOuPar é Par.";
    }else{
        echo "\n $imparOuPar é Ímpar.";
    }
    $imparOuPar++;
}

echo "\n\n\n";

echo "Números pares até 50 (while) \n";
$numeralPar = 0;
while ($numeralPar <= 50){
    if($numeralPar % 2 == 0){
        echo "$numeralPar é Par.\n";
    }else{
        echo "O número $numeralPar náo é Par!";
    }
    $numeralPar += 2;
}

echo "\n\n\n";

echo "Ordem decrescente! (while) \n";
$OrdemDecrescente = 15;
while ($OrdemDecrescente > 0){
    echo "\n $OrdemDecrescente";
    $OrdemDecrescente--;
}

echo "\n\n\n";

$number = 6;
echo "O fatorial de $number é ";
$fatorial = $number-1;
while($fatorial >= 1){
    $number *= $fatorial;
    $fatorial--;
}
echo "$number";
*

$contadorDeNumPrimos = 0;
$primoOuNao = 3;


while ($contadorDeNumPrimos < 5) {

    $antecessor = $primoOuNao - 1;
    $ehPrimo = true;
    
    $divisor = 2;

    while ($divisor <= $antecessor) {

        $restoDaDivisao = $primoOuNao % $divisor;
        $ehDivisaoExata = $restoDaDivisao == 0;

        if ($ehDivisaoExata) {
            $ehPrimo = false;
            break;
        }

        $divisor++;
    }

    if ($ehPrimo == true){
        echo "O número $primoOuNao é primo <br> \n";
        $contadorDeNumPrimos++;
    }

    $primoOuNao++;
}
*/

//Tema dia 09/12/25 ----------------------------------------------------------------------------------------------------------------------------

/*Contar quantas vogais existem em um frase ou palavra.
* $vogais = ['a', 'e', 'i', 'o', 'u'];
* $vogalMinuscula = strtolower($palavra[$i]);
* $existeVogal = in_array($vogalMinuscula, $vogais);

* Ex.:
* $palavra = "infoserv":
* $palavra = "infosErv";
* Saida esperada: 3 vogais. 


$palavra = "Taumatawhakatangihangakoauauotamateaturipukakapikimaungahoronukupokaiwhenuakitanatahu"; 
$vogais = ["a", "e", "i", "o", "u"];
$totalVogais = 0;
$vogalMinuscula = strtolower($palavra);
$comprimento = strlen($vogalMinuscula);

for ($i = 0; $i < $comprimento; $i++) {
    $vogalMinuscula = strtolower($palavra[$i]);
    $existeVogal = in_array($vogalMinuscula, $vogais);

    if ($existeVogal) {
        $totalVogais = $totalVogais + 1;
    } 

}
echo "$palavra possui $totalVogais vogais\n <br>";


/* Contar quantas vogais existem em um frase ou palavra. Totalizando a quantidade de cada uma, ou seja, quantos A, quantos E...


$qtdDeVogal = [
    "a" => 0,
    "e" => 0,
    "i" => 0,
    "o" => 0,
    "u" => 0
];

$totalVogais = 0;
$tamanho = strlen($palavra);

for ($i = 0; $i < $tamanho; $i++) {
    $vogalMinuscula = strtolower($palavra[$i]);
    $existeVogal = in_array($vogalMinuscula, $vogais);

    if ($existeVogal) {
        $totalVogais++;
        $qtdDeVogal[$vogalMinuscula]++;
    }
}

echo "Quantidade de A: " . $qtdDeVogal['a'] .  "\n <br>";
echo "Quantidade de E: " . $qtdDeVogal['e'] .  "\n <br>";
echo "Quantidade de I: " . $qtdDeVogal['i'] .  "\n <br>";
echo "Quantidade de O: " . $qtdDeVogal['o'] .  "\n <br>";
echo "Quantidade de U: " . $qtdDeVogal['u'] .  "\n <br>";
*/

/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * Exercicio para as férias.
 * Calcular o tempo de duração de um jogo.
 * Ex.: Jogo de futebol (tempo de duracao de 90 min || 1 h e meia)
 * 
 * A-) Comeca: 21h, qual a hora do termino do jogo?
 * R.: 22:30:00
 * 
 * B-) Comeca: 23h e 45min, qual a hora de termino do jogo?
 * R.: 01:15:00
 

echo "O jogo começa as 21h, qual a hora do termino do jogo? <br>";

const SESSENTA = 60;
const SEGUNDOS_NO_DIA = 86400;
const UMA_HORA_E_MEIA = [1, 30, 00];
function calcularFimDoJogoA($horas) {
    $relogio = explode(":", $horas);
    $horaInicio = $relogio[0];
    $minutosInicio = $relogio[1];
    $segundosInicio = $relogio[2];

    $horaFim = UMA_HORA_E_MEIA[0];
    $minutosFim = UMA_HORA_E_MEIA[1];
    $segundosFim = UMA_HORA_E_MEIA[2];

    $totalHoras = $horaInicio + $horaFim;
    $totalMinutos = $minutosInicio + $minutosFim;
    $totalSegundos = $segundosInicio + $segundosFim;

    if ($totalSegundos >= SESSENTA){
        $totalMinutos += 1;
        $totalSegundos -= SESSENTA;
    }
    if ($totalMinutos >= SESSENTA){
        $totalHoras += 1;
        $totalMinutos -= SESSENTA;
    }
    if ($totalHoras < 10) { $totalHoras = "0" . $totalHoras; }
    if ($totalMinutos < 10) { $totalMinutos = "0" . $totalMinutos; }
    if ($totalSegundos < 10) { $totalSegundos = "0" . $totalSegundos; }

    echo "<br>";
    echo "A hora de termino do jogo das $horas é as $totalHoras:$totalMinutos:$totalSegundos <br><br><br>";
    echo "<br>";
}
$horas = "21:00:00";
calcularFimDoJogoA($horas); 

echo "O jogo começa as 23h e 45min, qual a hora do termino do jogo? <br>";

function calcularFimDoJogoB($horasB) {
    $relogioB = explode(":", $horasB);
    $horaInicioB = $relogioB[0];
    $minutosInicioB = $relogioB[1];
    $segundosInicioB = $relogioB[2];

    $tempo = UMA_HORA_E_MEIA;

    $horaFimB = $tempo[0];
    $minutosFimB = $tempo[1];
    $segundosFimB = $tempo[2];

    $totalHorasB = $horaInicioB + $horaFimB;
    $totalMinutosB = $minutosInicioB + $minutosFimB;
    $totalSegundosB = $segundosInicioB + $segundosFimB;

    if ($totalSegundosB >= SESSENTA){
        $totalMinutosB += 1;
        $totalSegundosB -= SESSENTA;
    }
    if ($totalMinutosB >= SESSENTA){
        $totalHorasB += 1;
        $totalMinutosB -= SESSENTA;
    }
    if ($totalHorasB >= 24) {
        $totalHorasB = $totalHorasB - 24;
    }
    if ($totalHorasB < 10) { $totalHorasB = "0" . $totalHorasB; }
    if ($totalMinutosB < 10) { $totalMinutosB = "0" . $totalMinutosB; }
    if ($totalSegundosB < 10) { $totalSegundosB = "0" . $totalSegundosB; }

    echo "<br>";
    echo "A hora de termino do jogo das $horasB é as $totalHorasB:$totalMinutosB:$totalSegundosB";
    echo "<br>";
}
$horasB = "23:45:00";
calcularFimDoJogoB($horasB); 


/** Criar 3 novos objetos/classe que representam os animais abaixo: 
 * Cachorro, Gato e Papagio.
 * 
 * 
 * Criar um objeto/classe que representa a sala de aula. 
 * */

class Cachorro {
    public $raça;
    public $cor;
    public $dentes;
    public $patas;
    public $rabo;
    public $orelhas;
}

class Gato {
    public $cor;
    public $dentes;
    public $patas;
    public $rabo;
    public $garras;
    public $orelhas;
}

class Papagaio {
    public $cores;
    public $bico;
    public $pernas;
    public $rabo;
    public $garras;
    public $penas;
}
class Sala {
    public $classes;
    public $cadeiras;
    public $tv;
    public $janelas;
    public $cortinas;
    public $arCondicionado;
    public $teto;
    public $parede;
    public $monitores;
    public $pcs;
}

