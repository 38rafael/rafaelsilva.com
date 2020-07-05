<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location:login.php');
}
require_once 'Conexao.php';
include_once 'header_restrito.php';
?>
<main>
	
</main>

<?php include_once 'footer.php'; ?>