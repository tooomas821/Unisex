<?php /* Template Name: portafolio */  get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="intro-pag text-white h-100 table-cell" style="background-image: linear-gradient(to bottom, rgba(30, 30, 30, 0.75), rgba(0, 0, 0, 0.75)), url(https://source.unsplash.com/QckxruozjRg/500x500); background-position: center bottom, center bottom;  background-size: cover, cover;  background-repeat: repeat, repeat;">
  <div class="title">
      <h1 class="mb-4 font-italic text-uppercase font-weight-bold title split-character"><?php the_title(); ?></h1>
  </div>
  <div class="description">
      <h6 class="mb-4 font-italic text-uppercase font-weight-bold title split-character"></h6>
  </div>
  <p class="migas"><a href="index.html">Inicio</a> / Portafolio</p>
 </div>
 <section id="trabajos">
  <div class="container-fluid p-0">

   <ul class="filter-menu text-center">

    <!-- For filtering controls add -->

    <li data-filter="all"> All items </li>
    <?php $terms = get_terms("proyectos-categories"); // get all categories, but you can use any taxonomy
                        $count = count($terms); //How many are they?
                        if ( $count > 0 ){  //If there are more than 0 terms
                            foreach ( $terms as $term ) {  //for each term:
                            echo "<li data-filter=".$term->slug.">" . $term->name . "</li>\n";
                                //create a list item with the current term slug for sorting, and name for label
                            }
                        } 
                    ?>

   </ul>
   <div class="row no-gutters filtr-container">


         <?php $loop = new WP_Query(array('post_type' => 'proyectos', 'posts_per_page' => -1, 'order' => 'ASC')); $count =0; ?> 
          <?php if ( $loop ) :  while ( $loop->have_posts() ) : $loop->the_post(); ?>  
                <?php $terms = get_the_terms( $post->ID, 'proyectos-categories' ); if ( $terms && ! is_wp_error( $terms ) ) : 
                    $links = array(); foreach ( $terms as $term )  { $links[] = $term->name; }
                    $links = str_replace(' ', '-', $links); 
                    $tax = join( " ", $links );      else :  $tax = '';  endif; ?>
                     <?php $infos = get_post_custom_values('_url'); ?>
            <div class="col-md-3 p-0 filtr-item" data-category="<?php echo strtolower($term->slug); ?>">
              <a href="<?php echo get_permalink(); ?>" class="portfolio_item"><img src="<?php the_post_thumbnail_url(); ?>" alt="website template image" class="img-fluid">
              <div class="portfolio_item_hover">
               <div class="portfolio-border clearfix">
                <div class="item_info">
                 <h2><?php the_title(); ?></h2> <em><?php echo strtolower($tax); ?></em></div>
               </div>
              </div>
             </a>
            </div>
          <?php endwhile; else: ?>
        <?php endif; ?>


   </div>
  </div>
 </section>
 <?php endwhile; ?>
<?php endif; ?>
    <!-- /.container -->
    <?php get_footer(); ?>