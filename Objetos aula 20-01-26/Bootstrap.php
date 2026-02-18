<?php 

require_once "./conexao.php";
require_once "./BancoDeDados.php";
require_once "./Aula_20_01_26_Entity.php";

$banco = new BancoDados($conexao);
$usuarioModel = new UsuarioEntity($banco);