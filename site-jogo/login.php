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

		<main id="loginMain">
			<form id="login" method="post" action="Confirmation2.php">
				<section class="principal">

				
				<div class="container">

				
				<h1 class="texto"><center>Entre e conheça a história de 016 </center></h1>
				


				<div class="conteudo">
					<label for="email"><b>Email</b></label>
					<input type="email" placeholder="Digite seu email" name="email" id="email" >
				</div>

				<div class="conteudo">
					<label for="senha"><b>Senha</b></label>
					<input type="password" placeholder="Digite sua senha" name="senha" id="senha" >
				</div>

					<button type="submit" action="Confirmation2.php" class="registerbtn">
					<img class="engrenagens" src="assets/engrenagem1.png">	
					Login
					<img class="engrenagens" src="assets/engrenagem1.png">
					</button>
		
				
				</div>


				</section>
					<p class="enterbtn">Deseja cadastrar? <a href="Index.php">Cadastrar</a>.</p>
				</div>
			</form> 
		</main>
		
	</body>
</html>




