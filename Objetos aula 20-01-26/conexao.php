<?php 

$conexao = mysqli_connect("lolcalhost", "aluno", "1234", "curso_php_26");

//só entra aqui se deu erro ao conectar com o banco.
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debgging errno." . mysqli_connect_errno(). PHP_EOL;
    echo "Debgging error." . mysqli_connect_error(). PHP_EOL;
    exit;
}