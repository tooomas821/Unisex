<?php
add_action('init', 'create_redvine_opinion');
function create_redvine_opinion() 
{
  $labels = array(
    'name' => _x('Opinion', 'opinion'),
    'singular_name' => _x('Opinion', 'opinion'),
    'add_new' => _x('Agregar Nueva', 'opinion'),
    'add_new_item' => __('Add New Opinion Item'),
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
    'menu_icon' => 'dashicons-groups',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor')
  ); 
  register_post_type('opinion',$args);
}

register_taxonomy( "opinion-categories", 
  array(  "opinion" ), 
  array(  "hierarchical" => true,
      "labels" => array('name'=>"Categorias Opinion",'add_new_item'=>"Agregar Nueva Categoria"), 
      "singular_label" => __( "Field" ), 
      "rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
                          'with_front' => false)
     ) 

);

/**
* Fin Seccion
*/
?>