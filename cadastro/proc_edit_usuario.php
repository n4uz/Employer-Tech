'<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_NUMBER_INT);
$localidade = filter_input(INPUT_POST, 'localidade', FILTER_SANITIZE_URL);   


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Cpf: $cpf <br>";
//echo "Senha: $senha <br>";
//echo "Localidade: $localidade <br>";

$result_usuario = "UPDATE tbldados SET nome='$nome', email='$email', cpf='$cpf', senha='$senha', localidade='$localidade', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: /employer-tech/login/index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}
