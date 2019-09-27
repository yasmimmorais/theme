<?php
/** 
    * Template name: produtos-servicos
*/
?>

<?php get_header(); ?>
	<!-- Breadcrumb -->
	<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?php bloginfo('template_url');?>/aeba/index/">Página Inicial</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Produtos & Serviços</li>
			  </ol>
			</div>			
		</div>
	</section>

	<!-- Título da sessão Produtos & Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-12 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Produtos & Serviços</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>

	<!-- Barra de pesquisa e lista de categorias -->
	<section class="container">
		<div class="row">
			<div class="col-lg-4">
				<!-- Barra de pesquisa -->
				<div class="input-group mb-3 text-center ">
					<input type="text" class="form-control" placeholder="Sua busca" aria-label="Sua busca" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary bg-success text-light border-0 mr-md-5" type="button" id="button-addon2">Pesquisar</button>
					</div>
				</div>

				<!-- Dropdown para o mobile -->
				<div class="dropdown">
				  <a class="mb-3 btn btn-secondary dropdown-toggle" style="background-color: #01cb62; border:0;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Categorias
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				  </div>
				</div>

				<!-- Lista de Categorias dos Produtos & Serviços -->
				<div class="list-group mr-lg-5">
					  <a href="#" class="list-group-item list-group-item-action active-green">
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
					</div>
				</div>
				


				<!-- Listagem dos cards das empresas -->
				<div class="col-lg-8 mx-auto">

					<?php $empresa = new WP_Query(array('post_type' => 'empresa', 'showposts' => 6));
			            while ($empresa->have_posts()) : $empresa->the_post(); ?>

					<div class="card mb-4 border">
					  <div class="row no-gutters ">
					    <div class="col-md-4 col-sm-6">
					    <!-- Logo da empresa -->
					        <?php if(has_post_thumbnail()) :  ?>
			                <?php the_post_thumbnail("medium", array("class" => "mb-0 img-fluid")); ?>
			                <?php endif; ?>
					    </div>
					    <div class="col-md-8 col-sm-6">
					      <div class="card-body">
					      	<!-- Nome da empresa -->
					        <a href="<?php the_permalink() ?>"><h5 class="title-card-empresa"><?php the_title() ?></h5></a>
					        <!-- Categoria da empresa -->
					        <a href="#"><?php the_category(', '); ?><br></a>
					        <br>
					        <a class="btn btn-success pointer" href="<?php the_permalink() ?>" role="button">Ver mais</a>
					        <!-- <button type="submit" class="btn btn-l-green pl-4 pr-4 float-lg-left"><a href="eita" style="color: white;">Ver mais</a></button> -->
					      </div>
					    </div>
					  </div>
					</div>

					<?php
			            // End the loop.
			            endwhile; ?>

				</div>


	</section>

	<!-- Paginação -->
	<section class="container mt-5">
		<div class="row">
			<div class="offset-lg-4 col">
				<?php custom_pagination(); ?>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>

	<!-- Plugins -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>