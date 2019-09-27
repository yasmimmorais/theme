<?php
/** 
    * Template name: noticias
*/
?>

<?php get_header(); ?>

<!-- Breadcrumb -->
	<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?php bloginfo('template_url');?>/index/">Página Inicial</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Notícias</li>
			  </ol>
			</div>			
		</div>
	</section>
	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-10 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Saiba de tudo que acontece na nossa associação!</h2>
				<div class="row-title mb-5"></div>
			</div>
		</div>
	</section>
	<!-- Sessão dos cards das Notícias -->
	<!-- Quando a tela for lg, cada card ocupa col-3, enquanto a primeira col (offset) fica vazia para manter centralizado o resto do conteúdo da row. Já quando a tela for md, os cards ocuparão col-4 e em sm col-12. 
	-->
	<section class="container">
		<div class="row">
			<?php
                $pagina = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type'=>'post', 'paged'=>$pagina);
                query_posts($args);

                if(have_posts()) : while(have_posts()) : the_post();
            ?>
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<img src="<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0 border-noticia img-fluid'));?>
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="<?php the_permalink(); ?>"><?php the_title();?></a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1"><?php echo the_excerpt(); ?></p>
			      <p class="card-text"><small class="text-muted">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
			    </div>
			 </div>	
		<?php endwhile; endif;?>
		</section>

	<!-- Paginação -->
	<section class="container mt-5">
		<div class="row">
			<div class="offset-lg-4 col">
				<?php custom_pagination(); ?>
			</div>
		</div>
	</section>
 
<?php get_footer();?>