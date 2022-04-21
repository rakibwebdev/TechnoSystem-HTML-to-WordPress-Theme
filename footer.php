<?php
/**
 * The template for displaying the footer
 */
$footer_section_logo = Kirki::get_option( 'footer_section_logo' );
$footer_section_about = Kirki::get_option( 'footer_section_about' );
$footer_social = Kirki::get_option( 'footer_social' );
$footer_menu = Kirki::get_option( 'footer_menu' );
$footer_contact = Kirki::get_option( 'footer_contact' );
$footer_copyright = Kirki::get_option( 'footer_copyright' );
$footer_copyright_1 = Kirki::get_option( 'footer_copyright_1' );

$newsletter_title = Kirki::get_option( 'newsletter_title' );
$newsletter_subtitle = Kirki::get_option( 'newsletter_subtitle' );
$newsletter_form = Kirki::get_option( 'newsletter_form' );
?>
	<!--newsletter-section-->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="newsletter d-flex align-items-center">
						<span class="newsletter-icon">
							<i class="far fa-envelope"></i>
						</span>
						<div>
							<h2 class="newsletter-title"><?php echo $newsletter_title; ?></h2>
							<p><?php echo $newsletter_subtitle; ?></p>
						</div>
					</div>
				</div><!-- end col -->
				<div class="col-md-6">
					<?php echo do_shortcode($newsletter_form); ?>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!--newsletter-section-->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-content">
						<a href="<?php home_url( ); ?>" class="footer-logo">
							<?php if(!empty($footer_section_logo)){ ?>
								<img src="<?php echo esc_url($footer_section_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(  ) .'/assets/images/logo.png' ?>" alt="Mappix">
							<?php } ?>
						</a>
						<p class="footer-description">
							<?php echo $footer_section_about; ?>
						</p>
						<h3 class="footer-logo-title fw-700">Connect With Us</h3>
						<div class="social-icon d-flex align-items-center">
							<?php foreach ($footer_social as $social): ?>
							<a href="<?php echo $social['button_url']; ?>">
								<i class="<?php echo $social['icon_class']; ?>"></i>
							</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div><!-- end col-->
				<div class="col-lg-4 footer-menu">
					<h3 class="fw-700 footer-menu-title"><?php _e( 'Menu', 'technosystem' ); ?></h3>
					<ul class="footer-menu-list">
						<?php foreach($footer_menu as $item): ?>
						<li>
							<a href="<?php echo $item['button_url']; ?>" class="fw-500"><?php echo $item['menu_title']; ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div><!-- end col -->
				<div class="col-lg-4 footer-menu">
					<h3 class="fw-700 footer-menu-title"><?php _e( 'Contact us', 'technosystem' ); ?></h3>
					<?php foreach($footer_contact as $item): ?>
					<div class="footer-contact-info d-flex align-items-center">
						<span class="footer-contact-info-icon">
							<i class="<?php echo $item['icon_class'];?>"></i>
						</span>
						<div>
							<p class="footer-contact-info-description mb-0">
								<span class="d-block"><?php echo $item['title'];?></span>
								<span class="d-block"><?php echo $item['sub_title'];?></span>
							</p>
						</div>
					</div>
					<?php endforeach; ?>
				</div><!-- end -->
			</div><!-- end row -->
		</div><!-- end container -->
		<div class="copyright-wrap text-center">
			<p><?php echo $footer_copyright; ?></p>
			<p><?php echo $footer_copyright_1; ?></p>
		</div>
	</footer>
	<!-- End footer -->

<?php wp_footer(); ?>

</body>
</html>
