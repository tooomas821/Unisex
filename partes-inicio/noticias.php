<section id="noticias">
  <div class="container-fluid bg-fucsia p-0">
   <div class="row">
    <div class="col-md-3 m-lg-auto text-center p-0 indicador">
     <div class="h-100">
      <h1 class="text-light my-5 text-uppercase font-weight-bold font-italic">blog</h1>
     </div>
    </div>
    <div class="col-md-9 p-0">

     <div class="swiper-container slider-noticias">
      <div class="swiper-wrapper">

      <?php $args = array('post_type' => 'post', 'posts_per_page' => 6, 'order' => 'ASC' );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>

       <div class="swiper-slide">
        <div class="card">
         <a href="<?php echo get_permalink(); ?>">
         <img class="card-img-top" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
         </a>
         <div class="card-block bg-blanco">
          <div class="profile">
           <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
            <img src="<?php my_gravatar_url() ?>" class="profile-avatar" alt="test">
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

      <?php endwhile;?>

      </div>
     </div>

    </div>
   </div>
  </div>
 </section>
