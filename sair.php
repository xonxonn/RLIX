<?php

	session_start();
	unset($_SESSION['nomeUsuario']);
	unset($_SESSION['senha']);
	header('Location: index.php');

?>