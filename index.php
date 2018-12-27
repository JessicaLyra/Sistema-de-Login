<!DOCTYPE html>
<html lang ="pt-br">
	<head>
		<meta charset="utf-8">
		<Title>Projeto Login</title>
		<link rel="stylesheet" href="CSS/style.css">
	</head>
	<body>
		<div id="corpo-form">
			<h1>Entrar</h1>
			<form method="POST" action="processa.php">
				<input type="email" name="email" placeholder="Usuário"></input>
				<input type="password" name="senha" placeholder="Senha"></input>
				<input type="submit" value="Acessar"></input>
				<a href="cadastrar.php">Ainda não é inscrito? <strong>Inscreva-se</strong></a>
			</form>
		</div>	
	</body>
</html>