<?php
$config = agencies_kirki_config();

AGENCIES_Kirki::add_section( 'dt_sociable_section', array(
	'title' => __( 'Site Sociable', 'agencies' ),
	'priority' => 190
) );

	# Delicious
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-delicious',
		'label'	   => __( 'Delicious', 'agencies' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'	
	));

	# Deviantart 
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-deviantart',
		'label'	   => __( 'Deviantart', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Digg 
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-digg',
		'label'	   => __( 'Digg', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Dribbble
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-dribbble',
		'label'	   => __( 'Dribbble', 'agencies' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Envelope
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-envelope',
		'label'	   => __( 'Envelope', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));			

	# Facebook
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-facebook',
		'label'	   => __( 'Facebook', 'agencies' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Flickr
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-flickr',
		'label'    => __( 'Flickr', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Google Plus
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-google-plus',
		'label'	   => __( 'Google Plus', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# GTalk
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-gtalk',
		'label'	   => __( 'GTalk', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Instagram
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-instagram',
		'label'	   => __( 'Instagram', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Lastfm
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-lastfm',
		'label'	   => __( 'Lastfm', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Linkedin
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-linkedin',
		'label'    => __( 'Linkedin', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Myspace
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-myspace',
		'label'	   => __( 'Myspace', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));							

	# Picasa
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-picasa',
		'label'    => __( 'Picasa', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Pinterest
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-pinterest',
		'label'	   => __( 'Pinterest', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Reddit
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-reddit',
		'label'	   => __( 'Reddit', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# RSS
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-rss',
		'label'	   => __( 'RSS', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Skype
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-skype',
		'label'	   => __( 'Skype', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Stumbleupon 
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-stumbleupon',
		'label'	   => __( 'Stumbleupon', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Technorati
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-technorati',
		'label'    => __( 'Technorati', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Tumblr
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-tumblr',
		'label'	   => __( 'Tumblr', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Twitter 
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-twitter',
		'label'	   => __( 'Twitter', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Viadeo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-viadeo',
		'label'	   => __( 'Viadeo', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Vimeo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-vimeo',
		'label'	   => __( 'Vimeo', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Yahoo
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-yahoo',
		'label'	   => __( 'Yahoo', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));

	# Youtube
	AGENCIES_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-youtube',
		'label'	   => __( 'Youtube', 'agencies' ),
		'section'  => 'dt_sociable_section',
	));