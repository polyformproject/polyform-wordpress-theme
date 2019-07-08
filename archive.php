<?php get_header(); ?>
<?php if (have_posts()): ?>
  <header>
    <?php the_archive_title('<h2>', '</h2>'); ?>
    <?php the_archive_description('<p>', '</p>'); ?>
  </header>

  <?php while(have_posts()): ?>
    <?php the_post(); ?>
  <?php endwhile; ?>

  <?php the_posts_navigation();
<?php get_footer(); ?>
