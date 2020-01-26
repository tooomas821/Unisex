 <section id="servicios">
  <div class="container-fluid p-0">
   <div class="row no-gutters">
    <div class="col-md-12  text-center p-0">
     <div class="row no-gutters bg-cian">


      <div class="col-md-3 m-lg-auto text-center p-0 indicador">
       <div class="h-100">
        <h1 class="text-light my-5 text-uppercase font-weight-bold font-italic">Servicios</h1>
       </div>
      </div>

     <?php $args = array('post_type' => 'areas', 'posts_per_page' => -1, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="col-md-3 p-0 bg-blanco">
       <div class="servicio">
        <div class="effect-sadie">
         <img class="img-fluid" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />
         <figcaption>
          <h2><i class="<?php echo get_post_meta($post->ID, 'font-awesome', true); ?>"></i> <span><?php the_title(); ?></span></h2>
          <p><small><?php echo the_content(); ?></small> </p>
         </figcaption>
        </div>
       </div>
      </div>

   <?php endwhile;?> 

     </div>
    </div>
   </div>
  </div>
 </section>


  