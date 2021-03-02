<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = agencies_kirki_config();

add_action('customize_register', 'agencies_customize_register');
function agencies_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'agencies_enqueue_customizer_stylesheet' );
function agencies_enqueue_customizer_stylesheet() {
	wp_register_style( 'agencies-customizer-css', get_template_directory_uri().'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'agencies-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'agencies_enqueue_customizer_script' );
function agencies_enqueue_customizer_script() {
	wp_register_script( 'agencies-customizer-js', get_template_directory_uri().'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'agencies-customizer-js' );
}

# Theme Customizer Begins
AGENCIES_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => __( 'Logo ?', 'agencies' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => agencies_defaults('use-custom-logo'),
			'description' => __('This is test description','agencies'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'agencies' ),
				'off' => esc_attr__( 'Site Title', 'agencies' )
			)			
		) );

		# custom-logo
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => __( 'Logo', 'agencies' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => agencies_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# custom-dark-logo
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-dark-logo',
			'label'    => __( 'Dark Logo', 'agencies' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => agencies_defaults( 'custom-dark-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# site-loader
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'switch',
			'settings' => 'use-site-loader',
			'label'    => __( 'Use Site Loader?', 'agencies' ),
			'section'  => 'title_tagline',
			'priority' => 100,
			'default' => agencies_defaults( 'use-site-loader' )
		));

	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Site Breadcrumb
	AGENCIES_Kirki::add_panel( 'dt_site_breadcrumb_panel', array(
		'title' => __( 'Site Breadcrumb', 'agencies' ),
		'description' => __('Site Breadcrumb','agencies'),
		'priority' => 25
	) );
	require_once get_template_directory() . '/kirki/options/site-breadcrumb.php';
	
	# Site Header
	AGENCIES_Kirki::add_panel( 'dt_site_header_panel', array(
		'title' => __( 'Site Header', 'agencies' ),
		'description' => __('Site Header','agencies'),
		'priority' => 30
	) );
	require_once get_template_directory() . '/kirki/options/site-header.php';

	# Site Menu
	AGENCIES_Kirki::add_panel( 'dt_site_menu_panel', array(
		'title' => __( 'Site Menu', 'agencies' ),
		'description' => __('Site Menu','agencies'),
		'priority' => 35
	) );
	require_once get_template_directory() . '/kirki/options/site-menu/navigation.php';		

	# Site Footer I
		AGENCIES_Kirki::add_panel( 'dt_site_footer_i_panel', array(
			'title' => __( 'Site Footer I', 'agencies' ),
			'priority' => 40
		) );
		require_once get_template_directory() . '/kirki/options/site-footer-i.php';

	# Site Footer II
	AGENCIES_Kirki::add_panel( 'dt_site_footer_ii_panel', array(
		'title' => __( 'Site Footer II', 'agencies' ),
		'priority' => 45
	) );
	#require_once get_template_directory() . '/kirki/options/site-footer-ii.php';

	# Site Footer Copyright
	AGENCIES_Kirki::add_panel( 'dt_footer_copyright_panel', array(
		'title' => __( 'Site Copyright', 'agencies' ),
		'priority' => 50
	) );
	require_once get_template_directory() . '/kirki/options/site-footer-copyright.php';

	# Site Sociable
	require_once get_template_directory() . '/kirki/options/site-sociable.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	AGENCIES_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => __( 'Typography', 'agencies' ),
		'description' => __('Typography Settings','agencies'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends