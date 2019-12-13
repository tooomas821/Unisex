
<!-- Menu section -->
<section id="servicios">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center wow pulse">
            <h2 class="section-heading">Esto es lo que ofrecemos</h2>
            <hr class="aqua my-4">
            <p class="text-dark mb-4 animated">En la actualidad tu sitio web es la vitrina al mundo, tiene que ser rápido en distintos dispositivos.</p>         
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
        <?php $args = array('post_type' => 'areas', 'posts_per_page' => -1, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>    
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="<?php echo get_post_meta($post->ID, 'font-awesome', true); ?> fa-5x text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"><?php the_title(); ?></h3>
              <p class="text-muted mb-0"><?php echo the_excerpt(); ?></p>
            </div>
          </div>
       <?php endwhile;?> 
        </div>
      </div>
    </section>

  