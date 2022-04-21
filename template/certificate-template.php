<?php
/*
* Template Name: Certification Template
*/

get_header();

$certificate_page_slider = Kirki::get_option( 'certificate_page_slider');

$certificate_page_story_img = Kirki::get_option( 'certificate_page_story_img');
$certificate_page_story_title = Kirki::get_option( 'certificate_page_story_title');
$certificate_page_story_short_desc = Kirki::get_option( 'certificate_page_story_short_desc');
$certificate_page_story_sub_title = Kirki::get_option( 'certificate_page_story_sub_title');

$certificate_1_title = Kirki::get_option( 'certificate_1_title');
$certificate_1_sub_title = Kirki::get_option( 'certificate_1_sub_title');
$certificate_1_short_desc = Kirki::get_option( 'certificate_1_short_desc');
$certificate_1_story_img = Kirki::get_option( 'certificate_1_story_img');

$certificate_2_title = Kirki::get_option( 'certificate_2_title');
$certificate_2_sub_title = Kirki::get_option( 'certificate_2_sub_title');
$certificate_2_short_desc = Kirki::get_option( 'certificate_2_short_desc');
$certificate_2_story_img = Kirki::get_option( 'certificate_2_story_img');

$certificate_3_title = Kirki::get_option( 'certificate_3_title');
$certificate_3_sub_title = Kirki::get_option( 'certificate_3_sub_title');
$certificate_3_short_desc = Kirki::get_option( 'certificate_3_short_desc');
$certificate_3_story_img = Kirki::get_option( 'certificate_3_story_img');




?>
    <!-- heroCarousel -->
    <section class="heroCarousel owl-carousel owl-theme" data-loop="true" data-items="1" data-margin="20"
		data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true"
		data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
		data-mobile-device-nav="true" data-mobile-device-dots="true" data-sm-device="1" data-sm-device-nav="true"
		data-sm-device-dots="true" data-sm-device2="1" data-sm-device2-nav="true" data-sm-device2-dots="true"
		data-md-device="1" data-md-device-nav="true" data-md-device-dots="true" data-lg-device="1"
		data-lg-device-dots="true" data-lg-device-nav="true">

		<?php foreach ($certificate_page_slider as $slide) : ?>
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
			<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>"><?php _e('Home','techonosystem'); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
		</ol>
	</nav>
	<!--/ breadcrumb -->
    
	<section class="story d-flex align-items-center gap-5 mb-5 pb-5">
        <img src="<?php echo $certificate_page_story_img;?>" class="img-fluid" alt="siteAgent">
  
            <div class="sec-title-area " style="max-width: 444px;">
                <span class="sec-sub-tile fw-400"><?php echo $certificate_page_story_sub_title;?></span>
                <h2 class="sec-title fw-700">
                <?php echo $certificate_page_story_title;?>
                </h2>
                <p class="sec-description fw-400">
                <?php echo $certificate_page_story_short_desc;?>


                </p>
        </div>
    </section>



	<!--certification1 -->
    <section class="certification1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="left-content">
                        <h2 class="cerficition-gray"><?php echo $certificate_1_sub_title;?></h2>
                        <h2 class="sec-title fw-700 text-end mb-4">
                            <?php echo $certificate_1_title;?>
                        </h2>
                        <p class=" text-end"><?php echo $certificate_1_short_desc;?></p>
                    </div>
                </div>
                <div class="col-xl-4 offset-1">
                    <div class="certification-image">
                        <img src="<?php echo $certificate_1_story_img;?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
      
        </div>
    </section>

	<!--certification1 -->




	<!--certification2 -->
    <section class="certification2  section-padding bg-gray">
        <div class="container">
            <div class="">
                <div class="row align-items-center">
                    <div class="col-xl-4 ">
                        <div class="certification-image">
                            <img src="<?php echo $certificate_2_story_img; ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="offset-1 col-xl-6">
                        <div class="left-content ">
                            <h2 class="cerficition-gray text-start">C<?php echo $certificate_2_sub_title; ?></h2>
                            <h2 class="sec-title fw-700 text-start mb-4">
                            <?php echo $certificate_2_title; ?>
                            </h2>
                            <p class=" text-start"><?php echo $certificate_2_short_desc; ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
	<!--certification2 -->



	<!--certification3 -->
    <section class="certification3 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="left-content">
                        <h2 class="cerficition-gray"><?php echo $certificate_3_sub_title;?></h2>
                        <h2 class="sec-title fw-700 text-end mb-4">
                            <?php echo $certificate_3_title;?>
                        </h2>
                        <p class=" text-end"><?php echo $certificate_3_short_desc;?></p>
                    </div>
                </div>
                <div class="col-xl-4 offset-1">
                    <div class="certification-image">
                        <img src="<?php echo $certificate_3_story_img;?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
      
        </div>
    </section>
	<!--certification3 -->

<?php
get_footer();