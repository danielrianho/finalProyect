<section class="logos">
	<div class="container text-center mb-40">
		<div class="row ">
			<div class="col-xs-12">
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
		</div>
    <div class="row">
			<?php if ( have_rows( 'columns' ) ) : ?>
				<?php while ( have_rows( 'columns' ) ) : ?>
					<?php the_row(); ?>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<img class="logo" src="<?php the_sub_field( 'logan' ); ?>">
					</div>
				<?php endwhile; ?>
			<?php endif; ?> 
		</div>
	</div>
</section>