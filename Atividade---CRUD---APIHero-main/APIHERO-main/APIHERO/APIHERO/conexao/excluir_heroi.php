<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-excluir'])) {
				
		$Cod = mysqli_escape_string($connection,$_POST['Cod']);

		$sql = "DELETE FROM tbherois WHERE ProCod = '$Cod'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Produto excluido com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../index.php');	
		}
	}
