<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM tbldados WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>CRUD - Editar</title>
	<style>
		input[type=text],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}

		form {
			justify-content: center;
		}

		.backcolor {
			background: -webkit-linear-gradient(-180deg, #3996E4, #241698);
		}

		.box{
			width: 800px;
			height: 530px;
			position: relative;
			left: 528px;
			top: 10px;
		}

		.text{
			color: #ccc;
			font-family: sans-serif;
			font-size: 44px;
		}
	</style>
</head>

<body class="backcolor">
	<a href="index.php">Cadastrar</a><br>
	<a href="listar.php">Listar</a><br>
	<h1 style="text-align: center;" class="text">Editar Usuário</h1>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>

	<div class="box">
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

			<label for="fname">Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>

			<label for="fname">E-mail: </label>
			<input type="text" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label for="fname">CPF: </label>
			<input type="text" name="cpf" placeholder="Digite o seu CPF" value="<?php echo $row_usuario['cpf']; ?>"><br><br>

			<label for="fname">Senha: </label>
			<input type="text" name="senha" placeholder="Digite uma senha" value="<?php echo $row_usuario['senha']; ?>"><br><br>

			<label for="fname">Localidade: </label>
			<input type="text" name="localidade" placeholder="Escolha uma lugar em que mais se aproxima da sua localidade" value="<?php echo $row_usuario['localidade']; ?>"><br><br>

			<input type="submit" value="Confirmar">
		</form>
	</div>

</body>

</html>

<!--<form method="POST" action="proc_edit_usuario.php">
		<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

		<label>Nome: </label>
		<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>

		<label>E-mail: </label>
		<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>

		<label>CPF: </label>
		<input type="email" name="cpf" placeholder="Digite o seu CPF" value="<?php echo $row_usuario['cpf']; ?>"><br><br>

		<label>Senha: </label>
		<input type="email" name="senha" placeholder="Digite uma senha" value="<?php echo $row_usuario['senha']; ?>"><br><br>

		<label>Localidade: </label>
		<input type="email" name="localidade" placeholder="Escolha uma lugar em que mais se aproxima da sua localidade" value="<?php echo $row_usuario['localidade']; ?>"><br><br>

		<input type="submit" value="Editar">
	</form>
	
	<label for="country">Country</label>
			<select id="country" name="country">
				<option value="australia">Australia</option>
				<option value="canada">Canada</option>
				<option value="usa">USA</option>
			</select>!-->