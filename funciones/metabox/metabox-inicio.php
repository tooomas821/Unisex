<?php
function add_home_meta_boxes()
{
    global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'homepage.php' )
        {
            add_meta_box(
                'home_contact_meta', // $id
                'Contenido (solo para plantillas home)', // $title
                'add_contact_details_home_meta_box', // $callback
                'page', // $page
                'normal', // $context
                'low'); // $priority
        }
    }
}

function add_contact_details_home_meta_box()
{


  global $post;
  $custom = get_post_custom( $post->ID );
    ?>
  <style>.width99 {width:99%;}</style>

  <p>
    <label>Titulo Bienvenida:</label><br />
    <input type="text" name="bienvenida" id="bienvenida" class="width99" value="<?= @$custom["bienvenida"][0] ?>" />
    
  </p>
  
  <p>
    <label>Nombre:</label><br />
    <input type="text" name="bloque-1" id="bloque-1" class="width99" value="<?= @$custom["bloque-1"][0] ?>" />
    
  </p>
  <p>
    <label>Subtitulo:</label><br />
    <input type="text" name="bajada" id="bajada" class="width99" value="<?= @$custom["bajada"][0] ?>" />
    
  </p>
  
  <?php
}

/**
 * Save custom field data when creating/updating posts
 */

function save_home_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "bienvenida", @$_POST["bienvenida"]);
    update_post_meta($post->ID, "bloque-1", @$_POST["bloque-1"]);
    update_post_meta($post->ID, "bajada", @$_POST["bajada"]);

  }
}
add_action( 'add_meta_boxes', 'add_home_meta_boxes' );
add_action( 'save_post', 'save_home_custom_fields' );
  /**
* Fin Seccion
*/
?>