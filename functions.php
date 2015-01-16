<?php
// Fonction php pour créer 1 menu
function register_my_menu(){
	register_nav_menu(
		'menu_principal',
		__('Menu Principal')
	);

	
}
add_action('init', 'register_my_menu');

add_theme_support( 
	'post-formats', 
	array( 
		'aside', 
		'gallery',
		'video',
		'pro') 
);

// Register Sidebar
function ma_sidebar() {

	$args = array(
		'name'          => 'sidebar_footer',
		'description'   => 'Zone de Pied de page',
		'class'         => 'sidebar-footer',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		'before_widget' => '<div  id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	
	register_sidebar( $args );
	$args = array(
		'name'          => 'sidebar_aside',
		'description'   => 'Zone de droite',
		'class'         => 'sidebar-aside',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		'before_widget' => '<div  id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	
	register_sidebar( $args );
	


}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'ma_sidebar' );