<!-- Contact section --> 
    <section class="bg-dark text-white" id="trabajos"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center wow pulse">
            <h2 class="section-heading">Páginas web comfortables y autoadministrables...</h2>
            <hr class="magenta my-4">
            <p class="text-faded mb-4 animated">Acá veras parte de lo que hacemos, te invitamos a crear tu página con nosotros...</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

      <?php $args = array('post_type' => 'proyectos', 'posts_per_page' => 6, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>

       <!-- Work -->
        <div data-wow-delay="0.1s" class="col-lg-4 col-sm-6 work wow fadeIn">
          <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>" alt="">
          <div class="overlay"></div>
          <div class="work-content">
            <span><?php $category_id = $categories[0]->name; ?> </span>
            <h3><?php the_title(); ?></h3>
            <div class="work-link">
              <a href="<?php echo get_post_meta($post->ID, 'lproyecto', true); ?>" target="_blank"><i class="fas fa-external-link-alt"></i></a>
              <a class="lightbox" href="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>"><i class="fas fa-search-plus"></i></a>
            </div>
          </div>
        </div>
        <!-- /Work -->
   <?php endwhile;?>

        </div>
      </div>
    </section>