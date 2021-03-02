<?php
$config = agencies_kirki_config();

# Footer II Layout
	AGENCIES_Kirki::add_section( 'dt_footer_ii_layout', array(
		'title'	=> __( 'Layout', 'agencies' ),
		'description' => __('Footer Column Layout Settings','agencies'),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 1	
	) );
		# show-footer-ii
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer-ii',
			'label'    => __( 'Show Footer Columns ?', 'agencies' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => agencies_defaults('show-footer-ii'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		));

		# footer-ii-columns
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-ii-columns',
			'label'    => __( 'Footer Columns Layout ?', 'agencies' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => agencies_defaults('footer-ii-columns'),
			'choices' => array(
				'1' => get_template_directory_uri().'/kirki/assets/images/columns/one-column.png',
				'2' => get_template_directory_uri().'/kirki/assets/images/columns/one-half-column.png',
				'3' => get_template_directory_uri().'/kirki/assets/images/columns/one-third-column.png',
				'4' => get_template_directory_uri().'/kirki/assets/images/columns/one-fourth-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)
		));

# Footer II Background		
	AGENCIES_Kirki::add_section( 'dt_footer_ii_bg', array(
		'title'	=> __( 'Background', 'agencies' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 2,
	) );

		# customize-footer-ii-bg
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-bg',
			'label'    => __( 'Customize Background ?', 'agencies' ),
			'section'  => 'dt_footer_ii_bg',
			'default'  => agencies_defaults('customize-footer-ii-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-bg-color
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-ii-bg-color',
			'label'    => __( 'Background Color', 'agencies' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-image
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-ii-bg-image',
			'label'    => __( 'Background Image', 'agencies' ),
			'description'    => __( 'Add Background Image for footer', 'agencies' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-position
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-position',
			'label'    => __( 'Background Image Position', 'agencies' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => agencies_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-ii-bg-repeat
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'agencies' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => agencies_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer II Typography
	AGENCIES_Kirki::add_section( 'dt_footer_ii_typo', array(
		'title'	=> __( 'Typography', 'agencies' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 3,
	) );

		# customize-footer-ii-title-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-title-typo',
			'label'    => __( 'Customize Title ?', 'agencies' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => agencies_defaults('customize-footer-ii-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-title-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-title-typo',
			'label'    => __( 'Title Typography', 'agencies' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => agencies_defaults( 'footer-ii-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-ii-title-typo-divider',
			'section'  => 'dt_footer_ii_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-ii-content-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-content-typo',
			'label'    => __( 'Customize Content ?', 'agencies' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => agencies_defaults('customize-footer-ii-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-content-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-content-typo',
			'label'    => __( 'Content Typography', 'agencies' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => agencies_defaults( 'footer-ii-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		