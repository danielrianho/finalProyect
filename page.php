<?php get_header(); ?>
  <?php if (have_posts() ) : ?>
    <?php while (have_posts() ) : the_post(); ?>
        <?php if (get_field('sections')) : ?>
          <?php get_template_part('partials/flexible'); ?>
        <?php else: ?>
          <?php get_template_part('partials/content','page'); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>