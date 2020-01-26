<?php
function add_equipo_meta_boxes() {
  add_meta_box("equipo_contact_meta", "Datos de posición en la empresa", "add_contact_details_equipo_meta_box", "equipo", "normal", "low");
}
function add_contact_details_equipo_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );
 
  ?>

   <style>.width99 {width:99%;}</style>
  <p>
    <label>Posición:</label><br />
    <input type="text" name="posicion" id="posicion" class="width99" value="<?= @$custom["posicion"][0] ?>" />
    
  </p>

  <p>
    <label>Email:</label><br />
    <input type="text" name="correo" id="correo" class="width99" value="<?= @$custom["correo"][0] ?>" />
    
  </p>

  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_equipo_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "posicion", @$_POST["posicion"]);   
    update_post_meta($post->ID, "correo", @$_POST["correo"]);     
  }
}
add_action( 'admin_init', 'add_equipo_meta_boxes' );
add_action( 'save_post', 'save_equipo_custom_fields' );
/**
* Fin Seccion
*/

?>