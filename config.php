<?php
	$dbHost = 'localHost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'login';

	$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

	//if($conexao ->connect_errno) 
	//{
		//echo "erro";
	//}

	//else 
	//{
		//echo "conexao efetuada com sucesso!";
	//}
?>