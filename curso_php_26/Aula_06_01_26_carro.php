<?php 

//POO || OOP 
//Programação Orientada a Objetos 

/** 
 * Característica: Propriedades || Atributos
*/

define("QUEBRA_LINHA","\n");

class Carro {
    private $ligado = false;
    private $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $combustivel;
    public $bateria;
    public $chave;

    public function setMarca($marcaParam){
        $this->marca = $marcaParam;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function ligar() {
        if ($this->ligado){
            echo "O carro já está ligado." . QUEBRA_LINHA;
        }
        if (!$this->combustivel){
            echo "O carro não tem combustivel." . QUEBRA_LINHA;
            return;
        }

        if (!$this->bateria){
            echo "O carro não tem bateria." . QUEBRA_LINHA;
            return;
        }

        if (!$this->chave){
            echo "O carro está sem chave." . QUEBRA_LINHA;
            return;
        }
    }

    public function desligar(){
         if (!$this->ligado) {
            echo "O Carro já esta desligado." . QUEBRA_LINHA;
            return;
        }

        $this->ligado = false;
        echo "Carro esta desligado." . QUEBRA_LINHA;
    }
    
}

$objCarro = new Carro(); //Instânciando um objeto || Jogando uma instância na variável
$objCarro->setMarca ("BMW");
$objCarro->modelo = "e36";
$objCarro->ano = "1997";
$objCarro->cor = "Azul Marinho";
$objCarro->combustivel = "Gasolina";

$chave = "Presencial";
$objCarro->ligar($chave);