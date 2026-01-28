<?php

require_once "./Aula_13_01_26_PessoaAbstract.php";

define ("QUEBRAR_LINHA","<br>");

class PessoaFísica extends PessoaAbstract {
    public $CPF;

    public function __construct() 
    {
        $this->resetarPessoa();
        $this->CPF = "";
    }

    public function validar() {
        $cpf + $this->CPF;

        $this->validarCPF($cpf);
    }

    private function validarNome(){
        if(!$this->$nome){
            throw new Exception("O campo NOME não foi preenchido.");
        }
    }

    private function validarIdade(){
        if(!$this->$idade){
            throw new Exception("O campo IDADE não foi preenchido.");
        }
    }

    private function validarLogradouro(){
        if(!$this->$logradouro){
            throw new Exception("O campo LOGRADOURO não foi preenchido.");
        }
    }

    private function validarCep(){
        if(!$this->$CEP){
            throw new Exception("O campo CEP não foi preenchido.");
        }
    }

    private function validarBairro(){
        if(!$this->$bairro){
            throw new Exception("O campo BAIRRO não foi preenchido.");
        }
    }

    private function validarCidade(){
        if(!$this->$cidade){
            throw new Exception("O campo CIDADE não foi preenchido.");
        }
    }

    private function validarEstado(){
        if(!$this->$estado){
            throw new Exception("O campo ESTADO não foi preenchido.");
        }
    }

    private function validarComplemento(){
        if(!$this->$complemento){
            throw new Exception("O campo COMPLEMENTO não foi preenchido.");
        }
    }

    private function validarPontoReferência(){
        if(!$this->$pontoReferencia){
            throw new Exception("O campo PONTO DE REFERÊNCIA não foi preenchido.");
        }
    }

}

$ObjCpf = new PessoaFísica;
$ObjCpf->nome = "Marcos";
$ObjCpf->idade = "38";
$ObjCpf->logradouro = "R. Getúlio Vargas";
$ObjCpf->cep = "95625-000";
$ObjCpf->bairro = "Santa Teresinha";
$ObjCpf->cidade = "Imbé";
$ObjCpf->estado = "RS";
$ObjCpf->numero = "712";
$ObjCpf->complemento = "Apt 12";
$ObjCpf->pontoReferencia = "Esquina da Pastelaria Fritinho";