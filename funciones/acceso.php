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

?>