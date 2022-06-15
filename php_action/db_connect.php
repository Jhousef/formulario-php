<?php
// Conexão com o banco de dados.
$server     = 'localhost';
$usuario    = 'root';
$senha      = 'root';
$banco      = 'crud';

$connect = mysqli_connect($server, $usuario, $senha, $banco);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) {
    echo 'Erro na conexão: ' . mysqli_connect_error();
}
