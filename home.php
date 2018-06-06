<?php get_header(); ?>
  <div id="news">
  	<div class="container text-center">
  		<div class="row mt-100 mb-20">
  			<div class="col-xs-12">
  				<h1>Nyheter</h1>
  			</div>
  		</div>
  		<div class="row mb-40">
  			<article>
  				<?php if ( have_posts() ) : ?>
  					<?php while ( have_posts() ) : the_post(); ?>
  					<div class="col-xs-12 col-md-4 mb-20">
							<?php
								if ( has_post_thumbnail() ) {
								the_post_thumbnail("full");
								}
							?>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
  						<p><i class="fa fa-calendar"></i><?php the_time( get_option(" date_format ") ); ?></p>
  						<?php the_content(); ?>
  				  </div>
  				  <?php endwhile; ?>
              <?php the_posts_pagination(); ?>
            <?php else : ?>
              <?php get_template_part('partials/content','none'); ?>
  				<?php endif; ?>
  			</article>	
  			<aside" class="col-xs-12 col-md-3 col-md-offset-1">
  				<?php get_sidebar('alt'); ?>
  			</aside>
  		</div>
  	</div>
  </div>
<?php get_footer(); ?>