	<?php
/** 
    * Template name: associados
*/
?>

<?php get_header(); ?>

	<!-- Breadcrumb -->
	<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?php bloginfo('template_url');?>/index/">Página Inicial</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Associados</li>
			  </ol>
			</div>			
		</div>
	</section>

	<!-- Título da sessão Empresas associadas --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-12 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Empresas Associadas</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>

	<!-- Barra de pesquisa e lista de categorias -->
	<section class="container ">
		<div class="row">
			<div class="col-lg-4">

				<!-- Barra de pesquisa -->
				<!-- <div class="input-group mb-3 text-center ">
					<input type="text" class="form-control text-black-50" placeholder="Sua busca" aria-label="Sua busca" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button style="background-color: #01cb62;" class="btn btn-success border-0 mr-md-5 pointer" type="button">Pesquisar</button>
					</div>
				</div>
 -->
				<!-- Lista de Categorias MOBILE-->
				<div class="list-mobile">
					<div class="dropdown d-block">
					  <a class="drop mb-3 btn btn-secondary dropdown-toggle" style="background-color: #01cb62; border:0;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Categorias
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					   
					  </div>
					</div>
				</div>

		

				<!-- Lista de Categorias das empresas DESKTOP-->
				<div class="list-group mr-lg-5 list-one">

					<p class="list-group-item bg-success" style="color: white;">Categorias</p>
						<ul>
							<?php wp_list_categories(array('hierarchical'=>1, 'taxonomy'=>'associados')); ?>
							
						</ul>
					</div>
				</div>
				

				

				<!-- Card do associado -->
				<div class="col-lg-8 mx-auto">
					<?php
					$associado = new WP_Query(array('post_type' => 'associado', 'showposts' => 6));
			            while ($associado->have_posts()) : $associado->the_post();
			                ?>
			                <div class="card mb-4">						
							  <div class="row no-gutters ">
							    <div class="col-md-4">
							    <!-- Logo da empresa -->
			                        <?php if(has_post_thumbnail()) :  ?>
			                            <?php the_post_thumbnail("medium", array("class" => "mb-0 img-fluid")); ?>
			                        <?php endif; ?>
							    </div>
							    <div class="col-md-8">					    	
							      <div class="card-body">
							      	<!-- Nome da empresa -->
							      	<p class="h4"><?php the_title() ?></p>
							        <!-- <a href="<?php the_permalink() ?>"><h5 class="title-card-empresa"><?php the_title() ?></h5></a> -->
							        <!-- Categoria da empresa -->
							        <a href="#"><?php the_taxonomies(', '); ?><br></a>	
							        <!-- Endereço e link para o mapa -->
							        
							        <b>Endereço:</b> <a href="<?php echo get_post_meta( $post->ID,'associado_link', true ); ?>" target="_blank"><?php echo get_post_meta( $post->ID,'associado_endereco', true ); ?></a><br>	
									<b>Telefone:</b> <?php echo get_post_meta( $post->ID,'associado_telefone', true ); ?>
							      </div>
							    </div>
							  </div>
							</div>

			                <?php
			            // End the loop.
			            endwhile; ?>
				</div>
	</section>

	<section class="container mt-5">
		<div class="row">
			<div class="offset-lg-4 col">
				<?php custom_pagination(); ?>
			</div>
		</div>
	</section>

	<?php get_footer();?>

</body>
</html>