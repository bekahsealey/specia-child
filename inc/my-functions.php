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
	if ( !is_admin() ) {
	if ( $query->is_post_type_archive( 'const_chairman' ) ) { // Run only on chairman messages		
		$ppp = get_option( 'posts_per_page' );
		$offset = 1;

    //Next, detect and handle pagination...
    if ( $query->is_paged ) {

        //Manually determine page query offset (offset + current page (minus one) x posts per page)
        $page_offset = $offset + ( ($query->query_vars['paged']-2) * $ppp );

        //Apply adjust page offset
        $query->set('offset', $page_offset ); 

    }
    else {

        //This is the first page. Just use the offset...
        
			$query->query_vars['posts_per_page'] = $offset; 

    }
	}
	if ( $query->is_post_type_archive( 'const_committee' ) ) {
		$query->query_vars['orderby'] 			= 'meta_value_num';
		$query->query_vars['order']				= 'ASC';
		$query->query_vars['meta_key']			= 'order';
		$query->query_vars['posts_per_page']	= -1;
	
	}
	if ( $query->is_post_type_archive( 'const_candidates' ) ) {
		$query->query_vars['orderby'] 			= 'meta_value_num';
		$query->query_vars['order']				= 'DESC';
		$query->query_vars['meta_key']			= 'year';
	
	}
	if ( $query->is_post_type_archive( 'const_faqs' ) ) {
		$query->query_vars['order']				= 'ASC';
		$query->query_vars['posts_per_page']	= -1;
	
	}
}
}
// Hook my above function to the pre_get_posts action
add_action( 'pre_get_posts', 'modify_the_query' );
function socia_child_adjust_offset_pagination( $found_posts, $query ) {
  if ( !is_admin()) {

	// Define our offset again...
	$offset = 1;
	$ppp = get_option( 'posts_per_page' );

	// Ensure we're modifying the right query object...
	if ( $query->is_post_type_archive( 'const_chairman' ) && !$query->is_paged ) {
		// Reduce WordPress's found_posts count by the offset...
		$found_posts = ($found_posts-$offset)/$ppp;
		return $found_posts;
	} else {
	return $found_posts;
	}
  }
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

function the_breadcrumb() {
    global $post;
	$homeLink = home_url();

    if ( ( is_home() && !get_option( 'show_on_front' ) == 'posts' ) || ( is_front_page() && get_option( 'show_on_front' ) == 'page' ) ) {
		return;
	} else {
    echo '<ul class="page-breadcrumb">';
        echo '<li><a href="';
        echo home_url( '/' );
        echo '">';
        echo 'Home';
        echo '</a></li><li>&nbsp;&#47;&nbsp;</li>'; 
		if ( is_home() )  {
			echo '<li>'; $whichpage = get_option( 'page_for_posts' ); echo get_the_title($whichpage); echo '</li>';
		} elseif ( is_single() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				$post_type = get_post_type_object(get_post_type());
			if( $post_type->labels->parent_item_colon ) { 
				$parent_item = trim( preg_replace( "/[^0-9a-z]+/i", " ", $post_type->labels->parent_item_colon ) );
				$newslug = sanitize_title($parent_item);
				echo '<li>&nbsp;<a href="' . esc_url($homeLink) . '/' . $newslug . '/">' . $parent_item . '</a></li><li>&nbsp;&#47;&nbsp;</li>'; 
			}
				echo '<li>&nbsp;<a href="' . esc_url($homeLink) . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li><li>&nbsp;&#47;&nbsp;</li><li>';
				the_title(); 
				echo '</li>';

			} else {
	            echo '<li>';
	            the_category(' &bull; ', 'single');
	            if (is_single()) {
	                echo '</li><li>&nbsp;&#47;&nbsp;</li><li>';
	                the_title();
	                echo '</li>';
	            }
	    		elseif ( !have_posts() ) { echo single_cat_title( '', false ); }
	    	}
			
        } elseif ( is_page() ) {
            if($post->post_parent){
            	$parent_id  = $post->post_parent;
            	$ancestors = array();
				$output = '';
            	while ($parent_id) {
	        		$myID = $post->ID;
	                $ancestors[] = get_post_ancestors( $myID );
					$parent_id  = $page->post_parent;
	            }
                foreach ( array_reverse( $ancestors[0] ) as $ancestor ) {
					$title = get_the_title();
					$output .= '<li><a href="' . get_permalink( $ancestor ) . '" title="'.get_the_title( $ancestor ).'">'.get_the_title( $ancestor ).'</a></li> <li>&nbsp;&#47;&nbsp;</li>';
                }
                echo $output;
                echo '<li>' . $title . '</li>';
            } else {
                echo '<li>'; the_title(); echo '</li>';
            }
		}
	elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) 
	{
		$post_type = get_post_type_object(get_post_type());
		if( $post_type->labels->parent_item_colon ) { 
				$parent_item = trim( preg_replace( "/[^0-9a-z]+/i", " ", $post_type->labels->parent_item_colon ) );
				$newslug = sanitize_title($parent_item);
				echo '<li>&nbsp;<a href="' . esc_url($homeLink) . '/' . $newslug . '/">' . $parent_item . '</a></li><li>&nbsp;&#47;&nbsp;</li>';  
			}
		echo '<li>&nbsp;'. $post_type->labels->singular_name . '</li>';
	} 
    elseif (is_category()) {echo'<li>Search Results for "'; single_cat_title(); echo'" Category</li>';}
    elseif (is_tag()) {echo'<li>Search Results for "'; single_tag_title(); echo'" Tag</li>';}
    elseif (is_day()) {echo"<li>Archive for "; _e( get_the_date() ); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; _e( get_the_date('F Y') ); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; _e( get_the_date('Y') ); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo'<li>Search Results for "' . get_search_query() . '"'; echo'</li>';}
	echo '</ul>';
	}
}