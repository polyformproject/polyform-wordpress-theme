<?php get_header(); ?>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
  <?php if (!is_home() && !is_front_page()): ?>
    <article>
    <h2><?php the_title(); ?></h2>
  <?php endif; ?>
  <?php the_content(); ?>
  <?php if (!is_home() && !is_front_page()): ?>
    </article>
  <?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
