<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}

include_once 'header_restrito.php';
include_once 'Conexao.php';

$sql = "SELECT nome FROM usuarios";
$query = mysqli_query($con, $sql);
$fetch = mysqli_fetch_assoc($query);
?>
<main>
<div class="container">
	<form action="sql_posts.php" class="form-group" method="post">
		<label for="autor">Autor:</label>
		<input type="text" class="form-control" name="autor" id="autor" value="<?= $fetch['nome']?>">
		<label for="titulo">Titulo:</label>
		<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Seu titulo aqui.">
		<label for="post">Post:</label>
		<textarea class="form-control" name="post" id="post" cols="50" rows="10"></textarea>
		<button class="btn btn-primary">Enviar</button>
	</form>
</div>
</main>

<?php include_once 'footer.php'; ?>