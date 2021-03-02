<?php
/* ---------------------------------------------------------------------------
 * Loading Theme Scripts
 * --------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', 'agencies_enqueue_scripts');
function agencies_enqueue_scripts() {

	// comment reply script ------------------------------------------------------
	if (is_singular() AND comments_open()):
		 wp_enqueue_script( 'comment-reply' );
	endif;

	// scipts variable -----------------------------------------------------------
	$loadingbar = (int) get_theme_mod( 'use-site-loader', agencies_defaults('use-site-loader') );
	$loadingbar = !empty( $loadingbar ) ?  "enable" : "disable";
	
	$stickynav = (int) get_theme_mod( 'enable-sticy-nav', agencies_defaults('enable-sticy-nav') );
	$stickynav = !empty( $stickynav ) ?  "enable" : "disable";

	if(is_rtl()) $rtl = true; else $rtl = false;

	$htype = get_theme_mod( 'header-type', agencies_defaults('header-type') );
	$stickyele = "";
	switch( $htype ){
		case 'fullwidth-header':
		case 'boxed-header':
		case 'split-header fullwidth-header':
		case 'split-header boxed-header':
		case 'two-color-header':
			$stickyele = ".main-header-wrapper";
		break;
			
		case 'fullwidth-header header-align-center fullwidth-menu-header':
		case 'fullwidth-header header-align-left fullwidth-menu-header':
			$stickyele = ".menu-wrapper";
		break;

		case 'left-header':
		case 'left-header-boxed':
		case 'creative-header':
		case 'overlay-header':
			$stickyele = ".menu-wrapper";
			$stickynav = "disable";
		break;
	}

	wp_enqueue_script('ui.totop', get_theme_file_uri('/framework/js/jquery.ui.totop.min.js'), array(), false, true);
	wp_enqueue_script('agencies-jqplugins', get_theme_file_uri('/framework/js/jquery.plugins.js'), array(), false, true);
	wp_enqueue_script('visualNav', get_theme_file_uri('/framework/js/jquery.visualNav.min.js'), array(), false, true);

	if(class_exists('Tribe__Events__Pro__Main')) {
		if(!tribe_is_photo()) {
			wp_enqueue_script('isotope', get_theme_file_uri('/framework/js/isotope.pkgd.min.js'), array(), false, true);
		}
	} else {
		wp_enqueue_script('isotope', get_theme_file_uri('/framework/js/isotope.pkgd.min.js'), array(), false, true);
	}

	if( $loadingbar == 'enable' ) {
		wp_enqueue_script('pace', get_theme_file_uri('/framework/js/pace.min.js'),array(),false,true);
		wp_localize_script('pace', 'paceOptions', array(
			'restartOnRequestAfter' => 'false',
			'restartOnPushState' => 'false'
		));
	}

	wp_enqueue_script('agencies-jqcustom', get_theme_file_uri('/framework/js/custom.js'), array(), false, true);

	wp_localize_script('agencies-jqplugins', 'dttheme_urls', array(
		'theme_base_url' => esc_js(AGENCIES_THEME_URI),
		'framework_base_url' => esc_js(AGENCIES_THEME_URI).'/framework/',
		'ajaxurl' => admin_url('admin-ajax.php'),
		'url' => get_site_url(),
		'stickynav' => esc_js($stickynav),
		'stickyele' => esc_js($stickyele),
		'isRTL' => esc_js($rtl),
		'loadingbar' => esc_js($loadingbar),
		'advOptions' => esc_html__('Show Advanced Options', 'agencies'),
	));

	$picker = cs_get_option( 'enable-stylepicker' );
	if( isset($picker) ) {
		wp_enqueue_script('cookie', get_theme_file_uri('/framework/js/jquery.cookie.min.js'),array(),false,true);
		wp_enqueue_script('agencies-jqcpanel', get_theme_file_uri('/framework/js/controlpanel.js'),array(),false,true);
	}
}

/* ---------------------------------------------------------------------------
 * Meta tag for viewport scale
* --------------------------------------------------------------------------- */
function agencies_viewport() {
	$enable = (int) get_theme_mod( 'site-responsive', agencies_defaults('site-responsive') );
	if( $enable ){
		echo "<meta name='viewport' content='width=device-width, initial-scale=1'>\r";
	}
}

