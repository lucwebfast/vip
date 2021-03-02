<?php
function agencies_kirki_config() {
	return 'agencies_kirki_config';
}

function agencies_defaults( $key = '' ) {
	$defaults = array();

	$defaults['predefined-skin'] = 'deeppurple';

	$defaults['site-responsive'] = '1';
	$defaults['site-layout'] = 'wide';

	$defaults['site_icon'] = get_template_directory_uri().'/images/favicon.ico';

	# use-custom-logo
	$defaults['use-custom-logo'] = '1';

	# custom-logo
	$defaults['custom-logo'] = get_template_directory_uri().'/images/logo.png';

	# custom-logo
	$defaults['custom-dark-logo'] = get_template_directory_uri().'/images/light-logo.png';

	$defaults['header-type'] = 'fullwidth-header';
	$defaults['enable-sticy-nav'] = '1';
	$defaults['header-position'] = 'on slider';
	$defaults['header-transparency'] = 'transparent-header';
	$defaults['enable-header-darkbg'] = '0';

	$defaults['enable-header-left-content'] = '0';
	$defaults['enable-header-right-content'] = '0';
	$defaults['enable-top-bar-content'] = '1';
	
	#Breadcrumb
		$defaults['show-breadcrumb'] = '1';
		$defaults['breadcrumb-delimiter'] = 'fa default';
		$defaults['breadcrumb-style'] = 'aligncenter';
		$defaults['customize-breadcrumb-title-typo'] = '0';
		$defaults['breadcrumb-title-typo'] = array( 
			'font-family' => 'Montserrat',
			'variant' => 'regular',
			'font-size' => '30px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-transform' => 'none' );
		$defaults['customize-breadcrumb-typo'] = '0';
		$defaults['breadcrumb-typo'] = array( 
			'font-family' => 'Open Sans',
			'variant' => 'regular',
			'font-size' => '16px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#777777',
			'text-transform' => 'none' );
		
	/**
	 * MENU
	 */
	$defaults['sub-menu-box-h-shadow'] =  5;
	$defaults['sub-menu-box-v-shadow'] =  5;
	$defaults['sub-menu-box-blur-shadow'] =  5;
	$defaults['sub-menu-box-spread-shadow'] =  5;
	$defaults['sub-menu-style'] = ' menu-links-with-arrow single';
	

	/*
	 * FOOTER SETTINGS
	 */

		# show-footer
		$defaults['show-footer'] = '1';

		# footer-columns
		$defaults['footer-columns'] = '3';

		$defaults['footer-sociables'] = array( 'delicious', 'dribbble', 'facebook');

		# show-footer
		$defaults['enable-footer-darkbg'] = '1';

		# customize-footer-title-typo
		$defaults['customize-footer-title-typo'] = '0';

		#footer-title-typo
		$defaults['footer-title-typo'] = array( 
			'font-family' => 'Montserrat',
			'variant' => 'regular',
			'subsets' => array( 'latin-ext' ),
			'font-size' => '24px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#333333',
			'text-align' => 'left',
			'text-transform' => 'none' );

		# customize-footer-content-typo
		$defaults['customize-footer-content-typo'] = '0';

		#footer-content-typo
		$defaults['footer-content-typo'] = array( 
			'font-family' => 'Open Sans',
			'variant' => 'regular',
			'font-size' => '16px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#777777',
			'text-align' => 'left',
			'text-transform' => 'none' );

		#footer-ii-content-typo
		$defaults['footer-ii-content-typo'] = array( 
			'font-family' => 'Open Sans',
			'variant' => 'regular',
			'font-size' => '16px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#777777',
			'text-align' => 'left',
			'text-transform' => 'none' );		

		# show-copyright-text
		$defaults['show-copyright-text'] = '1';

		# copyright-text
		$defaults['copyright-text'] = 'Copyright &copy; 2017, <a title="" href="http://themeforest.net/user/designthemes">DesignThemes</a>  [dt_sc_custom_menu]';

		# enable-copyright-darkbg
		$defaults['enable-copyright-darkbg'] = '1';

		# customize-footer-copyright-text-typo
		$defaults['customize-footer-copyright-text-typo'] = '0';

		# footer-copyright-text-typo
		$defaults['footer-copyright-text-typo'] = array( 
			'font-family' => 'Open Sans',
			'variant' => 'regular',
			'font-size' => '16px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#777777',
			'text-align' => 'left',
			'text-transform' => 'none' );

		# customize-footer-menu-typo
		$defaults['customize-footer-copyright-text-typo'] = '0';

		# footer-menu-typo
		$defaults['footer-menu-typo'] = array( 
			'font-family' => 'Open Sans',
			'variant' => 'regular',
			'font-size' => '16px',
			'line-height' => '1.5',
			'letter-spacing' => '0',
			'color' => '#777777',
			'text-align' => 'left',
			'text-transform' => 'none' );

	# copyright-next
	$defaults['copyright-next'] = 'hide';


	# WooCommerce
	$defaults['product-style'] = 'type14';
	$defaults['product-per-page'] = '12';
	$defaults['product-per-row'] = 'one-third-column';

	$defaults['product-page-layout'] = 'content-full-width';
	$defaults['show-product-page-left-sidebar'] = '1';
	$defaults['show-product-page-right-sidebar'] = '1';

	$defaults['product-category-page-layout'] = 'content-full-width';
	$defaults['show-product-category-page-left-sidebar'] = '1';
	$defaults['show-product-category-page-right-sidebar'] = '1';	

	$defaults['product-tag-page-layout'] = 'content-full-width';
	$defaults['show-product-tag-page-left-sidebar'] = '1';
	$defaults['show-product-tag-page-right-sidebar'] = '1';

	# Social
	$defaults['social-facebook'] = '#';
	$defaults['social-twitter'] = '#';
	$defaults['social-google-plus'] = '#';
	$defaults['social-instagram'] = '#';

	# Typography
	$defaults['menu-typo'] = array(
		'font-family' => 'Open Sans',
		'variant' => 'semi-bold',
		'font-size' => '18px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#000000',
		'text-transform' => 'none'
	);

	$defaults['body-content-typo'] = array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '16px',
		'line-height' => '28px',
		'letter-spacing' => '0',
		'color' => '#777777'
	);
	
	$defaults['h1'] = array(
		'font-family' => 'Montserrat',
		'variant' => 'regular',
		'font-size' => '36px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#111111',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h2'] = array(
		'font-family' => 'Montserrat',
		'variant' => 'regular',
		'font-size' => '30px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#111111',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h3'] = array(
		'font-family' => 'Montserrat',
		'variant' => 'regular',
		'font-size' => '24px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#111111',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h4'] = array(
		'font-family' => 'Montserrat',
		'variant' => 'regular',
		'font-size' => '22px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#111111',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h5'] = array(
		'font-family' => 'Montserrat',
		'variant' => 'regular',
		'font-size' => '20px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#111111',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);

	$defaults['h6'] = array(
		'font-family' => 'Montserrat',
		'variant' => 'regular',
		'font-size' => '18px',
		'line-height' => '1.5',
		'letter-spacing' => '0',
		'color' => '#111111',
		'text-align' => 'initial',
		'text-transform' => 'none'
	);				

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function agencies_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','agencies'),
		"top center"    => esc_attr__('Top Center','agencies'),
		"top right"     => esc_attr__('Top Right','agencies'),
		"center left"   => esc_attr__('Center Left','agencies'),
		"center center" => esc_attr__('Center Center','agencies'),
		"center right"  => esc_attr__('Center Right','agencies'),
		"bottom left"   => esc_attr__('Bottom Left','agencies'),
		"bottom center" => esc_attr__('Bottom Center','agencies'),
		"bottom right"  => esc_attr__('Bottom Right','agencies'),
	);

	return $positions;
}

