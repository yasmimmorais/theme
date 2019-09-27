<?php
/** 
    * Template name: fale-conosco	
*/
?>

<?php get_header(); ?>

	<!-- Breadcrumb -->
	<section>
	<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?php bloginfo('template_url');?>/index/">Página Inicial</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Fale Conosco</li>
			  </ol>
			</div>			
		</div>
	</section>

	<!-- Formulário da sessão Fale Conosco -->
	<section class="container">
		<div class="row">
			<!-- Título da sessão -->
			<div class="col-sm-12 p-lg-4 p-sm-2 p-md-4">
				<h2 class="title pt-3 pb-1">Fale Conosco</h2>
				<div class="row-title mb-1"></div>
			</div>
		</div>

		<!-- Texto esquerdo em relação ao formulário -->
		<div class="row">
			<div class="col-lg-6 col-sm-12 pr-lg-4 p-sm-4"><br>
				<div class="title-green mt-sm-2">Podemos te ajudar com algo ou deseja se tornar um associado? </div>
				<div class="text-flow">
					<br>
					<p class="text-flow">Envie-nos uma mensagem por meio deste formulário ou, se preferir, para o email aeba.alecrim@email.com ou whatsapp (84) 9 8121 - 4551.</p> 
					<br>
				</div>
			</div>

		<!-- Formulário direito em relação ao texto -->

		<div class="col-lg-6 col-sm-12">
			<?php echo do_shortcode('[contact-form-7 id="23" title="Formulário de contato"]') ?>
		</div>

	</section>

	<?php get_footer(); ?>	

	<!-- Plugins -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>