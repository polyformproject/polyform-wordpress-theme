<?php get_header(); ?>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
  <?php if (!is_home() && !is_front_page()): ?>
    <h1><?php the_title(); ?></h1>
  <?php endif; ?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
