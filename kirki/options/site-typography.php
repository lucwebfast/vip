<?php
$config = agencies_kirki_config();

# Menu Typography
AGENCIES_Kirki::add_section( 'dt_menu_typo_section', array(
	'title' => __( 'Menu', 'agencies' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );
	
	# customize-menu-typo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-menu-typo',
		'label'    => __( 'Customize Menu Typo', 'agencies' ),
		'section'  => 'dt_menu_typo_section',
		'default'  => agencies_defaults( 'customize-menu-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)
	));

	# menu-typo
	AGENCIES_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'menu-typo',
		'label'    => __('Settings', 'agencies'),
		'section'  => 'dt_menu_typo_section',
		'output' => array( 
			array( 'element' => '' )
		),
		'default' => agencies_defaults('menu-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-menu-typo', 'operator' => '==', 'value' => '1' )
		)
	));

# Body Content
AGENCIES_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => __( 'Body', 'agencies' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 10
) );
	
	# customize-body-content-typo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => __( 'Customize Content Typo', 'agencies' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => agencies_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)
	));

	# body-content-typo
	AGENCIES_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => __('Settings', 'agencies'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => '' )
		),
		'default' => agencies_defaults('body-content-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

AGENCIES_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => __( 'Headings', 'agencies' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 1
) );
	# Heading Tags
	for( $i=1; $i<=6; $i++ ) {

		# customize-body-heading-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h'.$i.'-typo',
			'label'    => __( 'Customize H', 'agencies' ). $i.__(' Tag', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'default'  => agencies_defaults( 'customize-body-h'.$i.'-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# heading tag typography	
		AGENCIES_Kirki::add_field( $config ,array(
			'type' => 'typography',
			'settings' => 'h'.$i,
			'label'    => __( 'H', 'agencies' ).$i. ' '.__('Tag Settings', 'agencies'),
			'section'  => 'dt_headings_typo_section',
			'output' => array( 
				array( 'element' => 'h'.$i )
			),
			'default' => agencies_defaults('h'.$i),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h'.$i.'-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h'.$i.'-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));		
	}