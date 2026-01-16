<?php 

require_once "./Aula_13_01_26_PessoaAbstract.php";

define ("QUEBRAR_LINHA","<br>");

class Pessoajurídica extends PessoaAbstract {
    public $CNPJ;

    public function __construct() 
    {
        $this->resetarPessoa();
        $this->CNPJ = "";
    }

    public function validar() {
        $cnpj + $this->CNPJ;

        $this->validarCPF($cnpj);
    }
}