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
        $cnpj = $this->CNPJ;

        $this->validarCPF($cnpj);
    }

    private function validarNome(){
        if(!$this->nome){
            throw new Exception("O campo NOME não foi preenchido.");
        }
    }

    private function validarIdade(){
        if(!$this->idade){
            throw new Exception("O campo IDADE não foi preenchido.");
        }
    }

    private function validarLogradouro(){
        if(!$this->logradouro){
            throw new Exception("O campo LOGRADOURO não foi preenchido.");
        }
    }

    private function validarCep(){
        if(!$this->cep){
            throw new Exception("O campo CEP não foi preenchido.");
        }
    }

    private function validarBairro(){
        if(!$this->bairro){
            throw new Exception("O campo BAIRRO não foi preenchido.");
        }
    }

    private function validarCidade(){
        if(!$this->cidade){
            throw new Exception("O campo CIDADE não foi preenchido.");
        }
    }

    private function validarEstado(){
        if(!$this->estado){
            throw new Exception("O campo ESTADO não foi preenchido.");
        }
    }

    private function validarComplemento(){
        if(!$this->complemento){
            throw new Exception("O campo COMPLEMENTO não foi preenchido.");
        }
    }

    private function validarPontoReferência(){
        if(!$this->pontoReferencia){
            throw new Exception("O campo PONTO DE REFERÊNCIA não foi preenchido.");
        }
    }

}

$ObjCnpj = new PessoaJurídica;
$ObjCnpj->nome = "Barbosão Extra Supermercados";
$ObjCnpj->idade = "32";
$ObjCnpj->logradouro = "R. Washington Barcelos";
$ObjCnpj->cep = "38180-000";
$ObjCnpj->bairro = "Axará";
$ObjCnpj->cidade = "Araxá";
$ObjCnpj->estado = "MG";
$ObjCnpj->numero = "944";
$ObjCnpj->complemento = "Mercadinho";
$ObjCnpj->pontoReferencia = "Em frente ao Chico Truck Fast Food";