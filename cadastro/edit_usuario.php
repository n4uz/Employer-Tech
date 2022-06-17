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
	</style>
</head>

<body>
	<a href="index.php">Cadastrar</a><br>
	<a href="listar.php">Listar</a><br>
	<h1>Editar Usuário</h1>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>

	<div>
		<form action="/action_page.php">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..">

			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="australia">Australia</option>
				<option value="canada">Canada</option>
				<option value="usa">USA</option>
			</select>

			<input type="submit" value="Submit">
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
	</form>!-->