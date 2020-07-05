<?php
require_once 'Conexao.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
	
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = "SELECT * FROM usuarios";
	$query = mysqli_query($con, $sql);
	$fetch = mysqli_fetch_assoc($query);
	if ($fetch['senha'] === $senha) {
		$usuario = $fetch['nome'];
		session_start();
		$_SESSION['usuario'] = $usuario;
		header('Location: restrito.php');
	}else {
		header('Location: login.php');
	}
}

?>