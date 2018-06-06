<?php
/* Template Name: om mig */
get_header();
?>
  <section class="omoss">
  	<div class="container">
  		<?php if ( have_posts() ) : ?>
  			<?php while ( have_posts() ) : the_post(); ?>
  				<div class="row mt-100 mb-40">
  					<div class="col-xs-12">
  						<h1><?php the_title(); ?></h1>
  						<?php the_content(); ?>
  					</div>
  				</div>
  			<?php endwhile; ?>
  			<?php else : ?>
  				<?php get_template_part('partials/content','none'); ?>
  			<?php endif; ?>
  			<?php if ( get_field( 'section' ) ) : ?>
  				<?php get_template_part( 'partials/flexible', 'none' ); ?>
  			<?php endif; ?>
  		</div>
  	</div>
  </section>
<?php get_footer(); ?>