<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>CRUD - Pesquisar</title>

	<style>
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		.btn-text-top {
			background-color: #222;
			border: 1px solid rgba(255, 255, 255, .1);
			padding: 15px 50px 15px 30px;
			border-radius: 20px;
			width: 1083px !important;
			height: 42px;
			font-weight: 300;
			color: #8795a2;
		}

		.btn-buscar-top {
			width: 20px !important;
			height: 22px;
			background: url(http://www.devmedia.com.br/imagens/2013/buscar_grey.png);
			cursor: pointer !important;
			border: none;
			transform: translateY(-50%);
			position: relative;
			top: -20px;
			left: 1050px;
		}

		.box {
			width: 810px;
			height: 530px;
			position: relative;
			left: 528px;
			top: 10px;
		}

		.text {
			color: #ccc;
			font-family: sans-serif;
			font-size: 44px;
		}
		.backcolor {
			background: -webkit-linear-gradient(-180deg, #3996E4, #241698);
		}
	</style>
</head>

<body class="backcolor">
	<a href="index.php">Cadastrar</a><br>
	<a href="listar.php">Listar</a><br>

	<h1 class="text" style="text-align: center;">Pesquisar Usuário</h1>

	<div class="container box">
		<form class="form-busca-site" action="" method="POST">
			<input class="btn-text-top" type="text" name="nome" placeholder="Nome do usuário" style="text-align: center;">
			<input name="SendPesqUser" type="submit" value="." class="btn-buscar-top">
			
		</form>
	</div>

<!-- <div class="box container">
	<form method="POST" action="" class="form-busca-site">
			<label>.</label>
			<input class="btn-text-top" type="text" name="nome" placeholder="Digite o nome"><br><br>
			<input name="SendPesqUser" type="submit" value="." class="btn-buscar-top">
		</form><br><br>
		</div>!-->

	<?php
	$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
	if ($SendPesqUser) {
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$result_usuario = "SELECT * FROM tbldados WHERE nome LIKE '%$nome%'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
			echo "ID: " . $row_usuario['id'] . "<br>";
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "E-mail: " . $row_usuario['email'] . "<br>";
			echo "CPF: " . $row_usuario['cpf'] . "<br>";
			echo "Senha: " . $row_usuario['senha'] . "<br>";
			echo "Localidade: " . $row_usuario['localidade'] . "<br>";
			echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
			echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
		}
	}
	?>
</body>

</html>