<?php get_header(); ?>
<?php if (is_home()): ?>
  <ol>
  <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </li>
  <?php endwhile; endif; ?>
  </ol>
<?php else: ?>
  <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php if(!is_front_page()): ?>
      <h2><?php the_title(); ?></h2>
      <p class=dateline><?php the_time(); ?></p>
    <?php endif; ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
