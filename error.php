<?php 

include_once('classes/link.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  	<!-- Config -->
    <meta charset="utf-8">    
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Alisson Custodio">
    <meta name="robots" content="index,nofollow">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" name="viewport" />
    <meta name="keywords" content="site, progamação, empresarial, blog, criar, desenvolver, barato, rapido, hospedagem, onepage, uma pagina, Wordpress, Html, css,">
    <meta name="description" content="Adquira seu site para alavancar sua empresa!">
    <title><?php $title ?> | Pagina não encontrada.</title>
    <!-- Browser Color -->
    <meta name="theme-color" content="#0084b8" />
    <meta name="msapplication-navbutton-color" content="#0084b8">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0084b8">
    <!-- Font -->
    <link rel="stylesheet" href="<?php $site_link ?>/css/styles.css">
    <link rel="stylesheet" href="<?php $site_link ?>/css/error.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <!-- Carousel -->
	<link rel="stylesheet" href="<?php $site_link ?>/style.css">
    <link rel='stylesheet' href='<?php $site_link ?>/css/slick.css'>
	<link rel='stylesheet' href='<?php $site_link ?>/css/slick-theme.css'>
    <!-- Font h1 -->
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <!-- Font h2/h3 -->
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  </head>
	<body>
	<header id="menu" class="menu-active" data-scroll>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <a id="no-click" href="<?php $site_link ?>/#home" class="logo" data-scroll>Alisson Custodio</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a id="no-click" href="#home" data-scroll>Home</a></li>
          <li class="menu-item"><a id="no-click" href="<?php $site_link ?>/index.html#about" data-scroll>Sobre</a></li>
          <li class="menu-item"><a id="no-click" href="<?php $site_link ?>/index.html#projects" data-scroll>Serviços</a></li>
          <li class="menu-item"><a id="no-click" href="<?php $site_link ?>/index.html#exemples" data-scroll>Portifolio</a></li>
          <li class="menu-item"><a id="no-click" href="<?php $site_link ?>/index.html#contact" data-scroll>Contato</a></li>
        </ul>
      </nav>
    </header>
	<div id="content-form">
		<div id="form">
			<div id="title">
				<h1>Página não encontrada!</h1>
				<h2>Desculpe, não encontramos a página que você procura.</h2>
				<img src="<?php $site_link ?>/img/404.png">
			</div>
      <div id="error-center">
  			<div id="finder1">
  				<h3>Oque acontenceu?</h3>
  				<p>&nbsp; Voce tentou acessar algo que não tem acesso, ou então colocou um link errado ao acessar.</p>
  				<p>&nbsp; Por favor verifique se o link que voce tentou acessar realmente existe, se voce tem permissão para acessa-lo e entrar novamente.</p> 
  				<p>&nbsp; Caso o erro persista voce pode entrar em contato com nosso suporte clicando aqui.</p>
  			</div>
  			<div id="finder2">
  				<h3>Oque voce esta procurando?</h3>
  				<a href="<?php $site_link ?>/index.html" class="finder2">Pagina incial</a>
  				<a href="<?php $site_link ?>/index.html#exemples" class="finder2">Portifolio</a>
  				<a href="<?php $site_link ?>/index.html#contact" class="finder2">Contato</a>
  				<a href="<?php $site_link ?>/index.html#projects" class="finder2">Serviços</a>
  				<a href="<?php $site_link ?>/index.html#home" class="finder2">Area do contratante</a>
  				<div id="login"><a href="<?php $site_link ?>/index.html">Voltar</a></div>
  			</div>
      </div>
		</div>
	</div>

	<div id="footer">
		© 2019 Alisson Custodio - Todos os direitos reservados.<br>
	</div>
	<!-- Font Icons start-->
    <script src="<?php $site_link ?>/js/responsive-nav.js"></script>
    <script src="https://kit.fontawesome.com/e783a8e426.js" crossorigin="anonymous"></script>
    <!-- Menu -->
    <script src="<?php $site_link ?>/js/fastclick.js"></script>
    <script src="<?php $site_link ?>/js/scroll.js"></script>
    <script src="<?php $site_link ?>/js/fixed-responsive-nav.js"></script>
    <!-- Carousel -->
	<script src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
	<script src='https://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js'></script>
	<script src="<?php $site_link ?>/script.js"></script>
</body>
</html>