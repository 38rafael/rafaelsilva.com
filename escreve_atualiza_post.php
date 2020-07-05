<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}
require_once 'Conexao.php';
require_once 'header_restrito.php';

if (isset($_POST['id'])) {

	$id = $_POST['id'];

	$sql = "SELECT * FROM posts WHERE id= '$id'";
	$query = mysqli_query($con, $sql);
	$fetch = mysqli_fetch_assoc($query);
}

?>

<div class="container">
	<div class="col-md ">
		<form action="sql_atualiza_post.php" class="form-group" method="post">
		<input type="hidden" name="id" value="<?= $fetch['id'] ?>">
		<label for="autor">Autor:</label>
		<input type="text" class="form-control" name="autor" id="autor" value="<?= $fetch['autor']?>">
		<label for="titulo">Titulo:</label>
		<input type="text" class="form-control" id="titulo" name="titulo" value="<?= $fetch['titulo']?>">
		<label for="post">Post:</label>
		<textarea class="form-control" name="post" id="post" cols="50" rows="10" value=""><?= $fetch['post']?></textarea>
		<button class="btn btn-primary">Enviar</button>
	</form>
	</div>
</div>
<?php include 'footer.php'; ?>