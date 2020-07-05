<?php
require_once 'Conexao.php';
require_once 'header.php';

$sql = "SELECT * FROM posts";
$query = mysqli_query($con, $sql);

?>
<main>
	<div class="container">
		<div class="row" id="linha-topo">
			<div class="col-md-8">
				<h1 class="display-3">Programação e Tecnologia</h1>
				<h3>Tudo sobre programação e novidades tecnológicas.</h3>
			</div>
			<div class="col-md-4">
				<a href="https://www.bibliaonline.com.br/acf/jl/2/23+" target="_blank">
					<img src="assets/images/texto-biblia.jpg" alt="imagem com um texto bíblico escrito em joel 2:23" class="img-fluid">
				</a>
			</div>
			
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8" id="esquerda">
				<section>	
					<?php while ($fetch = mysqli_fetch_assoc($query)) { ?>
						<div class="container">
							<div class="post">
								<img src="assets/images/rafael.jpg" alt="foto do autor rafael" width="100" height="100" class="img-fluid" id="thumbinail">
								<h4>Por: <?= $fetch['autor'] ?></h4>
								<h2><?= $fetch['titulo'] ?></h2>
								<p><?= $fetch['post'] ?></p><hr>	
							</div>
						</div>
					<?php } ?>
				</section>
			</div>
			<div class="col-md-4" id="direita">
				<div  id="menu-lateral">
					<h3>
						Links Úteis:
					</h3>
					<nav class="navbar">
						<ul class="nav">
							<li class="nav-item">
								<a href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide" class="nav-link" target="_blank">Guia javascript</a>
							</li>
							<li class="nav-item">
								<a href="https://coolors.co/palettes/trending" class="nav-link" target="_blank">Paleta de Cores</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" target="_blank">link</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" target="_blank">link</a>
							</li>
						</ul>
					</nav>
				</div>				
			</div>
		</div>
	</div>

</main>

<?php require_once 'footer.php'; ?>
