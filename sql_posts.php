<?php 
session_start();
require_once 'Conexao.php';

if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
	
	$autor  = $_POST['autor'];
	$titulo = $_POST['titulo'];
	$post   = $_POST['post'];

	$sql = "INSERT INTO posts (autor, titulo, post) VALUES ('$autor', '$titulo', '$post')";
	$query = mysqli_query($con, $sql);

	header('Location: inserir_post.php');
}