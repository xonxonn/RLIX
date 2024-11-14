
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RLIX</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estiloRlix.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	
</head>

<body>
	<header>
		<nav class="nav-bar">
			<div class="logo">
				<img src="imagens/novologo2.png">
			</div>
			
			<div class="nav-list">
				<ul>
					<li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
				</ul>
			</div>

		<div class="box">
			<div class="login-button">
				<button><a href="login.php">Entrar</a></button>
			</div>

			<div class="cadastro-button">
				<button><a href="cadastre-se.php">Cadastre-se</a></button>
			</div>
		</div>
		</nav>
	</header>
    
    <div class="container">
    	<div id="carousel-controles" class="carousel slide" data-ride="carousel"><!--Carousel -->
            <div class="carousel-inner"><!--Inner -->
              <div class="carousel-item active">
                <img src="imagensRlix/CR2.png" class="img-fluid">
              </div>

              <div class="carousel-item">
                <img src="imagensRlix/CR1.png" class="img-fluid">
              </div>

              <div class="carousel-item">
                <img src="imagensRlix/CR3.png" class="img-fluid">
              </div>
            </div><!--/Inner -->

            <!-- Controles -->
            <a href="#carousel-controles" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#carousel-controles" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
		</div><!--/Carousel -->
	</div>

    <footer class="footer">
		<div class="containerfooter">
			<div class="row">
				<div class="footer-col">
					<h4>company</h4>
					<ul>
						<li><a href="#">about us</a></li>
						<li><a href="#">our services</a></li>
						<li><a href="#">where to find</a></li>
						<li><a href="#">anitta deposito</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>get help</h4>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">returns</a></li>
						<li><a href="#">anitta deposito</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>anitta deposito?</h4>
					<ul>
						<li><a href="#">same</a></li>
						<li><a href="#">watch</a></li>
						<li><a href="#">anitta deposito</a></li>
						<li><a href="#">isso ai</a></li>
					</ul>
				</div>
				<div class="social-links">
					<h4>nos siga</h4>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="footer-bottom">
					<p>COPYRIGHT &copy;2024 RLIX REDIRECIONADOR DE LINKS INTELIGENTE - DESIGNED BY JOÃO PEDRO DE OLIVEIRA NUNES</p>
				</div>	
		</div>
	</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

