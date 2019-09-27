<?php $url = bloginfo('url').'/wordpress' ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta tag obrigatória -->
	<meta <?php bloginfo('charset')?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Yasmim Morais de Vasconcelos">
	<title><?php bloginfo('title');?></title>
	<!-- Link para a folha de estilo -->
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	
	<!-- Favicon  -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/assets/img/favicon.png">
	
	<!-- Links das fontes: Roboto e Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">

	<!-- scripts -->
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/script.js"></script>
	
	<!-- Link Font Awesome - ícones -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Menu -->
	<header class="mb-4 pb-5">
		<nav class="navbar navbar-expand-md navbar-light fixed-top bg-white border">

		  <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		<a class="navbar-brand ml-5 pl-4" href="<?php bloginfo('template_url');?>/index/"><img src="<?php bloginfo('template_url');?>/assets/img/logo-menu.jpg" style="width: 120px;" alt=""></a>		 

		  <div class="pl-5 collapse navbar-collapse m-3" id="navbarTogglerDemo03">
			
		    <ul class="navbar-nav mt-2 mt-lg-0">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo $url; ?>">Início</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo $url; ?>/conheca-nos/">Conheça-nos</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="<?php echo $url; ?>/noticias/">Notícias</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo $url; ?>/associados/">Associados</a>
		      </li>
		     <!--  <li class="nav-item">
		        <a class="nav-link" href="<?php echo $url; ?>/produtos-servicos/">Produtos/Serviços</a>
		      </li> -->
		      <li class="nav-item mb-2">
		        <a class="nav-link" href="<?php echo $url; ?>/fale-conosco/">Fale conosco</a>
		      </li>
		    </ul>
			

			<!-- <a class="btn btn-outline-success btn-lg pointer" href="#" role="button">Área do Associado</a> -->
		    <!-- <button type="submit" class="btn btn-menu pl-4 pr-4 mr-5"><a href="#" style="color: #014c25;">Área do Associado</a></button> -->
		  </div>

		   
		</nav>

		</header>
