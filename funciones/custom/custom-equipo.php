<?php
add_action('init', 'create_redvine_equipo');
function create_redvine_equipo() 
{
  $labels = array(
    'name' => _x('Equipo', 'equipo'),
    'singular_name' => _x('Equipo', 'equipo'),
    'add_new' => _x('Agregar Nueva', 'equipo'),
    'add_new_item' => __('Add New Equipo Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'menu_icon' => 'dashicons-networking',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('equipo',$args);
}

register_taxonomy( "equipo-categories", 
  array(  "equipo" ), 
  array(  "hierarchical" => true,
      "labels" => array('name'=>"Categorias Equipo",'add_new_item'=>"Agregar Nueva Categoria"), 
      "singular_label" => __( "Field" ), 
      "rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
                          'with_front' => false)
     ) 

);

/**
* Fin Seccion
*/
?>