<?php
	session_start();
	//print_r($_SESSION);
	if ((!isset($_SESSION['nomeUsuario']) == true) and (!isset($_SESSION['senha']) == true)) 
	{
		unset($_SESSION['nomeUsuario']);
		unset($_SESSION['senha']);
		header('Location: login.php');
	}

	$logado = $_SESSION['nomeUsuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RLIX</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
	<style>
		*{
			padding: 0;
			margin: 0;
			font-family: 'Inter', sans-serif;
		}

		body{
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(226,226,244,1) 0%, rgba(111,230,255,1) 100%, rgba(0,212,255,1) 100%);
			text-align: center;
		}

		header{
			background-color: #fff;
			box-shadow: 0px 3px 10px #464646;
		}

		.nav-bar{
			display: flex;
			justify-content: space-between;
			padding: 1.5rem 6rem;
		}

		.logo{
			display: flex;
			align-items: center;
		}

		.nav-list{
			display: flex;
			align-items: center;
		}

		.nav-list ul{
			display: flex;
			justify-content: center;
			list-style: none;
		}

		.nav-item{
			margin: 0 15px;
		}

		.nav-link{
			text-decoration: none;
			font-size: 1.15rem;
			color: #000;
			font-weight: 400;
		}

		.login-button{
	    	margin-top: auto;
	    	margin-bottom: auto;
		}

		.login-button a{
			text-decoration: none;
			color: #fff;
			font-weight: 500;
			font-size: 1.1rem;
		}

		.mobile-menu-icon{
			display: none;
		}

		footer {
      	position: absolute;
      	bottom: 0;
      	left: 0;
      	width: 100%;
      	color: #000;
      	text-align: center;
    	}


	</style>

</head>

<body>
	<header>
		<nav class="nav-bar">
			<div class="logo">
				<img src="imagens/logo.png">
			</div>
			
			<div class="nav-list">
				<ul>
					<li class="nav-item"><a href="catalogo.php" class="nav-link">Catálogo</a></li>
				</ul>
			</div>

			<div class="login-button">
				<button style="background-color:#000; border-color:none; border:none; padding:10px; border-radius:5px"><a href="sair.php">Sair</a></button>
			</div>

		</nav>
	</header>
	<br><br><br>
	<?php

		echo"<h1> Bem vindo $logado </h1>";
	?>

	<footer>
			<p>Universidade Luterana do Brasil - PROJETO TECNOLOÓGICO EM ANÁLIE E DESENVOLVIMENTO DE SISTEMAS - <span> RLIX REDIRECIONADOR DE LINKS INTELIGENTE - JOÃO PEDRO DE OLIVEIRA NUNES 2024/01</span></p>
	</footer>
</div>
</body>
</html>

