<?php 

require_once "./EntityAbstract.php";

//Aula 20 01 26
class Cidade extends EntityAbstract {
    public $id;
    public $nome;
    public $codIbge;

    public function __construct()
    {
        $this->tabelaNome = "cidade";
    }
}