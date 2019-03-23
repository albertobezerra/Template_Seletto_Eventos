<?php get_header(); ?>


<div class="page-orcamentos">

	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/formatura.png" class="img-responsive">

</div>


		<div class="posts2">
			<div class="container">
				<h2 class="title-posts2">Todas as nossas formaturas</h2>
				<div class="row">

					<?php 
						$args = array('post_type'=>'post', 'category_name'=>'formaturas', 'showposts'=> '1000');
						$my_posts = get_posts( $args );
						if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
					 ?>

						<div class="col-md-4 col-lg-4">
						
						<div class="hovereffect">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(false, array('class'=>'img-responsive')); ?></a>

						<div class="overlay"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
							
						
						</div>
						</div>
					
					 <?php
				    	endforeach;
				    	endif;
			     	?>
		
				</div>
			</div>
		</div>


<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: TEMA_FORMATURA
*/
?>


<?php get_footer(); ?>