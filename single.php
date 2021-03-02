<?php get_header();
 
 
	$ip = $_SERVER['REMOTE_ADDR'];  
 
	$tpl_default_settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
	$tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();
	
	$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_sidebar = $show_left_sidebar = $show_right_sidebar = false;
	$sidebar_class = "";
	
	$post = get_post();
	//echo "-----".$post->post_title;
	
 
   
	
	switch ( $page_layout ) {
		case 'with-left-sidebar':
			$page_layout = "page-with-sidebar with-left-sidebar";
			$show_sidebar = $show_left_sidebar = true;
			$sidebar_class = "secondary-has-left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout = "page-with-sidebar with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
		break;
		
		case 'with-both-sidebar':
			$page_layout = "page-with-sidebar with-both-sidebar";
			$show_sidebar = $show_left_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-both-sidebar";
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
		break;
	}

	if ( $show_sidebar ): 
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class );?>"><?php get_sidebar('left');?></section><?php
		endif;
	endif;?>
    <section id="primary" class="<?php echo esc_attr( $page_layout );?>"><?php
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				get_template_part('framework/loops/content', 'single');
			endwhile;
		endif;?>
		

 <!-- Event snippet for Adicionar ao carrinho conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
	 
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-650452136/Z_GzCK_NpOgBEKi5lLYC',
      'value': 1490.0,
      'currency': 'BRL',
      'event_callback': callback
  });
  return false;
}
 
</script>



<!-- Event snippet for Visualização de Demonstração da plataforma conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
 
function gtag_report_conversion_2(url) {
	
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-650452136/-wAWCMDZxOgBEKi5lLYC',
      'value': 600.0,
      'currency': 'BRL',
      'event_callback': callback
  });
  return false;
} 
</script>

<!-- Event snippet for Adicionar ao carrinho conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
 
function gtag_report_conversion_classic_add(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-597259273/IB2QCKiG9ugBEIno5ZwC',
      'event_callback': callback
  });
  return false;
} 
</script>


<!-- Event snippet for Visualização da demonstração da plataforma conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
 
function gtag_report_conversion_classic_view(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-597259273/-qZBCNqRxfcBEIno5ZwC',
      'event_callback': callback
  });
  return false;
} 
</script>




<script>

 
 jQuery(".vc_btn3-color-primary").click(function(){
	gtag_report_conversion();  // conversao de adicao no carrinho
	gtag_report_conversion_classic_add();
	
	 fbq('track', 'Purchase', {
		currency: 'BRL', value: 990.00, content_name: '<?=$post->post_title?>',
	  });
	  
	   ga('send', {  hitType: 'event', eventCategory: 'Comprando agora', eventAction: '<?=$ip?> - <?=$post->post_title?>',  eventLabel: '<?=$post->post_title?>'});

	   //jQuery.ajax({url: "http://vipcomsistemas.com.br/notificacao.php?post=<?=$post->post_title?>&ip=<?=$ip?>", success: function(result){ }});
	  
}); 

jQuery(".vc_btn3-color-info").click(function(){
	gtag_report_conversion(); // conversao de adicao no carrinho
	gtag_report_conversion_classic_add();
	
	 fbq('track', 'Purchase', {
		currency: 'BRL',value: 990.00, content_name: '<?=$post->post_title?>',
	  });
	  
	 ga('send', {  hitType: 'event', eventCategory: 'Comprando agora', eventAction: '<?=$ip?> - <?=$post->post_title?>',  eventLabel: '<?=$post->post_title?>'});

	 
	 //jQuery.ajax({url: "http://vipcomsistemas.com.br/notificacao.php?post=<?=$post->post_title?>&ip=<?=$ip?>", success: function(result){ }});
	 
	 
});

 
 jQuery(".vc_btn3-color-inverse").click(function(){
   // conversao de vizualizacao de demonstração da plataforma
  gtag_report_conversion_2();
  gtag_report_conversion_classic_view();
  
  // MEU EVENTO DE CONVERSAO NO FACEBOOK (DO TIPO SEARCH)
	 fbq('track', 'Search', {
		 contents: '<?=$post->post_name?>',
	  });
	  
	  ga('send', {  hitType: 'event', eventCategory: 'Clique na demonstracao dos Sistemas', eventAction: '<?=$ip?> - <?=$post->post_title?>',  eventLabel: '<?=$post->post_title?>'});
}); 

  
 
</script>

 



    </section><!-- **Primary - End** -->
	
	

	
	<?php
	 
	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class );?>"><?php get_sidebar('right');?></section><?php
		endif;
	endif;
get_footer();?>	