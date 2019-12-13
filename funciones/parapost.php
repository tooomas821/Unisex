<?php
/**
* limitador de extracto
*/
function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**Fin Seccion*/

// Funcion sidebar para WordPress.
function textdomain_register_sidebars() {
  register_sidebar(
    array(
      'id' => 'unique-sidebar-id',
      'name' => __( 'Sidebar Derecho', 'textdomain' ),
      'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div class="card my-4">',
            'after_widget' => '</div>',
            'before_title' => '<h5 class="widget-title card-header">',
            'after_title' => '</h5>'
    )
  );

  register_sidebar(
    array(
      'id' => 'sidebar-footer1',
      'name' => __( 'Footer 1', 'textdomain' ),
      'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<aside class="widget wow fadeInUp"  data-wow-duration="1000ms">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>'
    )
  );

  register_sidebar(
    array(
      'id' => 'sidebar-footer2',
      'name' => __( 'Footer 2', 'textdomain' ),
      'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<aside class="widget wow fadeInUp"  data-wow-duration="1000ms">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>'
    )
  );

  register_sidebar(
    array(
      'id' => 'sidebar-footer3',
      'name' => __( 'Footer 3', 'textdomain' ),
      'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<aside class="widget wow fadeInUp"  data-wow-duration="1000ms">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>'
    )
  );  

    register_sidebar( 
            array(
            'id' => 'shop',
            'name' => __( 'woocommerce', 'textdomain' ),
            'before_widget' => '<aside class="widget wow fadeInUp"  data-wow-duration="1000ms">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>'
        )
    );



  /* para crear mas sidebar solo debes repetir el codigo de arriba aca va un ejemplo
   register_sidebar(
    array(
      'id' => 'unique-sidebar-id2',
      'name' => __( 'Sidebar nuevo', 'textdomain' ),
      'description' => __( 'A short description of the sidebar.', 'textdomain' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  ); */
// Aca registramos el sidebar para que aparezca.  
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );
/**
* Fin Seccion
*/



// se agreaga como un lujo el feed links para RSS en el head.
  add_theme_support( 'automatic-feed-links' );

 //Que Wordpress gestione el título del documento. Mediante la adición de soporte para temas, declaramos que este tema no utiliza una Codificados de forma rígida etiqueta <title> en el encabezado del documento, y esperar a WordPress ponga esto por nosotros//
  add_theme_support( 'title-tag' );
  /**
* Fin Seccion
*/

/*
// Funcion para poner imagen destacada en la edicion del post.
   */
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 9999 );
/*




   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /*
   * Enable support for Post Formats.
   *
   * See: https://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
  ) );




/* ========================================================================================================================
  
  Comments
  
  ======================================================================================================================== */
  /**
   * Custom callback for outputting comments 
   *
   * @return void
   * @author Keir Whitaker
   */
  function bootstrap_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; 
    ?>
    <?php if ( $comment->comment_approved == '1' ): ?>
           <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="<?php echo get_avatar_url( $comment ); ?>" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php comment_author_link() ?></h5>
              <?php comment_text() ?>
            </div>
          </div>
    <?php endif;
  }




  

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
  if ( 'post-thumbnail' === $size ) {
    is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
    ! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
  }
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
  $args['largest'] = 1;
  $args['smallest'] = 1;
  $args['unit'] = 'em';
  return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );

// Fin Funcion



//////////Track post views

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Vistas";
    }
    return $count.' Vistas';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// Fin Funcion


/**
* Paginacion
*/

function fellowtuts_wpbs_pagination($pages = '', $range = 2) 
{  
  $showitems = ($range * 2) + 1;  
  global $paged;
  if(empty($paged)) $paged = 1;
  if($pages == '')
  {
    global $wp_query; 
    $pages = $wp_query->max_num_pages;
  
    if(!$pages)
      $pages = 1;    
  }   
  
  if(1 != $pages)
  {
      echo '<nav aria-label="Page navigation" role="navigation">';
        echo '<span class="sr-only">Page navigation</span>';
        echo '<ul class="pagination justify-content-center wow zoomIn">';
    
        echo '<li class="page-item disabled hidden-md-down d-none d-lg-block"><span class="page-link">Pagina '.$paged.' de '.$pages.'</span></li>';
  
    if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
      echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link(1).'" aria-label="First Page">&laquo;<span class="hidden-sm-down d-none d-md-block"> First</span></a></li>';
  
    if($paged > 1 && $showitems < $pages) 
      echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged - 1).'" aria-label="Previous Page">&lsaquo;<span class="hidden-sm-down d-none d-md-block"> Previous</span></a></li>';
  
    for ($i=1; $i <= $pages; $i++)
    {
        if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
        echo ($paged == $i)? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>'.$i.'</span></li>' : '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'"><span class="sr-only">Pagina </span>'.$i.'</a></li>';
    }
    
    if ($paged < $pages && $showitems < $pages) 
      echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged + 1).'" aria-label="Next Page"><span class="hidden-sm-down d-none d-md-block">Next </span>&rsaquo;</a></li>';  
  
    if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
      echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($pages).'" aria-label="Last Page"><span class="hidden-sm-down d-none d-md-block">Last </span>&raquo;</a></li>';
  
    echo '</ul>';
        echo '</nav>';
        //echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';   
  }
}

/**Fin Seccion*/



?>