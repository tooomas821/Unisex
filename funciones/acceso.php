<?php
/**
* Logo login
*/
function custom_login_logo() {
    echo '<style type="text/css">'.
             'body {
                background: url(https://images.pexels.com/photos/938967/pexels-photo-938967.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260);
                background-repeat: no-repeat;
                background-size: cover;
              }
             h1 a { 
              background-image:url('.get_theme_mod( 'your_theme_logo' ).') !important;
              background-size: 200px !important;
              width: 200px !important;
              height: 130px !important;
            }'.
         '</style>';
}
add_action( 'login_head', 'custom_login_logo' );
/**Fin Seccion*/

/**
* sitemap
*/

add_action( 'publish_post', 'itsg_create_sitemap' );
add_action( 'publish_page', 'itsg_create_sitemap' );
function itsg_create_sitemap() {
    $postsForSitemap = get_posts(array(
        'numberposts' => -1,
        'orderby' => 'modified',
        'post_type'  => array( 'post', 'page' ),
        'order'    => 'DESC'
    ));
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
    foreach( $postsForSitemap as $post ) {
        setup_postdata( $post );
        $postdate = explode( " ", $post->post_modified );
        $sitemap .= '<url>'.
          '<loc>' . get_permalink( $post->ID ) . '</loc>' .
          '<lastmod>' . $postdate[0] . '</lastmod>' .          
         '</url>';
      }
    $sitemap .= '</urlset>';
    $fp = fopen( ABSPATH . 'sitemap.xml', 'w' );
    fwrite( $fp, $sitemap );
    fclose( $fp );
}
/**Fin Seccion*/
?>