<?php
$config = agencies_kirki_config();

# Breadcrumb Settings
AGENCIES_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => __( 'Breadcrumb', 'agencies' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 1,	
) );

	# show-breadcrumb
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'show-breadcrumb',
		'label'    => __( 'Show Breadcrumb', 'agencies' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)
	));

	# breadcrumb-delimiter	
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-delimiter',
		'label'    => __( 'Breadcrumb Delimiter', 'agencies' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => agencies_defaults( 'breadcrumb-delimiter' ),
		'choices'  => array(
			"fa default" => esc_attr__('Default','agencies'),
			"fa fa-angle-double-right" => esc_attr__('Double Angle Right','agencies'),
			"fa fa-sort" => esc_attr__('Sort','agencies'),
			"fa fa-arrow-circle-right" => esc_attr__('Arrow Circle Right','agencies'),
			"fa fa-angle-right" => esc_attr__('Angle Right','agencies'),
			"fa fa-caret-right" => esc_attr__('Caret Right','agencies'),
			"fa fa-arrow-right" => esc_attr__('Arrow Right','agencies'),
			"fa fa-chevron-right" => esc_attr__('Chevron Right','agencies'),
			"fa fa-hand-o-right" => esc_attr__('Hand Right','agencies'),
			"fa fa-plus" => esc_attr__('Plus','agencies'),
			"fa fa-remove" => esc_attr__('Remove','agencies'),
			"fa fa-glass" => esc_attr__('Glass','agencies'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

	# breadcrumb-style	
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-style',
		'label'    => __( 'Breadcrumb Style', 'agencies' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => agencies_defaults( 'breadcrumb-style' ),
		'choices'  => array(
			"default"	=> esc_attr__('Default','agencies'),
			"aligncenter"	=> esc_attr__('Align Center','agencies'),
			"alignright"	=> esc_attr__('Align Right','agencies'),
			"breadcrumb-left"	=> esc_attr__('Left Side Breadcrumb','agencies'),
			"breadcrumb-right"	=> esc_attr__('Right Side Breadcrumb','agencies'),
			"breadcrumb-top-right-title-center"	=> esc_attr__('Top Right Title Center','agencies'),
			"breadcrumb-top-left-title-center"	=> esc_attr__('Top Left Title Center','agencies'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

# Breadcrumb Background Settings
AGENCIES_Kirki::add_section( 'dt_site_breadcrumb_bg_section', array(
	'title' => __( 'Background', 'agencies' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 2,	
) );
		# customize-breadcrumb-bg
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-bg',
			'label'    => __( 'Customize Background ?', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'default'  => agencies_defaults('customize-breadcrumb-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-bg-color
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'breadcrumb-bg-color',
			'label'    => __( 'Background Color', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-image
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'breadcrumb-bg-image',
			'label'    => __( 'Background Image', 'agencies' ),
			'description'    => __( 'Add Background Image for breadcrumb', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-position
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-position',
			'label'    => __( 'Background Image Position', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => agencies_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# breadcrumb-bg-repeat
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => agencies_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Breadcrumb Typography
	AGENCIES_Kirki::add_section( 'dt_site_breadcrumb_typo', array(
		'title'	=> __( 'Typography', 'agencies' ),
		'panel' => 'dt_site_breadcrumb_panel',
		'priority' => 3,
	) );

		# customize-breadcrumb-title-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-title-typo',
			'label'    => __( 'Customize Title ?', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => agencies_defaults('customize-breadcrumb-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-title-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-title-typo',
			'label'    => __( 'Title Typography', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => '.main-title-section h1, h1.simple-title' )
			),
			'default' => agencies_defaults( 'breadcrumb-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		

		# customize-breadcrumb-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-typo',
			'label'    => __( 'Customize Link ?', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => agencies_defaults('customize-breadcrumb-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-typo',
			'label'    => __( 'Link Typography', 'agencies' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => 'div.breadcrumb a' )
			),
			'default' => agencies_defaults( 'breadcrumb-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
			)		
		));										