<?php get_header(); ?>
  <div class="container">
    <div class="row mt-100 mb-40">
      <article>
        <div class="col-xs-12 col-md-9 mb-20">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail("full");
              }
            ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><i class="fa fa-calendar"></i><?php the_time( get_option(" date_format ") ); ?></p>
            <p><?php the_content(); ?></p>
          <?php endwhile; ?>
            <?php else : ?>
              <?php get_template_part('partials/content','none'); ?>
          <?php endif; ?>
        </div>
      </article>
      <aside id="secondary" class="col-xs-12 col-md-3">
        <?php get_sidebar('alt'); ?>
      </aside>
    </div>
  </div>
<?php get_footer(); ?>