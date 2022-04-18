<?php
if( !class_exists('Kirki') ) {
    return;
}
// Theme Option Panel
new \Kirki\Panel(
	'theme_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Options', 'technosystem' ),
	]
);

// Home Page Section
new \Kirki\Section(
	'home_page',
	[
		'title'       => esc_html__( 'Home Page', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 10,
	]
);
// Slider Content
new \Kirki\Field\Repeater(
	[
		'settings' => 'slider_setting',
		'label'    => esc_html__( 'Slider Content', 'technosystem' ),
		'section'  => 'home_page',
        'priority' => 1,
		'default'  => [
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_subtitle'   => esc_html__( 'Scopri le nostre soluzioni per gestire il calore', 'technosystem' ),
				'slider_btn'   => esc_html__( 'Link alla pagina', 'technosystem' ),
				'link_url'    => 'https://kirki.org/',
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_subtitle'   => esc_html__( 'Scopri le nostre soluzioni per gestire il calore', 'technosystem' ),
				'slider_btn'   => esc_html__( 'Link alla pagina', 'technosystem' ),
				'link_url'    => 'https://kirki.org/',
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_subtitle'   => esc_html__( 'Scopri le nostre soluzioni per gestire il calore', 'technosystem' ),
				'slider_btn'   => esc_html__( 'Link alla pagina', 'technosystem' ),
				'link_url'    => 'https://kirki.org/',
				'slider_image'    => '',
			],
		],
		'fields'   => [
			'slider_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_subtitle'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Subtitle', 'technosystem' ),
				'default'     => '',
			],
			'slider_btn'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button', 'technosystem' ),
				'default'     => '',
			],
			'link_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'URL', 'technosystem' ),
				'default'     => '',
			],
			'slider_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'BG Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// About section
new \Kirki\Section(
	'about_us',
	[
		'title'       => esc_html__( 'About Us', 'technosystem' ),
		'section'       => 'home_page',
        'priority'    => 2,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'about_img',
		'label'       => esc_html__( 'About Image', 'technosystem' ),
		'section'     => 'about_us',
		'default'     => '',
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur', 'technosystem' ),
		'section'  => 'about_us',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_subtitle',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Chi siamo', 'technosystem' ),
		'section'  => 'about_us',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_short_desc',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Team con 40 anni di esperienza nella gestione del calore: progetta, produce, collauda e vende scambiatori di calore a piastre, Moduli, Sottostazioni TLR, pastorizzatori, in tutto il mondo, un “vero made e vero Italy”', 'technosystem' ),
		'section'  => 'about_us',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_btn_url',
		'label'    => esc_html__( 'Button URL', 'technosystem' ),
        'default'  => esc_html__( 'https://kirki.org/', 'technosystem' ),
		'section'  => 'about_us',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_btn_text',
		'label'    => esc_html__( 'Button TEXT', 'technosystem' ),
        'default'  => esc_html__( 'Link alla pagina', 'technosystem' ),
		'section'  => 'about_us',
	]
);

// Choose Product
new \Kirki\Section(
	'choose_product',
    [
        'title'       => esc_html__( 'Choose Product', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 3,
    ]
);
new \Kirki\Field\Text(
	[
		'settings' => 'choose_product_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Trova subito il prodotto che fa per te', 'technosystem' ),
		'section'  => 'choose_product',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'choose_product_subtitle',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'TCerca', 'technosystem' ),
		'section'  => 'choose_product',
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'choose_product_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'technosystem' ),
		'section'  => 'choose_product',
	]
);

