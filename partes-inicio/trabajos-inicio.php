 <section id="trabajos">
  <div class="container-fluid p-0">
   <div class="row no-gutters">


    <div class="col-md-6 p-0">

     <div class="row no-gutters bg-fucsia">

      <div class="col-md-6 p-0  m-lg-auto text-center p-0 indicador">
       <h1 class="text-light my-5 text-uppercase font-weight-bold font-italic">Trabajos</h1>
      </div>

      <?php $args = array( 'post_type' => 'proyectos', 'posts_per_page' => 1, 'order' => 'ASC', 'tax_query' => array( array( 'taxonomy' => 'proyectos-categories', 'field' => 'slug', 'terms' => array( 'destacado' ), 'operator' => 'NOT IN', ), ) );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-6 ads p-0">
       <a href="<?php echo get_permalink(); ?>" class="portfolio_item">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="website template image" class="img-fluid">
        <div class="portfolio_item_hover">
         <div class="portfolio-border clearfix">
          <div class="item_info">
           <h2><?php the_title(); ?></h2> 
           <em><?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?> </em>
         </div>
         </div>
        </div>
       </a>
      </div>
   <?php endwhile;?>

     </div>

     <div class="row no-gutters">

      <?php $args = array( 'post_type' => 'proyectos', 'offset' => 1, 'posts_per_page' => 2, 'order' => 'ASC', 'tax_query' => array( array( 'taxonomy' => 'proyectos-categories', 'field' => 'slug', 'terms' => array( 'destacado' ), 'operator' => 'NOT IN', ), ) );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-6 p-0">
       <a href="<?php echo get_permalink(); ?>" class="portfolio_item">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="website template image" class="img-fluid">
        <div class="portfolio_item_hover">
         <div class="portfolio-border clearfix">
          <div class="item_info">
           <h2><?php the_title(); ?></h2> 
           <em><?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?> </em>
         </div>
         </div>
        </div>
       </a>
      </div>

   <?php endwhile;?>

     </div>

    </div>
 <!-- /.loop portafolio -->

   <!--  portafolio destacado -->
   <?php $args = array('post_type' => 'proyectos',  'tax_query'  => array(  array( 'taxonomy' => 'proyectos-categories', 'field'    => 'slug',  'terms'    => 'destacado' ), ), 'posts_per_page' => 1 );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?> 
    <div class="col-md-6 p-0 photography">
     <a href="<?php echo get_permalink(); ?>" class="portfolio_item">
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="website template image" class="img-fluid">
      <div class="portfolio_item_hover">
       <div class="portfolio-border clearfix">
        <div class="item_info">
         <h2><?php the_title(); ?></h2> 
         <em><?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?> </em>
       </div>
       </div>
      </div>
     </a>
    </div>
  <?php endwhile;?>
    <!-- /.portafolio destacado  -->

    <!-- loop portafolio continuacion  -->

    <div class="col-md-12 p-0">
     <div class="row no-gutters">
  <?php $args = array( 'post_type' => 'proyectos', 'offset' => 3, 'posts_per_page' => 4, 'order' => 'ASC', 'tax_query' => array( array( 'taxonomy' => 'proyectos-categories', 'field' => 'slug', 'terms' => array( 'destacado' ), 'operator' => 'NOT IN', ), ) );$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); ?>      
      <div class="col-md-3 p-0 fashion logo">
       <a href="<?php echo get_permalink(); ?>" class="portfolio_item">
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="website template image" class="img-fluid">
        <div class="portfolio_item_hover">
         <div class="portfolio-border clearfix">
          <div class="item_info">
           <h2><?php the_title(); ?></h2> 
           <em><?php $terms = get_the_terms($property['ID'], 'proyectos-categories'); if(!empty($terms)){ foreach($terms as $value){ echo $value->name . "\n"; } } ?> </em>
         </div>
         </div>
        </div>
       </a>
      </div>

  <?php endwhile;?>      


     </div>
    </div>
<!-- /.loop portafolio continuacion  -->
   </div>
  </div>
 </section>