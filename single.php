<?php get_header(); ?>
<?php while(have_posts()): ?>
  <?php the_post(); ?>
<?php endwhile ?>
<?php get_footer(); ?>
