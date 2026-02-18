<?php

// $_GET
// $_POST
// $_REQUEST
// a funcao empty() trabalha com vazio(null, undefined, [], {}, 0, '0', e false), para esses casos ele retorna TRUE
// a funcao isset é sim ou não, (true || false , se a propriedade/parametro existir)
// ?rota=criar - caminho 
// http://localhost/curso_php_26/ - URL Base
// http://localhost/curso_php_26/?rota=criar - URL definida/completa 

$dados = $_REQUEST;

$irParaListagem = empty($dados) || !isset($dados["rota"]);

if ($irParaListagem) {
    echo "Estou na listagem fallback";
    return; //return chamar funcao listagem 
}

$rota = $dados["rota"];

if ($rota == "listar") {
    echo "estou na listar";
    return;
}

if ($rota == "editar") {
    echo "estou na editar";
    return;
}

if ($rota == "criar") {
    echo "estou na criar";
    return;
}

if ($rota == "deletar") {
    echo "estou na deletar";
    return;
}
