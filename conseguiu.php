<?php
	//conexao
	require_once 'conection.php';
	//sessão
	session_start();
	
	//dados
	$id = $_SESSION['id_usuario'];
	$sql = "SELECT * FROM usuarios WHERE id ='$id'";
	$resultado = mysqli_query($conecta, $sql);
	$dados = mysqli_fetch_array ($resultado);
?>
<!DOCTYPE html>
<html lang ="pt-br">
	<head>
		<meta charset="utf-8">
		<Title>Home</title>
		<link rel="stylesheet" href="CSS/style.css">
	</head>
	<body>
		<h1>Você conseguiu logar <?php echo $dados['nome'];?></h1>
	</body>
</html>	