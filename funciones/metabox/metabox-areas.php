<?php
function add_areas_meta_boxes() {
  add_meta_box("areas_contact_meta", "Font Awesome", "add_contact_details_areas_meta_box", "areas", "normal", "low");
}
function add_contact_details_areas_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );
 
  ?>
  <style>.width99 {width:99%;}</style>
  <p>
    <label>Incluye el icono a tu eleccion desde <a href="https://fontawesome.com/icons" target="_blank">fontawesome.com</a>
:</label><br />
    <input type="text" name="font-awesome"  placeholder="fab fa-facebook-f" value="<?= @$custom["font-awesome"][0] ?>" class="width99" />
  </p>
  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_areas_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "font-awesome", @$_POST["font-awesome"]);
  }
}
add_action( 'admin_init', 'add_areas_meta_boxes' );
add_action( 'save_post', 'save_areas_custom_fields' );
/**
* Fin Seccion
*/
?>