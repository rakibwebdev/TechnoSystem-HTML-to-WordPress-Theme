<?php
get_header();
$archive_slider = Kirki::get_option('product_archive_slider_setting');

$product_categories = get_terms( array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
) );

$product_tags = get_terms( array(
    'taxonomy' => 'product_tag',
    'hide_empty' => false,
) );

                  
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
			<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>"><?php echo esc_html__( 'Home','technosystem' ); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo single_cat_title();?></li>
		</ol>
	</nav>
	<!--/ breadcrumb -->

	<!--Product section -->
	<section class="product">
	<div class="container-fluid px-0 mx-0">
		<div class="d-flex">
			<div class="productSitebar px-5 py-5 bg-gray">
				<h2 class="productSelectTitle mb-0"><?php echo esc_html__( 'Trova subito il prodotto che fa per te:','technosystem' ); ?></h2>
				<div class="application mt-5">
                    
					<div class="navigatioWidget is-radius-15 collapsed-group pb-4 border-bottom">
						<div class="wdgetHeader d-flex align-items-center justify-content-between pb-2">
							<div class="edge-card-caption">
								<h4 class="product-subheading mb-0">
									<?php echo esc_html__( 'Applicazioni','technosystem' ); ?>
								</h4>
							</div>
							<button class="btnCollapsedToggle border-0">
								<img src="<?php echo get_template_directory_uri(  ) .'/assets/images/arrow-down.svg' ?>" class="img-fluid" alt="">
							</button>
						</div>
						<div class="widgetbody collapsed-item" style="">
							<div class="widgetBodyContent">
								<?php foreach ($product_categories as $category) : ?>
								<div class="form-check-label text-clr-dark fs-6 fw-medium position-relative d-block mb-1 d-flex align-items-center gap-2">
									<a href="<?php echo get_term_link($category->term_id); ?>" class="d-block">
										<span class="text"><?php echo $category->name; ?></span>
									</a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
	
					<div class="navigatioWidget is-radius-15 collapsed-group pb-4 border-bottom mt-4">
						<div class="wdgetHeader d-flex align-items-center justify-content-between pb-2">
							<div class="edge-card-caption">
								<h4 class="product-subheading mb-0">
									<?php echo esc_html__( 'Settore','technosystem' ); ?>
								</h4>
							</div>
							<button class="btnCollapsedToggle border-0">
								<img src="<?php echo get_template_directory_uri(  ) .'/assets/images/arrow-down.svg'; ?>" class="img-fluid" alt="">
							</button>
						</div>
						<div class="widgetbody collapsed-item" style="">
							<div class="widgetBodyContent">
								<?php foreach ($product_tags as $tag) : ?>
								<div class="form-check-label text-clr-dark fs-6 fw-medium position-relative d-block mb-1 d-flex align-items-center gap-2">
									<a href="<?php echo get_term_link($tag->term_id); ?>" class="d-block">
										<span class="text"><?php echo $tag->name; ?></span>
									</a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>

					<div class="navigatioWidget is-radius-15 collapsed-group pb-4 mt-4">
						<div class="wdgetHeader d-flex align-items-center justify-content-between pb-2">
							<div class="edge-card-caption">
								<h4 class="product-subheading mb-0">
									<?php echo esc_html__( 'Es. filtri chiusi','technosystem' ); ?>
								</h4>
							</div>
							<button class="btnCollapsedToggle border-0">
								<img src="assets/images/arrow-down.svg" class="img-fluid" alt="">
							</button>
						</div>
						<div class="widgetbody collapsed-item" style="">
							<div class="widgetBodyContent">
								<button class="red-btn mt-4 border-0">
									<span class="me-2">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.875 13.5C10.9816 13.5 13.5 10.9816 13.5 7.875C13.5 4.7684 10.9816 2.25 7.875 2.25C4.7684 2.25 2.25 4.7684 2.25 7.875C2.25 10.9816 4.7684 13.5 7.875 13.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
										<path d="M15.75 15.75L12 12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
									</svg>
								</span>
								<?php echo esc_html__( 'Cerca prodotto','technosystem' ); ?>
							</button>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<div class="product-list">
				<div class="row">
                    <?php while (have_posts(  )) : the_post(  ); ?>
					<a href="#" class="col-xl-4 mb-4 text-decoration-none">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
						<div class="product-info mt-4">
							<h4><?php echo get_the_title(); ?></h4>
							<p><?php
                                $terms = get_terms( array(
                                    'taxonomy' => 'product_cat',
                                    'hide_empty' => false,
                                ) ); 
                                foreach($terms as $term){
                                    echo $term->name;
                                }
                            ?></p>
						</div>
					</a>
                    <?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!--/ Product section -->
	<?php
	get_footer();