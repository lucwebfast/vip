<?php
$config = agencies_kirki_config();

AGENCIES_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => __( 'Additional JS', 'agencies' ),
	'priority' => 210
) );

	# custom-js
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => __( 'Enable Custom JS?', 'agencies' ),
		'default'  => agencies_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'agencies' ),
			'off' => esc_attr__( 'No', 'agencies' )
		)		
	));

	# custom-js
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => __( 'Add Custom JS', 'agencies' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));