<?php

/*
 * Add category and excerpt options to pages
 *
 */
function specia_child_add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'category', 'page' );
	add_post_type_support( 'page', 'excerpt' );
 }
add_action( 'init', 'specia_child_add_taxonomies_to_pages' );

add_action( 'widgets_init', 'specia_child_widgets_init', 12 );

add_action('customize_register','specia_child_customizer_options');