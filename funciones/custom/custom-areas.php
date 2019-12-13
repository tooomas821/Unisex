<?php
add_action('init', 'create_redvine_areas');
function create_redvine_areas() 
{
  $labels = array(
    'name' => _x('Areas', 'areas'),
    'singular_name' => _x('areas', 'areas'),
    'add_new' => _x('Agregar Nueva', 'areas'),
    'add_new_item' => __('Add New areas Item'),
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
    'menu_icon' => 'dashicons-image-filter',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('areas',$args);
}

register_taxonomy( "areas-categories", 
  array(  "areas" ), 
  array(  "hierarchical" => true,
      "labels" => array('name'=>"Categorias Areas",'add_new_item'=>"Agregar Nueva Categoria"), 
      "singular_label" => __( "Field" ), 
      "rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
                          'with_front' => false)
     ) 

);

/**
* Fin Seccion
*/ 
?>