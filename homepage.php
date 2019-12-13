<?php  /* Template Name: home */ get_header();?>
<?php if ( have_posts() ): ?> 
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'piezas/slider', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'piezas/acerca'); ?>
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'piezas/servicios', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'piezas/portafolio', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'piezas/noticias', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'piezas/equipo', 'page' ); ?>  
<?php endwhile; // end of the loop. ?>
<?php endif; ?>
<?php get_footer(); ?>