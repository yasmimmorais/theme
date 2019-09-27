<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?php bloginfo('template_url');?>/aeba/noticias/">Notícias</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
			  </ol>
			</div>			
		</div>
	</section>
	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1"><?php the_title();?></h2>
			</div>
		</div>
	</section>
	
	<!-- Descrição da Notícia -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto mt-2">
				<!-- Descrição da Notícia -->
		        <p class="description-v-noticia"><?php the_excerpt();?> </p>
		        <small class="text mb-0">Equipe AEBA - Associação dos Empresários do Bairro do Alecrim</small>
				<p><small class="text-muted mt-0">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
				<div class="row-title mb-4"></div>
			</div>
			
			<!-- Imagem da Notícia -->
			<div class="col-lg-8 mx-auto">
				<img src="<?php the_post_thumbnail('post_thumbnail', array('class' =>'p-0', 'style' => 'width: 100%; height: auto;'));?>
				<!-- <p class="text-center mt-2"><small class="text">Legenda da imagem</small></p> -->
			</div>
		</div>
	</section>
	<!-- Texto da Notícia -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<?php the_content(); ?>
			</div>
		</div>
	</section>



<!-- fim do loop notícia -->
<!-- Ler Mais Notícias -->
	<section class="container">
		<div class="row">
		<?php
            $args = array('post_type'=>'post', 'showposts'=>2);
            $meus_posts = get_posts($args);
            $id_post_atual = get_the_id();
            if(count($meus_posts)>1):
        ?>
			<div class="col-lg-8 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Ler mais notícias</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>
	<!-- Cards horizontais de outras notícias -->
	<section class="container mt-2">

	<div class="row">
		<?php
                foreach($meus_posts as $post):
                setup_postdata($post);
                if(get_the_id()!=$id_post_atual):
        ?>
			<div class="col-lg-8 mx-auto">
				<div class="card mb-0 border-0">
				  <div class="row no-gutters">
				    <div class="col-md-4 d-md-block d-none">
				      <img src="<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));?>
				    </div>
				    <div class="col-md-8">
				      <div class="card-body pt-lg-1 pt-sm-3">
				        <a href="<?php the_permalink(); ?>"><h5 class="card-title title-card-noticia"><?php the_title(); ?></h5></a>	
				        <p class="card-text card-description-v-noticia"> <?php the_excerpt(); ?></p>
				        <p class="card-text"><small class="text-muted">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
		

			<!-- Linha de divisão das notícias		 -->
			<div class="col-lg-8 mx-auto mt-2">
			     <div class="row-title mb-3">
			     	
			     </div>
			</div>
			
			
		<?php
                endif;
                endforeach;
                endif;
            ?>	
	</div>

<?php endwhile; ?>
	</section>
<?php get_footer();?>
</body>
</html>