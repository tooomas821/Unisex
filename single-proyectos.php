<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png <?php } ?>); background-position: center bottom, center bottom;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <div class="title">
      <h1 class="mb-4 font-italic text-uppercase font-weight-bold title split-character"><?php the_title(); ?></h1>
  </div>
  <div class="description">
      <h6 class="mb-4 font-italic text-uppercase font-weight-bold title split-character">Categoria:<?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?></h6>
  </div>   
  <p class="migas">
    <a href="<?php bloginfo('url')?>">Inicio</a> / <?php the_title(); ?>
  </p>
 </div>
 <section id="portafolio-simple">
  <div class="container-fluid p-0">
   <div class="row no-gutters">
    <div class="col-md-6 bg-dark">
     <div class="swiper-container slider-portafolio">
      <div class="swiper-wrapper">

           <?php 
        $images = get_post_meta($post->ID, 'vdw_gallery_id', true);
        $div_begin = '<div class="swiper-slide">';
        $div_end= '</div>';
        if(is_array($images) || is_object($images)) foreach ($images as $image) {
            echo $div_begin;
            $url = wp_get_attachment_url($image);
            echo str_replace('%URL%', $url, $link_begin );
            echo wp_get_attachment_image($image, '',false, array( "class" => "img-fluid w-100" ));
            echo $link_end;
            echo $div_end;
        } ?>

      </div>
     </div>
    </div>

    <div class="col-md-6 p-3">
     <div class="col-md-12 p-3">
      <h3 class="text-uppercase font-weight-bold"><?php the_title(); ?></h3>
      <small><?php the_content(); ?></small>
      <small>Detalle Proyecto</small>
      <small><ul class="list-unstyled">
       <li>Fecha: <a><?php echo (new DateTime(get_post_meta($post->ID,'fproyecto',true)))->format('d F Y'); ?></a></li>
       <li>Categoria: <a><?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?></a></li>
       <li>Cliente: <a><?php echo get_post_meta($post->ID, 'cproyecto', true); ?></a></li>
      </ul></small>
      <a href="<?php echo get_post_meta($post->ID, 'lproyecto', true); ?>" class="btn btn-primary">Visitar Sitio</a>
      <div class="espacio-1"></div>
      <div class="social">
       <p class="small-title">Compartir:</p>
       <a href="https://twitter.com/home?status=<?php global $wp; echo home_url( $wp->request ); ?>"><i class="fab fa-twitter text-dark fa-lg"></i></a>
       <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php global $wp; echo home_url( $wp->request ); ?>"><i class="fab fa-linkedin text-dark fa-lg"></i></a>
       <a href="https://www.facebook.com/sharer/sharer.php?u=<?php global $wp; echo home_url( $wp->request ); ?>"><i class="fab fa-facebook text-dark fa-lg"></i></a>

      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
<?php endwhile; ?>

 <section id="trabajos">
  <div class="swiper-container slider-relativos">
   <div class="swiper-wrapper">
 <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5,'post_type' => 'proyectos', 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
    <div class="swiper-slide">
     <a href="<?php echo get_permalink(); ?>" class="portfolio_item">
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="website template image" class="img-fluid">
      <div class="portfolio_item_hover">
       <div class="portfolio-border clearfix">
        <div class="item_info">
         <h2><?php the_title(); ?></h2> 
         <em><?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?> </em>
       </div>
       </div>
      </div>
     </a>
    </div>

<?php }
wp_reset_postdata(); ?>


   </div>
  </div>
 </section>
     <?php wp_reset_postdata();
endif;  ?>
    <?php get_footer(); ?>




