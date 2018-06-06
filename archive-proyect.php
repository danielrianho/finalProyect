<?php get_header(); ?>
  <?php if ( have_posts() ) : ?>
    <div id="proyect">
      <div class="container text-center">
  		  <div class="row mt-100 mb-40">
          <div class="col-xs-12">
            <h1>Projekt</h1><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis scelerisque sodales. Cras at mauris vitae massa dapibus euismod at at eros. Nullam dictum ut lacus non sodales. Etiam eleifend, urna non tempor iaculis, mauris ante suscipit lacus, ut gravida tortor nisl non lacus. Mauris vel diam condimentum, posuere lorem ac, malesuada massa. Sed at fringilla ex. Mauris auctor odio quis sollicitudin suscipit. Aliquam erat orci, tincidunt vel quam a, tincidunt pretium diam. Praesent quis dignissim lorem.</p>
          </div>			
        </div>
  		  <div class="row mb-40">
    			<?php while ( have_posts() ) : the_post(); ?>
      			<div class="col-xs-12 col-md-4 col-lg-4">
      				<img src="<?php the_field('image'); ?>"> <br />
      				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      				<p><?php the_content(); ?></p>
      			</div>
    			<?php endwhile; ?>
  		  </div>
      </div>
    </div>
  <?php endif; ?>
<?php get_footer(); ?>