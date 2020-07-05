<?php 
include 'Conexao.php';

if ($_POST['autor']) {
	$id = $_POST['id'];
	$autor = $_POST['autor'];
	$titulo = $_POST['titulo'];
	$post = $_POST['post'];

	$sql = "UPDATE posts SET autor='$autor', titulo='$titulo', post='$post' WHERE id= '$id'";
	$query = mysqli_query($con, $sql);
	header('Location: atualiza_post.php');
}