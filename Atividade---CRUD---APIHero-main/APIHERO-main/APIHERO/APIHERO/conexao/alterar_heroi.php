<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-alterar'])) {
		
		$Name = mysqli_escape_string($connection,$_POST['Name']);
		$Category = mysqli_escape_string($connection,$_POST['Category']);
		$mark = mysqli_escape_string($connection,$_POST['mark']);
		$price = mysqli_escape_string($connection,$_POST['price']);
		$inventory = mysqli_escape_string($connection,$_POST['inventory']);
		$Cod = mysqli_escape_string($connection,$_POST['Cod']);

		$sql = "UPDATE tbherois SET Name= '$Name', Category = '$Category', mark = '$mark', price = '$price',  WHERE Cod = '$Cod'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
