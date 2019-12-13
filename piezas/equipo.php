<!-- Team section -->
  <section  class="bg-dark text-white" id="equipo">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center wow pulse">
          <h2 class="section-heading">Equipo</h2>
          <hr class="aqua my-4">
          <p class="mb-4 animated">En constante formación y actualización para poder ofrecer a nuestros clientes las últimas tendencias de diseño y desarrollo Web.</p> 
          </br>   
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">

<?php $args = array('post_type' => 'equipo', 'posts_per_page' => 6, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div  data-wow-delay="0.1s" class="text-center text-dark col-lg-4 col-md-3">
          <div class="card wow bounceIn">
             <img class="img-fluid d-block" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
            <div class="card-body text-dark">
              <h4><?php the_title(); ?></h4>
              <h6 class="text-muted"><?php echo get_post_meta($post->ID, 'posicion', true); ?></h6>
              <?php $phrase = get_the_content(); $phrase = apply_filters('the_content', $phrase); $replace = '<p class="card-text text-center">'; echo str_replace('<p>', $replace, $phrase); ?>
            </div>
          </div>
        </div>
<?php endwhile;?> 


      </div>
    </div>
  </section>


  