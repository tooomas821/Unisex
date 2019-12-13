<?php get_header();?>
<div class="py-5">
  <div class="container">

    <h2 class="text-center text-uppercase texto-sobre-blanco mb-0"><?php wp_title('', true,''); ?></h2>
    <hr class="star-dark mb-5">
    <div class="row">
      <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $the_query = new WP_Query( 'posts_per_page=5&paged=' . $paged );


      if ( $the_query->have_posts() ) :

           while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <div class="my-4 col-md-6">
        <div class="card overlay-entrada">
          <img class="card-img w-100 h-100" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>"/>
          <div class="card-img-overlay d-flex justify-content-center align-items-center shadow-lg w-100 h-100">
            <div class="row info">
              <div class="col-lg-12">
                <h3 class="card-title text-center text-light"><?php the_title(); ?></h3>
                <p class="card-subtitle text-light text-center"><?php the_author() ?></p>
                <hr>
                <?php $phrase = get_the_excerpt(); $phrase = apply_filters('the_excerpt', $phrase); $replace = '<p class="card-text text-center text-light">'; echo str_replace('<p>', $replace, $phrase); ?>
              </div>
              <div class="d-flex justify-content-around">
                <span class="p-2 lateral"><i class="fa fa-user fa-fw"></i><?php comments_number( '0 opiniones', '1  opinion', '% opiniones' ); ?></span>
                <span class="p-2"><a href="<?php echo get_permalink(); ?>">Ver Mas</a></span>
                <span class="p-2 lateral"><?php the_time('F j, Y') ?></span>
             </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

    </div>


          <!-- Pagination -->
          <div class="bg-faded p-4 my-4">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item">
                <a class="page-link" href="#">&larr; Viejo</a>
              </li>
              <li class="page-item disabled">
                <a class="page-link" href="#">Nuevo &rarr;</a>
              </li>
            </ul>
          </div>


   </div>
  </div>

<?php wp_reset_postdata();
endif;  ?>
    </div>
    <!-- /.container -->

    <?php get_footer(); ?>
