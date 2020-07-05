<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Webpleno ADS</title>
	<!-- Link do bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Css próprio -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Fontes e icones -->
	<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js">

</head>
<body>
	<header>
		<div class="topo">
			<div class="container">
				<div class="row" id="topo">
					<div class="col-md-8 d-flex flex-direction-row">
						<h1>Blog do Rafael</h1>					
					</div>
					<div class="col-md-4">
						<h3>O Senhor Jesus vem!</h3>
					</div>
				</div>
			</div>	
		</div>
		<nav class="navbar navbar-expand-lg" id="menu">
			<a class="navbar-brand" href="index.php">
				<img src="assets/images/logo.png" alt="" class="img-fluid" width="60">
				
			</a>			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#botao-toggle" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<!-- <span id="icone-botao" class="navbar-toggler-icon"></span> -->
				<img src="assets/images/botao-icone.png" width="30" alt="" class="img-fluid">
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="restrito.php">Painel</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="inserir_post.php">Inserir um Post</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="deleta_post.php">Deletar um Post</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="atualiza_post.php">atualizar um Post</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
							</svg>
						Sair</a>
					</li>			
				</ul>			
			</div>
		</nav>
	</header>