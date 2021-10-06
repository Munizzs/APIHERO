<?php 
	require_once 'conexao/conexao.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbherois WHERE cod = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Herói</h3>
			
			<form action="conexao/alterar_heroi.php" method="POST">

				<input type="hidden" name = "Cod" value="<?php echo $dados['Cod']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="Name" id="Name" value="<?php echo $dados['Name']; ?>">
					<label for="nome">Nome-Heroi</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="Category" id="Category" value="<?php echo $dados['Category']; ?>"
					>
					<label for="sobrenome">Nome-real</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="mark" id="mark" value="<?php echo $dados['mark']; ?>">
					<label for="email">Avaliação</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="price" id="price" value="<?php echo $dados['price']; ?>">
					<label for="idade">Afiliação da equipe</label>
				</div>

				
				<button type="submit" name="btn-alterar" class="btn purple darken-4">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de herois</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>