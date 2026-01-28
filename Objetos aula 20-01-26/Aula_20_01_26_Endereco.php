<?php 

require_once "./Estado.php";
require_once "./Cidade.php";
require_once "./Endereco.php";

class Endereço extends EntityAbstract {
    public Estado $estado;
    public Cidade $cidade;
    public Endereco $endereco;
}