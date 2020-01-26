<?php
//Función que carga Woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
    
define('WOOCOMMERCE_USE_CSS', false);

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'wrap_before' => '<ol class="breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</ol>',
            'before'      => '<li class="breadcrumb-item">',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}

/**
* Fin Seccion
*/

?>