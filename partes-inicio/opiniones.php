<!-- Menu section -->
  <section class="text-white " id="opiniones">
  <div class="swiper-container slider-frases">
   <div class="swiper-wrapper">

 <?php $args = array('post_type' => 'opinion', 'posts_per_page' => -1, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?> 

    <div class="swiper-slide bg-dark opinion">
     <div class="col-lg-8 text-center mx-auto my-5">
      <?php $phrase = get_the_content(); $phrase = apply_filters('the_content', $phrase); $replace = '<p class="quote">'; echo str_replace('<p>', $replace, $phrase); ?>
      <hr class="magenta">
      <small class="text-faded">-<?php the_title(); ?></small>
     </div>
    </div> 

<?php endwhile;?>

   </div>
  </div>
 </section> 

