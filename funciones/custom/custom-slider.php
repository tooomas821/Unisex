<?php

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'slider';
    remove_post_type_support( $post_type, 'editor');
}

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
};

/**
* Fin Seccion
*/ 
?>