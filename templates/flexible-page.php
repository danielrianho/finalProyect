<?php
/* Template Name: Flexibel sida */
get_header();
?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( get_field( 'section' ) ) : ?>
				<div class="container">
					<div class="row mt-100 mb-40">
						<div class="col-xs-12">					
							<?php get_template_part( 'partials/flexible' ); ?>
						</div>
					</div>
				</div>
			<?php else : ?>
				<?php get_template_part('partials/content','page'); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part('partials/content','none'); ?>
	<?php endif; ?>
<?php get_footer(); ?>