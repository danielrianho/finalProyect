<section class="columns mb-80">
	<div class="container text-center">
		<div class="row mb-40">
			<div class="col-xs-12">
				<h2><?php the_sub_field( 'title' ); ?></h2>
			</div>
		</div>
		<div class="row ">
			<?php if ( have_rows( 'columns' ) ) : ?>
				<?php while ( have_rows( 'columns' ) ) : ?>
					<?php the_row(); ?>
					<div class="col-xs-12 col-md-4 mb-40 ">
						<div class="personal">
							<img class="team" src="<?php the_sub_field( 'image' ); ?>">
							<h3><?php the_sub_field( 'name' ); ?></h3>
							<h4><?php the_sub_field( 'roll' ); ?></h4>
							<p><?php the_sub_field( 'information' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?> 
		</div>
	</div>
</section>