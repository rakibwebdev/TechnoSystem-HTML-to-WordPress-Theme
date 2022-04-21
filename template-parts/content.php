<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technosystem
 */

?>
<!--/ breadcrumb -->
<nav aria-label="breadcrumb ">
		<ol class="breadcrumb  mb-0  d-flex justify-content-center section-padding">
			<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</nav>
	<!--/ breadcrumb -->

	<!--/ dettaglio news -->
    <section class="dettaglio-news">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="dittaglio-news-image">
						<?php the_post_thumbnail( 'full'); ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="dittaglio-news-content">
                        <div class="sec-title-area   ps-5">
                            <span class="sec-sub-tile fw-400"><?php foreach (get_the_category( ) as $cat_item):
                                    echo $cat_item->cat_name;
                                     endforeach;?></span>
                            <h2 class="sec-title fw-700">
							<?php the_title(); ?>
                            </h2>
                            <p><?php echo get_the_date( 'j F Y' );?></p>
                            <p class="sec-description fw-400">
							<?php the_content(); ?>
                            </p>
                            
                            
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
	<!--/ dettaglio news -->
