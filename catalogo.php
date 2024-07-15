<?php
	session_start();
	include_once('config.php');
	//print_r($_SESSION);
	if ((!isset($_SESSION['nomeUsuario']) == true) and (!isset($_SESSION['senha']) == true)) 
	{
		unset($_SESSION['nomeUsuario']);
		unset($_SESSION['senha']);
		header('Location: login.php');
	}

	$logado = $_SESSION['nomeUsuario'];
	if (!empty($_GET['search'])) 
	{
		$data = $_GET['search'];
		$sql = "SELECT * FROM links WHERE id LIKE '%$data%' or descricaoli LIKE '%$data%' or categoriali LIKE '%$data%' or fornli LIKE '%$data%' ORDER BY id DESC";
	}
	else
	{
		$sql = "SELECT * FROM links ORDER BY id DESC";
	}
	$result = $conexao->query($sql); 

	//print_r($result);

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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="print.css">

	<style>
		*{
			padding: 0;
			margin: 0;
			font-family: 'Inter', sans-serif;
		}

		body{
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(226,226,244,1) 0%, rgba(111,230,255,1) 100%, rgba(0,212,255,1) 100%);
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

    	.titulo{
    		text-align: center;
    	}

    	.box-search{
    		display: flex;
    		justify-content: center;
    		gap: .1%;
    	}

	</style>
		
		<div class="titulo only-print">
		<br><br>
			<h2>Relatório de cadastros</h2>
		</div>
</head>

<body>
	<header class="noprint">
		<nav class="nav-bar">
			<div class="logo">
				<img src="imagens/logo.png">
			</div>
			
			<div class="nav-list">
				<ul>
					<li class="nav-item"><a href="home.php" class="nav-link">Início</a></li>
					<li class="nav-item"><a href="cadastrolink.php" class="nav-link">Cadastrar</a></li>
					<li class="nav-item"><button onclick="window.print()" class="nav-link">Relatório</button></li>
				</ul>
			</div>

			<div class="login-button">
				<button style="background-color:#000; border-color:none; border:none; padding:10px; border-radius:5px"><a href="sair.php">Sair</a></button>
			</div>
		</nav>
	</header>
	<br>
	<div class="noprint">
	<div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>

    </div>
    </div>
	<div class="m-5">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Descrição</th>
					<th scope="col">Categoria</th>
					<th scope="col">Data de pesquisa</th>
					<th scope="col">Preço de custo</th>
					<th scope="col">forncedor</th>
					<th scope="col">Link</th>
					<th scope="col">Observações</th>
					<th scope="col">...</th>
				</tr>	
			</thead>
			<tbody>
				<?php
					while ($user_data = mysqli_fetch_assoc($result)) 
					{
						echo "<tr>";
						echo "<td>".$user_data['id']."</td>";
						echo "<td>".$user_data['descricaoli']."</td>";
						echo "<td>".$user_data['categoriali']."</td>";
						echo "<td>".$user_data['datapesquisali']."</td>";
						echo "<td>".$user_data['precocustoli']."</td>";
						echo "<td>".$user_data['fornli']."</td>";
						echo "<td>".$user_data['linkli']."</td>";
						echo "<td>".$user_data['observacoesli']."</td>";
						echo "<td>

						<a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
						<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  						<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  						<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
						</svg>
						</a>
						<a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
							<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  							<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
  								<path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
						</svg>
						</a>
						</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>

	<footer>
			<p>Universidade Luterana do Brasil - PROJETO TECNOLOÓGICO EM ANÁLIE E DESENVOLVIMENTO DE SISTEMAS - <span> RLIX REDIRECIONADOR DE LINKS INTELIGENTE - JOÃO PEDRO DE OLIVEIRA NUNES 2024/01</span></p>
	</footer>
</div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'catalogo.php?search='+search.value;
    }
</script>
</html>

