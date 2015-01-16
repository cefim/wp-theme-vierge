<?php get_header(); ?>
	
	<h2>Articles parus dans la catégorie <?php single_cat_title(); ?></h2>
		
		<?php // Début de la boucle ?>
		<?php while ( have_posts() ) :the_post();  ?>
			<article <?php post_class(); ?> >
			
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<?php the_content(); ?>
				
			</article>
		<?php endwhile; ?>
		<?php // Fin de la boucle ?>
		
<?php get_footer() ?>