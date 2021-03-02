<?php
add_filter( 'wpsl_templates', 'agencies_wpsl_custom_templates' );
function agencies_wpsl_custom_templates( $templates ) {

    $templates[] = array (
        'id'   => 'custom',
        'name' => __('Custom template', 'agencies' ),
        'path' => AGENCIES_THEME_DIR . '/' . 'wpsl-templates/custom.php',
    );

    return $templates;
}

add_filter( 'wpsl_thumb_size', 'agencies_wpsl_custom_thumb_size' );
function agencies_wpsl_custom_thumb_size() {    
    $size = array( 90, 90 );
    return $size;	
}