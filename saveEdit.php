<?php
	include_once('config.php');

	if (isset($_POST['update'])) 
	{
		$id = $_POST['id'];
		$descricaoli = $_POST['descricaoli'];
        $categoriali = $_POST['categoriali'];
        $datapesquisali = $_POST['datapesquisali'];
        $precocustoli = $_POST['precocustoli'];
        $fornli = $_POST['fornli'];
        $observacoesli = $_POST['observacoesli'];
        $linkli = $_POST['linkli'];

        $sqlUpdate ="UPDATE links SET descricaoli='$descricaoli',categoriali='$categoriali',datapesquisali='$datapesquisali',precocustoli='$precocustoli',fornli='$fornli',observacoesli='$observacoesli',linkli='$linkli' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
	}

	header('Location:catalogo.php');
?>