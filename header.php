
<?php

/*
  * The header for our theme
*/

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    
    

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php echo get_bloginfo('name') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        
          <?php wp_nav_menu( array(
              'theme_location'  => 'primary',
              'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse justify-content-end',
              'container_id'    => 'navbarNav',
              'menu_class'      => 'navbar-nav',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
                ) );?>
          
      </nav>

<section class="container-fluid"> <!-- container fluid allows the img to stretch full width of the screen and not have the white edges -->
  <div class="row position-relative d-flex justify-content-center align-items-center text-center"> <!-- jcc: position text in the center of the image aic: moves text to center of the image tc: centers text alignment -->
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lake.jpg" alt="lake background" class="header-img">
      <div class="position-absolute feature-bg">  <!-- position absolute will move the text over the image -->
        
        <p class="feature-text">FULL RESPONSIVE<br> PREMIUM SPA THEME<br> FOR WORDPRESS</p>
      </div>
  
  </div>

</section>

    </header>