<!doctype html>
<html lang=en-US>
  <head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php if(is_single() || is_page()) {
      $social_url = get_permalink();
      $social_title = get_the_title();
      $social_description = get_the_excerpt();
      $social_image = get_template_directory_uri() . '/images/logo.png';
    ?>
      <meta name="twitter:card" value="summary">
      <meta name="twitter:url" value="<?php echo $social_url; ?>">
      <meta name="twitter:title" value="<?php echo $social_title; ?>">
      <meta name="twitter:description" value="<?php echo $social_description; ?>">
      <meta name="twitter:image" value="<?php echo $social_image; ?>">
      <meta name="twitter:site" value="PolyForm Project">
      <meta name="twitter:creator" value="@polyformproject">
      <meta name="og:type" content="website">
      <meta name="og:title" content="<?php echo $social_title; ?>">
      <meta name="og:description" content="<?php echo $social_description; ?>">
      <meta name="og:image" content="<?php echo $social_image; ?>">
    <?php } ?>
  </head>
  <body>
    <header role=banner>
      <img src="<?php echo get_template_directory_uri(); ?>/images/polyform.svg" alt="PolyForm">
    </header>
    <nav role=navigation>
      <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
    <main role=main>
