<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$name= mysqli_escape_string($connection,$_POST['name']);
		$Category = mysqli_escape_string($connection,$_POST['Category']);
		$mark = mysqli_escape_string($connection,$_POST['mark']);
		$price  = mysqli_escape_string($connection,$_POST['price']);
		$inventory = mysqli_escape_string($connection,$_POST['inventory']);

		$sql = "INSERT INTO tbherois(nome,categoria,marca,preco,estoque)
		VALUES('$name','$Category','$mark','$price','$inventory')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
