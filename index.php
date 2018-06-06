<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
		  <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <p>Detta är index.php.</p>
        <?php endwhile; ?>
      <?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>