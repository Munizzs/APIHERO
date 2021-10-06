<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Adicione o Heroi</h3>
			
			<form action="conexao/criar_heroi.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="name" id="name">
					<label for="nome">Nome do Heroi</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="Category" id="Category">
					<label for="sobrenome">Nome real do heroi</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="mark" id="mark">
					<label for="email">Avaliação</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="price" id="price">
					<label for="idade">Afiliação da equipe</label>
				</div>

			

				<button type="submit" name="btn-cadastrar" class="btn pink darken-1">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Herói</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>