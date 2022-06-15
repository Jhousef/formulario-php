<?php
// Sessão
session_start();
// conexão
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) {
    $nome       = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome  = mysqli_escape_string($connect, $_POST['s_nome']);
    $email      = mysqli_escape_string($connect, $_POST['email']);
    $idade      = mysqli_escape_string($connect, $_POST['idade']);

    // var_dump($idade, $_POST['idade']);
    // return 0;

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome','$sobrenome','$email','$idade') ";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../index.php');
    }
}
