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
      <ul>
        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
        <li><a href=/licenses>Licenses</a></li>
        <?php if (wp_count_posts()->publish > 0) : ?>
        <li><a href="<?php echo get_post_type_archive_link('post'); ">Posts</a></li>
        <?php endif; ?>
        <li><a href=/contribute>Contribute</a></li>
        <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
      </ul>
    </nav>
    <main role=main>
