<?php

// Load styles and files from parent theme (crates)
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Remove the old Google Font declarations
remove_action('wp_print_styles', 'crates_load_google_fonts');

// Register and enqueue styles
function crateschild_load_style() {

	if ( !is_admin() ) {
	    wp_enqueue_style( 'crates_opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,700italic,800|Merriweather:400|Pacifico:400' );
	    wp_enqueue_style( 'crates_style', get_stylesheet_uri() );

      wp_enqueue_style( 'crates_pressstart2p', 'http://fonts.googleapis.com/css?family=Press+Start+2P' );
	    wp_enqueue_style( 'crates_style', get_stylesheet_uri() );
	}

}
add_action('wp_enqueue_scripts', 'crateschild_load_style');

?>
