<?php
	require "Conexao.php";
    require "Usuario.class.php";
        
        // Taking all 5 values from the form data(input)
        $email = $_POST['email'];
        $senha =  $_POST['senha'];

        
        $u = new Usuario();

        if ($u->login($email,$senha) == true){
            $sql2 = "SELECT nome FROM sitejogo WHERE email = :email";
            $sql2 = $conn->prepare($sql2);
            $sql2->bindValue("email",$email);
            $sql2->execute();
            $tabela = $sql2->fetch(PDO::FETCH_ASSOC);

            $message = 'Bem vindo(a) de volta, '. $tabela['nome'];
        }
        else{echo "<script>alert('Este login ou senha não está cadastrado');</script>";
            echo "<script>window.location.href = 'Index.php';</script>";}



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
<body class="confirmation" >   
        <h1><center><?php echo($message); ?> </center></h1>
        <p class="texto"> <center> Fique de olho no seu email para mais atualizações sobre 
        o mundo pós-apocaliptico de 016 </center></p>


        <a class="registerbtn" href="Home.html"> entrar </a>

    </body>

</html>