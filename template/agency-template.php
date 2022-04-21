<?php
/*
* Template Name: Agency Template
*/

get_header();

$agency_page_slider = Kirki::get_option( 'agency_page_slider');
$agency_page_story_img = Kirki::get_option( 'agency_page_story_img');
$agency_page_story_title = Kirki::get_option( 'agency_page_story_title');
$agency_page_story_short_desc = Kirki::get_option( 'agency_page_story_short_desc');
$agency_page_story_sub_title = Kirki::get_option( 'agency_page_story_sub_title');

$agency_page_knowledge_title = Kirki::get_option( 'agency_page_knowledge_title');
$agency_page_knowledge_short_desc = Kirki::get_option( 'agency_page_knowledge_short_desc');

$agency_page_multinationals_img = Kirki::get_option( 'agency_page_multinationals_img');
$agency_page_multinationals_title = Kirki::get_option( 'agency_page_multinationals_title');
$agency_page_multinationals_short_desc = Kirki::get_option( 'agency_page_multinationals_short_desc');


?>
    <!-- heroCarousel -->
    <section class="heroCarousel owl-carousel owl-theme" data-loop="true" data-items="1" data-margin="20"
		data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true"
		data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
		data-mobile-device-nav="true" data-mobile-device-dots="true" data-sm-device="1" data-sm-device-nav="true"
		data-sm-device-dots="true" data-sm-device2="1" data-sm-device2-nav="true" data-sm-device2-dots="true"
		data-md-device="1" data-md-device-nav="true" data-md-device-dots="true" data-lg-device="1"
		data-lg-device-dots="true" data-lg-device-nav="true">

		<?php foreach ($agency_page_slider as $slide) : ?>
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
    
	<!-- story -->
    <section class="story d-flex align-items-center gap-5">
        <img src="<?php echo $agency_page_story_img; ?>" class="img-fluid" alt="siteAgent">
  
            <div class="sec-title-area " style="max-width: 444px;">
                <span class="sec-sub-tile fw-400"><?php echo $agency_page_story_sub_title; ?></span>
                <h2 class="sec-title fw-700">
                <?php echo $agency_page_story_title; ?>
                </h2>
                <p class="sec-description fw-400">
                <?php echo $agency_page_story_short_desc; ?>

                </p>
        </div>
    </section>
	<!--/ story -->

	<!-- knowledge -->
    <section class="py-5  bg-gray mt-5">
       <div class="container">
        <h2 class="sec-title fw-700">
            <?php echo $agency_page_knowledge_title; ?>
        </h2>
        <p class="sec-description fw-400">
        <?php echo $agency_page_knowledge_short_desc; ?></p>
       </div>
    </section>
	<!--/ knowledge -->

	<!-- multinationals -->
    <section class="py-5  my-5 ">
       <div class="container">
      <div class="row align-items-center gx-5 mb-5">
          <div class="col-xl-6">
           <div class=" text-end">
            <h2 class="sec-title fw-700">
            <?php echo $agency_page_multinationals_title ?>
            </h2>
            <p class="sec-description fw-400">
            <?php echo $agency_page_multinationals_short_desc ?></p>
           </div>
          </div>
          <div class="col-xl-6">
              <img src="<?php echo $agency_page_multinationals_img ?>" class="img-fluid" alt="multinational" />
          </div>
      </div>
       </div>
    </section>
	<!--/ multinationals -->

<?php
get_footer();