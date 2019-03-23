<?php get_header(); ?>

<div class="video">
	<iframe width="100%" height="720" src="https://www.youtube.com/embed/ifFzf64Y5no?&autoplay=1&rel=0&fs=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="sobre" id="quemsomos">
	
	<br><br><br><br><h2>Quem Somos</h2>
	<p>Somos uma empresa que possuí mais de 10 anos de experiência no mercado. <br>
	Realizamos eventos com intuito de tornar os sonhos de nossos clientes em realidade.<br> 
	Contamos com uma equipe de profissionais multidisciplinares,<br> 
	que trabalham para desenvolver de forma qualitativa e harmoniosa<br>
	os momentos tão especiais da vida de nossos clientes.</p>

	<img class="size img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/001.png">

	<h3>Seletto Eventos,<br> nosso sonho é transformar <br> o seu em realidade.</h3>

	<img class="size img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/002.png">
</div>

<div class="tarssia">
	
	<h2>Missão</h2>
	<p>Tornar realidade o sonho de nossos clientes, agregando valor dos serviços prestados,<br> 
	com excelência, qualidade e compromisso de que seu evento será um sucesso.</p>

	<h2>Visão</h2>
	<p>Sermos reconhecidos como uma empresa que preza pela qualidade e satisfação de nossos clientes.</p>
</div>


<div class="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php 
			$args = array('post_type'=>'slider', 'showposts'=>5);
			$my_slider = get_posts( $args );
			$count = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
	    	<!--<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li>-->
		<?php
			$count ++ ;
	    	endforeach;
	    	endif;
	     ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php 
			$cont = 0 ; if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
		    <div class="item <?php if($cont == 0) echo "active"; ?>">
		      <?php the_post_thumbnail('full'); ?>
		      <div class="carousel-caption">
				<!--<h2><?php the_title(); ?></h2>-->
				<!--<a class="leia-mais" href="<?php the_field('link_do_slider'); ?>">LEIA MAIS</a>-->
		      </div>
		    </div>
	    <?php
	    	$cont ++ ;
	    	endforeach;
	    	endif;
	     ?>

	  </div>

	  <!-- Controls -->
	  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>-->
	</div>
</div>

<div class="botoes">



<div class="salao">
	
	<a href="http://selettoeventos.com.br/site/salao"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/salao.png" class="img-responsive"></a>

</div>


<div class="posts">
	<div class="container">
		<h2 class="title-posts">Confira nossos últimos eventos</h2>
		<div class="row">

			<?php 
				$args = array('post_type'=>'post', 'showposts'=>3);
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
	     	<div class="clear"></div>
			<div class="link"><a class="leia-mais" href="http://selettoeventos.com.br/site/eventos">+ eventos</a></div>
		</div>
	</div>
</div>



<?php get_footer(); ?>