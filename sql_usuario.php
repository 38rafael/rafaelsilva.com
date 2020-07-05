<?php
session_start();
require_once 'Conexao.php';


if (isset($_POST['email']) && !empty($_POST['email'])) {

	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	$query = mysqli_query($con, $sql);

	header('Location: inserir_usuario.php');
}
