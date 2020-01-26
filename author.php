<?php get_header();?>
 <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(<?php my_gravatar_url() ?>); background-position: center bottom, center bottom;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <h1 class="pagina-nombre mb-4 box-headline letters rotate-2">
                     <span class="box-words-wrapper">
                        <b class="is-visible"><?php the_author_meta( 'first_name' ); ?>&nbsp;<?php the_author_meta( 'last_name' ); ?></b>
                        <b class="is-hidden"><?php the_author_meta('cargo_empresa'); ?></b>
                    </span>
         </h1>
  <p class="migas"><a href="index.html">Inicio</a> / <?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></p>
 </div>

 <div class="container-fluid p-0">
  <div class="row no-gutters">
   <div class="col-md-6">
    <img class="img-fluid w-100" src="<?php my_gravatar_url() ?>" alt="">
   </div>
   <div class="col-md-6 p-3">
    <h3 class="text-uppercase"><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></h3>
    <small><?php the_author_meta('cargo_empresa'); ?></small>
    <div class="espacio-1"></div>
    <p><?php the_author_meta( 'description' ); ?> </p>
    <div class="social">
     <a href="#"><i class="fab fa-github text-dark fa-lg"></i></a>
     <a href="#"><i class="fab fa-gitlab text-dark fa-lg"></i></a>
     <a href="#"><i class="fab fa-free-code-camp text-dark fa-lg"></i></a>
     <a href="#"><i class="fab fa-codepen text-dark fa-lg"></i></a>
    </div>
   </div>

  </div>
 </div>

 

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















<?php get_footer(); ?>
