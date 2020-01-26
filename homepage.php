<?php  /* Template Name: home */ get_header();?>
<?php if ( have_posts() ): ?> 
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/slider', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/opiniones'); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/trabajos-inicio', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/contacto-inicio', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/servicios', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/boletin', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'partes-inicio/noticias', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php endif; ?>
<?php get_footer(); ?>