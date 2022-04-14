<?php
/*
* Template Name: Home Template
*/
get_header();
$hero_sliders = Kirki::get_option('slider_setting');
$about_img = Kirki::get_option('about_img');
$about_title = Kirki::get_option('about_title');
$about_subtitle = Kirki::get_option('about_subtitle');
$about_short_desc = Kirki::get_option('about_short_desc');
$about_btn_url = Kirki::get_option('about_btn_url');
$about_btn_text = Kirki::get_option('about_btn_text');
$choose_product_title = Kirki::get_option('choose_product_title');
$choose_product_subtitle = Kirki::get_option('choose_product_subtitle');
$choose_product_short_desc = Kirki::get_option('choose_product_short_desc');
$problem_and_solution_img = Kirki::get_option('problem_and_solution_img');
$problem_and_solution_title = Kirki::get_option('problem_and_solution_title');
$problem_and_solution_subtitle = Kirki::get_option('problem_and_solution_subtitle');
$problem_and_solution_short_desc = Kirki::get_option('problem_and_solution_short_desc');
$problem_and_solution_repeater = Kirki::get_option('problem_and_solution_repeater');
$problem_and_solution_repeater_1 = Kirki::get_option('problem_and_solution_repeater_1');
$problem_and_solution_customization_icon = Kirki::get_option('problem_and_solution_customization_icon');
$problem_and_solution_customization_title = Kirki::get_option('problem_and_solution_customization_title');
$problem_and_solution_customization_short_desc = Kirki::get_option('problem_and_solution_customization_short_desc');
$problem_and_solution_customization_btn_text = Kirki::get_option('problem_and_solution_customization_btn_text');

$helping_option_title = Kirki::get_option('helping_option_title');
$helping_option_short_desc = Kirki::get_option('helping_option_short_desc');
$helping_option_subtitle = Kirki::get_option('helping_option_subtitle');
$helping_option_repeater = Kirki::get_option('helping_option_repeater');

$cta_banner_img = Kirki::get_option('cta_banner_img');
$cta_banner_title = Kirki::get_option('cta_banner_title');
$cta_banner_short_desc = Kirki::get_option('cta_banner_short_desc');
$cta_banner_btn_text = Kirki::get_option('cta_banner_btn_text');
$cta_banner_btn_url = Kirki::get_option('cta_banner_btn_url');

$home_service_section_img = Kirki::get_option('home_service_section_img');
$home_service_section_icon = Kirki::get_option('home_service_section_icon');
$home_service_section_title = Kirki::get_option('home_service_section_title');
$home_service_section_sub_title = Kirki::get_option('home_service_section_sub_title');
$home_service_section_short_desc = Kirki::get_option('home_service_section_short_desc');
$home_service_section_btn_text = Kirki::get_option('home_service_section_btn_text');
$home_service_section_btn_url = Kirki::get_option('home_service_section_btn_url');

$helping_option2_title = Kirki::get_option('helping_option2_title');
$helping_option2_short_desc = Kirki::get_option('helping_option2_short_desc');
$helping_option2_subtitle = Kirki::get_option('helping_option2_subtitle');
$helping_option2_repeater = Kirki::get_option('helping_option2_repeater');

$feautes_section_repeater = Kirki::get_option('feautes_section_repeater');

$home_contact_section_img = Kirki::get_option('home_contact_section_img');
$home_contact_section_title = Kirki::get_option('home_contact_section_title');
$home_contact_section_sub_title = Kirki::get_option('home_contact_section_sub_title');
$home_contact_section_short_desc = Kirki::get_option('home_contact_section_short_desc');
$home_contact_section_btn_text = Kirki::get_option('home_contact_section_btn_text');
$home_contact_section_btn_url = Kirki::get_option('home_contact_section_btn_url');


