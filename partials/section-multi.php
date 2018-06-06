<section class="multi mt-10 mb-20">
	<div class="container">
		<div class="row ">
			<?php if ( have_rows( 'columns' ) ) : ?>
				<?php while ( have_rows( 'columns' ) ) : ?>
					<?php the_row(); ?>
					<?php  if ( get_sub_field( 'image_left' ) ) :  ?>
						<div class="col-xs-12 col-lg-6">
							<img class="multi-pic" src="<?php the_sub_field( 'image' ); ?>">
            </div>
						<div class="col-xs-12 col-lg-6 text-multi">
							<h2><?php the_sub_field( 'title' ); ?></h2>
							<?php the_sub_field( 'text' ); ?>

							<?php $button = get_sub_field('show_button'); ?>
							<?php if ( $button ) { ?>
								<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default mt-10 test"><?php the_sub_field('button_text'); ?></a>
							<?php } ?>
						</div>
						<?php else  : ?>
						<div class="col-xs-12 col-lg-6 text-multi">
							<h2><?php the_sub_field( 'title' ); ?></h2>
              <?php the_sub_field( 'text' ); ?>

							<?php $button = get_sub_field('show_button'); ?>
							<?php if ( $button ) { ?>
								<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default mt-10 test"><?php the_sub_field('button_text'); ?></a>
							<?php } ?>
						</div>
						<div class="col-xs-12 col-lg-6">
							<img class="multi-pic" src="<?php the_sub_field( 'image' ); ?>">
						</div>
          <?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?> 
		</div>
	</div>
</section>