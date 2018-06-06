</main>
<footer id="footer">
	<div class="container text-center">
		<div class="row mt-40">
			<div class="col-xs-12 col-md-4">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<p><?php the_field( 'adress' , 'options' ); ?></p>
			</div>
			<div class="col-xs-12 col-md-4">
				<i class="fa fa-mobile" aria-hidden="true"></i><br />
				<p><?php the_field( 'mobil' , 'options' ); ?></p>
			</div>
			<div class="col-xs-12 col-md-4">
				<i class="fa fa-envelope-o" aria-hidden="true"></i><br />
				<p><?php the_field( 'email' , 'options' ); ?></p>
			</div>
		</div>
		<div class="row middle">
			<div class="col-xs-12">
				<?php
					$social = get_field( 'social_media' , 'options' );
					if ( $social ) :
				?>
				<ul>
					<?php foreach ( $social as $item ) : ?>
					<li>
						<a href="<?php echo $item['link']; ?>">
							<i class="fa fa-<?php echo $item['service']; ?>"></i>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>	
			</div>
		</div>
		<div class="row mb-70">
			<div class="col-xs-12">
				<p><?php the_field( 'copyright' , 'options' );  ?></p>
			</div>
		</div>
	</div>
</footer>
</div> <!-- #wrap -->
<?php wp_footer(); ?>

</body>
</html>
