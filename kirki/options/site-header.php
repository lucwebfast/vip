<?php
$config = agencies_kirki_config();

# Header Settings
	AGENCIES_Kirki::add_section( 'dt_site_header_section', array(
		'title' => __( 'Header Style', 'agencies' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 1
	) );

		# header-type
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'header-type',
			'label'    => __( 'Site Header', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => agencies_defaults('header-type'),
			'choices' => array(
				'fullwidth-header' 				=> get_template_directory_uri().'/kirki/assets/images/site-headers/fullwidth-header.jpg',
				'boxed-header' 					=> get_template_directory_uri().'/kirki/assets/images/site-headers/boxed-header.jpg',
				'split-header boxed-header' 	=> get_template_directory_uri().'/kirki/assets/images/site-headers/splitted-boxed-header.jpg',
				'split-header fullwidth-header' => get_template_directory_uri().'/kirki/assets/images/site-headers/splitted-fullwidth-header.jpg',
				'fullwidth-header header-align-center fullwidth-menu-header' 	=> get_template_directory_uri().'/kirki/assets/images/site-headers/fullwidth-menu-center.jpg',
				'two-color-header' 			=> get_template_directory_uri().'/kirki/assets/images/site-headers/two-color-header.jpg',			
				'fullwidth-header header-align-left fullwidth-menu-header' 		=> get_template_directory_uri().'/kirki/assets/images/site-headers/fullwidth-menu-left.jpg',
				'left-header' 				=> get_template_directory_uri().'/kirki/assets/images/site-headers/left-header.jpg',
				'left-header-boxed' 		=> get_template_directory_uri().'/kirki/assets/images/site-headers/left-header-boxed.jpg',			
				'creative-header' 			=> get_template_directory_uri().'/kirki/assets/images/site-headers/creative-header.jpg',
				'overlay-header' 			=> get_template_directory_uri().'/kirki/assets/images/site-headers/overlay-header.jpg',
			)
		));

		# enable-sticy-nav
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-sticy-nav',
			'label'    => __( 'Sticky Navigation ?', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => agencies_defaults('enable-sticy-nav'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
					'fullwidth-header',
					'boxed-header',
					'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header'
				) ),
			)			
		));	

		# header-position
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-position',
			'label'    => __( 'Header Position', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => agencies_defaults('header-position'),		
			'choices'  => array(
				'above slider' => esc_attr__( 'Above slider','agencies'),
				'on slider' => esc_attr__( 'On slider','agencies'),
				'below slider' => esc_attr__( 'Below slider','agencies')				
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header', 'boxed-header', 'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)		
		));

		# header-transparency
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-transparency',
			'label'    => __( 'Header Transparency', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => agencies_defaults('header-transparency'),		
			'choices'  => array(
				'default' => esc_attr__( 'Default','agencies'),
				'semi-transparent-header' => esc_attr__( 'Semi Transparent','agencies'),
				'transparent-header' => esc_attr__( 'Transparent','agencies')				
			),	
		));		

		# enable-header-darkbg
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-darkbg',
			'label'    => __( 'Enable Dark BG', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => agencies_defaults('enable-header-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)		
		));			

		# menu-search-icon
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'menu-search-icon',
			'label'    => __( 'Search Icon ?', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => '',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header', 'boxed-header', 'two-color-header' ) ),
			)		
		));

		# search-box-type
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'search-box-type',
			'label'    => __( 'Search Box Style', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'default'  => agencies_defaults('search-box-type'),
			'choices'  => array(
				'type1'   => esc_attr__( 'Default','agencies'),
				'type2'   => esc_attr__( 'Full Screen','agencies')
			),
			'active_callback' => array(
				array( 'setting' => 'menu-search-icon', 'operator' => '==', 'value' => '1' ),
			)
		));

		if( function_exists( 'is_woocommerce' ) ):
			# menu-cart-icon
			AGENCIES_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'menu-cart-icon',
				'label'    => __( 'Cart Icon ?', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'default'  => '',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'agencies' ),
					'off' => esc_attr__( 'No', 'agencies' )
				),
				'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header',
						'boxed-header',
						'two-color-header') ),
				)
			));
		endif;	

		# Top bar Color

			# enable-top-bar-content
			AGENCIES_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'enable-top-bar-content',
				'label'    => __( 'Show Top Bar', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'default'  => agencies_defaults('enable-top-bar-content'),
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'agencies' ),
					'off' => esc_attr__( 'No', 'agencies' )
				),
				/*'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)*/
			));

			# top-bar-content
			AGENCIES_Kirki::add_field( $config, array(
				'type'     => 'textarea',
				'settings' => 'top-bar-content',
				'label'    => __( 'Content', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'default'  => agencies_defaults('top-bar-content'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ),
					/*array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),	*/		
				)
			) );

			# customize-top-bar		
			AGENCIES_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-top-bar',
				'label'    => __( 'Customize Top Bar', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'agencies' ),
					'off' => esc_attr__( 'No', 'agencies' )
				),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)
			));

			# top-bar-bg-color 			
			AGENCIES_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-bg-color',
				'label'    => __( 'Top Bar BG Color', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => agencies_defaults('top-bar-bg-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-text-color 			
			AGENCIES_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-text-color',
				'label'    => __( 'Top Bar Text Color', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => agencies_defaults('top-bar-text-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-a-color 			
			AGENCIES_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-color',
				'label'    => __( 'Top Bar Anchor Color', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => agencies_defaults('top-bar-a-color'),				
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)
			));

			# top-bar-a-hover-color 			
			AGENCIES_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-hover-color',
				'label'    => __( 'Top Bar Anchor Hover Color', 'agencies' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a:hover' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => agencies_defaults('top-bar-a-hover-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

		# enable-header-left-content	
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-left-content',
			'label'    => __( 'Show Header Left', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)				
		));

		# header-left-content
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-left-content',
			'label'    => __( 'Left Content', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-left-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)
		) );

		# enable-header-right-content	
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-right-content',
			'label'    => __( 'Show Header Right', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header header-align-center fullwidth-menu-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)				
		));

		# header-right-content
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-right-content',
			'label'    => __( 'Right Content', 'agencies' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-right-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'fullwidth-header header-align-left fullwidth-menu-header') ),
			)
		) );

# Header Background Settings
	AGENCIES_Kirki::add_section( 'dt_site_header_bg_section', array(
		'title' => __( 'Header Background', 'agencies' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 2
	) );

		# customize-header-bg
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-header-bg',
			'label'    => __( 'Customize Background ?', 'agencies' ),
			'section'  => 'dt_site_header_bg_section',
			'default'  => agencies_defaults('customize-header-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)						
		));

		# header-bg-color
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'header-bg-color',
			'label'    => __( 'Background Color', 'agencies' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '.main-header-wrapper, .is-sticky .main-header-wrapper, .fullwidth-header .main-header-wrapper, .boxed-header .main-header, .boxed-header .is-sticky .main-header-wrapper, .header-align-left.fullwidth-menu-header .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .is-sticky .menu-wrapper, .standard-header .is-sticky .main-header-wrapper, .two-color-header .main-header-wrapper:before, .header-on-slider .is-sticky .main-header-wrapper, .left-header .main-header-wrapper, .left-header .main-header, .overlay-header .overlay, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-image
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'header-bg-image',
			'label'    => __( 'Background Image', 'agencies' ),
			'description'    => __( 'Add Background Image for breadcrumb', 'agencies' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-position
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-position',
			'label'    => __( 'Background Image Position', 'agencies' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => agencies_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# header-bg-repeat
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'agencies' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => agencies_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));		