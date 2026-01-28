<?php 

require_once "./EntityAbstract.php";

//Aula 20 01 26
class Endereco extends EntityAbstract {
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