<?php
/*
* Template Name: Service Page 2
*/
get_header();
$service_page2_slider = Kirki::get_option( 'service_page2_slider');

$service_page2_problem_img = Kirki::get_option( 'service_page2_problem_img');
$service_page2_problem_title = Kirki::get_option( 'service_page2_problem_title');
$service_page2_problem_short_desc = Kirki::get_option( 'service_page2_problem_short_desc');
$service_page2_problem_sub_title = Kirki::get_option( 'service_page2_problem_sub_title');

$service_page2_discover_title = Kirki::get_option( 'service_page2_discover_title');

$service_page2_discover_repeater = Kirki::get_option( 'service_page2_discover_repeater');
?>
    <!-- heroCarousel -->
    <section class="heroCarousel owl-carousel owl-theme" data-loop="true" data-items="1" data-margin="20"
		data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true"
		data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
		data-mobile-device-nav="true" data-mobile-device-dots="true" data-sm-device="1" data-sm-device-nav="true"
		data-sm-device-dots="true" data-sm-device2="1" data-sm-device2-nav="true" data-sm-device2-dots="true"
		data-md-device="1" data-md-device-nav="true" data-md-device-dots="true" data-lg-device="1"
		data-lg-device-dots="true" data-lg-device-nav="true">
        <?php foreach ($service_page2_slider as $slide) : ?>
		<div class="banner is-bgImage" style="background-image: url(<?php echo $slide['slider_image'];?>);">
			<div class="agentBannerContent d-flex justify-content-center align-items-center wow fadeInDown"
				data-wow-duration="1s" data-wow-delay="300ms">
				<div class="content text-center">
        
					<h1 class="banner-title fs-70 text-white fw-700"><?php echo $slide['slider_title'];?></h1>
					
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
			<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
		</ol>
	</nav>
	<!--/ breadcrumb -->

	<!--problem and solution -->
	<section class="solution-section pt-4 pb-390">
		<div class="d-flex justify-content-center align-items-center">
			<div class="solution-content">
				<div class="sec-title-area  text-right">

					<span class="sec-sub-tile fw-400"><?php echo $service_page2_problem_sub_title; ?></span>
					<h2 class="sec-title fw-700">
                    <?php echo $service_page2_problem_title; ?>
					</h2>
					<p class="sec-description fw-400">
                    <?php echo $service_page2_problem_short_desc; ?>
					</p>
				</div>
			</div>
			<div class="solution-image">
				<img src="<?php echo $service_page2_problem_img; ?>" class="img-fluid w-100" alt="">
			</div>
		</div>
	</section>
	<!--/ problem and solution -->

	<!--Discover  -->
    <section class="discover bg-gray section-padding">
        <div class="container">
            <div class="discoverWrapper">
                <h2 class="sec-title fw-700 mb-4"><?php echo $service_page2_discover_title; ?></h2>
                <div class="row ">
                    <?php foreach ($service_page2_discover_repeater as $discover) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="blog-card">
                            <div class="blog-card-img  mb-0">
                                <img src="<?php echo $discover['image']; ?>" alt="" />
                                <span class="blog-card-icon">
                                	<i class="<?php echo $discover['icon_class']; ?>"></i>
                                </span>
                            </div>
                            <div class="px-4 py-4 bg-white">
                                <a href="#">
                                    <h3 class="blog-card-title fw-700"><?php echo $discover['title']; ?></h3>
                                </a>
                                <p class="blog-card-description">
                                <?php echo $discover['short_desc']; ?>                                </p>
                                <a href="<?php echo $discover['button_url']; ?>" class="btn btn-transparent mb-3">
                                <?php echo $discover['button_text']; ?>
                                </a>
                            </div>
                        </div>
                    </div><!-- col end -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
	<!--/ Discover  -->

<?php
get_footer();
