<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Technosystem
 */

get_header();
?>

	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header text-center">
					<h1><?php echo esc_html__( '404','technosystem' ); ?></h1>
					<h2><?php echo esc_html__( 'Page not found','technosystem' ); ?></h2>
					<a href="<?php echo home_url( ); ?>" class="btn btn-primary mt-3"><?php echo esc_html__( 'Return to home','technosystem' ); ?></a>
				</div>
				
			</div>
		</div>
	</div>

<?php
get_footer();
