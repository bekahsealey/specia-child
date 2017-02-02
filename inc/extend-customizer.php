<?php

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
	/*=========================================
	Subscribe Settings Section
	=========================================*/
// Subscribe Settings Section // 
	
	$wp_customize->add_section(
        'subscribe_setting',
        array(
        	'priority'      => 5,
            'title' 		=> __('Subscribe Button','specia'),
			'panel'  		=> 'header_section',
		)
    );
		// Subscribe Hide/Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_subscribe_button' , 
			array(
			'default' => __( 'off', 'specia' ),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);

	$wp_customize->add_control(
	'hide_show_subscribe_button' , 
		array(
			'label'          => __( 'Subscribe Button Hide/Show', 'specia' ),
			'section'        => 'subscribe_setting',
			'settings' 		 => 'hide_show_subscribe_button',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Social Icons Plugin Group', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			)
		) 
	);

	// Subscribe Button Label // 
	$wp_customize->add_setting(
    	'subscribe_button_label',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'subscribe_button_label',
		array(
		    'label'   => __('Button Label','specia'),
		    'section' => 'subscribe_setting',
			'settings'       => 'subscribe_button_label',
			'description'    => __( 'Enter the Button Name', 'specia' ),
			'type'           => 'text',
		)  
	);
	// Subscribe Button Link // 
	$wp_customize->add_setting(
    	'subscribe_button_link',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'subscribe_button_link',
		array(
		    'label'   => __('Subscribe Button Link','specia'),
		    'section' => 'subscribe_setting',
			'settings' => 'subscribe_button_link',
			'description'    => __( 'Enter url for Social Icons Group, starting with http:// or https://', 'specia' ),
			'type'           => 'text',
		)  
	);

	/*=========================================
	Extended Portfolio Settings Section
	=========================================*/
	$wp_customize->add_setting( 
		'hide_show_child_portfolio' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_child_portfolio' , 
		array(
        	'priority'      => 49,
			'label'          => __( 'Extended Portfolio Hide/Show', 'specia' ),
			'section'        => 'portfolio_setting',
			'type'           => 'radio',
			'description'    => __( 'Click to Hide / Show Extended Portfolio Section', 'specia' ),
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
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

	/*=========================================
	Footer Links Section
	=========================================*/
	// Link 1 Label // 
	$wp_customize->add_setting(
    	'label1_content',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	

	$wp_customize->add_control( 
		'label1_content',
		array(
        	'priority'      => 50,
		    'label'   		=> __('First Link Text','specia'),
		    'section'		=> 'footer_copyright',
			'settings'   	 => 'label1_content',
			'type' 			=> 'text',
			'description'   => __( 'Enter the text for Footer Link 1', 'specia' ),
		)  
	);
	// Link 1 Link // 
	$wp_customize->add_setting(
    	'label1_link',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	
	
	$wp_customize->add_control( 
		'label1_link',
		array(
        	'priority'      => 50,
		    'label'   => __('First Link URL','specia'),
		    'section' => 'footer_copyright',
			'settings'       => 'label1_link',
			'description'    => __( 'Enter the Link URL for Link 1', 'specia' ),
			'type'           => 'text',
		)  
	);
	// Link 2 Label // 
	$wp_customize->add_setting(
    	'label2_content',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	

	$wp_customize->add_control( 
		'label2_content',
		array(
        	'priority'      => 55,
		    'label'   		=> __('Second Link Text','specia'),
		    'section'		=> 'footer_copyright',
			'settings'   	 => 'label2_content',
			'type' 			=> 'text',
			'description'   => __( 'Enter the text for Footer Link 2', 'specia' ),
		)  
	);
	// Link 2 Link // 
	$wp_customize->add_setting(
    	'label2_link',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	
	
	$wp_customize->add_control( 
		'label2_link',
		array(
        	'priority'      => 55,
		    'label'   => __('Second Link URL','specia'),
		    'section' => 'footer_copyright',
			'settings'       => 'label2_link',
			'description'    => __( 'Enter the Link URL for Link 2', 'specia' ),
			'type'           => 'text',
		)  
	);
}