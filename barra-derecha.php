<?php /* Template Name: Barra Derecha */  get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="bg-image-full py-5" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>');background-position:center center;background-size:cover;background-repeat:no-repeat;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;background-position:center center;"></div>
  </section>

  <div class="card text-white bg-secondary my-4 text-center">
    <div class="card-body">
        <?php breadcrumb(); ?> 
    </div>
  </div>

    <!-- Page Content -->
    <div class="container py-5">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posteado el <?php echo get_the_date('j'); ?> de <?php echo get_the_date('F'); ?> del <?php echo get_the_date('Y'); ?> a las <?php the_time('g:i a'); ?></p>

          <hr>

          <!-- Post Content -->
          <?php the_content(); ?>

          <hr>

         <?php endwhile; ?>

<?php comments_template(); ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categorías Widget -->
       <?php dynamic_sidebar( 'unique-sidebar-id' );   ?>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <?php wp_reset_postdata();
endif;  ?>
    <!-- /.container -->
    <?php get_footer(); ?>