?>
<!-- heroCarousel -->
	<section class="heroCarousel owl-carousel owl-theme" data-loop="true" data-items="1" data-margin="20"
		data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true"
		data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
		data-mobile-device-nav="true" data-mobile-device-dots="true" data-sm-device="1" data-sm-device-nav="true"
		data-sm-device-dots="true" data-sm-device2="1" data-sm-device2-nav="true" data-sm-device2-dots="true"
		data-md-device="1" data-md-device-nav="true" data-md-device-dots="true" data-lg-device="1"
		data-lg-device-dots="true" data-lg-device-nav="true">
		<?php foreach($hero_sliders as $slider) :?>
		<div class="banner is-bgImage" style="background-image: url(<?php echo $slider['slider_image'] ?>)">
			<div class="bannerContent d-flex justify-content-center align-items-center wow fadeInDown"
				data-wow-duration="1s" data-wow-delay="300ms">
				<div class="content text-center">
					<h1 class="banner-title text-white fw-700"><?php echo $slider['slider_title'] ?></h1>
					<p class="banner-description text-white"><?php echo $slider['slider_subtitle'] ?></p>
					<a href="<?php echo $slider['link_url'] ?>" class="btn">
					<?php echo $slider['slider_btn'] ?>
					</a>
				</div>
			</div>
		</div>
		<!--/ end slider items  -->
		<?php endforeach; ?>
	</section>
	<!--/ heroCarousel -->

	<!-- Recipients us  -->
	<section class="recipients-section py-5 my-5">
		<div class="container">

			<div class="row align-items-center">
				<div class="col-xl-6">
					<div class="aboutUsImage">
						<img src="<?php echo esc_url($about_img) ?>" class="img-fluid" alt="about Us" />
					</div>
				</div>
				<div class="col-xl-6">
					<div class="sec-title-area ">
						<span class="sec-sub-tile fw-400"><?php echo $about_subtitle; ?></span>
						<h2 class="sec-title fw-700">
						<?php echo $about_title; ?>
						</h2>
						<p class="sec-description fw-400">
						<?php echo $about_short_desc; ?>
						</p>
						<a href="<?php esc_url($about_btn_url) ?>" class="btn"><?php echo $about_btn_text; ?>
						</a>
					</div>
				</div><!-- end col -->
			</div><!-- end Row -->
		</div><!-- end container -->
	</section>
	<!--/ Recipients us  -->

	<!--Choose products -->
	<section class="py-5 bg-gray">
		<div class="container">
			<div class="chooseProduct py-4">
				<span class="sec-sub-tile fw-400"><?php echo $choose_product_subtitle; ?></span>
				<h2 class="title"><?php echo $choose_product_title; ?></h2>
				<p class="normal-pra "><?php echo $choose_product_short_desc; ?></p>
				<div class="selectInfo">
					<div class="row align-items-end mt-4">
						<div class="col-xl-3 pb-0 pb-xl-0">
							<div class="mt-3 mt-xl-0">
								<label for="Applicazioni" class="form-label select-title d-block">
									Applicazioni
								</label>
								<select
									class="select-2-init form-select fs-6 fw-bold text-gray-dark h-50 is-radius-8 py-2 w-100"
									id="Applicazioni">
									<option selected="0">Riscaldare</option>
									<option value="1">two</option>
									<option value="2">Three</option>
								</select>
							</div>
						</div>
						<div class="col-xl-3 pb-0 pb-xl-0">
							<div class="mt-3 mt-xl-0">
								<label for="Settore" class="form-label select-title d-block">
									Settore
								</label>
								<select
									class="select-2-init form-select fs-6 fw-bold text-gray-dark h-50 is-radius-8 py-2 w-100"
									id="Settore">
									<option selected="0">Civile</option>
									<option value="1">two</option>
									<option value="2">Three</option>
								</select>
							</div>
						</div>
						<div class="col-xl-3 pb-0 pb-xl-0">
							<div class="mt-3 mt-xl-0">
								<label for="Lorem " class="form-label select-title d-block">
									Lorem ipsum
								</label>
								<select
									class="select-2-init form-select fs-6 fw-bold text-gray-dark h-50 is-radius-8 py-2 w-100"
									id="Lorem">
									<option selected="0">Piastre corrugate</option>
									<option value="1">two</option>
									<option value="2">Three</option>
								</select>
							</div>
						</div>
						<div class="col-xl-3 pb-0 pb-xl-0">
							<div class="mt-3 mt-xl-0">
								<button class="red-btn mt-4">
									<span class="me-2"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M7.875 13.5C10.9816 13.5 13.5 10.9816 13.5 7.875C13.5 4.7684 10.9816 2.25 7.875 2.25C4.7684 2.25 2.25 4.7684 2.25 7.875C2.25 10.9816 4.7684 13.5 7.875 13.5Z"
												stroke="white" stroke-width="1.5" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M15.75 15.75L12 12" stroke="white" stroke-width="1.5"
												stroke-linecap="round" stroke-linejoin="round" />
										</svg></span>
									Link alla pagina</button>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--/ Choose products -->

	<!--problem and solution -->
	<section class="solution-section py-5">
		<div class="d-flex justify-content-center align-items-center">
			<div class="solution-content">
				<div class="sec-title-area  text-right">

					<span class="sec-sub-tile fw-400"><?php echo $problem_and_solution_subtitle ?></span>
					<h2 class="sec-title fw-700">
						<?php echo $problem_and_solution_title ?>
					</h2>
					<p class="sec-description fw-400">
						<?php echo $problem_and_solution_short_desc ?>
					</p>
				</div>
			</div>
			<div class="solution-image">
				<img src="<?php echo $problem_and_solution_img ?>" class="img-fluid" alt="">
			</div>
		</div>

		<div class="solution">
			<div class="container mt-5">
				<div class="row">
					<div class="col-xl-5">
						<?php foreach( $problem_and_solution_repeater as $item): ?>
						<div class="solutionitem d-flex align-items-center gap-2 mb-2">
							<i class="<?php echo $item['problem_and_solution_repeater_icon']?>"></i>
							<p class="solution-content mb-0"><?php echo $item['problem_and_solution_repeater_title']?></p>
						</div>
						<?php endforeach; ?>
						
					</div>
					<div class="col-xl-4">
						<?php foreach ($problem_and_solution_repeater_1 as $item): ?>
						<div class="solutionitem d-flex align-items-center gap-2 mb-2">
							<i class="<?php echo $item['problem_and_solution_repeater_1_icon']?>"></i>
							<p class="solution-content mb-0"><?php echo $item['problem_and_solution_repeater_1_title']?></p>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="col-xl-3">
						<div class="customization pt-5 pb-2 px-3 text-center" style="background-color: #F5F5F5;">
							<i class="<?php echo $problem_and_solution_customization_icon; ?>"></i>
							<h4 class="solution-content text-center"><?php echo $problem_and_solution_customization_title; ?></h4>
							<p class=" normal-pra"><?php echo $problem_and_solution_customization_short_desc; ?></p>
							<button class="btn border rounded-1 fw-medium bg-white px-5 py-2 text-dark mt-2 mb-3"><?php echo $problem_and_solution_customization_btn_text; ?></button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!--/ problem and solution -->

	<!--helping option -->
	<section class="pt-5 bg-gray pb-220">
		<div class="container">
			<div class="section-title ">
				<span class="sec-sub-tile fw-400 p-0"><?php echo $helping_option_subtitle ;?></span>
				<h2 class="title"><?php echo $helping_option_title ;?></h2>
				<p class="normal-pra">
				<?php echo $helping_option_short_desc ;?>
				</p>

			</div>

		</div>
	</section>

	<div class="help-sector container mt-168 mb-5 pb-5">
		<div class="row">
			<?php foreach ($helping_option_repeater as $item): ?>
			<div class="col-md-4">
				<div class="blog-card">
					<div class="blog-card-img">
						<img src="<?php echo $item['helping_option_repeater_image'] ?>" alt="" />
						<span class="blog-card-icon">
							<i class="<?php echo $item['helping_option_repeater_icon'] ?>"></i>
						</span>
					</div>
					<a href="#">
						<h3 class="blog-card-title fw-700"><?php echo $item['helping_option_repeater_title'] ?></h3>
					</a>
					<p class="blog-card-description">
					<?php echo $item['helping_option_repeater_short_desc'] ?>
					</p>
					<a href="<?php echo $item['helping_option_repeater_btn_url'] ?>" class="btn btn-transparent">
					<?php echo $item['helping_option_repeater_btn_text'] ?>
					</a>
				</div>
			</div><!-- col end -->
			<?php endforeach; ?>
		</div>
	</div>
	<!--/ helping option -->

	<!-- cta banner-->
	<section class="cta-banner is-bgImage"
		style="background-image: url(<?php echo $cta_banner_img; ?>);background-repeat: no-repeat; background-size: 100% 100%;">
		<div class="container">
			<div class="sec-title-area text-center">
				<h2 class="sec-title fw-700 text-white">
					<?php echo $cta_banner_title; ?>
				</h2>
				<p class="sec-description fw-400 text-white">
				<?php echo $cta_banner_short_desc; ?>
				</p>
				<a href="<?php echo $cta_banner_btn_url; ?>" class="btn btn-transparent">
				<?php echo $cta_banner_btn_text; ?>
				</a>
			</div>
		</div>
	</section>
	<!--/ end cta banner -->

	<!--/ call to action -->
	<section class="py-5 bg-gray">
		<div class="container">
			<div class="row align-items-end ">
				<div class="col-xl-3 pb-0 pb-xl-0">
					<div class="mt-3 mt-xl-0">
						<span class="sec-sub-tile fw-400">Ricambi</span>
						<h2 class="title">Cerca ricambi</h2>
					</div>
				</div>
				<div class="col-xl-3 pb-0 pb-xl-0">
					<div class="mt-3 mt-xl-0">
						<label for="Categoria" class="form-label select-title d-block">
							Categoria
						</label>
						<select
							class="select-2-init form-select fs-6 fw-bold text-gray-dark h-50 is-radius-8 py-2 w-100"
							id="Categoria">
							<option selected="0"> Scambiatori ispezionabili </option>
							<option value="1">two</option>
							<option value="2">Three</option>
						</select>
					</div>
				</div>
				<div class="col-xl-3 pb-0 pb-xl-0">
					<div class="mt-3 mt-xl-0">
						<label for="Nome " class="form-label select-title d-block">
							Nome prodotto
						</label>
						<select
							class="select-2-init form-select fs-6 fw-bold text-gray-dark h-50 is-radius-8 py-2 w-100"
							id="Nome">
							<option selected="0">TSC 510</option>
							<option value="1">two</option>
							<option value="2">Three</option>
						</select>
					</div>
				</div>
				<div class="col-xl-3 pb-0 pb-xl-0">
					<div class="mt-3 mt-xl-0">
						<button class="blue-btn mt-4">
							<span class="me-2"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M7.875 13.5C10.9816 13.5 13.5 10.9816 13.5 7.875C13.5 4.7684 10.9816 2.25 7.875 2.25C4.7684 2.25 2.25 4.7684 2.25 7.875C2.25 10.9816 4.7684 13.5 7.875 13.5Z"
										stroke="white" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" />
									<path d="M15.75 15.75L12 12" stroke="white" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg></span>
							Link alla pagina</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ call to action -->

	<!-- services section -->
	<section class="services-section section-padding pb-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4">
					<div class="blog-card-img">
						<img src="<?php echo $home_service_section_img; ?>" alt="">
						<span class="blog-card-icon">
							<i class="<?php echo $home_service_section_icon ?>"></i>
						</span>
					</div>
				</div>
				<div class="col-md-8">
					<div class="sec-title-area ">
						<span class="sec-sub-tile fw-400"><?php echo $home_service_section_sub_title; ?></span>
						<h2 class="sec-title fw-700"><?php echo $home_service_section_title; ?>
						</h2>
						<p class="sec-description fw-400">
						<?php echo $home_service_section_short_desc; ?>
						</p>
						<a href="<?php echo $home_service_section_btn_url; ?>" class="btn btn-transparent">
						<?php echo $home_service_section_btn_text; ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end services section -->

	<!-- Help Section -->
	<section class="section-padding">
		<div class="container">
			<div class="sec-title-area ">
				<span class="sec-sub-tile fw-400"><?php echo $helping_option2_subtitle; ?></span>
				<h2 class="sec-title fw-700"><?php echo $helping_option2_title; ?></h2>
				<p class="sec-description fw-400">
				<?php echo $helping_option2_short_desc; ?>
				</p>
			</div><!-- end sec title -->
			<div class="row">
				<?php foreach ($helping_option2_repeater as $item) { ?>
				<div class="col-md-4">
					<div class="blog-card">
						<div class="blog-card-img">
							<img src="<?php echo $item['helping_option2_repeater_image']; ?>" alt="" />
							<span class="blog-card-icon">
								<i class="<?php echo $item['helping_option2_repeater_icon']; ?>"></i>
							</span>
						</div>
						<a href="#">
							<h3 class="blog-card-title fw-700"><?php echo $item['helping_option2_repeater_title']; ?></h3>
						</a>
						<p class="blog-card-description">
						<?php echo $item['helping_option2_repeater_short_desc']; ?>
						</p>
						<a href="<?php echo $item['helping_option2_repeater_btn_url']; ?>" class="btn btn-transparent">
						<?php echo $item['helping_option2_repeater_btn_text']; ?>
						</a>
					</div>
				</div><!-- col end -->
				<?php } ?>
			</div><!-- row end -->
		</div><!-- End Container -->
	</section>
	<!-- End Help Section -->

	<!--feautes-section-->
	<section class="feautes-section">
		<div class="container">
			<div class="row">
				<?php foreach($feautes_section_repeater as $item): ?>
				<div class="col-md-4">
					<div class="single-card text-center">
						<div class="single-card-icon">
							<i class="<?php echo $item['feautes_section_repeater_icon']; ?>"></i>
						</div>
						<h3 class="blog-card-title fw-700"><?php echo $item['feautes_section_repeater_title']; ?></h3>
						<p class="blog-card-description">
						<?php echo $item['feautes_section_repeater_short_desc']; ?>
						</p>
						<a href="<?php echo $item['feautes_section_repeater_btn_url']; ?>" class="btn btn-transparent">
						<?php echo $item['feautes_section_repeater_btn_text']; ?>
						</a>
					</div>
				</div><!-- end col -->
				<?php endforeach; ?>
				
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- end feautes-section-->

	<!-- contact section -->
	<section class="contact-section">
		<div class="d-flex align-items-center">
			<div class="map-wrap">
				<img src="<?php echo $home_contact_section_img;?>" alt="">
			</div>
			<div class="sec-title-area ">
				<span class="sec-sub-tile fw-400"><?php echo $home_contact_section_sub_title;?></span>
				<h2 class="sec-title fw-700"><?php echo $home_contact_section_title;?></h2>
				<p class="sec-description fw-400">
				<?php echo $home_contact_section_short_desc;?>
				</p>
				<a href="<?php echo $home_contact_section_btn_url;?>" class="btn btn-transparent">
				<?php echo $home_contact_section_btn_text;?>
				</a>
			</div>
		</div>
	</section>
	<!-- end  contact section -->
<?php
get_footer();