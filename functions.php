<?php
add_action( 'wp_enqueue_scripts', 'specia_child_enqueue_styles' );
function specia_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i', false ); 
	wp_enqueue_script( 'js-scalem', get_stylesheet_directory_uri() . '/js/jquery.scalem.js', array( 'jquery' ), '1.2.0', true );
	wp_enqueue_script( 'my-scalem', get_stylesheet_directory_uri() . '/js/myscalem.js', array( 'js-scalem' ), '1.0.0', true );
	if( is_page_template( 'templates/template-state-parties.php' ) ) {
		wp_enqueue_script( 'initMap', get_stylesheet_directory_uri() . '/js/initMap.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'raphael-js', get_stylesheet_directory_uri() . '/js/raphael.js', array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'scale-raphael', get_stylesheet_directory_uri() . '/js/scale.raphael.js', array( 'raphael-js' ), '1.0.0', true );
	}
}
function jeherve_custom_image( $media, $post_id, $args ) {
    if ( $media ) {
        return $media;
    } else {
        $permalink = get_permalink( $post_id );
        $url = apply_filters( 'jetpack_photon_url', 'https://www.constitutionparty.com/assets/screenshot.png' );
     
        return array( array(
            'type'  => 'image',
            'from'  => 'custom_fallback',
            'src'   => esc_url( $url ),
            'href'  => $permalink,
        ) );
    }
}
add_filter( 'jetpack_images_get_images', 'jeherve_custom_image', 10, 3 );

require_once get_stylesheet_directory() . '/inc/thumbnails.php';
require_once get_stylesheet_directory() . '/inc/widgets.php';
require_once get_stylesheet_directory() . '/inc/page-options.php';
require_once get_stylesheet_directory() . '/inc/extend-customizer.php';
require_once get_stylesheet_directory() . '/inc/my-functions.php';

?>