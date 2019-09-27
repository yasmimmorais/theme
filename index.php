
<?php get_header(); ?>

	<!-- Ícone do whatsapp fixo -->
	<a target="_blank" href="https://api.whatsapp.com/send?l=pt&amp;phone=558481214551"><img src="https://i.imgur.com/ryESuZ5.png" style="height:60px; position:fixed; bottom: 25px; right: 25px; z-index:99999;" data-selector="img"></a>


	<!-- <div class="banner-home"></div> -->
	<img class="banner-home-one" src="<?php bloginfo('template_url');?>/assets/img/banner.png">
	<img class="banner-home-two" src="<?php bloginfo('template_url');?>/assets/img/banner-mobile.png">
	<!-- Carrossel de divulgações -->
	<!-- <section>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      	<img id="banner-home" class="d-block w-100" src="<?php bloginfo('template_url');?>/assets/img/banner.png" alt="Primeiro Slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Anterior</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Próximo</span>
		  </a>
		</div>
	</section> -->
	
	<!-- Barra de pesquisa -->
<!-- 	<section class="container mt-3 pb-3">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center mx-auto mt-5 h4 pb-2">O que você está procurando?</h2>

				<div class="input-group mb-3 text-center">
					<input type="text" class="form-control" placeholder="O que você está procurando?" aria-label="O que você está procurando?" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary bg-success text-light" type="button" id="button-addon2">Pesquisar</button>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- Ícones dos benefícios e suas descrições -->
	<section class="container-fluid bg-success mt-5 pt-2">
		<div class="container col-lg-8 col-md-12 pb-5">
			<!-- Título da sessão de benefícios -->
			<div class="row text-center">
				<h2 class="mx-auto bene-title pt-3 pb-1 mb-5">Principais Benefícios do Associado</h2>
			</div>

			<div class="row mx-auto">

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-1.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Ações promocionais</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-2.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Treinamentos</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-3.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Participação<br> em eventos</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-4.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Divulgação</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-5.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Networks com<br> empresários</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-6.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Desconto com <br>parceiros conveniados</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-7.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Participação<br> em eventos</p>				  
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-6 mt-2">
					<div class="text-center ">
					<!-- Imagem do produto -->
					<img src="<?php bloginfo('template_url');?>/assets/img/b-8.png" alt="">
				  	<!-- Descrição do ícone -->
					<p class="desc-bene">Descontos em<br> eventos patrocinados</p>				  
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sessão de notícias -->
	<section class="container mt-3">
		<div class="row">
			<div class="col-lg-10 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Notícias</h2>
				<div class="row-title mb-5"></div>
			</div>
		</div>

	<div class="row">
		<?php query_posts('showposts=4'); ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<img src="<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0 border-noticia img-fluid'));?>
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			      <!-- Descrição -->
			     <p class="card-text text-description mt-1"><?php echo the_excerpt(); ?></p>
			      <p class="card-text"><small class="text-muted">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
			    </div>
			</div>			

		<?php endwhile;?>
			<div class="col-12 text-center">
				<a class="btn btn-success" href="<?php bloginfo('template_url');?>/noticias/" role="button">Ler mais notícias</a>
				<!-- <button type="submit" class="btn btn-home pl-4 pr-4"><a href="http://localhost/aeba/noticias/" style="color: #01cb62;">Ler mais notícias</a></button> -->
			</div>

		<?php endif; ?>
	</div>	
	</section>

	<!-- Sessão de conheça empresas associadas -->
	<section class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12 pt-4 mx-auto mt-3">
				<h2 class="title pt-3 pb-1">Conheça empresas associadas</h2>
				<div class="row-title mb-5"></div>		
			</div>
		</div>
		<div class="row text-center">
			
			<div class="col-md-3 col-12 mt-2">
				<img class="img-fluid" src="<?php bloginfo('template_url');?>/assets/img/logo-empresa.png" alt="">
			</div>
			<div class="col-md-3 col-12 mt-2">
				<img class="img-fluid" src="<?php bloginfo('template_url');?>/assets/img/logo-empresa.png" alt="">
			</div>
			<div class="col-md-3 col-12 mt-2">
				<img class="img-fluid" src="<?php bloginfo('template_url');?>/assets/img/logo-empresa.png" alt="">
			</div>
			<div class="col-md-3 col-12 mt-2">
				<img class="img-fluid" src="<?php bloginfo('template_url');?>/assets/img/logo-empresa.png" alt="">
			</div>

			<div class="col-12 text-center mt-5">
				<a class="btn btn-success pointer" href="<?php bloginfo('template_url');?>/associados/" role="button">Ver todas as empresas</a>
				<!-- <a href="eita"><button type="submit" class="btn btn-home pl-4 pr-4">Ver todas as empresas</button></a> -->
			</div>
		</div>
	</section>


	<!-- Sessão de formulário para contato -->
	<section class="container">
		<div class="row">
			<!-- Título da sessão -->
			<div class="mt-5 mx-auto col-lg-10 col-md-12 col-sm-12 p-lg-4 p-sm-2 p-md-4">
				<h2 class="title pt-3 pb-1">Fale Conosco</h2>
				<div class="row-title mb-1"></div>
			</div>
		</div>

		<!-- Texto esquerdo em relação ao formulário -->
		<div class="row mx-auto">
			<div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-sm-12 pr-lg-4 p-sm-4"><br>
				<div class="title-green mt-lg-0 mt-sm-2">Podemos te ajudar com algo ou deseja se tornar um associado? </div>
				<div class="text-flow">
					<br>
					<p class="text-flow">Envie-nos uma mensagem por meio deste formulário ou, se preferir, para o email aeba.alecrim@email.com ou whatsapp (84) 9 8121 - 4551.</p> 
					<br>
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
			<?php echo do_shortcode('[contact-form-7 id="23" title="Formulário de contato"]') ?>
		</div>
		
		</div>
	</section>

	<?php get_footer();?>
</body>
</html>

