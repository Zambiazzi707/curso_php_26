<?php 

require_once "./EntityAbstract.php";

class Logradouro{
    public $id;
    public $logradouro;

    public function __construct()
    {
        $this->tabelaNome = "logradouro";
    }
}