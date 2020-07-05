<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}
require_once 'header.php'; 

?>

<div class="container">
	<form action="sql_usuario.php" class="form-group" method="post">
		Nome: 
		<input class="form-control" type="text" name="nome"><br>
		E-mail: 
		<input class="form-control" type="email" name="email"> <br>
		Senha:
		<input class="form-control" type="password" name="senha"> <br>
		<button class="btn btn-primary">Enviar</button>
	</form>
</div>

 <?php require_once 'footer.php' ?>