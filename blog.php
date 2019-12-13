<?php /* Template Name: blog*/ get_header();?>
 <section class="py-5 bg-dark">

  </section>

  <div class="jumbotron">
    <div class="container text-dark">
        <h1><?php wp_title('', true,''); ?></h1>
    <ol class="breadcrumb plomo wow fadeInRight">
      <li class="breadcrumb-item"><a href="<?php bloginfo('url')?>">Inicio</a> </li>
      <li class="breadcrumb-item active"><a><?php wp_title('', true,''); ?></a> </li>
   </ol>
    </div>
  </div>
  <!-- Page Content -->
  <div class="container">
    <div class="row">

  <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; $the_query = new WP_Query( 'posts_per_page=6&paged=' . $paged );  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>        
      <div class="col-md-4">
        <div class="single-blog-item">
          <div class="blog-thumnail">
            <a href="<?php echo get_permalink(); ?>">
              <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } else { ?><?php bloginfo('template_directory'); ?>/screenshot.png" alt="<?php the_title(); ?> <?php } ?>">
            </a>
              <span class="blog-date"><?php echo get_the_date('j'); ?> <?php echo get_the_date('F'); ?>, <?php echo get_the_date('Y'); ?></span>
          </div>
          <div class="blog-content">
            <h4>
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <p>Ser adaptable ya no es una opción, al menos si quieres ser visible en Google. Así, han avisado que las páginas con problemas […]</p>
            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary js-scroll-trigger wow bounceIn">Ver Mas</a>
          </div>
        </div>
      </div>

    </div>
  </div>
<?php endwhile; ?>
    </div>
  </div>
  <!-- Pagination -->
  
  <section class="py-5">
  <?php 
if (function_exists("fellowtuts_wpbs_pagination"))
{
    fellowtuts_wpbs_pagination();
    //fellowtuts_wpbs_pagination($the_query->max_num_pages);
}
?> 
  </section>
<?php wp_reset_postdata();
endif;  ?>  


 <?php get_footer(); ?>  