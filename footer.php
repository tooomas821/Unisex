    <section class="bg-dark text-white" id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto text-center wow pulse">
          <h2 class="section-heading">Contáctanos!</h2>
          <hr class="magenta my-4">
          <p class="mb-5"><?php echo get_option( 'descripcion' ); ?></p>
        </div>
      </div>
    </div>
    <div data-wow-delay="0.1s" class="container wow fadeIn">
      <div class="row">
        <div class="col-md-6 text-center align-self-center">
          <p class="mb-5"> <strong><?php bloginfo( 'name' ); ?> ltda.</strong>
            <br>Horario de Atención <?php echo get_option( 'horario' ); ?>
            <br> <abbr title="Phone">Tel:</abbr><?php echo get_option( 'telefono' ); ?>
            <br><?php echo get_option( 'direccion' ); ?>
            <br>Estacion Central, Santiago</p>
          <div class="my-3 row">
            <div class="col-3">
              <a href="<?php echo get_option( 'my_facebook_url' ); ?>" target="_blank"><i class="fab fa-3x fa-facebook"></i></a>
            </div>
            <div class="col-3">
              <a href="<?php echo get_option( 'my_instagram_url' ); ?>" target="_blank"><i class="fab fa-3x fa-instagram"></i></a>
            </div>
            <div class="col-3">
              <a href="<?php echo get_option( 'my_linkedin_url' ); ?>" target="_blank"><i class="fab fa-3x fa-linkedin"></i></a>
            </div> 
            <div class="col-3">
              <a href="<?php echo get_option( 'youtube' ); ?>" target="_blank"><i class="fab fa-3x fa-youtube"></i></a>
            </div>                       
          </div>
        </div>
        <div class="col-md-6 p-0">
        <?php echo do_shortcode('[contact-form-7 id="144" title="Formulario de contacto 1"]'); ?>
        </div>
      </div>
    </div>
    </section>
    <!-- Bootstrap core JavaScript -->
 <?php wp_footer(); ?>
      <script>
       new WOW().init();
     </script>
  </body>

</html>

