<?php 

require_once "./EntityAbstract.php";

class Cidade{
    public $id;
    public $cidade;
    public $codIbge;

    public function __construct()
    {
        $this->tabelaNome = "cidade";
    }
}