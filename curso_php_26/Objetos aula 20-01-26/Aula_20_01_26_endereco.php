<?php 

require_once "./EntityAbstract.php";

class Endereco {
    public $logradouro;
    public $cep;
    public $bairro;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function __construct()
    {
        $this->tabelaNome = "endereço";
    }
}