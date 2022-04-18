<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Technosystem
 */

get_header();
?>
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
		<?php if ( have_posts() ) : ?>

		<header class="page-header mb-4">
			<h3 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'technosystem' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h3>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );

		endwhile;
		?>
		</div>
		<?php
		else :

		get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</div>
</div>

<?php
get_footer();
