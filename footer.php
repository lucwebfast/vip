        <script>
 
  
</script>


	<link rel="stylesheet" href="https://www.vipcomsistemas.com.br/wp-content/themes/agencies/css/responsive.css?ver=5.5.1" type="text/css" media="all">
	
	<?
	$ip = $_SERVER['REMOTE_ADDR'];  
	?>


  <?
  
   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   $actual_link.=" - Origem: ".$_SERVER["HTTP_REFERER"];
  
    function detectResolution() {
	
	$useragent=$_SERVER['HTTP_USER_AGENT'];

	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|ipad|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
		return true;
	}
	else {
		return false;
	}
}

  ?>
		</div><!-- **Container - End** -->

        </div><!-- **Main - End** --><?php

        do_action( 'agencies_hook_content_after' );

        $footer = (int) get_theme_mod( 'show-footer', agencies_defaults('show-footer') );
        $show_copyright_section = (int) get_theme_mod( 'show-copyright-text', agencies_defaults('show-copyright-text') );?>
        <!-- **Footer** -->
        <footer id="footer">
            <?php if( !empty( $footer ) ) :
                $darkbg =(int) get_theme_mod( 'enable-footer-darkbg', agencies_defaults('enable-footer-darkbg') );
                $class = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
                $columns = (int) get_theme_mod( 'footer-columns', agencies_defaults('footer-columns') );?>

                <div class="footer-widgets <?php echo esc_attr( $class ); ?>">
                    <div class="container"><?php
                        agencies_show_footer_widgetarea( $columns );?>
                    </div>
                </div>
                
            <?php endif;

            $copyright = get_theme_mod( 'copyright-text', agencies_defaults('copyright-text') );
            $copyright = stripslashes ( $copyright );
            $copyright = do_shortcode( $copyright );

            $copyright_next = get_theme_mod( 'copyright-next', agencies_defaults('copyright-next') );

            $darkbg = get_theme_mod( 'enable-copyright-darkbg', agencies_defaults('enable-copyright-darkbg') );
            $class  = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
			$center = ( $copyright_next == 'disable' ) ? 'align-center' : ''; ?>
            <div class="footer-copyright <?php echo esc_attr( $class ); ?>">
                <div class="container">
                    <div class="column dt-sc-one-half first <?php esc_attr( $center ); ?>"><?php
                        if( !empty( $show_copyright_section ) ) :
                            echo agencies_wp_kses( $copyright );
                        endif; ?>
                    </div>
                    <div class="column dt-sc-one-half <?php esc_attr( $copyright_next ); ?>"><?php
                        if( $copyright_next == 'sociable' ) :
                            $sociables = get_theme_mod( 'footer-sociables', agencies_defaults( 'footer-sociables' ) );
				    
				    $start = $end = $list = '';

                            if( !empty( $sociables ) ) {
                                $start = '<ul class="dt-sc-sociable">';
                                $end = '</ul>';
                            }

                            foreach( $sociables as $social ) {
                                $value = get_theme_mod( 'social-'.$social, '#' );
                                if( !empty( $value) ) {
                                    $list .= '<li class="'.esc_attr( $social ).'"><a target="_blank" href="'.esc_attr( $value ).'"></a></li>';
                                }
                            }

                            echo  (!empty($start) && !empty($list) && !empty($end) ) ? $start.$list.$end : '';
							
                     endif;?>
                    </div>
                </div>
            </div>
           </footer><!-- **Footer - End** -->
    </div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<?php do_action( 'agencies_hook_bottom' ); ?>
<?php wp_footer(); ?>

 
  

</body>
</html>

<script>
 
jQuery(window).load(function() {
 
  
	//jQuery("#post-603").hide();

 
   var activeObjects = document.getElementsByClassName('vc_gitem-link vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-color-juicy-pink');  
   var i=0 ;
  while(activeObjects.length > 0) { 

       document.getElementsByClassName("vc_gitem-link vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-color-juicy-pink")[i].innerHTML = "QUERO ESTE";
   i++;
  }

});
 
</script>
 
	
<style>
	.atendimento { 
		bottom: 0;
		position: fixed;
		right: 1px;
		z-index: 80000;
	}	
	</style> 


