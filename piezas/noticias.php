    <section id="noticias">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center wow pulse">
            <h2 class="section-heading">El blog</h2>
            <hr class="magenta my-4">
            <p class="text-faded text-dark mb-4 animated">Noticias relacionadas con lo que hacemos...</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">


       <!-- Work -->
          <div  data-wow-delay="0.1s" class="swiper-container s2">
              <div class="swiper-wrapper">
                <?php $args = array('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="swiper-slide wow pulse">
                  <div class="content-item" style="background-position:center center;background-size:cover;background-repeat:no-repeat;background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>')">

                    <div class="overlay"></div>

                    <div class="corner-overlay-content font-weight-bold text-dark">
                      Mas
                    </div>

                    <div class="overlay-content text-light">
                      <h2><?php the_title(); ?></h2>
                      <?php the_excerpt();?>
                      <a class="btn btn-primary js-scroll-trigger wow bounceIn" href="<?php the_permalink(); ?>">leer nota</a>
                    </div>

                  </div>
                </div>
                <?php endwhile;?>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
          </div>
        <!-- /Work -->

        </div>
      </div>
    </section>
