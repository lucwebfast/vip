<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('AGENCIES_THEME_NAME').' '.esc_html__('Options', 'agencies'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'agencies',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => __('Designthemes Framework <small>by Designthemes</small>', 'agencies'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'agencies'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'agencies' ),
	),

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'agencies'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'agencies'),
	  'default' 	 => true,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'agencies'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'agencies')
	),

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'agencies'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'agencies')
	),

	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'agencies'),
	  'attributes' => array( 
		'placeholder' => 'NIzaSyKIHTR6h1tdLOWv01IrJj6lss2ISnatYq0'
	  ),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'agencies').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'agencies'),
	  'attributes' => array(
		'placeholder' => 'b54a1d38b2547d601a324kaja4d4lao3-us3'
	  ),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'agencies').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'agencies'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'agencies'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'agencies' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'agencies'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'agencies')
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'agencies'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'agencies')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'agencies'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'agencies'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'agencies' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'agencies'),
			'options'    => array(
			  'content-full-width'   => AGENCIES_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AGENCIES_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'agencies'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'agencies'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'agencies' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'agencies'),
			'options'      => array(
			  'one-column' 		  => AGENCIES_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => AGENCIES_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => AGENCIES_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'agencies'),
			'info'		 => esc_html__('YES! to allow excerpt', 'agencies'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'agencies'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'agencies').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'agencies'),
			'info'		 => esc_html__('YES! to enable read more button', 'agencies'),
			'default'	 => true,
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'agencies'),
			'info'		 => esc_html__('Paste any button shortcode here', 'agencies'),
			'default'	 => '[dt_sc_button style="filled" class="dt-sc-readmore-link" title="Continue Reading" target="_blank" /]',
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'agencies' ),
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'agencies'),
			'options'      => array(
			  'blog-default-style' 		=> esc_html__('Default', 'agencies'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'agencies'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'agencies'),
			  'blog-medium-style'       => esc_html__('Medium', 'agencies'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'agencies'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'agencies'),
			),
			'class'        => 'chosen',
			'default'      => 'blog-default-style',
			'info'         => esc_html__('Choose post style to display single blog posts and archives.', 'agencies'),
		  ),
		  
		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'agencies' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'agencies'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'agencies' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'agencies'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'agencies' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'agencies'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'agencies' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'agencies'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'agencies' ),
			'info'	  => esc_html__('YES! to show post category information', 'agencies'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'agencies' ),
			'info'	  => esc_html__('YES! to show post tag information', 'agencies'),
			'default' => true
		  ),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'agencies'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'agencies' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'agencies' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'agencies'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'agencies'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'agencies'),
			  'type2'      => esc_html__('Classic', 'agencies'),
			  'type4'  	   => esc_html__('Diamond', 'agencies'),
			  'type5'      => esc_html__('Shadow', 'agencies'),
			  'type6'      => esc_html__('Diamond Alt', 'agencies'),
			  'type7'  	   => esc_html__('Stack', 'agencies'),
			  'type8'  	   => esc_html__('Minimal', 'agencies'),
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of not-found template page.', 'agencies')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'agencies' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'agencies')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'agencies'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'agencies'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'agencies')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'agencies' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'agencies')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'agencies'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'agencies')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'agencies'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'agencies' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'agencies' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'agencies')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'agencies'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'agencies'),
			  'type2'      => esc_html__('Teaser', 'agencies'),
			  'type3'  	   => esc_html__('Minimal', 'agencies'),
			  'type4'      => esc_html__('Counter Only', 'agencies'),
			  'type5'      => esc_html__('Belt', 'agencies'),
			  'type6'  	   => esc_html__('Classic', 'agencies'),
			  'type7'  	   => esc_html__('Boxed', 'agencies')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'agencies'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'agencies' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'agencies')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'agencies'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'agencies'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'agencies')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'agencies' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'agencies'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'agencies'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'agencies').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'agencies'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'agencies'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'agencies')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'agencies'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'agencies'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'agencies'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'agencies' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'agencies'),
		'options'      => array(
		  'type1' 	   => esc_html__('Double Border', 'agencies'),
		  'type2'      => esc_html__('Tooltip', 'agencies'),
		  'type3'  	   => esc_html__('Title Top Border', 'agencies'),
		  'type4'      => esc_html__('Left Border & Pattren', 'agencies'),
		  'type5'      => esc_html__('Bottom Border', 'agencies'),
		  'type6'  	   => esc_html__('Tooltip Border', 'agencies'),
		  'type7'  	   => esc_html__('Boxed Modern', 'agencies'),
		  'type8'  	   => esc_html__('Elegant Border', 'agencies'),
		  'type9' 	   => esc_html__('Needle', 'agencies'),
		  'type10' 	   => esc_html__('Ribbon', 'agencies'),
		  'type11' 	   => esc_html__('Content Background', 'agencies'),
		  'type12' 	   => esc_html__('Classic BG', 'agencies'),
		  'type13' 	   => esc_html__('Tiny Boders', 'agencies'),
		  'type14' 	   => esc_html__('BG & Border', 'agencies'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'agencies'),
		  'type16' 	   => esc_html__('Left Border & BG', 'agencies'),
		  'type17' 	   => esc_html__('Basic', 'agencies'),
		  'type18' 	   => esc_html__('BG & Pattern', 'agencies'),
		),
		'class'          => 'chosen',
		'default_option' => esc_html__('Choose any type', 'agencies'),
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'agencies')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'agencies'),
		'button_title'    => esc_html__('Add New', 'agencies'),
		'accordion_title' => esc_html__('Add New Widget Area', 'agencies'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'agencies'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'agencies'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'agencies' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'agencies'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'agencies').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'agencies'),
			'options'      => array(
			  'type1' 	   => esc_html__('Thick Border', 'agencies'),
			  'type2'      => esc_html__('Pattern Overlay', 'agencies'),
			  'type3'  	   => esc_html__('Thin Border', 'agencies'),
			  'type4'      => esc_html__('Diamond Icons', 'agencies'),
			  'type5'      => esc_html__('Girly', 'agencies'),
			  'type6'  	   => esc_html__('Push Animation', 'agencies'),
			  'type7' 	   => esc_html__('Dual Color BG', 'agencies'),
			  'type8' 	   => esc_html__('Modern', 'agencies'),
			  'type9' 	   => esc_html__('Diamond & Border', 'agencies'),
			  'type10' 	   => esc_html__('Easing', 'agencies'),
			  'type11' 	   => esc_html__('Boxed', 'agencies'),
			  'type12' 	   => esc_html__('Easing Alt', 'agencies'),
			  'type13' 	   => esc_html__('Parallel', 'agencies'),
			  'type14' 	   => esc_html__('Pointer', 'agencies'),
			  'type15' 	   => esc_html__('Diamond Flip', 'agencies'),
			  'type16' 	   => esc_html__('Stack', 'agencies'),
			  'type17' 	   => esc_html__('Bouncy', 'agencies'),
			  'type18' 	   => esc_html__('Hexagon', 'agencies'),
			  'type19' 	   => esc_html__('Masked Diamond', 'agencies'),
			  'type20' 	   => esc_html__('Masked Circle', 'agencies'),
			  'type21' 	   => esc_html__('Classic', 'agencies'),
			),
			'class'        => 'chosen',
			'default' 	   => 'type1',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'agencies')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'agencies'),
			'options'    => array(
			  'one-half-column'     => AGENCIES_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'    => AGENCIES_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  'one-fourth-column'   => AGENCIES_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'agencies' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'agencies'),
			'options'      => array(
			  'content-full-width'   => AGENCIES_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AGENCIES_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'agencies'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'agencies'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'agencies'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'agencies')
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'agencies' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'agencies'),
			'options'      => array(
			  'content-full-width'   => AGENCIES_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AGENCIES_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'agencies'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'agencies'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'agencies' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'agencies'),
			'options'      => array(
			  'content-full-width'   => AGENCIES_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AGENCIES_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AGENCIES_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'agencies'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'agencies'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

	  ),
	);
}

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'agencies'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'agencies' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'agencies'),
		'info'	=> esc_html__("YES! to enable top hook.", 'agencies')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'agencies'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'agencies')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'agencies' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'agencies'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'agencies')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'agencies'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'agencies')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'agencies' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'agencies'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'agencies')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'agencies'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'agencies')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'agencies' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'agencies'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'agencies')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'agencies'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'agencies')
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'agencies'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'agencies')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('AGENCIES_THEME_NAME').esc_html__(' Log', 'agencies'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('AGENCIES_THEME_NAME').esc_html__(' Theme Change Log', 'agencies')
    ),
    array(
      'type'    => 'content',
      'content' => '<pre>
2017.05.31 - version 1.0
 * First release!  
 
2017.06.05 - version 1.1
 * Updated dummy data
 
 </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'agencies'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );