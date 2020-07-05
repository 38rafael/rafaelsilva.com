<?php 
include 'Conexao.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];

	$sql = "DELETE FROM posts WHERE id = '$id'";
	$query = mysqli_query($con, $sql);
	header("Location: deleta_post.php");
}
?>