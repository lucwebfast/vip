<?php
$config = agencies_kirki_config();

# Footer Copyright
	AGENCIES_Kirki::add_section( 'dt_footer_copyright', array(
		'title'	=> __( 'Copyright', 'agencies' ),
		'description' => __('Footer Copyright Settings','agencies'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 1
	) );

		# show-copyright-text
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-copyright-text',
			'label'    => __( 'Show Copyright Text ?', 'agencies' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  agencies_defaults('show-copyright-text'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		) );

		# copyright-text
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'copyright-text',
			'label'    => __( 'Add Content', 'agencies' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  agencies_defaults('copyright-text'),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)
		) );

		# enable-copyright-darkbg
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-copyright-darkbg',
			'label'    => __( 'Enable Copyright Dark BG ?', 'agencies' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  agencies_defaults('enable-copyright-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			)
		) );		

		# copyright-next
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'copyright-next',
			'label'    => __( 'Show Sociable / menu ?', 'agencies' ),
			'description'    => __( 'Add description here.', 'agencies' ),
			'section'  => 'dt_footer_copyright',
			'default'  => agencies_defaults('copyright-next'),
			'choices'  => array(
				'hidden'  => esc_attr__( 'Hide', 'agencies' ),
				'disable'  => esc_attr__( 'Disable', 'agencies' ),
				'sociable' => esc_attr__( 'Show sociable', 'agencies' ),
				'footer-menu' => esc_attr__( 'Show menu', 'agencies' ),
			)
		) );

# Footer Social
	AGENCIES_Kirki::add_section( 'dt_footer_social', array(
		'title'	=> __( 'Social', 'agencies' ),
		'description' => __('Footer Social Icons Settings','agencies'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 2
	) );

		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'sortable',
			'settings' => 'footer-sociables',
			'label'    => __( 'Social Icons Order', 'agencies' ),
			'section'  => 'dt_footer_social',
			'default'  => agencies_defaults('footer-sociables'),
			'choices'  => array(
				"delicious"		=>	esc_attr__( 'Delicious', 'agencies' ),
				"deviantart"	=>	esc_attr__( 'Deviantart', 'agencies' ),
				"digg"			=>	esc_attr__( 'Digg', 'agencies' ),
				"dribbble"		=>	esc_attr__( 'Dribbble', 'agencies' ),
				"envelope-open"	=>	esc_attr__( 'Envelope', 'agencies' ),
				"facebook"		=>	esc_attr__( 'Facebook', 'agencies' ),
				"flickr"		=>	esc_attr__( 'Flickr', 'agencies' ),
				"google-plus"	=>	esc_attr__( 'Google Plus', 'agencies' ),
				"comment"		=>	esc_attr__( 'GTalk', 'agencies' ),
				"instagram"		=>	esc_attr__( 'Instagram', 'agencies' ),
				"lastfm"		=>	esc_attr__( 'Lastfm', 'agencies' ),
				"linkedin"		=>	esc_attr__( 'Linkedin', 'agencies' ),
				"picasa"		=>  esc_attr__( 'Picasa', 'agencies' ),
				"myspace"		=>	esc_attr__( 'Myspace', 'agencies' ),
				"pinterest"		=>	esc_attr__( 'Pinterest', 'agencies' ),
				"reddit"		=>	esc_attr__( 'Reddit', 'agencies' ),
				"rss"			=>	esc_attr__( 'RSS', 'agencies' ),
				"skype"			=>	esc_attr__( 'Skype', 'agencies' ),
				"stumbleupon"	=>	esc_attr__( 'Stumbleupon', 'agencies' ),
				"technorati"	=>	esc_attr__( 'Technorati', 'agencies' ),
				"tumblr"		=>	esc_attr__( 'Tumblr', 'agencies' ),
				"twitter"		=>	esc_attr__( 'Twitter', 'agencies' ),
				"viadeo"		=>	esc_attr__( 'Viadeo', 'agencies' ),
				"vimeo"			=>	esc_attr__( 'Vimeo', 'agencies' ),
				"yahoo"			=>	esc_attr__( 'Yahoo', 'agencies' ),
				"youtube"		=>	esc_attr__( 'Youtube', 'agencies' ),
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'sociable' ),
			)
		) );

# Footer Copyright Background		
	AGENCIES_Kirki::add_section( 'dt_footer_copyright_bg', array(
		'title'	=> __( 'Background', 'agencies' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 3,
	) );

		# customize-footer-copyright-bg
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-bg',
			'label'    => __( 'Customize Background ?', 'agencies' ),
			'section'  => 'dt_footer_copyright_bg',
			'default'  => agencies_defaults('customize-footer-copyright-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )
				)
			)
		));

		# footer-copyright-bg-color
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-copyright-bg-color',
			'label'    => __( 'Background Color', 'agencies' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )				
				)
			)
		));

		# footer-copyright-bg-image
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-copyright-bg-image',
			'label'    => __( 'Background Image', 'agencies' ),
			'description'    => __( 'Add Background Image for footer', 'agencies' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				)
			)
		));

		# footer-copyright-bg-position
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-position',
			'label'    => __( 'Background Image Position', 'agencies' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => agencies_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )				
			)			
		));

		# footer-copyright-bg-repeat
		AGENCIES_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'agencies' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => agencies_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )
			)			
		));

# Footer Copyright Typography
	AGENCIES_Kirki::add_section( 'dt_footer_copyright_typo', array(
		'title'	=> __( 'Typography', 'agencies' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 4,
	) );

		# customize-footer-copyright-text-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-text-typo',
			'label'    => __( 'Customize Copyright Text ?', 'agencies' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => agencies_defaults('customize-footer-copyright-text-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-copyright-text-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-copyright-text-typo',
			'label'    => __( 'Text Typography', 'agencies' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '.footer-copyright' )
			),
			'default' => agencies_defaults( 'footer-copyright-text-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-copyright-text-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		AGENCIES_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-copyright-text-typo-divider',
			'section'  => 'dt_footer_copyright_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));		

		# customize-footer-menu-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-menu-typo',
			'label'    => __( 'Customize Footer Menu ?', 'agencies' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => agencies_defaults('customize-footer-menu-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'agencies' ),
				'off' => esc_attr__( 'No', 'agencies' )
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));

		# footer-menu-typo
		AGENCIES_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-menu-typo',
			'label'    => __( 'Menu Typography', 'agencies' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => agencies_defaults( 'footer-menu-typo' ),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' ),
				array( 'setting' => 'customize-footer-menu-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		