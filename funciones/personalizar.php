<?php
/**Seccion de subida para el logo del sitio*/
function your_theme_new_customizer_settings($wp_customize) {
// seteo para el logo
$wp_customize->add_setting('your_theme_logo');

// Con esta funcion creas una entrada en el menu de administracion que te permite subir el logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_logo',
) ) );
}
add_action('customize_register', 'your_theme_new_customizer_settings');

/**Fin Seccion*/


/*===================================================================================
 * Add Author Links
 * =================================================================================*/
function add_to_author_profile( $contactmethods ) {
  $contactmethods['cargo_empresa'] = 'Cargo en la empresa';
  $contactmethods['github_profile'] = 'Github Profile URL';
  $contactmethods['Gitlab_profile'] = 'Gitlab Profile URL';
  $contactmethods['fcc_profile'] = 'Freecodecamp Profile URL';
  $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
  
  return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);



// seteo para el gravatar
function my_gravatar_url() { // Get user email
$user_email = get_the_author_meta( 'user_email' );
// Convert email into md5 hash and set image size to 80 px
$user_gravatar_url = 'http://www.gravatar.com/avatar/' . md5($user_email) . '?s=700';
echo $user_gravatar_url; } 
/**Fin Seccion*/

// Usuario online
add_action('init', 'riverlab_users_status_init');
add_action('admin_init', 'riverlab_users_status_init');
function riverlab_users_status_init(){
$logged_in_users = get_transient('users_status'); // Capture users' activities by wordpress transients
$user = wp_get_current_user(); // Capture of current user data
// Update the user if it is not in the list, or if it is not online for the last 3 minutes (180 seconds)
if ( !isset($logged_in_users[$user->ID]['last']) || $logged_in_users[$user->ID]['last'] <= time()-180 ){
$logged_in_users[$user->ID] = array(
'id' => $user->ID,
'username' => $user->user_login,
'last' => time(),
);
set_transient('users_status', $logged_in_users, 180); // Set to expiry every 3 minutes (180 seconds)
}
}
// Check if someone is online in the last 3 minutes
function riverlab_is_user_online($id){
$logged_in_users = get_transient('users_status');

return isset($logged_in_users[$id]['last']) && $logged_in_users[$id]['last'] > time()-180;
}
// Check the last time someone was online
function riverlab_user_last_online($id){
$logged_in_users = get_transient('users_status');
if ( isset($logged_in_users[$id]['last']) ){
return $logged_in_users[$id]['last'];
} else {
return false;
}
}
/**Fin Seccion*/

function input_contacto( $wp_customize ) {
  $wp_customize->add_panel( 'contacto_input', array(
    'title' => __( 'Contacto ', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options',
  ));

  // Section para Datos 
  $wp_customize->add_section( 'contacto_seccion' , array(
    'title' => __( 'Datos ', 'textdomain' ),
    'panel' => 'contacto_input',
    'priority' => 2,
    'capability' => 'edit_theme_options',
  ));

  // Descripcion
  $wp_customize->add_setting( 'descripcion', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('descripcion', array(
    'label' => __( 'Descripcion', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 1,
    'type' => 'textarea',
  ));

  // Direccion
  $wp_customize->add_setting( 'direccion', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('direccion', array(
    'label' => __( 'Direccion', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 2,
    'type' => 'text',
  ));

  // Telefono
  $wp_customize->add_setting( 'telefono', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('telefono', array(
    'label' => __( 'Telefono', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 3,
    'type' => 'text',
  ));

  // Horario
  $wp_customize->add_setting( 'horario', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('horario', array(
    'label' => __( 'Horario', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 4,
    'type' => 'text',
  ));  

  // Email
  $wp_customize->add_setting( 'email', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('email', array(
    'label' => __( 'Email', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 5,
    'type' => 'email',
  ));
    // gmaps
  $wp_customize->add_setting( 'gmaps', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('gmaps', array(
    'label' => __( 'Google Map (solo url)', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 7,
    'type' => 'url',
  ));   
}
add_action( 'customize_register', 'input_contacto' );

/**Fin Seccion*/


function my_customize_register( $wp_customize ) {
  $wp_customize->add_panel( 'my_custom_options', array(
    'title' => __( 'Mis Opciones', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options',
  ));
 
  
 
  // Section para Redes Sociales
  $wp_customize->add_section( 'social_section' , array(
    'title' => __( 'Redes Sociales', 'textdomain' ),
    'panel' => 'my_custom_options',
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));
 
 
  //Redes Sociales: Facebook
  $wp_customize->add_setting( 'my_facebook_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_facebook_url', array(
    'label' => __( 'Facebook URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 1,
    'type' => 'text',
  ));

  //Redes Sociales: Twitter
  $wp_customize->add_setting( 'my_instagram_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_instagram_url', array(
    'label' => __( 'Instagram URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 2,
    'type' => 'text',
  ));

  //Redes Sociales: Linkedin
  $wp_customize->add_setting( 'my_linkedin_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_linkedin_url', array(
    'label' => __( 'Linkdin URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 3,
    'type' => 'text',
  ));

  //Redes Sociales: Youtube
  $wp_customize->add_setting( 'youtube', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('youtube', array(
    'label' => __( 'Youtube', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 4,
    'type' => 'text',
  ));
}
add_action( 'customize_register', 'my_customize_register' );


/**Fin Seccion*/


?>