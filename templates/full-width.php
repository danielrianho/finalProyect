<?php
/* Template Name: Fullbreddssida */
get_header();
?>
  <div class="container">
  	<div class="row mt-100 mb-40">
  		<div class="col-xs-12">
  		<?php if ( have_posts() ) : ?>
  			<?php while ( have_posts() ) : the_post(); ?>
  				<h1><?php the_title(); ?></h1>
  				<?php the_content(); ?>
        <?php endwhile; ?>
  			<?php else : ?>
  				<?php get_template_part('partials/content','none'); ?>
  		<?php endif; ?>
  		</div>
  	</div>
  </div>
<?php get_footer(); ?>