<?php
$archive_slider = Kirki::get_option('archive_slider');

?>
    <!-- heroCarousel -->
    <section class="heroCarousel owl-carousel owl-theme" data-loop="true" data-items="1" data-margin="20"
        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true"
        data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
        data-mobile-device-nav="true" data-mobile-device-dots="true" data-sm-device="1" data-sm-device-nav="true"
        data-sm-device-dots="true" data-sm-device2="1" data-sm-device2-nav="true" data-sm-device2-dots="true"
        data-md-device="1" data-md-device-nav="true" data-md-device-dots="true" data-lg-device="1"
        data-lg-device-dots="true" data-lg-device-nav="true">
        <?php foreach ($archive_slider as $slide) : ?>
        <div class="banner is-bgImage" style="background-image: url(<?php echo $slide['slider_image']?>);">
            <div class="agentBannerContent d-flex justify-content-center align-items-center wow fadeInDown"
                data-wow-duration="1s" data-wow-delay="300ms">
                <div class="content text-center">
                    <h1 class="banner-title fs-70 text-white fw-700"><?php echo $slide['slider_title']?></h1>

                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </section>
    <!--/ heroCarousel -->

	<!--/ breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb py-5 mb-0  d-flex justify-content-center">
			<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo single_cat_title();?></li>
		</ol>
	</nav>
	<!--/ breadcrumb -->

	<!--news-->
    <section class="news section-padding">
        <div class="container">
            <div class="news-wrapper">
                <div class="row">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-xl-4 mb-5">
                        <a href="<?php echo get_the_permalink(); ?>" class="news-item" style="height: 100%;">
                            <?php the_post_thumbnail( 'full'); ?>
                            <div class="news-content px-3 py-3">
                                <p class="news-hints mb-0"><?php foreach (get_the_category( ) as $cat_item):
                                    echo $cat_item->cat_name;
                                     endforeach;?></p>
                                <h2 class="news-title"><?php the_title(); ?></h2>
                                <p class="news-descript mb-4"><?php echo get_the_excerpt() ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="news-button btn">Leggi tutto</a>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

    </section>
	<!--/ news -->