/* ---------------------------------------------------------------------------
 * Scripts of Custom JS from Theme Back-End
* --------------------------------------------------------------------------- */
function agencies_scripts_custom() {
	
	$enable_custom_js = (int) get_theme_mod( 'enable-custom-js', agencies_defaults('enable-custom-js') );
	$custom_js = get_theme_mod( 'custom-js', '');
	
	if( !empty( $enable_custom_js ) && !empty( $custom_js ) ){
		wp_add_inline_script('agencies-jqcustom', agencies_wp_kses(stripslashes($custom_js)) ,'after');
	}
}
add_action('wp_enqueue_scripts', 'agencies_scripts_custom', 100);

/* ---------------------------------------------------------------------------
 * Loading Theme Styles
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'agencies_enqueue_styles', 101 );
function agencies_enqueue_styles() {

	// site icons ---------------------------------------------------------------
	if ( ! has_site_icon() ):
		$url = AGENCIES_THEME_URI . "/images/favicon.ico";
		echo "<link href='$url' rel='shortcut icon' type='image/x-icon' />\n";		
	endif;

	// wp_enqueue_style ---------------------------------------------------------------
	// wp_enqueue_style( 'agencies', get_stylesheet_uri(), false, AGENCIES_THEME_VERSION, 'all' );

	wp_enqueue_style( 'agencies-optimized',   get_theme_file_uri('/css/style-optimized.css'), false, AGENCIES_THEME_VERSION, 'all' );

	// wp_enqueue_style( 'agencies-base',		  get_theme_file_uri('/css/base.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-grid', 		  get_theme_file_uri('/css/grid.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// // wp_enqueue_style( 'agencies-widget', 	  get_theme_file_uri('/css/widget.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// // wp_enqueue_style( 'agencies-layout', 	  get_theme_file_uri('/css/layout.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-blog',	      get_theme_file_uri('/css/blog.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// // wp_enqueue_style( 'agencies-portfolio',	  get_theme_file_uri('/css/portfolio.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// // wp_enqueue_style( 'agencies-contact',	  get_theme_file_uri('/css/contact.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-custom-class', get_theme_file_uri('/css/custom-class.css'), false, AGENCIES_THEME_VERSION, 'all' );

	wp_enqueue_style( 'prettyphoto',	get_theme_file_uri('/css/prettyPhoto.css'), false, AGENCIES_THEME_VERSION, 'all' );

	if (function_exists('bp_add_cover_image_inline_css')) {
		$inline_css = bp_add_cover_image_inline_css( true );
		wp_add_inline_style( 'bp-parent-css', strip_tags( $inline_css['css_rules'] ) );
	}

	// icon fonts ---------------------------------------------------------------------
	wp_enqueue_style ( 'custom-font-awesome',		get_theme_file_uri('/css/font-awesome.min.css'), array (), '4.3.0' );
	wp_enqueue_style ( 'pe-icon-7-stroke',			get_theme_file_uri('/css/pe-icon-7-stroke.css'), array () );
	// wp_enqueue_style ( 'stroke-gap-icons-style',	get_theme_file_uri('/css/stroke-gap-icons-style.css'), array () );
	wp_enqueue_style ( 'icon-moon',					get_theme_file_uri('/css/icon-moon.css'), array () );
	// wp_enqueue_style ( 'material-design-iconic',	get_theme_file_uri('/css/material-design-iconic-font.min.css'), array () );

	// comingsoon css
	if( cs_get_option( 'enable-comingsoon' ) )
		wp_enqueue_style("agencies-comingsoon",  get_theme_file_uri("/css/comingsoon.css"), false, AGENCIES_THEME_VERSION, 'all' );

	// notfound css
	if ( is_404() )
		wp_enqueue_style("agencies-notfound",	get_theme_file_uri("/css/notfound.css"), false, AGENCIES_THEME_VERSION, 'all' );

	// loader css
	$loadingbar = (int) get_theme_mod( 'use-site-loader', agencies_defaults('use-site-loader') );
	if( !empty( $loadingbar ) )
		wp_enqueue_style("agencies-loader", 		get_theme_file_uri("/css/loaders.css"), false, AGENCIES_THEME_VERSION, 'all' );

	// woocommerce css
	if( function_exists( 'is_woocommerce' ) )
		wp_enqueue_style( 'agencies-woo', 		get_theme_file_uri('/css/woocommerce.css'), 'woocommerce-general-css', AGENCIES_THEME_VERSION, 'all' );
	
	// store locator css
	if( class_exists( 'WP_Store_locator' ) )
		wp_enqueue_style( '_prefix_wpsl-dtstyle', 		get_theme_file_uri('/css/store-locator.css'), '', AGENCIES_THEME_VERSION, 'all' );

	// skin css
	$use_predefined_skin = (int) get_theme_mod( 'use-predefined-skin', '1' );
	if( !empty( $use_predefined_skin ) ) :
		$skin = get_theme_mod( 'predefined-skin', agencies_defaults('predefined-skin') );
		wp_enqueue_style("skin", 	get_theme_file_uri("/css/skins/$skin/style.css"));
	endif;

	// tribe-events -------------------------------------------------------------------
	wp_enqueue_style( 'agencies-customevent', 		get_theme_file_uri('/tribe-events/custom.css'), false, AGENCIES_THEME_VERSION, 'all' );
	
	// Woocommerce css ---------------------------------------------------------------------
	// wp_enqueue_style( 'agencies-woodefault', get_theme_file_uri('/css/woocommerce/woocommerce-performance.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-woodefault', get_theme_file_uri('/css/woocommerce/woocommerce-default.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype1', 	 get_theme_file_uri('/css/woocommerce/type1.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype2', 	 get_theme_file_uri('/css/woocommerce/type2.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype3', 	 get_theme_file_uri('/css/woocommerce/type3.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype4', 	 get_theme_file_uri('/css/woocommerce/type4.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype5', 	 get_theme_file_uri('/css/woocommerce/type5.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype6', 	 get_theme_file_uri('/css/woocommerce/type6.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype7', 	 get_theme_file_uri('/css/woocommerce/type7.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype8', 	 get_theme_file_uri('/css/woocommerce/type8.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype9', 	 get_theme_file_uri('/css/woocommerce/type9.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype10',  get_theme_file_uri('/css/woocommerce/type10.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype11',  get_theme_file_uri('/css/woocommerce/type11.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype12',  get_theme_file_uri('/css/woocommerce/type12.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype13',  get_theme_file_uri('/css/woocommerce/type13.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype14',  get_theme_file_uri('/css/woocommerce/type14.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype15',  get_theme_file_uri('/css/woocommerce/type15.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype16',  get_theme_file_uri('/css/woocommerce/type16.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype17',  get_theme_file_uri('/css/woocommerce/type17.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype18',  get_theme_file_uri('/css/woocommerce/type18.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype19',  get_theme_file_uri('/css/woocommerce/type19.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype20',  get_theme_file_uri('/css/woocommerce/type20.css'), false, AGENCIES_THEME_VERSION, 'all' );
	// wp_enqueue_style( 'agencies-wootype21',  get_theme_file_uri('/css/woocommerce/type21.css'), false, AGENCIES_THEME_VERSION, 'all' );
	
	
	// responsive ---------------------------------------------------------------------
	$responsive = (int) get_theme_mod( 'site-responsive', agencies_defaults('site-responsive') );
	if( !empty( $responsive ) )
		wp_enqueue_style( "agencies-responsive",  	get_theme_file_uri('/css/responsive.css'), false, AGENCIES_THEME_VERSION, 'all' );

	// custom css ---------------------------------------------------------------------
	wp_enqueue_style( 'agencies-custom', 			get_theme_file_uri('/css/custom.css'), false, AGENCIES_THEME_VERSION, 'all' );

	// jquery scripts --------------------------------------------
	wp_enqueue_script('modernizr-custom', 	get_theme_file_uri('/framework/js/modernizr.custom.js'), array('jquery'));

	// rtl ----------------------------------------------------------------------------
	if(is_rtl()) wp_enqueue_style('agencies-rtl', 	get_theme_file_uri('/css/rtl.css'), false, AGENCIES_THEME_VERSION, 'all' );

	# Sub Menu Wrapper Shadow
	$enable_sub_menu_shadow = (int) get_theme_mod( 'allow-sub-menu-box-shadow', agencies_defaults('allow-sub-menu-box-shadow') );
	if( !empty( $enable_sub_menu_shadow ) ) {

		$h_shadow = (int) get_theme_mod( 'sub-menu-box-h-shadow', agencies_defaults('sub-menu-box-h-shadow') );
		$h_shadow .= 'px ';

		$v_shadow = (int) get_theme_mod( 'sub-menu-box-v-shadow', agencies_defaults('sub-menu-box-v-shadow') );
		$v_shadow .= 'px ';

		$blur_shadow = (int) get_theme_mod( 'sub-menu-box-blur-shadow', agencies_defaults('sub-menu-box-blur-shadow') );
		$blur_shadow .= 'px ';

		$spread_shadow = (int) get_theme_mod( 'sub-menu-box-spread-shadow', agencies_defaults('sub-menu-box-spread-shadow') );
		$spread_shadow .= 'px ';

		$color_shadow = get_theme_mod( 'sub-menu-box-shadow-color', '' );

		$inset_shadow = (int) get_theme_mod( 'sub-menu-box-shadow-inset', agencies_defaults('sub-menu-box-shadow-inset') );
		$inset_shadow = !empty( $inset_shadow ) ? ' inset' : '';

		$css = '#main-menu ul li.menu-item-simple-parent ul, #main-menu .menu-item-megamenu-parent .megamenu-child-container { box-shadow:'.$h_shadow.$v_shadow.$blur_shadow.$spread_shadow.$color_shadow.$inset_shadow.'}';

		wp_add_inline_style( 'agencies', $css );		
	}

	# Sub Menu Wrapper Gradient BG
	$enable_sub_menu_bg = (int) get_theme_mod( 'allow-sub-menu-bg-color', agencies_defaults('allow-sub-menu-bg-color') );
	$sub_menu_bg_type = get_theme_mod( 'sub-menu-bg-color-type', agencies_defaults('sub-menu-bg-color-type') );
	
	if( !empty( $enable_sub_menu_bg ) && ( $sub_menu_bg_type == 'gradient' ) ) {

		$c1 = get_theme_mod( 'sub-menu-bg-color-1', '' );
		$c1_stop = get_theme_mod( 'sub-menu-bg-color-1-stop', '' );
		$c2 = get_theme_mod( 'sub-menu-bg-color-2', '' );
		$c2_stop = get_theme_mod( 'sub-menu-bg-color-2-stop', '' );
		$dir = get_theme_mod( 'sub-menu-bg-color-direction', 'left-right' );

		$dir_1 = $dir_2 = '';
		if( $dir == 'to top' ) {
			$dir_1 = 'bottom';
			$dir_2 =  'left bottom, left top';
		} elseif( $dir == 'to bottom' ) {
			$dir_1 = 'top';
			$dir_2 =  'left top, left bottom';
		} elseif( $dir == 'to right' ) {
			$dir_1 = 'left';
			$dir_2 =  'left top, right top';
		} elseif( $dir == 'to left' ) {
			$dir_1 = 'right';
			$dir_2 =  'right top, left top';
		} elseif( $dir == 'to top left' ) {
			$dir_1 = 'bottom right';
			$dir_2 =  'right bottom, left top';
		} elseif( $dir == 'to top right' ) {
			$dir_1 = 'bottom left';
			$dir_2 =  'left bottom, right top';
		} elseif( $dir == 'to bottom right' ) {
			$dir_1 = 'top left';
			$dir_2 =  'left top, right bottom';
		} elseif( $dir == 'to bottom left' ) {
			$dir_1 = 'top right';
			$dir_2 =  'right top, left bottom';
		}

		$css  = '#main-menu ul li.menu-item-simple-parent ul, #main-menu .menu-item-megamenu-parent .megamenu-child-container {';

			$css .= 'background:'.$c1.';';

			/* IE10+ */
			$css .= 'background-image: -ms-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%);';

			/* Mozilla Firefox */ 
			$css .= 'background-image: -moz-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%); ';

			/* Opera */ 
			$css .= 'background-image: -o-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%);';

			/* Webkit (Chrome 11+) */ 
			$css .= 'background-image: -webkit-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%);';

			/* Webkit (Safari/Chrome 10) */ 
			$css .= 'background-image: -webkit-gradient(linear, '.$dir_2.', color-stop('.$c1_stop.', '.$c1.'), color-stop('.$c2_stop.', '.$c2.'));';

			/* W3C Markup */ 
			$css .= 'background-image: linear-gradient('.$dir.','.$c1.' '. $c1_stop.'%,'.$c2.' '.$c2_stop.'%);';

		$css .= '}';

		wp_add_inline_style( 'agencies', $css );
	}


	$use_predefined_skin = (int) get_theme_mod( 'use-predefined-skin', agencies_defaults('use-predefined-skin') );
	$primary_color = get_theme_mod('primary-color',agencies_defaults('primary-color'));
	$secondary_color = get_theme_mod('secondary-color',agencies_defaults('secondary-color'));
	$tertiary_color = get_theme_mod('tertiary-color',agencies_defaults('tertiary-color'));
	
	if( empty( $use_predefined_skin ) ) {

		$css = '';

		if( !empty( $primary_color ) ) {

			$rgba = agencies_hex2rgb( $primary_color );
			$rgba = implode(',', $rgba);

			# Header
			$header_type = get_theme_mod('header-type',agencies_defaults('header-type'));
			if( $header_type == 'overlay-header' ) {
				$css .= '.overlay-header .dt-sc-dark-bg .overlay { background: rgba('.$rgba.', 0.9) }';
			}elseif( $header_type == 'two-color-header' ) {
				$css .= '.two-color-header.semi-transparent-header .main-header-wrapper:before, .two-color-header.transparent-header .is-sticky .main-header-wrapper:before { background:rgba('.$rgba.', 0.7) }';
			}

			# Widget Style
			$widget_style = cs_get_option( 'wtitle-style' );
			if( $widget_style == 'type5' ) {
				$css .= '.secondary-sidebar .type5 .widgettitle { border-color:rgba('.$rgba.', 0.5) }';
			} if( $widget_style == 'type12' ) {
				$css .= '.secondary-sidebar .type12 .widgettitle { background: rgba('.$rgba.', 0.2) }';
			}

			$css .= '.dt-sc-menu-sorting a { color: rgba('.$rgba.', 0.6) }';
			$css .= '.dt-sc-team.type2 .dt-sc-team-thumb .dt-sc-team-thumb-overlay, .dt-sc-hexagon-image span:before, .dt-sc-keynote-speakers .dt-sc-speakers-thumb .dt-sc-speakers-thumb-overlay {  background: rgba('.$rgba.', 0.9) }';

			$css .= '.portfolio .image-overlay, .portfolio.type4 .image-overlay, .recent-portfolio-widget ul li a:before, .dt-sc-image-caption.type2:hover .dt-sc-image-content, .dt-sc-timeline-section.type4 .dt-sc-timeline-thumb-overlay, .dt-sc-fitness-program-short-details-wrapper .dt-sc-fitness-program-short-details, .dt-sc-yoga-classes .dt-sc-yoga-classes-image-wrapper:before, .dt-sc-yoga-course .dt-sc-yoga-course-thumb-overlay, .dt-sc-yoga-program .dt-sc-yoga-program-thumb-overlay, .dt-sc-yoga-pose .dt-sc-yoga-pose-thumb:before, .dt-sc-yoga-teacher .dt-sc-yoga-teacher-thumb:before, .dt-sc-doctors .dt-sc-doctors-thumb-overlay, .dt-sc-event-addon > .dt-sc-event-addon-date, .dt-sc-course .dt-sc-course-overlay, .dt-sc-process-steps .dt-sc-process-thumb-overlay { background: rgba('.$rgba.', 0.9) }';

			# Shortcode
			$css .= '.dt-sc-icon-box.type10:hover .icon-wrapper:before { box-shadow:7px 0px 0px 0px '.$primary_color.'}';
			$css .= '.dt-sc-counter.type6 .dt-sc-couter-icon-holder:before { box-shadow:5px 1px 0px 0px '.$primary_color.'}';
			$css .= '.dt-sc-button.with-shadow.white, .dt-sc-pr-tb-col.type2 .dt-sc-buy-now a { box-shadow:3px 3px 0px 0px '.$primary_color.'}';

			$css .= '.dt-sc-restaurant-events-list .dt-sc-restaurant-event-details h6:before { border-bottom-color: rgba('.$rgba.',0.6) }';

			if( function_exists( 'is_woocommerce' ) ){

				$css .= '.woo-type1 .woocommerce ul.products li.product .star-rating:before, .woo-type1 .woocommerce ul.products li.product .star-rating span:before, .woo-type1.woocommerce ul.products li.product .star-rating:before, .woo-type1.woocommerce ul.products li.product .star-rating span:before, .woo-type1.woocommerce .star-rating:before, .woo-type1.woocommerce .star-rating span:before, .woo-type1 .woocommerce .star-rating:before, .woo-type1 .woocommerce .star-rating span:before, .woo-type2 ul.products li.product .product-details h5 a:hover, .woo-type2 ul.products li.product-category:hover .product-details h5, .woo-type2 ul.products li.product-category:hover .product-details h5 .count { color: rgba('.$rgba.', 0.75) }';

				$css .= '.woo-type2 ul.products li.product .product-thumb a.add_to_cart_button:hover, .woo-type2 ul.products li.product .product-thumb a.button.product_type_simple:hover, .woo-type2 ul.products li.product .product-thumb a.button.product_type_variable:hover, .woo-type2 ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover, .woo-type2 ul.products li.product .product-thumb a.add_to_wishlist:hover, .woo-type2 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woo-type2 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type6.woocommerce ul.products li.product:hover .product-content, .woo-type6 .woocommerce ul.products li.product:hover .product-content, .woo-type6.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type6 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type6.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type6 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type6.woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type6 .woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type8.woocommerce ul.products li.product:hover .product-content, .woo-type8.woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type8 .woocommerce ul.products li.product:hover .product-content, .woo-type8 .woocommerce ul.products li.product-category:hover .product-thumb .image:after,.woo-type13.woocommerce ul.products li.product:hover .product-content, .woo-type13 .woocommerce ul.products li.product:hover .product-content, .woo-type13.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type13 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type13.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type13 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type13.woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type13 .woocommerce ul.products li.product-category:hover .product-thumb .image:after { background-color: rgba('.$rgba.', 0.75) }';
				
			$css .= '.woo-type8.woocommerce ul.products li.product:hover .product-content:after, .woo-type8 .woocommerce ul.products li.product:hover .product-content:after {
				border-color : rgba( '.$rgba.', 0.75 ) rgba('.$rgba.', 0.75 ) rgba(255, 255, 255, 0.35) rgba(255, 255, 255, 0.35)
			}';				

			$css .= '.woo-type9.woocommerce ul.products li.product .product-wrapper, .woo-type9 .woocommerce ul.products li.product .product-wrapper { border-color: rgba('.$rgba.',0.6) }';

			$css .= '.woo-type11 ul.products li.product:hover .product-wrapper { box-shadow: 0 0 0 3px '.$primary_color.'; }';

			$css .= '.woo-type12 ul.products li.product .product-details { box-shadow: 0 -3px 0 0 '.$primary_color.' inset; }';

			$css .= '.woo-type14 ul.products li.product .product-details, .woo-type14 ul.products li.product .product-details h5:after { box-shadow: 0 0 0 2px '.$primary_color.' inset; }';

			$css .= '.woo-type15 ul.products li.product .product-thumb a.add_to_cart_button:after, .woo-type15 ul.products li.product .product-thumb a.button.product_type_simple:after, .woo-type15 ul.products li.product .product-thumb a.button.product_type_variable:after, .woo-type15 ul.products li.product .product-thumb a.added_to_cart.wc-forward:after, .woo-type15 ul.products li.product .product-thumb a.add_to_wishlist:after, .woo-type15 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:after, .woo-type15 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:after { box-shadow: 0 0 0 2px '.$primary_color.'; }';
			}
			
			$css .= '@media only screen and (max-width: 767px) { 
				.dt-sc-contact-info.type4:after, .dt-sc-icon-box.type10 .icon-content h4:after, .dt-sc-counter.type6.last h4::before, .dt-sc-counter.type6 h4::after, #tribe-events-content .tribe-events-calendar td.tribe-events-present.mobile-active:hover, .tribe-events-calendar td.tribe-events-present.mobile-active, .tribe-events-calendar td.tribe-events-present.mobile-active div[id*=tribe-events-daynum-], .tribe-events-calendar td.tribe-events-present.mobile-active div[id*=tribe-events-daynum-] a, .tribe-events-sub-nav li a { background-color:'.$primary_color.'} 
				.dt-sc-timeline-section.type2, .dt-sc-timeline-section.type2::before { border-color:'.$primary_color.'} 
			}';
			
			}
			
		}

		if( !empty( $secondary_color ) ) {

			$css = '';
			$rgba = agencies_hex2rgb( $secondary_color );
			$rgba = implode(',', $rgba);

			# Add-ons / Custom Modules
			$css .= '.dt-sc-event-month-thumb .dt-sc-event-read-more, .dt-sc-training-thumb-overlay{ background: rgba('.$rgba.',0.85) }';

			# Shortcode
			$css .= '.dt-sc-icon-box.type10 .icon-wrapper:before, .dt-sc-contact-info.type4 span:after, .dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before { box-shadow:5px 0px 0px 0px '.$secondary_color.'}';			
			$css .= '@media only screen and (max-width: 767px) { .dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,.dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,.skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after { background-color:'.$secondary_color.'} }';


			if( function_exists( 'is_woocommerce' ) ) {

				$css .= '.woo-type7 ul.products li.product:hover .product-details { box-shadow: 0 -3px 0 0 '.$secondary_color.' inset; }';

				$css .= '.woo-type8 ul.products li.product:hover .product-details h5:after { border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) '.$secondary_color.' rgba(0, 0, 0, 0); }';

				$css .= '.woo-type9 ul.products li.product:hover .product-wrapper { border-color: rgba('.$rgba.',0.75 )}';
				$css .= '.woo-type19 ul.products li.product:hover .product-thumb .image { box-shadow: 0 0 1px 4px '.$secondary_color.'; }';

				$css .= '.woo-type20 ul.products li.product .product-thumb a.add_to_cart_button:hover, .woo-type20 ul.products li.product .product-thumb a.button.product_type_simple:hover, .woo-type20 ul.products li.product .product-thumb a.button.product_type_variable:hover, .woo-type20 ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover, .woo-type20 ul.products li.product .product-thumb a.add_to_wishlist:hover, .woo-type20 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woo-type20 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type20 ul.products li.product:hover .product-wrapper { background-color: rgba('.$rgba.',0.5 )}';

			}	
		}


		if( !empty( $tertiary_color ) ) {

			$rgba = agencies_hex2rgb( $tertiary_color );
			$rgba = implode(',', $rgba);

			$css .= '.dt-sc-faculty .dt-sc-faculty-thumb-overlay { background: rgba('.$rgba.',0.9) }';
			$css .= '.dt-sc-process-flow .dt-sc-icon-box.type3 .icon-wrapper span::before { background: rgba('.$rgba.',0.75) }';
			$css .= '.dt-sc-process-flow .dt-sc-icon-box.type3:hover .icon-wrapper span::before { background: rgba('.$rgba.',0.6) }';

			if( function_exists( 'is_woocommerce' ) ) {

				$css .= '.woo-type18 ul.products li.product:hover .product-content, .woo-type18 ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type18 ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type18.woocommerce ul.products li.product:hover .product-content, .woo-type18.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type18.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type18.woocommerce-page ul.products li.product:hover .product-content, .woo-type18.woocommerce-page ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type18.woocommerce-page ul.products li.product.outofstock:hover .out-of-stock-product .product-content { background-color: rgba('.$rgba.',0.6) }';
				$css .= '.woo-type19.woocommerce ul.products li.product:hover .product-content, .woo-type19 .woocommerce ul.products li.product:hover .product-content, .woo-type19.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type19 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type19.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type19 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type20.woocommerce ul.products li.product:hover .product-content, .woo-type20 .woocommerce ul.products li.product:hover .product-content, .woo-type20.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type20 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type20.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type20 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content { background-color: rgba('.$rgba.',0.4) }';

				$css .= '.woo-type1 ul.products li.product:hover .product-thumb:after { box-shadow: 0 0 0 10px rgba('. $rgba.',0.35) inset; }';

				$css .= '.woo-type7 ul.products li.product .product-details { box-shadow: 0 -2px 0 0 '.$tertiary_color.'; }';

				$css .= '.woo-type20 ul.products li.product .product-wrapper { box-shadow: 0 0 0 5px rgba('. $rgba.',0.75) inset; }';
			}
		}			
		
		wp_add_inline_style( 'agencies', $css );		 
	}
		
