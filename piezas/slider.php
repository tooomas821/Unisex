<header class="masthead">
    <!-- Slider container -->
    <div class="swiper-container s1 w-100">
        <!-- Slides wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
           <?php $args = array('post_type' => 'slider', 'posts_per_page' => -1, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?> 
           <div class="swiper-slide home" style="background-position:center center;background-size:cover;background-repeat:no-repeat;background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>')">
             <div data-wow-delay="0.1s" class="intro-text">
               <div class="intro-heading text-light text-uppercase wow bounceIn"><h1><?php the_title(); ?></h1></div>
                 <div class="intro-lead-in text-light wow bounceIn"><?php the_content();?></div>
                  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger wow bounceIn" href="<?php echo get_post_meta($post->ID, 'linko', true); ?>">Ver más</a>
              </div>
           </div>
            <?php endwhile;?>
        </div>
        <!-- Pagination, if required -->
        <div class="swiper-pagination"></div>
    </div>
 </header>