function agencies_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','agencies'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','agencies'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','agencies'),
		"no-repeat" => esc_attr__('No Repeat','agencies')
	);

	return $image_repeats;
}

function agencies_border_styles() {

	$image_repeats = array(
		"dotted" => esc_attr__('Dotted','agencies'),
		"dashed" => esc_attr__('Dashed','agencies'),
		"solid"	 => esc_attr__('Solid','agencies'),
		"double" => esc_attr__('Double','agencies'),
		"groove" => esc_attr__('Groove','agencies'),
		"ridge"	 => esc_attr__('Ridge','agencies'),
	);

	return $image_repeats;
}

function agencies_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','agencies'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'agencies'),
        "bounce"             =>  esc_attr__("bounce",'agencies'),
        "bounceIn"           =>  esc_attr__("bounceIn",'agencies'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'agencies'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'agencies'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'agencies'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'agencies'),
        "bounceOut"          =>  esc_attr__("bounceOut",'agencies'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'agencies'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'agencies'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'agencies'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'agencies'),
        "expandOpen"         =>  esc_attr__("expandOpen",'agencies'),
        "expandUp"           =>  esc_attr__("expandUp",'agencies'),
        "fadeIn"             =>  esc_attr__("fadeIn",'agencies'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'agencies'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'agencies'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'agencies'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'agencies'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'agencies'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'agencies'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'agencies'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'agencies'),
        "fadeOut"            =>  esc_attr__("fadeOut",'agencies'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'agencies'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'agencies'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'agencies'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'agencies'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'agencies'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'agencies'),
        "flash"              =>  esc_attr__("flash",'agencies'),
        "flip"               =>  esc_attr__("flip",'agencies'),
        "flipInX"            =>  esc_attr__("flipInX",'agencies'),
        "flipInY"            =>  esc_attr__("flipInY",'agencies'),
        "flipOutX"           =>  esc_attr__("flipOutX",'agencies'),
        "flipOutY"           =>  esc_attr__("flipOutY",'agencies'),
        "floating"           =>  esc_attr__("floating",'agencies'),
        "hatch"              =>  esc_attr__("hatch",'agencies'),
        "hinge"              =>  esc_attr__("hinge",'agencies'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'agencies'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'agencies'),
        "pullDown"           =>  esc_attr__("pullDown",'agencies'),
        "pullUp"             =>  esc_attr__("pullUp",'agencies'),
        "pulse"              =>  esc_attr__("pulse",'agencies'),
        "rollIn"             =>  esc_attr__("rollIn",'agencies'),
        "rollOut"            =>  esc_attr__("rollOut",'agencies'),
        "rotateIn"           =>  esc_attr__("rotateIn",'agencies'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'agencies'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'agencies'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'agencies'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'agencies'),
        "rotateOut"          =>  esc_attr__("rotateOut",'agencies'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'agencies'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'agencies'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'agencies'),
        "shake"              =>  esc_attr__("shake",'agencies'),
        "slideDown"          =>  esc_attr__("slideDown",'agencies'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'agencies'),
        "slideLeft"          =>  esc_attr__("slideLeft",'agencies'),
        "slideRight"         =>  esc_attr__("slideRight",'agencies'),
        "slideUp"            =>  esc_attr__("slideUp",'agencies'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'agencies'),
        "stretchRight"       =>  esc_attr__("stretchRight",'agencies'),
        "swing"              =>  esc_attr__("swing",'agencies'),
        "tada"               =>  esc_attr__("tada",'agencies'),
        "tossing"            =>  esc_attr__("tossing",'agencies'),
        "wobble"             =>  esc_attr__("wobble",'agencies'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'agencies'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'agencies'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'agencies')
    );

	return $animations;
}