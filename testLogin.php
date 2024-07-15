<?php
session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['nomeUsuario']) && !empty($_POST['senha']))
{
	//acessa o sistema
	include_once('config.php');
	$nomeUsuario = $_POST['nomeUsuario'];
	$senha = $_POST['senha'];

	//print_r('Nome de Usuario: ' . $nomeUsuario);
	//print_r('<br>');
	//print_r('Senha: ' . $senha);

	$sql = "SELECT * FROM dados_login WHERE nome_de_usuario = '$nomeUsuario' and senha = '$senha'";

	$result = $conexao->query($sql);

	//print_r($result);
	if (mysqli_num_rows($result) <1) 
	{
		unset($_SESSION['nomeUsuario']);
		unset($_SESSION['senha']);
		header('Location: login.php');
	}
	else
	{
		$_SESSION['nomeUsuario'] = $nomeUsuario;
		$_SESSION['senha'] = $senha;
		header('Location: home.php');
	}
	
}


else
{

	header('location:login.php');
}

?>