// Problem And Solution section
new \Kirki\Section(
	'problem_and_solution',
    [
        'title'       => esc_html__( 'Problem And Solution', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 4,
    ]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'problem_and_solution_img',
		'label'       => esc_html__( 'Image', 'technosystem' ),
		'section'     => 'problem_and_solution',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Dicci la tua esigenza, troveremo una soluzione', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_subtitle',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Chi siamo', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 4,
	]
);
// Solution
new \Kirki\Field\Repeater(
	[
		'settings' => 'problem_and_solution_repeater',
		'label'    => esc_html__( 'Solution', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 5,
		'default'  => [
			[
				'problem_and_solution_repeater_icon'   => 'fal fa-sun',
				'problem_and_solution_repeater_title'   => esc_html__( 'Riscaldare', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_icon'   => 'fal fa-snowflake',
				'problem_and_solution_repeater_title'   => esc_html__( 'Raffreddare', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_icon'   => 'fal fa-snowflake',
				'problem_and_solution_repeater_title'   => esc_html__( 'SalmonellaR', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_icon'   => 'fal fa-bolt',
				'problem_and_solution_repeater_title'   => esc_html__( 'Produrre energia', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_icon'   => 'fal fa-check-circle',
				'problem_and_solution_repeater_title'   => esc_html__( 'Ottimizzare', 'technosystem' ),
			],
		],
		'fields'   => [
			'problem_and_solution_repeater_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'problem_and_solution_repeater_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Problem
new \Kirki\Field\Repeater(
	[
		'settings' => 'problem_and_solution_repeater_1',
		'label'    => esc_html__( 'Solution', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 6,
		'default'  => [
			[
				'problem_and_solution_repeater_1_icon'   => 'fal fa-wrench',
				'problem_and_solution_repeater_1_title'   => esc_html__( 'Installare', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_1_icon'   => 'fal fa-clock',
				'problem_and_solution_repeater_1_title'   => esc_html__( 'Urgenze', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_1_icon'   => 'fal fa-calculator-alt',
				'problem_and_solution_repeater_1_title'   => esc_html__( 'Calcolare', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_1_icon'   => 'fal fa-ruler-combined',
				'problem_and_solution_repeater_1_title'   => esc_html__( 'Progettare', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_1_icon'   => 'fal fa-coins',
				'problem_and_solution_repeater_1_title'   => esc_html__( 'Preventivare', 'technosystem' ),
			],
			[
				'problem_and_solution_repeater_1_icon'   => 'fal fa-comments',
				'problem_and_solution_repeater_1_title'   => esc_html__( 'Consulenze', 'technosystem' ),
			],
		],
		'fields'   => [
			'problem_and_solution_repeater_1_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'problem_and_solution_repeater_1_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
//problem_and_solution_customization
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_customization_icon',
		'label'    => esc_html__( 'Customization Icon', 'technosystem' ),
        'default'  => esc_html__( 'fal fa-pencil-ruler', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 7,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_customization_title',
		'label'    => esc_html__( 'Customization Title', 'technosystem' ),
        'default'  => esc_html__( 'Customizzazione', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 8,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_customization_short_desc',
		'label'    => esc_html__( 'Customization Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'problem_and_solution_customization_btn_text',
		'label'    => esc_html__( 'Button TEXT', 'technosystem' ),
        'default'  => esc_html__( 'Link alla pagina', 'technosystem' ),
		'section'  => 'problem_and_solution',
		'priority' => 10,
	]
);

// Helping Option
new \Kirki\Section(
	'helping_option',
    [
        'title'       => esc_html__( 'Helping Option', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 5,
    ]
);

new \Kirki\Field\Text(
	[
		'settings' => 'helping_option_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'In every sector we can help you manage the heat
		', 'technosystem' ),
		'section'  => 'helping_option',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'helping_option_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'The pain itself is the love of the pain, the main ecological problems, but I give this kind of time to fall down, so that some great pain and pain. In order that for the most part, any one of us will come to the exercise of any kind of employment except to take advantage of the objectives from it.', 'technosystem' ),
		'section'  => 'helping_option',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'helping_option_subtitle',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Soluzioni', 'technosystem' ),
		'section'  => 'helping_option',
		'priority' => 4,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'helping_option_repeater',
		'label'    => esc_html__( 'Helping Options', 'technosystem' ),
		'section'  => 'helping_option',
		'priority' => 5,
		'default'  => [
			[
				'helping_option_repeater_icon'   => 'fal fa-home',
				'helping_option_repeater_title'   => esc_html__( 'Civile', 'technosystem' ),
				'helping_option_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'helping_option_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'helping_option_repeater_btn_text'   => esc_html__( 'Link', 'technosystem' ),
				'helping_option_repeater_image'   => '',
			],
			[
				'helping_option_repeater_icon'   => 'fal fa-industry-alt',
				'helping_option_repeater_title'   => esc_html__( 'Industriale', 'technosystem' ),
				'helping_option_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'helping_option_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'helping_option_repeater_btn_text'   => esc_html__( 'Link', 'technosystem' ),
				'helping_option_repeater_image'   => '',
			],
			[
				'helping_option_repeater_icon'   => 'fal fa-swimming-pool',
				'helping_option_repeater_title'   => esc_html__( 'Piscine', 'technosystem' ),
				'helping_option_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'helping_option_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'helping_option_repeater_btn_text'   => esc_html__( 'Link', 'technosystem' ),
				'helping_option_repeater_image'   => '',
			],
			
		],
		'fields'   => [
			'helping_option_repeater_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'helping_option_repeater_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'helping_option_repeater_subtitle'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'technosystem' ),
				'default'     => '',
			],
			'helping_option_repeater_short_desc'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Short Description', 'technosystem' ),
				'default'     => '',
			],
			'helping_option_repeater_btn_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button URL', 'technosystem' ),
				'default'     => '',
			],
			'helping_option_repeater_btn_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'technosystem' ),
				'default'     => '',
			],
			'helping_option_repeater_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Helping Option 2
new \Kirki\Section(
	'helping_option2',
    [
        'title'       => esc_html__( 'Helping Option 2', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 5,
    ]
);

new \Kirki\Field\Text(
	[
		'settings' => 'helping_option2_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'In every sector we can help you manage the heat
		', 'technosystem' ),
		'section'  => 'helping_option2',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'helping_option2_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'The pain itself is the love of the pain, the main ecological problems, but I give this kind of time to fall down, so that some great pain and pain. In order that for the most part, any one of us will come to the exercise of any kind of employment except to take advantage of the objectives from it.', 'technosystem' ),
		'section'  => 'helping_option2',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'helping_option2_subtitle',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Soluzioni', 'technosystem' ),
		'section'  => 'helping_option2',
		'priority' => 4,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'helping_option2_repeater',
		'label'    => esc_html__( 'Helping Options', 'technosystem' ),
		'section'  => 'helping_option2',
		'priority' => 5,
		'default'  => [
			[
				'helping_option2_repeater_icon'   => 'fal fa-home',
				'helping_option2_repeater_title'   => esc_html__( 'Civile', 'technosystem' ),
				'helping_option2_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'helping_option2_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'helping_option2_repeater_btn_text'   => esc_html__( 'Link', 'technosystem' ),
				'helping_option2_repeater_image'   => '',
			],
			[
				'helping_option2_repeater_icon'   => 'fal fa-industry-alt',
				'helping_option2_repeater_title'   => esc_html__( 'Industriale', 'technosystem' ),
				'helping_option2_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'helping_option2_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'helping_option2_repeater_btn_text'   => esc_html__( 'Link', 'technosystem' ),
				'helping_option2_repeater_image'   => '',
			],
			[
				'helping_option2_repeater_icon'   => 'fal fa-swimming-pool',
				'helping_option2_repeater_title'   => esc_html__( 'Piscine', 'technosystem' ),
				'helping_option2_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'helping_option2_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'helping_option2_repeater_btn_text'   => esc_html__( 'Link', 'technosystem' ),
				'helping_option2_repeater_image'   => '',
			],
			
		],
		'fields'   => [
			'helping_option2_repeater_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'helping_option2_repeater_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'helping_option2_repeater_short_desc'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Short Description', 'technosystem' ),
				'default'     => '',
			],
			'helping_option2_repeater_btn_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button URL', 'technosystem' ),
				'default'     => '',
			],
			'helping_option2_repeater_btn_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'technosystem' ),
				'default'     => '',
			],
			'helping_option2_repeater_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);

// CTA Banner
new \Kirki\Section(
	'cta_banner',
    [
        'title'       => esc_html__( 'CTA Banner', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 6,
    ]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'cta_banner_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'cta_banner',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'cta_banner_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Ciò che davvero ci distingue è la nostra capacità di anticipare le tue esigenze e darti un servizio superlativo', 'technosystem' ),
		'section'  => 'cta_banner',
		'priority' => 8,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'cta_banne_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'technosystem' ),
		'section'  => 'cta_banner',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'cta_banner_btn_text',
		'label'    => esc_html__( 'Button TEXT', 'technosystem' ),
        'default'  => esc_html__( 'Link a pagina', 'technosystem' ),
		'section'  => 'cta_banner',
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'cta_banner_url',
		'label'    => esc_html__( 'URL', 'technosystem' ),
        'default'  => esc_html__( '#', 'technosystem' ),
		'section'  => 'cta_banner',
		'priority' => 11,
	]
);

// Home Service Section
new \Kirki\Section(
	'home_service_section',
    [
        'title'       => esc_html__( 'Service Section', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 7,
    ]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'home_service_section_img',
		'label'       => esc_html__( 'Image', 'technosystem' ),
		'section'     => 'home_service_section',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_service_section_icon',
		'label'    => esc_html__( 'Icon Class', 'technosystem' ),
        'default'  => esc_html__( 'fal fa-calculator-alt', 'technosystem' ),
		'section'  => 'home_service_section',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_service_section_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Facilitiamo il tuo lavoro offrendoti strumenti gratuiti di calcolo', 'technosystem' ),
		'section'  => 'home_service_section',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_service_section_sub_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Destinatari', 'technosystem' ),
		'section'  => 'home_service_section',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_service_section_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'technosystem' ),
		'section'  => 'home_service_section',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_service_section_btn_text',
		'label'    => esc_html__( 'Button TEXT', 'technosystem' ),
        'default'  => esc_html__( 'Ricerca il tuo rivenditore', 'technosystem' ),
		'section'  => 'home_service_section',
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_service_section_btn_url',
		'label'    => esc_html__( 'Button URL', 'technosystem' ),
        'default'  => esc_html__( '#', 'technosystem' ),
		'section'  => 'home_service_section',
		'priority' => 10,
	]
);

// feautes-section
new \Kirki\Section(
	'feautes_section',
    [
        'title'       => esc_html__( 'Feautes Section', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 8,
    ]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'feautes_section_repeater',
		'label'    => esc_html__( 'Helping Options', 'technosystem' ),
		'section'  => 'feautes_section',
		'priority' => 5,
		'default'  => [
			[
				'feautes_section_repeater_icon'   => 'fal fa-question-circle',
				'feautes_section_repeater_title'   => esc_html__( 'FAQ', 'technosystem' ),
				'feautes_section_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'feautes_section_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'feautes_section_repeater_btn_text'   => esc_html__( 'Bottone', 'technosystem' ),
			],
			[
				'feautes_section_repeater_icon'   => 'fal fa-star',
				'feautes_section_repeater_title'   => esc_html__( 'Testimonianze', 'technosystem' ),
				'feautes_section_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor', 'technosystem' ),
				'feautes_section_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'feautes_section_repeater_btn_text'   => esc_html__( 'Bottone', 'technosystem' ),
			],
			[
				'feautes_section_repeater_icon'   => 'fal fa-folders',
				'feautes_section_repeater_title'   => esc_html__( 'Case History
				', 'technosystem' ),
				'feautes_section_repeater_short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor

				', 'technosystem' ),
				'feautes_section_repeater_btn_url'   => esc_html__( '#', 'technosystem' ),
				'feautes_section_repeater_btn_text'   => esc_html__( 'Bottone', 'technosystem' ),
			],
			
		],
		'fields'   => [
			'feautes_section_repeater_icon'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'feautes_section_repeater_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'feautes_section_repeater_short_desc'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Short Description', 'technosystem' ),
				'default'     => '',
			],
			'feautes_section_repeater_btn_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button URL', 'technosystem' ),
				'default'     => '',
			],
			'feautes_section_repeater_btn_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);

new \Kirki\Section(
	'home_contact_section',
    [
        'title'       => esc_html__( 'Contact Section', 'technosystem' ),
        'section'       => 'home_page',
        'priority'    => 9,
    ]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_contact_map',
		'label'    => esc_html__( 'Map URL', 'technosystem' ),
        'default'  => ( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.9257575011193!2d-105.16371908461778!3d39.96541257942013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876bf32fe7c4d345%3A0x3b1c98753ed160d3!2sVia%20Toscana!5e0!3m2!1sen!2sbd!4v1648872852034!5m2!1sen!2sbd'),
		'section'  => 'home_contact_section',
		'priority' => 9,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'home_contact_section_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur', 'technosystem' ),
		'section'  => 'home_contact_section',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_contact_section_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Rete vendita', 'technosystem' ),
		'section'  => 'home_contact_section',
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'home_contact_section_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'technosystem' ),
		'section'  => 'home_contact_section',
		'priority' => 9,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'home_contact_section_button_url',
		'label'    => esc_html__( 'Button URL', 'technosystem' ),
        'default'  => esc_html__( '#', 'technosystem' ),
		'section'  => 'home_contact_section',
		'priority' => 9,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'home_contact_section_btn_text',
		'label'    => esc_html__( 'Button TEXT', 'technosystem' ),
        'default'  => esc_html__( 'Ricerca il tuo rivenditore', 'technosystem' ),
		'section'  => 'home_contact_section',
		'priority' => 10,
	]
);

// Archive Page
new \Kirki\Section(
	'archive_page',
	[
		'title'       => esc_html__( 'Archive Page', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 11,
	]
);
// Slider Content
new \Kirki\Field\Repeater(
	[
		'settings' => 'archive_slider',
		'label'    => esc_html__( 'Slider Content', 'technosystem' ),
		'section'  => 'archive_page',
        'priority' => 1,
		'default'  => [
			[
				'slider_title'   => esc_html__( 'News', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'News', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'News', 'technosystem' ),
				'slider_image'    => '',
			],
		],
		'fields'   => [
			'slider_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'BG Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);

// Agency Page
new \Kirki\Section(
	'agency_page',
	[
		'title'       => esc_html__( 'Agency Page', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 12,
	]
);
// Slider Content
new \Kirki\Field\Repeater(
	[
		'settings' => 'agency_page_slider',
		'label'    => esc_html__( 'Slider Content', 'technosystem' ),
		'section'  => 'agency_page',
        'priority' => 1,
		'default'  => [
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_image'    => '',
			],
		],
		'fields'   => [
			'slider_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'BG Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Story
new \Kirki\Section(
	'agency_page_story',
	[
		'title'       => esc_html__( 'Stroy', 'technosystem' ),
		'section'       => 'agency_page',
        'priority'    => 1,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'agency_page_story_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'agency_page_story',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'agency_page_story_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'La storia e l’idea', 'technosystem' ),
		'section'  => 'agency_page_story',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'agency_page_story_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Dopo un brevetto ottenuto nel 1982, nel 1983 nasce Techno System una società che, da allora, progetta, produce, collauda e vende scambiatori di calore a piastre in tutto il mondo. Dopo il prototipo del primo scambiatore dal nome ormai mitico di TS 500, l’azienda ha continuato a innovarsi e ad espandersi in questo settore, diventandone un leader riconosciuto. La brillante idea di Carlo Boccacci, grazie anche al suo grande entusiasmo e volontà, nel corso degli anni si è dimostrata effettivamente vincente.', 'technosystem' ),
		'section'  => 'agency_page_story',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'agency_page_story_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'La storia', 'technosystem' ),
		'section'  => 'agency_page_story',
		'priority' => 4,
	]
);

// Knowledge
new \Kirki\Section(
	'agency_page_knowledge',
	[
		'title'       => esc_html__( 'Knowledge', 'technosystem' ),
		'section'       => 'agency_page',
        'priority'    => 1,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'agency_page_knowledge_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Il caso e la conoscenza', 'technosystem' ),
		'section'  => 'agency_page_knowledge',
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'agency_page_knowledge_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Come spesso succede, tutto può sembrare casuale, infatti, già da studente d’ingegneria, Carlo Boccacci rifiutò di fare proprio un progetto di uno scambiatore di calore a fascio tubiero. Ma, come lui stesso racconta: «nel lavoro, facevamo frese ed utensili per il legno, mi sono però di nuovo imbattuto in un dépliant di scambiatori a piastre. Lavorando quindi in un settore del tutto estraneo, l’aver progettato (avendone la conoscenza) e realizzato uno scambiatore a piastre, senza avere avuto a disposizione né presse né stampi, mi ha dato veramente la spinta per provarci».', 'technosystem' ),
		'section'  => 'agency_page_knowledge',
		'priority' => 3,
	]
);

//Multinationals
new \Kirki\Section(
	'agency_page_multinationals',
	[
		'title'       => esc_html__( 'Multinations', 'technosystem' ),
		'section'       => 'agency_page',
        'priority'    => 3,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'agency_page_multinationals_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'agency_page_multinationals',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'agency_page_multinationals_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Il caso e la conoscenza', 'technosystem' ),
		'section'  => 'agency_page_multinationals',
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'agency_page_multinationals_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Come spesso succede, tutto può sembrare casuale, infatti, già da studente d’ingegneria, Carlo Boccacci rifiutò di fare proprio un progetto di uno scambiatore di calore a fascio tubiero. Ma, come lui stesso racconta: «nel lavoro, facevamo frese ed utensili per il legno, mi sono però di nuovo imbattuto in un dépliant di scambiatori a piastre. Lavorando quindi in un settore del tutto estraneo, l’aver progettato (avendone la conoscenza) e realizzato uno scambiatore a piastre, senza avere avuto a disposizione né presse né stampi, mi ha dato veramente la spinta per provarci».', 'technosystem' ),
		'section'  => 'agency_page_multinationals',
		'priority' => 3,
	]
);


// Certificates
new \Kirki\Section(
	'certificate_page',
	[
		'title'       => esc_html__( 'Certificate Page', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 13,
	]
);
// Slider Content
new \Kirki\Field\Repeater(
	[
		'settings' => 'certificate_page_slider',
		'label'    => esc_html__( 'Slider Content', 'technosystem' ),
		'section'  => 'certificate_page',
        'priority' => 1,
		'default'  => [
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Solutions to manage heat', 'technosystem' ),
				'slider_image'    => '',
			],
		],
		'fields'   => [
			'slider_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'BG Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Story
new \Kirki\Section(
	'certificate_page_story',
	[
		'title'       => esc_html__( 'Stroy', 'technosystem' ),
		'section'       => 'certificate_page',
        'priority'    => 1,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'certificate_page_story_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'certificate_page_story',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'certificate_page_story_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'La storia e l’idea', 'technosystem' ),
		'section'  => 'certificate_page_story',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_page_story_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Dopo un brevetto ottenuto nel 1982, nel 1983 nasce Techno System una società che, da allora, progetta, produce, collauda e vende scambiatori di calore a piastre in tutto il mondo. Dopo il prototipo del primo scambiatore dal nome ormai mitico di TS 500, l’azienda ha continuato a innovarsi e ad espandersi in questo settore, diventandone un leader riconosciuto. La brillante idea di Carlo Boccacci, grazie anche al suo grande entusiasmo e volontà, nel corso degli anni si è dimostrata effettivamente vincente.', 'technosystem' ),
		'section'  => 'certificate_page_story',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_page_story_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'La storia', 'technosystem' ),
		'section'  => 'certificate_page_story',
		'priority' => 4,
	]
);

// Certificate 1
new \Kirki\Section(
	'certificate_1',
	[
		'title'       => esc_html__( 'Certificate 1', 'technosystem' ),
		'section'       => 'certificate_page',
        'priority'    => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_1_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Le nostre certificazioni', 'technosystem' ),
		'section'  => 'certificate_1',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_1_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Certificazione', 'technosystem' ),
		'section'  => 'certificate_1',
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'certificate_1_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'technosystem' ),
		'section'  => 'certificate_1',
		'priority' => 3,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'certificate_1_story_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'certificate_1',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);

// Certificate 2
new \Kirki\Section(
	'certificate_2',
	[
		'title'       => esc_html__( 'Certificate 2', 'technosystem' ),
		'section'       => 'certificate_page',
        'priority'    => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_2_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Le nostre certificazioni', 'technosystem' ),
		'section'  => 'certificate_2',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_2_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Certificazione', 'technosystem' ),
		'section'  => 'certificate_2',
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'certificate_2_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'technosystem' ),
		'section'  => 'certificate_2',
		'priority' => 3,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'certificate_2_story_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'certificate_2',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
// Certificate 3
new \Kirki\Section(
	'certificate_3',
	[
		'title'       => esc_html__( 'Certificate 3', 'technosystem' ),
		'section'       => 'certificate_page',
        'priority'    => 4,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_3_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Le nostre certificazioni', 'technosystem' ),
		'section'  => 'certificate_3',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'certificate_3_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Certificazione', 'technosystem' ),
		'section'  => 'certificate_3',
		'priority' => 2,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'certificate_3_short_desc',
		'label'    => esc_html__( 'Short Description', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'technosystem' ),
		'section'  => 'certificate_3',
		'priority' => 3,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'certificate_3_story_img',
		'label'       => esc_html__( 'BG Image', 'technosystem' ),
		'section'     => 'certificate_3',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);

// Contact Page
new \Kirki\Section(
	'contact_page',
	[
		'title'       => esc_html__( 'Contact Page', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 14,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'contact_page_logo_img',
		'label'       => esc_html__( 'Logo', 'technosystem' ),
		'section'     => 'contact_page',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'contact_page_map_url',
		'label'    => esc_html__( 'Map URL', 'technosystem' ),
        'default'  => esc_html__( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3057.9257575011193!2d-105.16371908461778!3d39.96541257942013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876bf32fe7c4d345%3A0x3b1c98753ed160d3!2sVia%20Toscana!5e0!3m2!1sen!2sbd!4v1648872852034!5m2!1sen!2sbd', 'technosystem' ),
		'section'  => 'contact_page',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Scrivici per informazioni sui nostri prodotti e servizi. Compila il form con i dati richiesti e sarai ricontattato.', 'technosystem' ),
		'section'  => 'contact_page',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Seleziona la richiesta in base al tipo d’informazione che desideri ricevere. Invia il modulo compilato, sarai ricontattato quanto prima dal nostro responsabile incaricato.', 'technosystem' ),
		'section'  => 'contact_page',
		'priority' => 4,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_form_title',
		'label'    => esc_html__( 'Form Title', 'technosystem' ),
        'default'  => esc_html__( 'Seleziona la richiesta:', 'technosystem' ),
		'section'  => 'contact_page',
		'priority' => 5,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_form_code',
		'label'    => esc_html__( 'Form Short Code', 'technosystem' ),
        'default'  => '[contact-form-7 id="203" title="Contact Form 7"]',
		'section'  => 'contact_page',
		'priority' => 5,
	]
);

// Address
new \Kirki\Section(
	'contact_page_address',
	[
		'title'       => esc_html__( 'Address', 'technosystem' ),
		'section'       => 'contact_page',
        'priority'    => 1,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_address_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Techno System srl', 'technosystem' ),
		'section'  => 'contact_page_address',
		'priority' => 1,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_address_field_1',
		'label'    => esc_html__( 'Field 1', 'technosystem' ),
        'default'  => esc_html__( 'Via Toscana, 160 - 50052', 'technosystem' ),
		'section'  => 'contact_page_address',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_address_field_2',
		'label'    => esc_html__( 'Field 2', 'technosystem' ),
        'default'  => esc_html__( 'Certaldo (FI) Italia', 'technosystem' ),
		'section'  => 'contact_page_address',
		'priority' => 3,
	]
);

// Phone
new \Kirki\Section(
	'contact_page_phone',
	[
		'title'       => esc_html__( 'Phone', 'technosystem' ),
		'section'       => 'contact_page',
        'priority'    => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_phone_tel',
		'label'    => esc_html__( 'Tel', 'technosystem' ),
        'default'  => esc_html__( '+39 0571 667229', 'technosystem' ),
		'section'  => 'contact_page_phone',
		'priority' => 1,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_phone_fax',
		'label'    => esc_html__( 'Fax', 'technosystem' ),
        'default'  => esc_html__( '+39 0571 664414
		', 'technosystem' ),
		'section'  => 'contact_page_phone',
		'priority' => 2,
	]
);

// Skype
new \Kirki\Section(
	'contact_page_skype',
	[
		'title'       => esc_html__( 'skype', 'technosystem' ),
		'section'       => 'contact_page',
        'priority'    => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_skype_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Skype call', 'technosystem' ),
		'section'  => 'contact_page_skype',
		'priority' => 1,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_page_skype_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Skype chat, instant message
		', 'technosystem' ),
		'section'  => 'contact_page_skype',
		'priority' => 2,
	]
);

// More info
new \Kirki\Section(
	'contact_page_more',
	[
		'title'       => esc_html__( 'More Info', 'technosystem' ),
		'section'       => 'contact_page',
        'priority'    => 3,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'contact_page_more_repeater',
		'label'    => esc_html__( 'Helping Options', 'technosystem' ),
		'section'  => 'contact_page_more',
		'priority' => 5,
		'default'  => [
			[
				'contact_page_more_title' => esc_html__( 'Ufficio Commerciale', 'technosystem' ),
				'contact_page_more_sub_title' => esc_html__( 'sales@techno-system.it', 'technosystem' ),
			],
			[
				'contact_page_more_title' => esc_html__( 'Ufficio Commerciale', 'technosystem' ),
				'contact_page_more_sub_title' => esc_html__( 'sales@techno-system.it', 'technosystem' ),
			],
			[
				'contact_page_more_title' => esc_html__( 'Ufficio Commerciale', 'technosystem' ),
				'contact_page_more_sub_title' => esc_html__( 'sales@techno-system.it', 'technosystem' ),
			],
			[
				'contact_page_more_title' => esc_html__( 'Ufficio Commerciale', 'technosystem' ),
				'contact_page_more_sub_title' => esc_html__( 'sales@techno-system.it', 'technosystem' ),
			],
			[
				'contact_page_more_title' => esc_html__( 'Ufficio Commerciale', 'technosystem' ),
				'contact_page_more_sub_title' => esc_html__( 'sales@techno-system.it', 'technosystem' ),
			],
			
			
		],
		'fields'   => [
			'contact_page_more_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'contact_page_more_sub_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);

// Service Page
new \Kirki\Section(
	'service_page',
	[
		'title'       => esc_html__( 'Service Page', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 15,
	]
);
// Slider Content
new \Kirki\Field\Repeater(
	[
		'settings' => 'service_page_slider',
		'label'    => esc_html__( 'Slider Content', 'technosystem' ),
		'section'  => 'service_page',
        'priority' => 1,
		'default'  => [
			[
				'slider_title'   => esc_html__( 'Per progettisti -1', 'technosystem' ),
				'slider_sub_title'   => esc_html__( 'SERVIZI', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Per progettisti -2', 'technosystem' ),
				'slider_sub_title'   => esc_html__( 'SERVIZI', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Per progettisti -3', 'technosystem' ),
				'slider_sub_title'   => esc_html__( 'SERVIZI', 'technosystem' ),
				'slider_image'    => '',
			],

		],
		'fields'   => [
			'slider_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_sub_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'BG Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Problem
new \Kirki\Section(
	'service_page_problem',
	[
		'title'       => esc_html__( 'Problem Section', 'technosystem' ),
		'section'       => 'service_page',
        'priority'    => 1,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'service_page_problem_img',
		'label'       => esc_html__( 'Image', 'technosystem' ),
		'section'     => 'service_page_problem',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'service_page_problem_short_desc',
		'label'    => esc_html__( 'Map URL', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'technosystem' ),
		'section'  => 'service_page_problem',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_page_problem_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Accanto ai progettisti', 'technosystem' ),
		'section'  => 'service_page_problem',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_page_problem_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Servizi', 'technosystem' ),
		'section'  => 'service_page_problem',
		'priority' => 4,
	]
);
// Discover
new \Kirki\Section(
	'service_page_discover',
	[
		'title'       => esc_html__( 'Discover Section', 'technosystem' ),
		'section'       => 'service_page',
        'priority'    => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_page_discover_title',
		'label'    => esc_html__( 'Section Title', 'technosystem' ),
        'default'  => esc_html__( 'officia deserunt mollit anim id est laborum Scopri tutte le nostre risorse per i progettisti:', 'technosystem' ),
		'section'  => 'service_page_discover',
		'priority' => 3,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'service_page_discover_repeater',
		'label'    => esc_html__( 'Content', 'technosystem' ),
		'section'  => 'service_page_discover',
        'priority' => 1,
		'default'  => [
			[
				'title'   => esc_html__( 'Calcolare', 'technosystem' ),
				'short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'technosystem' ),
				'image'    => '',
				'icon_class'    => 'fal fa-calculator-alt',
				'button_url'    => '#',
				'button_text'    => 'Bottone',
			],
			[
				'title'   => esc_html__( 'Progettare', 'technosystem' ),
				'short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'technosystem' ),
				'image'    => '',
				'icon_class'    => 'fal fa-ruler-combined',
				'button_url'    => '#',
				'button_text'    => 'Bottone',
			],
			[
				'title'   => esc_html__( 'Preventivi', 'technosystem' ),
				'short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'technosystem' ),
				'image'    => '',
				'icon_class'    => 'fal fa-coins',
				'button_url'    => '#',
				'button_text'    => 'Bottone',
			],

		],
		'fields'   => [
			'title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'icon_class'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'short_desc'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'button_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'technosystem' ),
				'default'     => '',
			],
			'button_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button URL', 'technosystem' ),
				'default'     => '',
			],
			'image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Service Page 2
new \Kirki\Section(
	'service_page2',
	[
		'title'       => esc_html__( 'Service Page 2', 'technosystem' ),
		'panel'       => 'theme_options',
        'priority'    => 16,
	]
);
// Slider Content
new \Kirki\Field\Repeater(
	[
		'settings' => 'service_page2_slider',
		'label'    => esc_html__( 'Slider Content', 'technosystem' ),
		'section'  => 'service_page2',
        'priority' => 1,
		'default'  => [
			[
				'slider_title'   => esc_html__( 'Per progettisti -1', 'technosystem' ),
				'slider_sub_title'   => esc_html__( 'SERVIZI', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Per progettisti -2', 'technosystem' ),
				'slider_sub_title'   => esc_html__( 'SERVIZI', 'technosystem' ),
				'slider_image'    => '',
			],
			[
				'slider_title'   => esc_html__( 'Per progettisti -3', 'technosystem' ),
				'slider_sub_title'   => esc_html__( 'SERVIZI', 'technosystem' ),
				'slider_image'    => '',
			],

		],
		'fields'   => [
			'slider_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_sub_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'technosystem' ),
				'default'     => '',
			],
			'slider_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'BG Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Problem
new \Kirki\Section(
	'service_page2_problem',
	[
		'title'       => esc_html__( 'Problem Section', 'technosystem' ),
		'section'       => 'service_page2',
        'priority'    => 1,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'service_page2_problem_img',
		'label'       => esc_html__( 'Image', 'technosystem' ),
		'section'     => 'service_page2_problem',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'service_page2_problem_short_desc',
		'label'    => esc_html__( 'Map URL', 'technosystem' ),
        'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'technosystem' ),
		'section'  => 'service_page2_problem',
		'priority' => 2,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_page2_problem_title',
		'label'    => esc_html__( 'Title', 'technosystem' ),
        'default'  => esc_html__( 'Accanto ai progettisti', 'technosystem' ),
		'section'  => 'service_page2_problem',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_page2_problem_sub_title',
		'label'    => esc_html__( 'Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Servizi', 'technosystem' ),
		'section'  => 'service_page2_problem',
		'priority' => 4,
	]
);
// Discover
new \Kirki\Section(
	'service_page2_discover',
	[
		'title'       => esc_html__( 'Discover Section', 'technosystem' ),
		'section'       => 'service_page2',
        'priority'    => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_page2_discover_title',
		'label'    => esc_html__( 'Section Title', 'technosystem' ),
        'default'  => esc_html__( 'officia deserunt mollit anim id est laborum Scopri tutte le nostre risorse per i progettisti:', 'technosystem' ),
		'section'  => 'service_page2_discover',
		'priority' => 3,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'service_page2_discover_repeater',
		'label'    => esc_html__( 'Content', 'technosystem' ),
		'section'  => 'service_page2_discover',
        'priority' => 1,
		'default'  => [
			[
				'title'   => esc_html__( 'Calcolare', 'technosystem' ),
				'short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'technosystem' ),
				'image'    => '',
				'icon_class'    => 'fal fa-calculator-alt',
				'button_url'    => '#',
				'button_text'    => 'Link',
			],
			[
				'title'   => esc_html__( 'Progettare', 'technosystem' ),
				'short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'technosystem' ),
				'image'    => '',
				'icon_class'    => 'fal fa-ruler-combined',
				'button_url'    => '#',
				'button_text'    => 'Link',
			],
			[
				'title'   => esc_html__( 'Preventivi', 'technosystem' ),
				'short_desc'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'technosystem' ),
				'image'    => '',
				'icon_class'    => 'fal fa-coins',
				'button_url'    => '#',
				'button_text'    => 'Link',
			],

		],
		'fields'   => [
			'title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'icon_class'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'short_desc'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'button_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'technosystem' ),
				'default'     => '',
			],
			'button_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button URL', 'technosystem' ),
				'default'     => '',
			],
			'image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Header
new \Kirki\Section(
	'header_section',
    [
        'title'       => esc_html__( 'Header Section', 'technosystem' ),
        'panel'       => 'theme_options',
        'priority'    => 15,
    ]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'header_section_logo',
		'label'       => esc_html__( 'Logo', 'technosystem' ),
		'section'     => 'header_section',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_section_phone',
		'label'    => esc_html__( 'Phone', 'technosystem' ),
        'default'  => esc_html__( '+39 0571 667229', 'technosystem' ),
		'section'  => 'header_section',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_section_email',
		'label'    => esc_html__( 'Email', 'technosystem' ),
        'default'  => esc_html__( 'info@techno-system.it', 'technosystem' ),
		'section'  => 'header_section',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_section_login_url',
		'label'    => esc_html__( 'Login URL', 'technosystem' ),
        'default'  => esc_html__( '#', 'technosystem' ),
		'section'  => 'header_section',
		'priority' => 3,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_section_app_url',
		'label'    => esc_html__( 'App URL', 'technosystem' ),
        'default'  => esc_html__( '#', 'technosystem' ),
		'section'  => 'header_section',
		'priority' => 3,
	]
);
// Footer section
new \Kirki\Section(
	'footer_section',
    [
        'title'       => esc_html__( 'Footer Section', 'technosystem' ),
        'panel'       => 'theme_options',
        'priority'    => 15,
    ]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'footer_section_logo',
		'label'       => esc_html__( 'Logo', 'technosystem' ),
		'section'     => 'footer_section',
		'default'     => '',
		'priority'    => 1,
		'choices'     => [
			'save_as' => 'url',
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'footer_section_about',
		'label'    => esc_html__( 'About us', 'technosystem' ),
        'default'  => esc_html__( 'Significantly pushed und the frugal lemur one and meretricious lucrative inside before swept magnificently expand our Industries via. Lorem ipsum dolor sit amet adipscing.', 'technosystem' ),
		'section'  => 'footer_section',
		'priority' => 3,
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'footer_social',
		'label'    => esc_html__( 'Social', 'technosystem' ),
		'section'  => 'footer_section',
        'priority' => 1,
		'default'  => [
			[
				'icon_class'    => 'fab fa-facebook-f',
				'button_url'    => '#',
			],
			[
				'icon_class'    => 'fab fa-linkedin-in',
				'button_url'    => '#',
			],
			[
				'icon_class'    => 'fab fa-twitter',
				'button_url'    => '#',
			],

		],
		'fields'   => [
			'icon_class'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
			'button_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'URL', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'footer_contact',
		'label'    => esc_html__( 'Footer Contacts', 'technosystem' ),
		'section'  => 'footer_section',
        'priority' => 3,
		'default'  => [
			[
				'title'    => 'Techno System srl',
				'sub_title'    => 'Via Toscana, 160 - 50052 Certaldo (FI) Italia',
				'icon_class'    => 'fas fa-map-marker-alt',
			],
			[
				'title'    => '
				Tel: +39 0571 667229',
				'sub_title'    => 'Fax: +39 0571 664414',
				'icon_class'    => 'fal fa-phone',
			],
			[
				'title'    => 'Skype call',
				'sub_title'    => 'Skype chat, instant message',
				'icon_class'    => 'fab fa-skype',
			],

		],
		'fields'   => [
			'title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'technosystem' ),
				'default'     => '',
			],
			'sub_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'technosystem' ),
				'default'     => '',
			],
			'icon_class'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon Class', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
// Footer Contact
new \Kirki\Field\Repeater(
	[
		'settings' => 'footer_menu',
		'label'    => esc_html__( 'Footer Menu', 'technosystem' ),
		'section'  => 'footer_section',
        'priority' => 4,
		'default'  => [
			[
				'menu_title'    => 'Azienda',
				'button_url'    => '#',
			],
			[
				'menu_title'    => 'Prodotti',
				'button_url'    => '#',
			],
			[
				'menu_title'    => 'Servizio',
				'button_url'    => '#',
			],
			[
				'menu_title'    => 'Strumenti',
				'button_url'    => '#',
			],
			[
				'menu_title'    => 'News',
				'button_url'    => '#',
			],
			[
				'menu_title'    => 'Contatti',
				'button_url'    => '#',
			],

		],
		'fields'   => [
			'menu_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Menu Title', 'technosystem' ),
				'default'     => '',
			],
			'button_url'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Menu URL', 'technosystem' ),
				'default'     => '',
			],
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'footer_copyright',
		'label'    => esc_html__( 'Copyright 1', 'technosystem' ),
        'default'  => esc_html__( 'Techno System Via Toscana, 160 - 50052 Certaldo (FI) Italia', 'technosystem' ),
		'section'  => 'footer_section',
		'priority' => 10,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'footer_copyright_1',
		'label'    => esc_html__( 'Copyright 2', 'technosystem' ),
        'default'  => esc_html__( 'P.IVA 03352720480 - Privacy - Cookie - Dati societari - Credits', 'technosystem' ),
		'section'  => 'footer_section',
		'priority' => 11,
	]
);
//Newsletter
new \Kirki\Field\Textarea(
	[
		'settings' => 'newsletter_title',
		'label'    => esc_html__( 'Newsletter Title', 'technosystem' ),
        'default'  => esc_html__( 'Subscribe Newsletter', 'technosystem' ),
		'section'  => 'footer_section',
		'priority' => 12,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'newsletter_subtitle',
		'label'    => esc_html__( 'Newsletter Sub Title', 'technosystem' ),
        'default'  => esc_html__( 'Please let us know if you have any any questions', 'technosystem' ),
		'section'  => 'footer_section',
		'priority' => 13,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'newsletter_form',
		'label'    => esc_html__( 'Shortcode', 'technosystem' ),
        'default'  => esc_html__( '[mc4wp_form id="195"]', 'technosystem' ),
		'section'  => 'footer_section',
		'priority' => 13,
	]
);