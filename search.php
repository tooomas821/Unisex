<?php get_header(); ?>

<section class="py-5 bg-dark">
  </section>

  <div class="jumbotron fondo-celeste">
    <div class="container text-dark">
       <h1 class="pagetitle">Resultados para "<?php echo $s ?>"</h1>
    </div>
  </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
 <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div class="post" id="post-<?php the_ID(); ?>">
                <p class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p>
                <?php
                // Support for "Search Excerpt" plugin
                // http://fucoder.com/code/search-excerpt/
                if ( function_exists('the_excerpt') && is_search() ) {
                    the_excerpt();
                } ?>
                <p class="small">
                    <?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
                    <!-- by <?php the_author() ?> -->
                    Published in
                    <?php the_category(', ');
                        if($post->comment_count > 0) { 
                                echo ' &nbsp;|&nbsp; ';
                                comments_popup_link('', '1 Comment', '% Comments'); 
                        }
                    ?>
                </p>
                
            </div>
        <?php endwhile; ?>

        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
            <div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
        </div>

    <?php else : ?>

        <h2 class="center">No Existe. Busque con otras palabras?</h2>

    <?php endif; ?>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categorías Widget -->
       <?php include ('sidebar.php');  ?>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>


