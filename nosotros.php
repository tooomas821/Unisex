<?php /* Template Name: Nosotros */  get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png <?php } ?>);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <div class="title">
      <h1 class="mb-4 font-italic text-uppercase font-weight-bold title split-character"><?php the_title(); ?></h1>
  </div>
  <div class="description">
      <h6 class="mb-4 font-italic text-uppercase font-weight-bold title split-character">¿Porqué elegirnos?</h6>
  </div>

  <p class="migas">
    <a href="<?php bloginfo('url')?>">Inicio</a> / <?php the_title(); ?>
  </p>
 </div>


 <section id="descripcion">
  <div class="container-fluid p-0">
   <div class="row no-gutters">
    <div class="col-md-6 bg-dark">
     <img class="img-fluid w-100" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">

    </div>
    <div class="col-md-6 p-3">
     <div class="col-md-12 p-3">
      <h3 class="uppercase"><?php the_title(); ?></h3>
      <?php the_content(); ?>
     </div>
     <div class="col-md-12 p-3">
      <h6 class="my-3">Nuestras redes sociales</h6>
      <div class="social">
       <a href="<?php echo get_option( 'my_facebook_url' ); ?>" title="Github"><i class="fab fa-github text-dark fa-lg"></i></a>
       <a href="<?php echo get_option( 'my_gitlab_url' ); ?>" title="Gitlab"><i class="fab fa-gitlab text-dark fa-lg"></i></a>
       <a href="<?php echo get_option( 'my_facebook_url' ); ?>" title="Facebook"><i class="fab fa-facebook text-dark fa-lg"></i></a>
       <a href="<?php echo get_option( 'my_linkedin_url' ); ?>" title="Linkedin"><i class="fab fa-linkedin text-dark fa-lg"></i></a>
       <a href="<?php echo get_option( 'my_youtube_url' ); ?>" title="Youtube"><i class="fab fa-youtube text-dark fa-lg"></i></a>
       <a href="<?php echo get_option( 'my_instagram_url' ); ?>" title="Instagram"><i class="fab fa-instagram text-dark fa-lg"></i></a>
       <a href="<?php echo get_option( 'my_twitter_url' ); ?>" title="Twitter"><i class="fab fa-twitter text-dark fa-lg"></i></a>
      </div>
     </div>
    </div>
   </div>
  </div>
  </div>
 </section>



 <section id="equipo">
  <div class="container-fluid p-0">
   <div class="row no-gutters">
    <!-- Equipo -->
    <div class="swiper-container slider-equipo">
     <div class="swiper-wrapper">



<?php $allUsers = get_users('orderby=post_count&order=DESC'); $users = array(); foreach($allUsers as $currentUser) { if(!in_array( 'subscriber', $currentUser->roles )) { $users[] = $currentUser; } } ?>
  <?php foreach($users as $user) {  ?>
      <div class="swiper-slide">
       <div class="card border-0 rounded-0">
        <a href="<?php echo get_author_posts_url( $user->ID ); ?>" title="<?php echo $user->display_name; ?> Avatar">
        <img src="<?php echo get_avatar_url( $user->user_email, ['size' => '700'] ); ?>" class="card-img-top rounded-0" alt="...">
        </a>
        <div class="card-body text-center">
         <a href="<?php echo get_author_posts_url( $user->ID ); ?>">
          <h5 class="card-title mb-0"><?php echo $user->display_name; ?></h5>
         </a>
         <div class="card-text text-black-50">
          <small><?php echo get_user_meta($user->ID, 'cargo_empresa', true); ?></small>
        </div>
        </div>
       </div>
      </div>
 <?php } ?>


     </div>
    </div>
    <!-- /.row -->
   </div>
 </section>
 <?php endwhile; ?>
<?php endif; ?>
    <!-- /.container -->
    <?php get_footer(); ?>