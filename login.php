<?php 
include 'header.php';
?>
<main>
	<div class="container">
		<form action="verifica_login.php" class="form-group" method="post">
			E-mail: 
			<input class="form-control" type="email" name="email"> <br>
			Senha:
			<input class="form-control" type="password" name="senha"> <br>
			<button class="btn btn-primary">Enviar</button>
		</form>
	</div>
</main>
<?php include 'footer.php'; ?>
