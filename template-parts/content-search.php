<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technosystem
 */

?>

<div class="col-md-6 mb-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php technosystem_post_thumbnail('full'); ?>
	<header class="entry-header mt-3">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	
	</div>