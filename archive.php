<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technosystem
 */

get_header();
?>
		<?php if ( have_posts() ) : ?>

			<?php
			get_template_part( 'template-parts/content', 'archive' );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

<?php
get_footer();
