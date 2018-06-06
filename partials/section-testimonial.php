<section class="testimonial mt-40 mb-40  <?php the_sub_field( 'background_color' ); ?>">
	<div class="container">
		<div class="row text-center">
			<?php if ( get_sub_field( 'button_link' ) && get_sub_field( 'button_text' ) ) { ?>
			
      <div class="col-xs-8">
				<h2><?php the_sub_field( 'text' ); ?></h2>
			</div>
			<div class="col-xs-3">
				<a class="btn btn-default" href="<?php the_sub_field( 'button_link' ); ?>">
					<?php the_sub_field( 'button_text' ); ?>
				</a>
			</div>

			<?php } else { ?>

			<div class="col-xs-8">
				<h2><?php the_sub_field( 'text' ); ?></h2>
			</div>
			
      <?php } ?>			
		</div>
	</div>
</section>