<? 
$imagemzap = "zap.jpg";
if(!detectResolution()){
	$imagemzap = "bg_whatsapp_fixo3.png";
	?> 
 <!--
	<div class="atendimento">   
		<iframe id="chatweb" style="WIDTH: 300px; HEIGHT: 149px"
		src="https://servidorseguro.mysuite1.com.br/empresas/vpm/verifica.php"
		frameborder=0 scrolling=no>
		</iframe>

	</div>
	-->
 
<? } ?>
 


 <?
   //if($post->ID !="19146" and $post->ID !="19369" and $post->ID !="19923" and $post->ID !="19121" and $post->ID !="15748" and $post->ID !="14928" and $post->ID !="13433" and $post->ID !="14928"){ ?>
  <? if($post->ID !="19146" ){?>
		 
	   <script type="text/javascript">
		// window.$mysuite||function(t,e){var c=$mysuite=function(t){c._.push(t)},s=c.s=t.createElement(e),a=t.getElementsByTagName(e)[0];c.set=function(t){c.set._.push(t)},c._=[],c.set._=[],s.async=!0,s.setAttribute("charset","utf-8"),s.src="https://servidorseguro.mysuite1.com.br/client/cf/?h=4d7e7c210331fd2e83ee3f6b754d31fa&sl=vpm",c.t=+new Date,s.type="text/javascript",a.parentNode.insertBefore(s,a)}(document,"script");
		</script>	
		 
<style>
.whatsapp_fixo {
    background-size: contain;
    display: none;
    width: 216px;
    height: 75px;
    /* padding: 15px 0 0 50px; */
    position: fixed;
    z-index: 9;
    /* right: 50%; */
    bottom: 0;
    font-family: 'Roboto',sans-serif;
    /* font-size: 22px; */
    color: #FFF;
    text-align: center;
    line-height: 22px;
    border-radius: 15px 15px 0 0;
    /* background-color: #6baa46; */
    background-image: url(https://www.vipcomsistemas.com.br/wp-content/themes/agencies/images/<?=$imagemzap?>);
    background-repeat: no-repeat;
    /* background-position: 18px center; */
    cursor: pointer;
}
.whatsapp_fixo span.maior {
    font-size: 16px;
    font-weight: 700;
}

@media screen and (max-width: 767px) {

    .whatsapp_fixo {
		    bottom: 74px; 
			display: block;
			right: 137px;
    }   

}


 

</style> 
		 
 <!--
<a id="google_con" class="google_con" target="_blank" href="https://api.whatsapp.com/send?l=pt&phone=5511946543694&text=Quero criar um site, você pode me ajudar ?">
	<div id="whatsapp_fixo" class="whatsapp_fixo" style="display: block;"> </div>
</a>
-->
 <?

/* ============================ CODIGO PARA WHATSAPP =================================================*/

//Aqui vamos determinar como sera a frase de entrada do zap
$tdate = date("d/m/Y H:i:s");

$facebookl = "l.facebook"; 
$facebookm = "m.facebook"; 
$facebook = "facebook"; 
$yahoo = "yahoo";
$google = "google"; 
$bing = "bing";
$ads = "googleads";
$youtube = "youtube";
$baidu = "baidu";
$instagram = "instagram";
 
if(@$_REQUEST[origem] and $_SESSION['ip'] != $ip){
	$_SESSION['origem'] = $_REQUEST[origem];
	$_SESSION['ip'] = $ip;
	 mail("contato@formarbanda.com.br","ORIGEM DETECTADA ".$_SESSION['origem'], $_SESSION['origem']." ==> IP: ".$ip." ==>  $actual_link"); 
} 
else if(@$_REQUEST[target]){
	$_SESSION['origem'] = $_REQUEST[target];
	//mail("faleconosco@suportevipcom.com.br","ORIGEM DETECTADA ".$_SESSION['origem'], $_SESSION['origem']." ==> IP: ".$ip." ==>  $actual_link");  

}
else{
	$_SESSION['origem'] = $_SERVER['HTTP_REFERER']; 
}

 
 //echo "----".$_SESSION['origem'];

if(!strpos($_SESSION['origem'], "vipcomsistemas")){

	if(strpos($_SESSION['origem'], $facebookl)){
	   $inicial = " - Encontrei o seu site no facebook(L).";
	}
	else if(strpos($_SESSION['origem'], $facebookm)){
	  $inicial = " - Encontrei o seu site nos parceiros do facebook(M).";
	}
	else if(strpos($_SESSION['origem'], $facebook)){
	  $inicial = " - Encontrei o seu site nos parceiros do facebook.";
	}
	else if(strpos($_SESSION['origem'], $ads)){
	  $inicial = " - Encontrei o seu site nos parceiros do google.";
	}
	else if(strpos($_SESSION['origem'], $yahoo)){
	   $inicial = " - Encontrei o seu site no Yahoo.";
	}
	else if(strpos($_SESSION['origem'], $google)){
	   $inicial = " - Encontrei o seu site no Google.";
	}	
	else if(strpos($_SESSION['origem'], $forum)){
	   $inicial = " - Encontrei o seu site no facebook.";
	}
	else if(strpos($_SESSION['origem'], $bing )){
	 $inicial = " - Encontrei o seu site no Bing.";
	}	
	else if(strpos($_SESSION['origem'], $youtube )){
	 $inicial = " - Encontrei o seu site no Youtube.";
	}
	else if(strpos($_SESSION['origem'], $baidu )){
	 $inicial = " - Encontrei o seu site no Baidu.";
	}
	else if(strpos($_SESSION['origem'], $instagram )){
	 $inicial = " - Encontrei o seu site no $instagram.";
	}
	else {
	 $inicial = " - Encontrei o seu site no ".$_SESSION['origem'];
	}
 
} 

if($_REQUEST['campanhaadwords']){
	$_SESSION['target'] = "(".$_REQUEST['target'].")";
}
if($_REQUEST['campanhaadwords']){
	$_SESSION['target'] =  " - (".$_REQUEST['campanhaadwords'].")";
}

$frasewhatsapp = "Quero criar um site, você pode me ajudar ? Estou acessando o link $actual_link ".$_SESSION['target']." $inicial ";
 
		 
?>

<style> 


#myBtn2 {
  display: none;
  position: fixed;
  bottom: 20px;
  left: 216px;
  z-index: 99;
  font-size: 12px;
  border: none;
  outline: none; 
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  text-transform: inherit !important;
}

 
 

</style>

<!-- Back to top button --> 

<div><a onclick="topFunction()"  id="myBtn2" href="#voltaaotopo" class="scrollup">Voltar ao Topo</a></div>


<a id="google_con" class="google_con" target="_blank" href="https://api.whatsapp.com/send?l=pt&phone=553192417207&text=<?=$frasewhatsapp?>">
	<div id="whatsapp_fixo" class="whatsapp_fixo" style="display: block;"> </div>
</a>

<? /* ============================ CODIGO PARA WHATSAPP =================================================*/ ?>
		  
 <? }
