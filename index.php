<?php 
	
//se existir o indice 'entrar' na super global POST
	if (isset($_POST['entrar'])):
		$erros = array ();
		$login = mysqli_escape_string($conecta, $_POST['email']);
		$senha = mysqli_escape_string($conecta, $_POST['senha']);
		
		if (empty($login) or empty($senha)) :
			$erros [] = "<li>o campo login e senha precisam ser preenchidos</li>";
			
		endif;
	
	
	?>

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
			
			<?php
				if (!empty($erros)):
					foreach($erros as $erro):
						echo $erro;
					endforeach;
				endif;
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="email" name="email" placeholder="Usuário"></input>
				<input type="password" name="senha" placeholder="Senha"></input>
				<input type="submit" value="Acessar" name="entrar"></input>
				<a href="cadastrar.php">Ainda não é inscrito? <strong>Inscreva-se</strong></a>
			</form>
		</div>	
	</body></html>