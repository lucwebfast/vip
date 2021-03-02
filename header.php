 
<!DOCTYPE html>
<?
$ip = $_SERVER['REMOTE_ADDR'];  
?>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php agencies_viewport(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?> 
<!-- Global site tag (gtag.js) - Google Ads: 597259273 USANDO  

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-597259273"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-597259273');
	</script>
	   
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-40822355-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-40822355-1');
	</script> 
	 -->
</head>
     
<?
if(strpos($_SERVER["REQUEST_URI"],"script/sistemas/")){?>
		 <style>
		 .main-title-section-wrapper{
			 display: none;	 
		 }
		 </style>
	
<? } ?>
 

<body <?php body_class(); ?>>
 

<?php
// loading
$loader = (int) get_theme_mod( 'use-site-loader', agencies_defaults('use-site-loader') );
if( !empty($loader) )
echo '<div class="loader"><div class="loader-inner ball-scale-multiple"><div></div><div></div><div></div></div></div>';
// top hook
do_action( 'agencies_hook_top' ); ?>

<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">

		<!-- **Header Wrapper** -->
        <?php 
		// header types
		$htype = get_theme_mod( 'header-type', agencies_defaults('header-type') );

		$hdarkbg = get_theme_mod( 'enable-header-darkbg', agencies_defaults('enable-header-darkbg') ); 
		$class = ( $hdarkbg ) ? 'dt-sc-dark-bg' : ''; ?>
		<div id="header-wrapper" class="<?php echo esc_attr( $class );?>">
            <!-- **Header** -->
            <header id="header"><?php
				// check header type
				if( $htype != "left-header" && $htype != "left-header-boxed" && $htype != "creative-header" && $htype != "overlay-header" ):
					// header position
					$headerpos = get_theme_mod( 'header-position', agencies_defaults('header-position') );
					
					if( isset($headerpos) && $headerpos == 'below slider' ):
						echo agencies_slider();
					endif;
				endif;

				//top bar
				$topbar 	=  (int) get_theme_mod( 'enable-top-bar-content', agencies_defaults('enable-top-bar-content') );
				$topcontent =  get_theme_mod( 'top-bar-content', agencies_defaults('top-bar-content'));
				if( ($topbar) && isset($topcontent) && $topcontent != '' ):?>
        	        <div class="top-bar dt-sc-skin-highlight dt-sc-dark-bg">
            	        <div class="container"><?php
							$content = do_shortcode( stripslashes($topcontent) );
							echo agencies_wp_kses( $content );?>	
                        </div>
                    </div><?php
				endif; ?>

            	<!-- **Main Header Wrapper** -->
            	<div id="main-header-wrapper" class="main-header-wrapper">

            		<div class="container">

            			<!-- **Main Header** -->
            			<div class="main-header"><?php
							if( isset($htype) && ($htype == 'fullwidth-header header-align-center fullwidth-menu-header') ):
								$header_left = (int) get_theme_mod( 'enable-header-left-content', agencies_defaults('enable-header-left-content') );
								if( !empty( $header_left ) ): ?>
									<div class="header-left"><?php									
									$leftcontent = get_theme_mod( 'header-left-content', agencies_defaults('header-left-content') );
									if( isset($leftcontent) && $leftcontent != '') :
										$content = do_shortcode( stripcslashes( $leftcontent ) );
										echo agencies_wp_kses( $content );
									endif; ?></div><?php
								endif;
							endif;

							agencies_header_logo();
                            
							if( isset($htype) && (($htype == 'fullwidth-header header-align-center fullwidth-menu-header') || 
								($htype == 'fullwidth-header header-align-left fullwidth-menu-header')) ):
								$header_right = (int) get_theme_mod( 'enable-header-right-content', agencies_defaults('enable-header-right-content') );
								if( !empty( $header_right ) ):?>
									<div class="header-right"><?php
										$rightcontent = get_theme_mod( 'header-right-content', agencies_defaults('header-right-content') );
										if( isset($rightcontent) && $rightcontent != '') :
											$content = do_shortcode( stripcslashes( $rightcontent ) );
											echo agencies_wp_kses( $content );
										endif; ?></div><?php
								endif;
							endif; ?>

            				<div id="menu-wrapper" class="menu-wrapper <?php echo get_theme_mod( 'menu-active-style', agencies_defaults('menu-active-style') );?>">
                            	<div class="dt-menu-toggle" id="dt-menu-toggle">
                                	<?php esc_html_e('Menu','agencies');?>
                                    <span class="dt-menu-toggle-icon"></span>
                                </div><?php
								if( isset($htype) ):
									switch($htype):
										case 'split-header fullwidth-header':
										case 'split-header boxed-header':
												echo '<nav id="main-menu">';
												agencies_wp_split_menu();
												echo '</nav>';
										break;
										
										case 'overlay-header':
												echo '<div class="overlay overlay-hugeinc">';
													echo '<div class="overlay-close"></div>';
													agencies_wp_nav_menu(1);
												echo '</div>';
												echo '<div id="trigger-overlay"></div>';
										break;

										case 'fullwidth-header':
										case 'boxed-header':
										case 'two-color-header':
										default:
											agencies_wp_nav_menu();
											require_once( AGENCIES_THEME_DIR .'/headers/default.php' );
										break;
									endswitch;
								endif; ?>
            				</div><?php
							// left header
                            if( isset($htype) && ( $htype == 'left-header' || $htype == 'left-header-boxed' || $htype == 'creative-header') ): ?>
                                <div class="left-header-footer"><?php
									$content = get_theme_mod( 'header-left-content', agencies_defaults('header-left-content') );
									$content = do_shortcode( stripcslashes( $content ) );
									echo agencies_wp_kses($content);?></div><?php
							endif; ?>
            			</div>
            		</div>
            	</div><!-- **Main Header** --><?php
				if( $htype != "left-header" && $htype != "left-header-boxed" && $htype != "creative-header" && $htype != "overlay-header" ):
					// header position
					if( isset($headerpos) && $headerpos != 'below slider' ):
						echo agencies_slider();
					endif;
				endif;?>

			</header><!-- **Header - End** -->
		</div><!-- **Header Wrapper - End** -->


		<style>
			.backbclac{ 
				text-align: center;
			}
			.titofertas{
				       line-height: 21px; clear: both; font-size: 19px;color: #000;   text-align: center;padding-top: 12px !important;
			}
			
			@media screen and (max-width: 767px) {

				.titofertas{
						font-size: 17px; 
					}

			}
			 
			
			</style>
            <!-- ** Container ** -->
			<?
			/*
				$data = date('d/m/Y');

				$data = DateTime::createFromFormat('d/m/Y', $data);
				$data->add(new DateInterval('P1D')); // 2 dias
			    $amanha =  $data->format('Y/m/d');
				
			*/
			 
			?>  
			
			<script>
			/*
			jQuery( document ).ready(function() {
				console.log( "ready!" );
					jQuery('#clock').countdown("<?=$amanha?>", function(event) {
					var totalHours = event.offset.totalDays * 24 + event.offset.hours;
					jQuery(this).html(event.strftime('Promoções terminam em '+ totalHours + ' hr %M min %S sec'));
				});


			}); 
			 */
			 
			</script> 
			<!-- 
			<div class="wpb_wrapper">
				<h2  id="clock"  class="titofertas vc_custom_heading  "></h2>	
			</div>
			-->
			 
			<?php
			if(is_front_page() || is_home()){ ?>
			
			<? $ip = $_SERVER['REMOTE_ADDR']; ?> 
	  
				 <div class="backbclac">
					 <a href="https://www.vipcomsistemas.com.br"><img src="https://www.vipcomsistemas.com.br/imagens/vipcomcriarsites.jpg"></a>
					 
				 </div>
			<? }  ?>
			
			 
		<?php if( $htype == "creative-header" ) echo '<div id="toggle-sidebar"></div>'; ?>

        <!-- **Main** -->
        <div id="main"><?php

			if( $htype == "left-header" || $htype == "left-header-boxed" || $htype == "creative-header" || $htype == "overlay-header" ):
				echo agencies_slider();
			endif;

			// subtitle & breadcrumb section
			if( is_page() ) :

				$tpl_default_settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

				if(empty($tpl_default_settings)) $tpl_default_settings['enable-sub-title'] = 'true';

				if($tpl_default_settings['enable-sub-title'] == 'true' ):
					require_once( AGENCIES_THEME_DIR .'/headers/breadcrumb.php' );
				endif;


			elseif( false):

				$pageid = get_option('woocommerce_shop_page_id');

				$tpl_default_settings = get_post_meta($pageid,'_tpl_default_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
			
				if(empty($tpl_default_settings)) $tpl_default_settings['enable-sub-title'] = 'true';

				if(isset($tpl_default_settings['enable-sub-title']) ):
					require_once( AGENCIES_THEME_DIR .'/headers/breadcrumb.php' );
				endif;	

			else:
				require_once( AGENCIES_THEME_DIR .'/headers/breadcrumb.php' );
			endif;

			$class = "container";
			if( is_page_template('tpl-portfolio.php') ) {
				$class = ( $tpl_default_settings['layout'] == 'fullwidth' ) ? "portfolio-fullwidth-container" : "container";
            }

			if( is_singular('tribe_events') ) {
				$tpl_default_settings = get_post_meta($post->ID,'_custom_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
				$post_style = array_key_exists( "event-post-style", $tpl_default_settings ) ? $tpl_default_settings['event-post-style'] : "type1";
				switch( $post_style ):
					case 'type2':
						$class = "event-type2-fullwidth";
						break;
					case 'type5':
						$class = "event-type5-fullwidth";
						break;
					default:
						$class = "container";
						break;
				endswitch;
			}

			if( is_singular() ) {
				$tpl_default_settings = get_post_meta($post->ID,'_custom_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
				$class =  ( isset( $tpl_default_settings['layout'] ) ) && ( $tpl_default_settings['layout'] == 'fullwidth-container') ? "show-in-fullwidth" : $class;
			} 
			
			if( is_page_template('tpl-wpsl_stores.php') ) {
				$tpl_default_settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
				$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
				$class =  ( $tpl_default_settings['layout'] == 'content-full-width' ) ? "wpsl-stores-fullwidth-container" : "container"; 
            }

			if( is_singular('wpsl_stores') ) {
				$class =  "wpsl-stores-fullwidth-container"; 
            }

			if( is_archive() ) {
				$post_type = get_post_type();
				if($post_type == 'dt_portfolios') {
					$allow_fullwidth = get_theme_mod( 'portfolio-allow-full-width', agencies_defaults('portfolio-allow-full-width') );
					if($allow_fullwidth) {
						$class =  'show-in-fullwidth';
					}
				}
			}

			?>

			
	
			 
            <div class="<?php echo esc_attr($class);?>">
			 
			
			
			
			<?php
			do_action( 'agencies_hook_content_before' ); ?>