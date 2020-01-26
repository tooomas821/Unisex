<?php
/**
* limitador de extracto
*/
function custom_excerpt_length( $length ) {
        return 11;
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
            'before_widget' => '<div class="card rounded-0">',
            'after_widget' => '</div> <div class="espacio-1"></div>',
            'before_title' => '<h5 class="widget-title card-header">',
            'after_title' => '</h5>'
    )
  );

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
    <li class="media">
      <div class="media-left">
        <?php echo get_avatar( $comment ); ?>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?php comment_author_link() ?></h4>
        <time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
        <?php comment_text() ?>
      </div>
    <?php endif;
  }

?>