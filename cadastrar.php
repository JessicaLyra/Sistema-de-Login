<!DOCTYPE html>
<html lang ="pt-br">
	<head>
		<meta charset="utf-8">
		<Title>Projeto Login</title>
		<link rel="stylesheet" href="CSS/style.css">
	</head>
	<body>
		<div id="corpo-form-cad">
			<h1>Cadastrar</h1>
			<form method="POST" action ="dados_cadastro.php">
				<input type="text" name="nome" placeholder="Nome Completo" maxlength="30"></input>
				<input type="text" name="telefone" placeholder="Telefone" maxlength="30"></input>
				<input type="email" name="email" placeholder="Usuario" maxlength="40"></input>
				<input type="password" name="senha" placeholder="Senha" maxlength="15"></input>
				<input type="password" name="confsenha" placeholder="Confirmar Senha"></input>
				<input type="submit" value="Confirmar Cadastro"></input>
			</form>
		</div>	
		
		
	</body>
</html>