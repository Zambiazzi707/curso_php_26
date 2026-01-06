<?php

/* Dada uma palavra informada pelo usuario,
verificar se a mesma for um palíndromo.

Ex: ana, subi no onibus, kaiak, natan.

Dica: Um for dentro do outro.
*/

// "<br>Palíndromo<br>";    Tentativas
// $palavra = "ana";
// $ehPalindromo = true;

// for($p = 0; $p < 3; $p++){
//     $letraIndo = $palavra[$p];

//     for($t = 3; $t > 0; $t--){
//         $letraVoltando = $palavra[$t];
//         $letras = $letraIndo == $letraVoltando;

//         if($letras){
//             $ehPalindromo = false;
//             break;
//         }
//     }
// }
// if($ehPalindromo == false){
//     echo "A palavra $palavra NÃO é um Palíndromo";

// }if($ehPalindromo == true){
//     echo "A palavra $palavra é um Palíndromo";

// }

// $palavra = "giz";
// $tamanho = strlen($palavra);
// $ehPalindromo = true;

// for($p = 0; $p < $tamanho; $p++){
//     $letraIndo = $palavra[$p];
//     $tamanhoVolta = ($tamanho -1) -$p;

//     for($t = $tamanhoVolta; $t >= 0; $t--){
//         $letraVoltando = $palavra[$t];
//         $letras = $letraIndo == $letraVoltando;

//         if(!$letras == false){
//             $ehPalindromo = false;
//             break;
//         }
//     }

//     if ($p < $tamanho) {
//         $ehPalindromo = true;
//     }

    
// }
// if($ehPalindromo == false){
//         echo "A palavra $palavra NÃO é um Palíndromo<br>";

//     }if($ehPalindromo == true){
//         echo "A palavra $palavra é um Palíndromo<br>";
//     }
//-------------------------------------------------------------------------------------------------------------

// Certo porém inútil
$palavra = "ana"; 
$tamanho = strlen($palavra);
$ehPalindromo = true; 

for($p = 0; $p < $tamanho; $p++){
    $letraIndo = $palavra[$p];
    
    $tamanhoVolta = ($tamanho - 1) - $p;

    for($t = $tamanhoVolta; $t == $tamanhoVolta; $t--){ 
        
        $letraVoltando = $palavra[$t];
        
        $letrasSaoIguais = $letraIndo == $letraVoltando; 

        if(!$letrasSaoIguais){
            $ehPalindromo = false;
            break; 
        }
    }

    if (!$ehPalindromo) {
        break; 
    }
    
}

if($ehPalindromo == false){
    echo "A palavra $palavra NÃO é um Palíndromo<br>";
} else {
    echo "A palavra $palavra é um Palíndromo<br>";
}

// Certo e com 1 for

$palavra = "ana"; 
$tamanho = strlen($palavra);
$ehPalindromo = true; 

for($p = 0; $p < $tamanho; $p++){
    
}