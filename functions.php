<?php
add_action( 'wp_enqueue_scripts', 'specia_child_enqueue_styles' );
function specia_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i', false ); 
}
function remove_some_widgets(){

	// Unregister some of the Specia sidebars
	unregister_sidebar( 'specia_feature_widget' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );


function specia_child_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Features Widget Area', 'specia' ),
		'id' => 'specia_child_feature_widget',
		'description' => __( 'The Features Widget Area for Home Features', 'specia' ),
		'before_widget' => '<div class="col-md-4 col-sm-4"><aside id="%1$s" class="widget">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="title-border"></div>',
	) );
}

add_action( 'widgets_init', 'specia_child_widgets_init', 12 );

?>