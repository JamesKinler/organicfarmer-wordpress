<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <!-- <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="https://use.typekit.net/soj6fwz.css"></script>
  <script try{Typekit.load({="try{Typekit.load({" async:="async:" true="true" });}catch(e){}="});}catch(e){}"></script> -->
</head>
<header class="singlepage_header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-band" href="/organicfarmer/">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/organicFarmerLogo.png" alt="a white organic farmer logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <?php
      wp_nav_menu( array(
          'menu' => 'Main Nav',
          'theme_location'	=> 'primary menu',
          'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
        'container'			=> 'div',
        'container_class'	=> 'collapse navbar-collapse',
        'container_id'		=> 'navbarSupportedContent',
        'menu_class'		=> 'navbar-nav ml-auto',
          'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
          'walker'			=> new WP_Bootstrap_Navwalker()
      ));
    ?>
  </nav>
</header>
<?php wp_head(); ?>
