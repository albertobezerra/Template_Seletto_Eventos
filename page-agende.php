<?php get_header(); ?>


<div class="page-orcamentos">

	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/orcamentos.png" class="img-responsive">

		<div class="container">
			<h1>Agende um horário</h1>
			<div class="form-casa">

			<?php echo FrmFormsController::get_form_shortcode(array('id' => 5, 'key' => '', 'title' => false, 'description' => false, 'readonly' => false, 'entry_id' => false)); ?>

			</div>
			

		</div>
</div>

<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: Agende
*/
?>


<?php get_footer(); ?>