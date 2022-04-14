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
					<h1>404</h1>
					<h2>Page not found</h2>
					<a href="<?php echo home_url( ); ?>" class="btn btn-primary mt-3">Return to home</a>
				</div>
				
			</div>
		</div>
	</div>

<?php
get_footer();
