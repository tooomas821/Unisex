<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png <?php } ?>); background-position: center bottom, center bottom;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <h1 class="pagina-nombre mb-4 box-headline letters rotate-2">
                     <span class="box-words-wrapper">
                        <b class="is-visible"><?php the_title(); ?></b>
                        <b class="is-hidden">Categoria:&nbsp;<?php $category = get_the_category(); echo $category[0]->cat_name; ?></b>
                    </span>
         </h1>
  <p class="migas">
    <a href="<?php bloginfo('url')?>">Inicio</a> / <?php the_title(); ?>
  </p>
 </div>

 <section id="contenido-blog">
  <div class="container-fluid p-0">
   <div class="row no-gutters">
    <div class="col-lg-12">
     <img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>" class="img-fluid w-100">
     <div class="espacio-1"></div>
    </div>
   </div>
  </div>

  <div class="container">
   <div class="row">
    <div class="col-lg-9">
     <h3 class="text-uppercase font-weight-bold"><?php the_title(); ?></h3>
     <small>Posteado por <?php the_author(); ?> el <?php echo get_the_date('j'); ?> de <?php echo get_the_date('F'); ?> del <?php echo get_the_date('Y'); ?> a las <?php the_time('g:i a'); ?></small>
     <div class="espacio-1"></div>
      <?php the_content(); ?>
      <div class="social">
      <p class="small-title mb-10">Compartenos:</p>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php global $wp; echo home_url( $wp->request ); ?>">
        <i class="fab fa-facebook text-dark fa-lg"></i>
      </a>
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php global $wp; echo home_url( $wp->request ); ?>">
        <i class="fab fa-linkedin text-dark fa-lg"></i>
      </a>
      <a href="https://twitter.com/home?status=<?php global $wp; echo home_url( $wp->request ); ?>">
        <i class="fab fa-twitter text-dark fa-lg"></i>
      </a>
     </div>
     <div class="espacio-2"></div>
     <section id="bio">
      <div class="media">
       <a class="mr-1 img-bio" href="bio.html">
      <div class="image_outer_container">
        <?php $id = get_the_author_meta( 'ID' );
        // this should be inside a post (single.php for example)
        if ( riverlab_is_user_online($id) ) {
                echo '<div class="green_icon"></div>';
            } else {
                echo '<div class="red_icon"></div>';
            }
        ?>

        <div class="image_inner_container">
          <img src="<?php my_gravatar_url() ?>" />
        </div>
      </div>
       </a>
       <div class="media-body bio">
        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
         <h4 class="media-heading"><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></h4>
        </a>
        <h5><?php the_author_meta('cargo_empresa'); ?></h5>
        <hr class="magenta">
        <small class="text-justify"><?php the_author_meta( 'description' ); ?> </small>


       </div>
      </div>
      </section>
      <div class="espacio-2"></div>

      <?php endwhile; ?>
      <?php comments_template( '', true ); ?>    
    </div>

    <div class="col-lg-3">
     
       <?php include ('sidebar.php');  ?>
    </div>

   </div>
  </div>
  </section>
  
 <div class="espacio-2"></div> 
  <section id="noticias">
   <div class="container-fluid p-0">
    <div class="row no-gutters">
     <!-- Equipo -->
     <div class="swiper-container slider-blog">
      <div class="swiper-wrapper">
    
       <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) ); if( $related ) foreach( $related as $post ) { setup_postdata($post); ?>
         <div class="swiper-slide">
         <div class="card">
          <a href="<?php echo get_permalink(); ?>">
            <img class="card-img-top" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
          </a>
          <div class="card-block bg-blanco">
           <div class="profile">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
              <img src="<?php echo my_gravatar_url( $id_or_email, $size = '96', $default = '&amp;lt;path_to_url&amp;gt;' );?>" class="profile-avatar" alt="test">
            </a>
           </div>
           <div class="meta">
            <a href="<?php get_category_link( $category_id ); ?>"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>
           </div>
           <a href="<?php echo get_permalink(); ?>">
            <h4 class="card-title mt-3 text-md-left"><?php echo wp_trim_words( get_the_title(), 6 ); ?></h4>
           </a>
           <div class="card-text text-md-left">
            <small><?php the_excerpt();?></small>
           </div>
          </div>
          <div class="card-footer text-md-left">
           <small><?php echo get_the_date('j'); ?> <?php echo get_the_date('F'); ?>, <?php echo get_the_date('Y'); ?></small>
           <a href="<?php echo get_permalink(); ?>"><button class="btn btn-primary float-right btn-sm">Ver</button></a>
          </div>
         </div>
       </div>   
<?php }
wp_reset_postdata(); ?>


      </div>
     </div>
     <!-- /.row -->
    </div>
   </div>
  </section>

    <?php wp_reset_postdata();
endif;  ?>
    <!-- /.container -->
    <?php get_footer(); ?>




