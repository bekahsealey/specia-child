<?php 
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
		'before_widget' => '<aside id="%1$s" class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="title-border"></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Horizontal Widget Area', 'specia' ),
		'id' => 'horizontal',
		'description' => __( 'Horizontal Widget Area', 'specia' ),
		'before_widget' => '<div class="col-md-4 col-sm-4"><aside id="%1$s" class="widget">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="title-border"></div>',
	) );
}