<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$localidade = filter_input(INPUT_POST, 'localidade', FILTER_SANITIZE_STRING);   

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Cpf: $cpf <br>";
echo "Senha: $senha <br>";
echo "Localidade: $localidade <br>";

$result_usuario = "INSERT INTO tbldados (nome, email, cpf, senha, localidade, created) 
VALUES ('$nome', '$email', '$cpf', '$senha', '$localidade', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso ";
    header("Location: index.php");
}else{
    header("Location: index.php");
}


