<?php
$config = agencies_kirki_config();

AGENCIES_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => __( 'Site Layout', 'agencies' ),
	'priority' => 20
) );

	# site-responsive
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-responsive',
		'label'    => __( 'Is Site Responsive?', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'default'  => agencies_defaults('site-responsive'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)			
	));	

	# site-layout
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => __( 'Site Layout', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'default'  => agencies_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  get_template_directory_uri().'/kirki/assets/images/site-layout/boxed.png',
			'wide' => get_template_directory_uri().'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => __( 'Customize Boxed Layout?', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	AGENCIES_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => __( 'Background Type', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'agencies' ),
			'upload' => esc_attr__( 'Set Pattern', 'agencies' ),
			'none' => esc_attr__( 'None', 'agencies' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => __( 'Predefined Patterns', 'agencies' ),
		'description'    => __( 'Add Background for body', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern1.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern1.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern2.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern2.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern3.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern3.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern4.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern4.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern5.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern5.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern6.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern6.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern7.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern7.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern8.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern8.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern9.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern9.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern10.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern10.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern11.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern11.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern12.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern12.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern13.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern13.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern14.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern14.jpg',
			get_template_directory_uri().'/kirki/assets/images/site-layout/pattern15.jpg'=> get_template_directory_uri().'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	AGENCIES_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => __( 'Background Image', 'agencies' ),
		'description'    => __( 'Add Background Image for body', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	AGENCIES_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => __( 'Background Position', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => agencies_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	AGENCIES_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => __( 'Background Repeat', 'agencies' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => agencies_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	