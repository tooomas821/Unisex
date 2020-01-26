<?php /* Template Name: Mapa de sitio */  get_header();?>
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
        <div class="col-md-12">
          <h1>Autores</h1>
          <ul class="">
			<?php
			// Add pages you'd like to exclude in the exclude here
			wp_list_authors(
			array(
			'exclude' => '', // enter the ID or comma-separated list of page IDs to exclude
			'title_li' => '',
			)
			);
			?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1>Paginas</h1>
          <ul class="">
		   <?php
			// Add pages you'd like to exclude in the exclude here
			wp_list_pages(
			array(
			'exclude' => '', // enter the ID or comma-separated list of page IDs to exclude
			'title_li' => '',
			)
			);
			?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1>Posteos</h1>
          <ul class="">
				<?php
				// Add categories you'd like to exclude in the exclude here
				$learnedia_cats = get_categories('exclude=');
				foreach ($learnedia_cats as $learnedia_cat) {
				$learnedia_posts_by_slug = array(
				'category_name'    => $learnedia_cat->slug,
				'exclude'          => '', // enter the ID or comma-separated list of page IDs to exclude
				'numberposts'      => '10' // number of posts to show, default value is 5
				);
				$learnedia_posts_array = get_posts( $learnedia_posts_by_slug );
				echo "<li><h3>".$learnedia_cat->cat_name."</h3>";
				echo "<ul>";
				foreach ($learnedia_posts_array as $learnedia_post){
				echo '<li><a href="'.get_permalink($learnedia_post).'">'.get_the_title($learnedia_post).'</a></li>';
				}
				echo "</ul>";
				echo "</li>";
				}
				?>
          </ul>
        </div>
      </div>
    </div>	
<?php get_footer(); ?>



