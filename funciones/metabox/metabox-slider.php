<?php
function add_slider_meta_boxes() {
  add_meta_box("slider_contact_meta", "Ancla", "add_contact_details_slider_meta_box", "slider", "normal", "low");
}
function add_contact_details_slider_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );
 
  ?>
  <style>.width99 {width:99%;}</style>
  <p>
    <label>Incluye el Ancla a la seccion:</label>
  <br />
    <input type="text" name="linko"   placeholder="#seccion"   value="<?= @$custom["linko"][0] ?>" class="width99" />
  </p>
  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_slider_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "linko", @$_POST["linko"]);
  }
}
add_action( 'admin_init', 'add_slider_meta_boxes' );
add_action( 'save_post', 'save_slider_custom_fields' );
/**
* Fin Seccion
*/
?>