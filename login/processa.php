<?php
session_start();
include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

echo "E-mail: $email <br>";
echo "Senha: $senha <br>";


$result_usuario = "INSERT INTO tbldados (nome, email) 
VALUES ('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style = 'color: green'> Login registrado com sucesso </p> ";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style = 'color: red'> O login não foi registrado com sucesso </p> ";
    header("Location: index.php");
}


