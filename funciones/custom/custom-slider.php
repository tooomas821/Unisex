<?php
add_action('init', 'create_redvine_slider');
function create_redvine_slider() 
{
  $labels = array(
    'name' => _x('Sliders', 'slider'),
    'singular_name' => _x('slider', 'slider'),
    'add_new' => _x('Nuevo Slider', 'slider'),
    'add_new_item' => __('Crear Nuevo Slide'),
    'edit_item' => __('Editar Slide'),
    'new_item' => __('Nuevo Slide'),
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
    'menu_icon' => 'dashicons-thumbs-up',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('slider',$args);
}

register_taxonomy( "slider-categories", 
  array(  "slider" ), 
  array(  "hierarchical" => true,
      "labels" => array('name'=>"Categorias para Slide",'add_new_item'=>"Agregar Nueva Categoria"), 
      "singular_label" => __( "Field" ), 
      "rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
                          'with_front' => false)
     ) 

);

/**
* Fin Seccion
*/ 
?>