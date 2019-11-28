<?php 

$url = basename($_SERVER['PHP_SELF']);
?>
<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a <?php if($url == 'index.php'){echo "class = 'active'";}?>href="index.php">Inicio</a></li>
						<li><a <?php if($url == 'sobre.php'){echo "class = 'active'";}?>href="sobre.php">Sobre nós</a></li>
						<li><a <?php if($url == 'servicos.php'){echo "class = 'active'";}?>href="servicos.php">Serviços</a></li>
						<!-- <li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="projects.html">Projects</a>
								<a class="dropdown-item" href="elements.html">Elements</a>
							</div>
						</li> -->
						<!-- <li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								Blog
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="blog-home.html">Blog</a>
								<a class="dropdown-item" href="blog-single.html">Blog Details</a>
							</div>
						</li> -->
						<li><a <?php if($url == 'contato.php'){echo "class = 'active'";}?>href="contato.php">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End Header Area -->
