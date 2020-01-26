<?php
function add_pagina_meta_boxes() {
  add_meta_box("pagina_contact_meta", "Ancla", "add_contact_details_pagina_meta_box", "page", "normal", "low");
}
function add_contact_details_pagina_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );
 
  ?>
  <style>.width99 {width:99%;}</style>
  <p>
    <label>Incluye el Ancla para la seccion:</label>
  <br />
    <input type="text" name="seccions"   placeholder="#seccion"   value="<?= @$custom["seccions"][0] ?>" class="width99" />
  </p>
  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_pagina_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "seccions", @$_POST["seccions"]);
  }
}
add_action( 'admin_init', 'add_pagina_meta_boxes' );
add_action( 'save_post', 'save_pagina_custom_fields' );
/**
* Fin Seccion
*/

?>