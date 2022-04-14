<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 *  <snip />
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'      => 'Kirki Customizer Framework',
			'slug'      => 'kirki',
			'required'  => true,
		),
		array(
			'name'      => 'MC4WP: Mailchimp for WordPress',
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		),
		array(
			'name'      => 'SVG Support',
			'slug'      => 'svg-support',
			'required'  => true,
		),
		array(
			'name'      => 'Contact form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),
		
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true, 
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '', 
	);

	tgmpa( $plugins, $config );

}