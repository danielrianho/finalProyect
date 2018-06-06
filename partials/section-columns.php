<section class="columns mb-80">
	<div class="container text-center">
		<div class="row mb-40">
			<div class="col-xs-12">
				<h2><?php the_sub_field( 'title' ); ?></h2>
				<p><?php the_sub_field( 'text' ); ?></p>
			</div>
		</div>
		<div class="row ">
			<?php $width = get_sub_field( 'format' ); ?>
			<?php if ( have_rows( 'columns' ) ) : ?>
				<?php while ( have_rows( 'columns' ) ) : ?>
					<?php the_row(); ?>
					<div class="col-xs-12 col-md-<?php echo $width; ?> mb-40">

						<?php 
							$graphic = get_sub_field( 'graphic' );

							if ($graphic == 'image') {
								$image = get_sub_field( 'image' );
								$thumb = $image[ 'sizes']['thumbnail'];
								echo '<img src="' . $thumb. '" />' ;
              }

						 	else {
						 		$icon = get_sub_field( 'icon' );
						 		echo '<i class="fa fa-'.$icon.' fa-5x"></i>';
						 	}
						?>
            <h3><?php the_sub_field( 'title' ); ?></h3>
						<?php the_sub_field( 'text' ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?> 
		</div>
	</div>
</section>