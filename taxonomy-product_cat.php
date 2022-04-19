<?php
get_header();
?>
		<?php if ( have_posts() ) : ?>

			<?php
			get_template_part( 'template-parts/content', 'product-archive' );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

<?php
get_footer();