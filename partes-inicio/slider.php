
<section id="presentacion">
  <div class="swiper-container slider-presentacion">
   <div class="swiper-wrapper">

    <?php $args = array('post_type' => 'slider', 'posts_per_page' => -1, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?> 

    <div class="swiper-slide">
     <div class="slider py-5 text-center text-white h-100 align-items-center d-flex" style="background-image: linear-gradient(to top, rgba(134, 10, 103, 0.84), rgba(0, 212, 255, 0.5)), url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
      <div class="container py-5">
       <div class="row">
        <div class="mx-auto col-lg-8 col-md-10">
         <h1 class="enorme mb-4"><?php the_title(); ?></h1>
        </div>
       </div>
      </div>
     </div>
    </div>

<?php endwhile;?>

   </div>
  </div>
 </section>