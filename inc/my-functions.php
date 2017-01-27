<?php
function my_social_icons() {
	$hide_show_social_icons= get_theme_mod('hide_show_social_icons','off'); 
	$social_icons_group_id= get_theme_mod('social_icons_group_id','');
	if($hide_show_social_icons == 'on') {
		echo do_shortcode( ' [social_icons_group id="' . $social_icons_group_id . '"] ' );
	}
	else {
		return;
	}
}

function my_subscribe_button() {
	$hide_show_subscribe_button = get_theme_mod('hide_show_subscribe_button','off'); 
	$subscribe_button_link = get_theme_mod('subscribe_button_link','');
	$subscribe_button_label = get_theme_mod('subscribe_button_label','');
	if($hide_show_subscribe_button == 'on') {
		echo '<a href="' . $subscribe_button_link . '" class="call-btn-1 pull-left" target="_self">' . $subscribe_button_label . '</a>';
	}
	else {
		return;
	}
}
function modify_the_query( $query ) {
	if ( $query->is_post_type_archive( 'const_chairman' ) ) { // Run only on chairman messages		
		$ppp = get_option( 'posts_per_page' );
		$offset = 1;
		if ( !$query->is_paged()) {	
			$query->query_vars['posts_per_page'] = 1; 
		} else {
			$query->query_vars['posts_per_page'] = $ppp; 
			$query->query_vars['offset'] 		= $offset;
		}
	}
	if ( $query->is_post_type_archive( 'const_committee' ) ) {
		$query->query_vars['orderby'] 			= 'meta_value_num';
		$query->query_vars['order']				= 'ASC';
		$query->query_vars['meta_key']			= 'order';
		$query->query_vars['posts_per_page']	= -1;
	
	}
	if ( $query->is_post_type_archive( 'const_faqs' ) ) {
		$query->query_vars['order']				= 'ASC';
		$query->query_vars['posts_per_page']	= -1;
	
	}
}
// Hook my above function to the pre_get_posts action
add_action( 'pre_get_posts', 'modify_the_query' );

function socia_child_adjust_offset_pagination( $found_posts, $query ) {

	// Define our offset again...
	$offset = 1;

	// Ensure we're modifying the right query object...
	if ( $query->is_post_type_archive( 'const_chairman' ) && !$query->is_paged ) {
		// Reduce WordPress's found_posts count by the offset...
		return $found_posts - $offset;
	}
	return $found_posts;
}
add_filter( 'found_posts', 'socia_child_adjust_offset_pagination', 1, 2 );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post; 
       if (!is_home() && !is_front_page()) {
			return '<p><a class="moretag" href="'. get_permalink($post->ID) . '">More &raquo;</a></p>';
		}
}
add_filter('excerpt_more', 'new_excerpt_more');