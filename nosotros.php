<?php /* Template Name: Nosotros */  get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png <?php } ?>);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <h1 class="pagina-nombre mb-4 box-headline letters rotate-2 font-italic"><?php the_title(); ?></h1>
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
      <h6 class="my-1">Nuestras redes sociales</h6>
      <div class="social">
       <a href="#"><i class="fab fa-github text-dark fa-lg"></i></a>
       <a href="#"><i class="fab fa-gitlab text-dark fa-lg"></i></a>
       <a href="#"><i class="fab fa-free-code-camp text-dark fa-lg"></i></a>
       <a href="#"><i class="fab fa-codepen text-dark fa-lg"></i></a>
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
        <img src="<?php echo get_avatar_url( $user->user_email, ['size' => '700'] ); ?>" class="card-img-top rounded-0" alt="...">
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