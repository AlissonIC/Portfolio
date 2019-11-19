
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
    <title><?php $title ?> | Controle.</title>
    <!-- Browser Color -->
    <meta name="theme-color" content="#0084b8" />
    <meta name="msapplication-navbutton-color" content="#0084b8">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0084b8">
    <!-- Font -->
    <link rel="stylesheet" href="<?php $site_link ?>/css/styles.css">
    <link rel="stylesheet" href="style.css">
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
  <div id="content">
    <div id="me-left">
      <h1>Bem vindo ao painel de controle.</h1>
    </div>
    <div id="me-right">
      <div id="img">
        <img src="../../img/cadastro.png" id="profile" style="width: 150px; height: 150px; padding-top: 20px;">
        <h1>Alisson Custodio</h1>
        <a href=""><h3>Alterar dados da conta.</h3></a>
      </div>
      <div id="options">
        <h3>Monitoramento:</h3>
        <div class="btns">
          <div class="btn-options"><a href="">Visitas</a></div>
          <div class="btn-options"><a href="">Desempenho</a></div>
          <div class="btn-options"><a href="">Emails</a></div>
          <div class="btn-options"><a href="">Contato</a></div>
        </div>

        <h3>Financeiro:</h3>
        <div class="btns">
          <div class="btn-options"><a href="">Vendas</a></div>
          <div class="btn-options"><a href="">Controle</a></div>
          <div class="btn-options"><a href="">Comparações</a></div>
          <div class="btn-options"><a href="">Promover meu site</a></div>
        </div>

        <h3>Suporte:</h3>
        <div class="btns">
          <div class="btn-options"><a href="">Ordem de serviços</a></div>
          <div class="btn-options"><a href="">Upgrade</a></div>
          <div class="btn-options"><a href="">Emails</a></div>
        </div>

        <h3>Outros:</h3>
        <div class="btns">
          <div class="btn-options"><a href="">Dicas</a></div>
          <div class="btn-options"><a href="">Marketing</a></div>
          <div class="btn-options"><a href="">Duvidas</a></div>
          <div class="btn-options"><a href="">Feedback</a></div>
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