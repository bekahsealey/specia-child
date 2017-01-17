<?php
add_action( 'wp_enqueue_scripts', 'specia_child_enqueue_styles' );
function specia_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i', false ); 
	wp_enqueue_script( 'js-scalem', get_stylesheet_directory_uri() . '/js/jquery.scalem.js', array( 'jquery' ), '1.2.0', true );
	wp_enqueue_script( 'my-scalem', get_stylesheet_directory_uri() . '/js/myscalem.js', array( 'js-scalem' ), '1.0.0', true );
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
	// Portfolio 4 //
	$wp_customize->add_setting(
	'portfolio-child-page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-child-page1',
		array(
        	'priority'      => 50,
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Portfolio Four:','specia'),
			'section'	=> 'portfolio_setting',
			'settings'  => 'portfolio-child-page1',
		)
	);	
	// Portfolio 5 //
	$wp_customize->add_setting(
	'portfolio-child-page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-child-page2',
		array(
        	'priority'      => 50,
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Portfolio Five:','specia'),
			'section'	=> 'portfolio_setting',
			'settings'  => 'portfolio-child-page2',
		)
	);	
	// Portfolio 6 //
	$wp_customize->add_setting(
	'portfolio-child-page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
		
	$wp_customize->add_control(
	'portfolio-child-page3',
		array(
        	'priority'      => 50,
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Portfolio Six:','specia'),
			'section'	=> 'portfolio_setting',
			'settings'  => 'portfolio-child-page3',
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

function extend_portfolio_tiles() {
	for($portfolio =1; $portfolio<4; $portfolio++) 
	{
		if( get_theme_mod('portfolio-child-page'.$portfolio)) 
		{
			$portfolio_child_query = new WP_query('page_id='.get_theme_mod('portfolio-child-page'.$portfolio,true));
			while( $portfolio_child_query->have_posts() ) 
			{ 
				$portfolio_child_query->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
				$img_arr[] = $image;
				$id_arr[] = $post->ID;
			}    
		}
	}
	
}

?>