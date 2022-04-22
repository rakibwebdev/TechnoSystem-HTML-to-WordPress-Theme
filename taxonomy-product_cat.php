<?php 
if ( have_posts() ) :
	get_template_part( 'template-parts/content', 'product-archive' );
else :
	get_template_part( 'template-parts/content', 'none' );
endif;