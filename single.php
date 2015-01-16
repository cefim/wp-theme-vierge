<?php get_header(); ?>

	
		<?php // Début de la boucle ?>
		<?php while ( have_posts() ) :the_post();  ?>
			<article>
			
				<h2><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
				
			</article>
		<?php endwhile; ?>
		<?php // Fin de la boucle ?>
		
<?php get_footer() ?>