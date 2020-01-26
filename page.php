<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png <?php } ?>);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <h1 class="pagina-nombre mb-4 box-headline letters rotate-2 font-italic"><?php the_title(); ?></h1>
  <p class="migas">
    <a href="<?php bloginfo('url')?>">Inicio</a> / <?php the_title(); ?>
  </p>
 </div>

 <section id="pagina">
  <div class="container-fluid p-0">
   <div class="row no-gutters">
    <div class="col-lg-12">
     <img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>" class="img-fluid w-100">
     <div class="espacio-1"></div>
    </div>
   </div>
  </div>

  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <h3 class="text-uppercase font-weight-bold text-center"><?php the_title(); ?></h3>
     <div class="espacio-1"></div>
      <?php the_content(); ?>
    </div>

   </div>
  </div>
 </section>
<?php endwhile; ?>
<?php endif; ?>
    <!-- /.container -->
    <?php get_footer(); ?>