<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	
	<!-- Titre généré par WP -->
	<title><?php the_title(); ?> | Tintin</title>
	
	<!-- Feuille de style du thème -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	
	
	<!-- Infos de WP -->
	<?php wp_head() ?>
	
	
	<!-- Eventuellement, 
	d'autres lignes sont rajoutées par des extensions : -->
	
	
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header class="site-header">
		<h1 class="site-title">
			<a class="site-title-link" href="<?php bloginfo('url'); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<div class="site-slogan"><?php bloginfo('description'); ?></div>	
		<aside class="sidebar-header">
			<?php get_search_form(); ?>
		</aside>
	</header>
	<nav class="menu-principal">
	<?php wp_nav_menu( 
		array( 
			'theme_location' => 'menu_principal',
			'container' => ''
		) ) ?>
	</nav>
	
	<main class="container clearfix">
	<section class="content">