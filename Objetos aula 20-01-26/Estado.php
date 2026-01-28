<?php 

require_once "./EntityAbstract.php";

//Aula 20 01 26
class Estado extends EntityAbstract {
    public $id;
    public $nome;
    public $sigla;

    public function __construct()
    {
        $this->tabelaNome = "estado";
    }
}