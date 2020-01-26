<?php?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Unisex">
<meta name="author" content="">
<meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">
<title><?php bloginfo( 'name' ); ?> <?php wp_title('', true,''); ?></title>
 <?php wp_head(); ?>
</head>

<body>
 <header id="masthead" class="site-header">
  <nav id="primary-navigation" class="navbar navbar-expand-md fixed-top" data-0="background:rgba(59,58,54,0); border-bottom-color:rgba(226,226,226,0);" data-500="background:rgba(32,32,32,1); border-bottom-color:rgba(226,226,226,1);">
   <div class="container-fluid">
    <a class="navbar-brand " href="<?php bloginfo( 'url' ); ?>">
    	<img class="img-logo" src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
    </a>
    <!-- /.navbar-header -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    
<span class="navbar-toggler-icon"> <i class="fas fa-bars"></i></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <?php
            wp_nav_menu( array(
              'theme_location'  => 'navbar',
              'container'       => false,
              'menu_class'      => '',
              'fallback_cb'     => '__return_false',
              'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
              'depth'           => 2,
              'walker'          => new b4st_walker_nav_menu()
            ) );
          ?>
     <!-- /.navbar-nav -->
    </div>

    <!-- /.navbar-collapse -->
   </div>
  </nav>
  <!-- /.site-navigation -->
 </header>
<!-- /.navbar --> 

