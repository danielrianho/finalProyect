<?php get_header(); ?>
  <?php if ( have_posts() ) : ?>
  	<?php while ( have_posts() ) : the_post(); ?>
  		<div class="container ">
  			<div class="row mt-100 mb-40">
  				<div class="col-xs-12 col-lg-4">
  					<img class="mb-20" src="<?php the_field('image'); ?>">
  				</div>
  				<div class="col-xs-12 col-lg-8">
  					<h1 class="mb-10"><?php the_title(); ?></h1>
  					<p><?php the_field( 'text' ); ?></p>
  				</div>
  			</div>
  		</div>
  	<?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>