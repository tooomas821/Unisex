<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="py-5 bg-dark">

  </section>
   <div class="jumbotron">
    <div class="container text-dark">
        <h1><?php the_title(); ?></h1>
        <?php breadcrumb(); ?> 
    </div>
  </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>" alt="">
          
          <hr>

          <!-- Date/Time -->
          <p>Posteado el <?php echo get_the_date('j'); ?> de <?php echo get_the_date('F'); ?> del <?php echo get_the_date('Y'); ?> a las <?php the_time('g:i a'); ?></p>


          <!-- Post Content -->
          <?php the_content(); ?>


         <?php endwhile; ?>

<?php comments_template(); ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categorías Widget -->
       <?php include ('sidebar.php');  ?>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <?php wp_reset_postdata();
endif;  ?>
    <!-- /.container -->
    <?php get_footer(); ?>