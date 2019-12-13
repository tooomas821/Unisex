<?php get_header();?>

  <section class="bg-image-full py-3 bg-dark" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/404.png');background-position:center center;background-size:cover;background-repeat:no-repeat;">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;background-position:center center;"></div>
  </section>
  <div class="card text-white bg-secondary my-4 text-center">
    <div class="card-body">
        <?php breadcrumb(); ?> 
    </div>
  </div>

<div class="container-fluid py-5">
      <div class="row">
        <div class="col-sm-12 text-center">
         <img src="<?php bloginfo('template_directory'); ?>/img/404.png" class="img-fluid wow bounceIn" width="500px" alt="<?php wp_title('', true,''); ?>">

        </div>
        <div class="col-sm-12 text-center">
          <h1>Nooo !!</h1>
          <p><?php bloginfo( 'name' ); ?> es una pagina unica tiene un menu arriba &uarr;, no puede ser que te salga esto.</p>
          <a href="<?php bloginfo( 'url' ); ?>"> <button type="button" name="button" class="btn btn-dark">Volver a la pagina unica</button></a>
        </div>

      </div><!-- row -->

    </div> <!-- container -->
<?php get_footer(); ?>