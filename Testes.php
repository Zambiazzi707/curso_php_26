<?php

$NãoTenhoCarro = true;
$NãoTenhoTeto = true;

$QuerFicarComigo = "Porque gosta. do meu rárárárárárárá o lepo lepo";
$Interesseira = "Quer meu bem material";
$MuitoInteresseira = "Quer meus bens materiais";
$SemLepoLepo = "Não gosta do meu rárárárárárárá o lepo lepo";

if ($NãoTenhoCarro && $NãoTenhoTeto){
    echo $QuerFicarComigo;
}else if (!$NãoTenhoCarro && $NãoTenhoTeto){
    echo $Interesseira && $SemLepoLepo;
}else if ($NãoTenhoCarro && !$NãoTenhoTeto){
    echo $Interesseira && $SemLepoLepo;
}else if (!$NãoTenhoCarro && !$NãoTenhoTeto){
    echo $MuitoInteresseira && $SemLepoLepo;
}