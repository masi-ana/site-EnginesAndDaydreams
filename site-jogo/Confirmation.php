<?php
	require "Conexao.php";
    require "Usuario.class.php";
        
        // Taking all 5 values from the form data(input)
        $nome =  $_POST['nome'];
        $email = $_POST['email'];
        $senha =  $_POST['senha'];
        $senha_rpt = $_POST['senha_rpt'];
        
        $u = new Usuario();

        if ($u->login($email,$senha) == true){ 
            echo "<script>alert('Este login já está cadastrado');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
            }
        else{
        $sql1 = "INSERT INTO sitejogo (nome, email, senha, senha_rpt)  VALUES ('$nome', 
        '$email','$senha','$senha_rpt')";
        $sql1 = $conn->prepare($sql1);
        $sql1->execute();

        $message = "Bem vindo(a) $nome!";
        }



?>

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
<body class="confirmation">   
        <h1 class="texto"><center><?php echo($message); ?> </center></h1>
        <p class="texto"> <center> Fique de olho no seu email para mais atualizações sobre 
        o mundo pós-apocaliptico de 016 </center></p>


        <a class="registerbtn" href="Home.html"> entrar </a>

    </body>

</html>