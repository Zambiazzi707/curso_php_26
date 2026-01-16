<?php 

abstract class PessoaAbstract {
    public $nome;
    public $idade;
    public $logradouro;
    public $cep;
    public $bairro;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function resetarPessoa() {
        $this->$nome = "";
        $this->$idade = "";
        $this->$logradouro = "";
        $this->$cep = "";
        $this->$bairro = "";
        $this->$cidade = "";
        $this->$estado = "";
        $this->$numero = "";
        $this->$complemento = "";
        $this->$pontoReferencia = "";

    }


    public function validarCPF($cpf) {
        "822.745.923-04";
    }

    public function validarCNPJ($cnpj) {
        "822.745.923/0001-04";
    }
}