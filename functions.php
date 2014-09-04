<?php

function theme_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );	
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/bower_components/unsemantic/assets/stylesheets/unsemantic-grid-responsive-tablet-no-ie7.css' );
		
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );



// Enable custom menus
add_theme_support( 'menus' );

// Enable featured images
add_theme_support( 'post-thumbnails' ); 

// Enable widgets

function create_widget ( $name, $id, $description ){
$args = array(
	'name'          => __( $name ),
	'id'            => $id,
	'description'   => $description,
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar ($args);
}

// Widgets on main page of site

create_widget('Left Footer', 'footer_left', 'Displays in the left footer of main page');
create_widget('Middle Footer', 'footer_middle', 'Displays in the middle of footer of main page');
create_widget('Right Footer', 'footer_right', 'Displays in the right footer of main page');

// Widgets on Blog page

create_widget('Top', 'top_widget', 'First widget on the blog posts page');
create_widget('Middle', 'middle_widget', 'Second widget on the blog posts page');
create_widget('Bottom', 'bottom_widget', 'Third widget on the blog posts page');


?>