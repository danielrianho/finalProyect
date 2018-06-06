<?php 
if ( have_rows( 'section' ) ):
	while ( have_rows( 'section' ) ) :
		the_row();
		if ( get_row_layout() == 'hero' ) :
			get_template_part( 'partials/section' , 'hero' ) ;
		elseif ( get_row_layout() == 'testimonial' ) :
			get_template_part( 'partials/section' , 'testimonial' ) ;
		elseif ( get_row_layout() == 'multi' ) :
			get_template_part( 'partials/section' , 'multi' ) ;
		elseif ( get_row_layout() == 'columns' ) :
			get_template_part( 'partials/section' , 'columns' ) ;
		elseif ( get_row_layout() == 'logotyper' ) :
			get_template_part( 'partials/section' , 'logotyper' ) ;
		elseif ( get_row_layout() == 'team' ) :
			get_template_part( 'partials/section' , 'team' ) ;
		elseif ( get_row_layout() == 'contact' ) :
			get_template_part( 'partials/section' , 'contact' ) ;
		elseif ( get_row_layout() == 'standard' ) :
			get_template_part( 'partials/section' , 'standard' ) ;
		endif;
	endwhile;
endif;