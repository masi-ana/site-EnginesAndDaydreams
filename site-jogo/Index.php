<?php  require "Conexao.php";  ?>

<!DOCTYPE html>    
	<html lang="pt-br">    

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
			<title> Engines and Daydreams </title>
			
			<link rel="stylesheet" href="stylesheet/style_login.css">
			<link rel="icon" type="image/x-icon" href="assets/favicon.ico">    
		</head>    
		
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Krona+One&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
		</style>

		<body>    

		<main>	
			<form id="cadastrar" action="Confirmation.php" method="post">
				<section class="principal">

				
				<div class="container">

				<div class="conteudo">
					<label for="nome"><b>Nome</b></label>
					<input type="text" placeholder="Digite seu nome" name="nome" id="nome" required>
				</div>

				<div class="conteudo">
					<label for="email"><b>Email</b></label>
					<input type="email" placeholder="Digite seu Email" name="email" id="email" required>
				</div>

				<div class="conteudo">
					<label for="senha"><b>Senha</b></label>
					<input type="password" placeholder="Digite sua senha" name="senha" id="senha" required>
				</div>
				
				<div class="conteudo">
					<label for="senha_rpt"><b>Repita Senha</b></label>
					<input type="password" placeholder="Repita sua senha" name="senha_rpt" id="senha_rpt" required>
				</div>


					<button type="submit" action="Confirmation.php" class="registerbtn">
					<img class="engrenagens" src="assets/engrenagem1.png">	
					Cadastrar
					<img class="engrenagens" src="assets/engrenagem1.png">
					</button>
				</div>

				<h1 class="texto"><center>Faça seu cadastro para ter o acesso antecipado!</center></h1>

				</section>

				<div class="enterbtn">
					<p>Já é cadastrado? <a href="login.php">Entrar</a>.</p>
				</div>
				</form> 
		</main>


		</body>
	</html>




