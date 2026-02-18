<?php

require_once "./";

//Model || Entity
class UsuarioEntity extends EntityAbstract {
    public $nomeUsuario;
    public $email;
    public $status = true;
    public $cadastroPreenchido = true;

    public function __construct(BancoDados $banco)
    {
        parent::__construct($banco);
        $this->tabelaNome = "usuario";
    }
}