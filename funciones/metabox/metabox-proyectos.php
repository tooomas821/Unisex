<?php
function add_proyectos_meta_boxes() {
  add_meta_box("proyectos_contact_meta", "Link", "add_contact_details_proyectos_meta_box", "proyectos", "normal", "low");
}
function add_contact_details_proyectos_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );
 
  ?>
  <style>.width99 {width:99%;}</style>
  <p>
    <label>Incluye el Link del proyecto:</label>
  <br />
    <input type="url" name="lproyecto""  value="<?= @$custom["lproyecto"][0] ?>" class="width99" />
  </p>
  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_proyectos_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "lproyecto", @$_POST["lproyecto"]);
  }
}
add_action( 'admin_init', 'add_proyectos_meta_boxes' );
add_action( 'save_post', 'save_proyectos_custom_fields' );
/**
* Fin Seccion
*/
?>