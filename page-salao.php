<?php get_header(); ?>


<div class="page-orcamentos">

	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/salao2.png" class="img-responsive">

		<div class="container">
				

				<?php 
				$args = array('post_type'=>'page', 'pagename'=>'salao');
				$my_salao = get_posts( $args );
				if($my_salao) : foreach($my_salao as $post) : setup_postdata( $post );
			 	
			 	?>

					<h1><?php the_title(); ?></h1>
					<h3><?php the_content(); ?></h3>

				<?php
		    	endforeach;
		    	endif;
	     		?>

	     		<button class="orcamento2"><a href="http://selettoeventos.com.br/site/orca-salao">Solicite sua reserva</a></button>




		</div>
</div>

<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: Salao
*/
?>


<?php get_footer(); ?>