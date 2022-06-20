<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>	
		
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
		<a href="index.php" type="button" class="box1">Cadastrar</a><br>
		<a href="listar.php">Listar</a><br>
		<h1 class="text" style="text-align: center;">Listar Usuário</h1>
<div class="box">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM tbldados LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "ID: " . $row_usuario['id'] . "<br>"; 
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "E-mail: " . $row_usuario['email'] . "<br>";
			echo "cpf: " . $row_usuario['cpf'] . "<br>";
			echo "senha: " . $row_usuario['senha'] . "<br>";
			echo "localidade: " . $row_usuario['localidade'] . "<br>";
			echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar<a/><br>";
			echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Excluir<a/><br><hr>";

		}

		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM tbldados";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois 
		$max_links = 2;
		echo "<a href='listar.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='listar.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
</div>

	</body>
</html>