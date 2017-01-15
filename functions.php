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

add_action('customize_register','specia_child_customizer_options');
/*
 * Add in our custom Accent Color setting and control to be used in the Customizer in the Colors section
 *
 */
function specia_child_customizer_options( $wp_customize ) {
	

	/*=========================================
	Social Icons Settings Section
	=========================================*/
	// Social Icons Settings Section // 
	$wp_customize->add_section(
        'social_icons_setting',
        array(
        	'priority'      => 4,
            'title' 		=> __('Social Icons ThemeGrill Plugin','specia'),
			'panel'  		=> 'header_section',
		)
    );
		// Social Icons Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_social_icons' , 
			array(
			'default' => __( 'off', 'specia' ),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_social_icons' , 
		array(
			'label'          => __( 'Social Icons Plugin Hide/Show', 'specia' ),
			'section'        => 'social_icons_setting',
			'settings' 		 => 'hide_show_social_icons',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Social Icons Plugin Group', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);
	$wp_customize->add_setting(
    	'social_icons_group_id',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'social_icons_group_id',
		array(
		    'label'   => __('Social Icons Group ID','specia'),
		    'section' => 'social_icons_setting',
			'settings' => 'social_icons_group_id',
			'description'    => __( 'Enter ID for Social Icons Group', 'specia' ),
			'type'           => 'number',
		)  
	);
}

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

?>