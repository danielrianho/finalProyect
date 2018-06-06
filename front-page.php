<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( get_field( 'section' ) ) : ?>
				<?php get_template_part( 'partials/flexible' ); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part('partials/content','none'); ?>
	<?php endif; ?>
<?php get_footer(); ?>