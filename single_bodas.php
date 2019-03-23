<?php get_header(); ?>

<div class="casamentos">

	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/bodas.jpg" class="img-responsive">
		
		<div class="container">

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
			
				<h2 class="maiu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
														<?php the_content(); ?>

				<?php endwhile; endif; ?>

		</div>
</div>


<?php
/*
Single Post Template: [Bodas]
Description: This part is optional, but helpful for describing the Post Template
*/
?>


<?php get_footer(); ?>