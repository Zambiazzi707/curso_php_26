<?php 

class SalaDeAula {
    public $numero = 0;
    public $classes = [];
    public $luzLigada = false;
    public $lampadaQueimada = false;
    public $arCondicionado = "";

    public function __construct($numero) {

        $this->numero = $numero;

    }
    public function ligarALuz(){
        if ($this->verificarALampada); 

    }

    public function desligarALuz() {
        $estaQueimada = $this->verificararALampada;
    }


    public function verificarALâmpada () {
        $estaQueimada = $this->lampadaQueimada;
            
        if ($estaQueimada) {
            return true;
        }

            return false;

    }

        
    public function queimarALâmpada () {
        $this->lampadaQueimada = true;
        $this->luzLigada = false;
    }

        
    public function trocarALâmpada () {

    }
        
}

$objSalaDeAula = new SalaDeAula(101);

echo $objSalaDeAula->ligarALuz();
$objSalaDeAula->queimarALampada();
echo $objSalaDeAula->ligarALuz();
$objSalaDeAula->trocarALampada();
echo $objSalaDeAula->ligarALuz();