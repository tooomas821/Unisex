<!-- Menu section -->
    <section class="bg-dark text-white" id="acerca">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center wow pulse">
            <h2 class="section-heading text-white">Porque por tu sabes que por 5 lukas un sitio web no es serio</h2>
            <hr class="magenta my-4">
            <?php $phrase = get_the_content(); $phrase = apply_filters('the_content', $phrase); $replace = '<p class="text-faded mb-4 animated">'; echo str_replace('<p>', $replace, $phrase); ?>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#servicios">Conoce</a>
          </div>
        </div>
      </div>
    </section>

  