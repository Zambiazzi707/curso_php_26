<?php 

require_once "./EntityAbstract.php";

class Estado{
    public $id;
    public $estado;
    public $sigla;

    public function __construct()
    {
        $this->tabelaNome = "estado";
    }
}