else{ ?> 
	<!--
	 <a target="_blank" href="https://api.whatsapp.com/send?l=pt&phone=553199856479&text=Oi, olá estou interessado(a) em criar um site para acompanhante. Por favor, poderia me passar todos os detalhes ?"><img src="https://www.vipcomsistemas.com.br/images/whatsapp.png" style="left:35px;  position:fixed; bottom: 25px; right: 25px; z-index:100;" data-selector="img"></a>
	 -->
<?  } ?>


<!-- Event snippet for Contato via Whatsapp conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
 
function gtag_report_conversion_zap(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-650452136/ooLUCKmnzugBEKi5lLYC',
      'event_callback': callback
  });
  return false;
}

jQuery(".google_con").click(function(){
	gtag_report_conversion_classic_zap();
	gtag_report_conversion_zap();  
	
	 
	fbq('track', 'Search', {
		 contents: '<?=$post->post_title?>',
	  });
	  
});
 
</script>

<!-- Event snippet for Contato via whatsapp conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
 
function gtag_report_conversion_classic_zap(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-597259273/zrHLCNb56OgBEIno5ZwC',
      'event_callback': callback
  });
  return false;
}
 
</script>






<!-- VOLTAR AO TOPO -->

<style>
.scrollup {
    background: rgba(0, 0, 0, 0) url(https://www.vipcomsistemas.com.br/imagens/top-move.png) no-repeat scroll 0 0;
    bottom: 28px;
    display: none;
    height: 40px;
    opacity: 0.9;
    outline: none;
    position: fixed;
    right: 15px;
    text-indent: -9999px;
    width: 40px;
}

</style>
<script>
//Get the button
var mybutton = document.getElementById("myBtn2");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

       <script src="//code.jivosite.com/widget/x4jj7vVEmO" async></script>
