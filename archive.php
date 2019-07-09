<?php get_header(); ?>
<?php if (have_posts()): ?>
  <header>
    <?php the_archive_title('<h2>', '</h2>'); ?>
    <?php the_archive_description('<p>', '</p>'); ?>
  </header>

  <?php while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>

  <?php the_posts_navigation(); ?>
<?php endif; ?>
<?php get_footer(); ?>
