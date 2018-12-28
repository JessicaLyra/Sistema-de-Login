	<?php
			include ("conection.php");
			
			/* criar tabela para cadastro
			$formulario = "create table usuarios(
			id int (6) unsigned auto_increment primary key,
			nome varchar (30) not null,
			telefone varchar (30) not null,
			email varchar (30) not null,
			senha varchar (32) not null,
			confsenha varchar (32) not null
			)";	
			
			if ($conecta->query($formulario) === true) {
				echo "Tabela criada com sucesso";
			} else {
				echo "Erro ao criar tabela: ". $conecta->error;
			}	
			
			$conecta->close();*/
			$nome= addslashes ($_POST ['nome']);
			$telefone = addslashes ($_POST ['telefone']);
			$email = addslashes ($_POST ['email']);
			$senha = addslashes ($_POST ['senha']);
			$confsenha = addslashes ($_POST ['confsenha']);
			
			
			$dados = "insert into usuarios (nome, telefone, email, senha, confsenha) values ('$nome', '$telefone', '$email', '$senha', '$confsenha')";
		
			if ($conecta->query($dados) ===true) {
				echo "dados inseridos com sucesso";
			} else {
				echo "Erro: ". $dados . "<br>" . $conecta->error;
			}
			
			$conecta->close();
		?>