//}

/* ---------------------------------------------------------------------------
 * Site SSL Compatibility
 * --------------------------------------------------------------------------- */
function agencies_ssl( $echo = false ){
	$ssl = '';
	if( is_ssl() ) $ssl = 's';
	if( $echo ){
		echo ($ssl);
	}
	return $ssl;
}

/* ---------------------------------------------------------------------------
 * Body Class Filter for layout changes
 * --------------------------------------------------------------------------- */
function agencies_body_classes( $classes ) {
	
	// layout
	$classes[] 		= 	'layout-'. get_theme_mod( 'site-layout', agencies_defaults('site-layout') );

	// header
	$header_type 	=	get_theme_mod( 'header-type', agencies_defaults('header-type') );
	if( isset($header_type) && ($header_type == 'left-header-boxed') ):
		$classes[]	=	'left-header left-header-boxed';
	elseif( isset($header_type) && ($header_type == 'creative-header') ):
		$classes[]	=	'left-header left-header-creative';
	else:
		$classes[]	=	$header_type;
	endif;

	$htrans 		= 	get_theme_mod( 'header-transparency', agencies_defaults('header-transparency') );
	if(isset($htrans)):
		$classes[]	=	get_theme_mod( 'header-transparency', agencies_defaults('header-transparency') );
	endif;	

	$stickyhead = (int) get_theme_mod( 'enable-sticy-nav', agencies_defaults('enable-sticy-nav') );
	if( !empty( $stickyhead ) ) {
		$classes[]	=	'sticky-header';
	}
	
	$standard		=	get_theme_mod( 'header-position', agencies_defaults('header-position') );
	if( isset($standard) && ($standard == 'above slider') ):
		$classes[]	=	'standard-header';
	elseif( isset($standard) && ($standard == 'below slider') ):
		$classes[]	=	'standard-header header-below-slider';
	elseif ( isset($standard) && ($standard == 'on slider') ):
		$classes[]	=	'header-on-slider';
	endif;
	

	$topbar = (int) get_theme_mod( 'enable-top-bar-content', agencies_defaults('enable-top-bar-content') );
	if( $topbar ) {
		$classes[]	=	'header-with-topbar';
	}

	$wootype 		= 	cs_get_option( 'product-style' );
	$wootype		= 	!empty($wootype) ? 'woo-'.$wootype : 'woo-type1';
	$classes[]		=	$wootype;

	if( is_page() ) {
		$pageid = agencies_ID();
		$page_meta = get_post_meta( $pageid, '_tpl_default_settings', true );
		$page_meta = is_array( $page_meta ) ? $page_meta : array();

		if( array_key_exists( 'show_slider', $page_meta ) && $page_meta['show_slider'] ) {
			$classes[] = "page-with-slider";
		}
		if( array_key_exists( 'enable-sub-title', $page_meta ) && !($page_meta['enable-sub-title']) ) {
			$classes[] = "no-breadcrumb";
		}
	} elseif( is_home() ) {
		$pageid = get_option('page_for_posts');
		$page_meta = get_post_meta( $pageid, '_tpl_default_settings', true );
		$page_meta = is_array( $page_meta ) ? $page_meta : array();

		if( array_key_exists( 'show_slider', $page_meta ) && $page_meta['show_slider'] ) {
			$classes[] = "page-with-slider";
		}
	}

	return $classes;
}
add_filter( 'body_class', 'agencies_body_classes' );?>