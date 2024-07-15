<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN RLIX</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

	<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

body{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: #fff;
	background-size: cover;
	background-position: center;
	box-shadow: 0px 3px 10px #464646
}

.wrapper{
	width: 420px;
	background: transparent;
	border: 2px solid rgba(255, 255, 255, .2);
	backdrop-filter: blur;
	box-shadow: 0px 3px 10px #464646;
	color: #000;
	border-radius: 10px;
	padding: 30px 40px;
}

.wrapper h1{
	font-size: 36px;
	text-align: center;
}

.wrapper .input-box{
	position: relative;
	width: 100%;
	height: 50px;
	margin: 30px 0;
}

.input-box input{
	width: 100%;
	height: 100%;
	background: transparent;
	border: none;
	outline: none;
	border: 2px solid rgba(255, 255, 255, .2);
	border-radius: 40px;
	font-size: 16px;
	color: #000;
	padding: 20px 45px 20px 20px;
	box-shadow: 0px 3px 10px #464646
}

.input-box input::placeholder{
	color: #000;
}

.input-box i{
	position: absolute;
	right: 20px;
	top: 50%;
	transform: translateY(-50%);
	font-size: 20px;
}

.wrapper .inputSubmit{
	width: 100%;
	height: 45px;
	background: #000;
	border: none;
	outline: none;
	border-radius: 40px;
	box-shadow: 0px 3px 10px #464646;
	cursor: pointer;
	font-size: 16px;
	color: #fff;
	font-weight: 600;
}

.wrapper .register-link{
	font-size: 14.5px;
	text-align: center;
	margin-top: 20px;
}

.register-link p a{
	color: #48D1CC;
	text-decoration: none;
	font-weight: 600;
}

.register-link p a:hover {
	text-decoration: underline;
}

.logo{
	margin-top: 10%;
	display: flex;
	padding: 0 0 0 35%;
}

	</style>
</head>
<body>

	<div class="wrapper">
			<h1>Login</h1>
			<form action="testLogin.php" method="POST">
			<div class="input-box">
				<input type="text"  name="nomeUsuario" placeholder="Nome de usuário" required>
				<i class='bx bxs-user'></i>
			</div>
			
			<div class="input-box">
				<input type="password" name="senha" placeholder="Senha" required>
				<i class='bx bxs-lock-alt'></i>
			</div>

			<button class="inputSubmit" type="submit" name="submit" value="enviar">Login</button>

			<div class="register-link">
				<p>Não tem uma conta? <a href="cadastre-se.php"> Registre-se </a> </p>
			</div>

			<div class="logo">
				<img src="imagens/logo.png">
			</div>
		</form>
	</div>
</body>
</html>