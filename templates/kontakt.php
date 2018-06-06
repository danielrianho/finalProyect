<?php
/* Template Name: Kontakt */
get_header();
?>
  <section class="contact">
  	<div class="container text-center">
  		<div class="row mt-100 mb-40">
  			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
  			<?php if ( have_posts() ) : ?>
  				<?php while ( have_posts() ) : the_post(); ?>
  				<h1><?php the_title(); ?></h1>
  				<br />
  				<?php the_content(); ?>
  			</div>
  			<?php endwhile; ?>
  				<?php else : ?>
  				<?php get_template_part('partials/content','none'); ?>
  			<?php endif; ?>
  		</div>
  	</div>
  </section>
<?php get_footer(); ?>