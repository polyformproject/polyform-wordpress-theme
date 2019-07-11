<!doctype html>
<html lang=en-US>
  <head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
    <header role=banner>
      <img src="<?php echo get_template_directory_uri(); ?>/images/polyform.svg" alt="Polyform">
    </header>
    <nav role=navigation>
      <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
    <main role=main>
