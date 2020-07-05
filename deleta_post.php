<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}
require_once 'Conexao.php';
require_once 'header_restrito.php';

$sql = "SELECT * FROM posts";
$query = mysqli_query($con, $sql);

?>

<div class="container">
	<div class="col-md-6 ">	
		<?php while ($fetch = mysqli_fetch_assoc($query)) { ?>
			<div class="form-group-row">
				<form class="form-group" action="sql_deleta_post.php" method="post">
					<label for="id">Id:</label>
					<input class="form-control" type="text" placeholder="ID" name="id" id="id" value="<?= $fetch['id'] ?>">
					<label for="autor">Autor:</label>
					<input class="form-control" type="text" placeholder="Autor" name="autor" id="autor" value="<?= $fetch['autor'] ?>">
					<label for="titulo">Titulo:</label>
					<input class="form-control" type="text" placeholder="Titulo" name="titulo" id="titulo" value="<?= $fetch['titulo'] ?>">
					<button class="btn btn-danger btn-lg">Deletar</button>
				</form>
			</div>
			<hr>
		<?php } ?>		
	</div>
</div>
<?php include 'footer.php'; ?>