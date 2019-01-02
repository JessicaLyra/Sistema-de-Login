<!DOCTYPE html>

<?php
	//conexao com o banco de dados
	require_once 'conection.php'; 
	// trabalhar com sessão precisamos chamar
	session_start();
	
	if (isset($_POST['entrar'])):
		$erros = array(); //se tiver algum erro iremos atribuir a esse array
		
		//função para filtrar os dados
		$login = mysqli_escape_string($conecta, $_POST['email']);
		$senha = mysqli_escape_string($conecta, $_POST['senha']);
		
		//verificar se os campos vieram vazios
		if (empty($login) or empty($senha)):
			$erros[]="<li>O campo Login/Senha precisa ser preenchido</li>";
		else : 
			$sql = "SELECT email FROM usuarios WHERE email = '$login'";
			$resultado = mysqli_query($conecta, $sql);
			
			if(mysqli_num_rows($resultado) > 0):
				$senha = md5($senha);
				$sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
				$resultado = mysqli_query ($conecta, $sql);
				
				if (mysqli_num_rows($resultado) == 1):
					$dados = mysqli_fetch_array($resultado);//converte a variavel resultado em um array e atribui a variavel dados
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					header('Location: conseguiu.php');
				else:
				 $erros[]="<li>Usuário e senha não conferem</li>";
				endif;
			else:
				$erros[] = "<li>Usuário Inexistente</li>";
			endif;
		endif;
	endif;
	
?>


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
			if(!empty($erros)):
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
	</body>
</html>