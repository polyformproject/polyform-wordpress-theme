<?php get_header(); ?>
<?php if (is_home()): ?>
  <ol class=posts>
  <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
      <br>
      <?php the_date(); ?>
    </li>
  <?php endwhile; endif; ?>
  </ol>
<?php else: ?>
  <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php if(!is_front_page()): ?>
      <h2><?php the_title(); ?></h2>
      <?php if(get_post_type() == 'post'): ?>
        <p class=dateline><?php the_date(); ?></p>
      <?php endif; ?>
    <?php endif; ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
