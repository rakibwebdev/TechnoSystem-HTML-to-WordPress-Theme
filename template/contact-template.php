<?php
/*
* Template Name: Contact Page
*/
get_header();
$contact_page_map_url = Kirki::get_option( 'contact_page_map_url');

$contact_page_logo_img = Kirki::get_option( 'contact_page_logo_img');

$contact_page_address_title = Kirki::get_option( 'contact_page_address_title');
$contact_page_address_field_1 = Kirki::get_option( 'contact_page_address_field_1');
$contact_page_address_field_2 = Kirki::get_option( 'contact_page_address_field_2');

$contact_page_phone_tel = Kirki::get_option( 'contact_page_phone_tel');
$contact_page_phone_fax = Kirki::get_option( 'contact_page_phone_fax');

$contact_page_skype_title = Kirki::get_option( 'contact_page_skype_title');
$contact_page_skype_sub_title = Kirki::get_option( 'contact_page_skype_sub_title');

$contact_page_more_repeater = Kirki::get_option( 'contact_page_more_repeater');

$contact_page_title = Kirki::get_option( 'contact_page_title');
$contact_page_sub_title = Kirki::get_option( 'contact_page_sub_title');
$contact_page_form_title = Kirki::get_option( 'contact_page_form_title');
$contact_page_form_code = Kirki::get_option( 'contact_page_form_code');
?>
    <!-- map Banner -->
    <section class="destinationMap">
        <div class="responsive-map">
            <iframe
                src="<?php echo $contact_page_map_url?>"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--  map Banner  -->

    <!--  information  -->
    <section class="info">
        <div class="container-fluid px-xl-0 mx-xl-0">
            <div class="row">
                <div class="col-xl-4 px-5" style="background-color:#f5f5f5">
                    <div class="py-5 ">
                        <img src="<?php echo $contact_page_logo_img; ?>" class="ms-auto d-flex mb-5 mt-5" alt="">
                        <div class="info-content pt-4">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <div class="contact">
                                    <h5 class="info-title mb-0">
                                        <?php echo $contact_page_address_title;?>
                                    </h5>
                                    <p class="info-pra mb-0"><?php echo $contact_page_address_field_1;?></p>
                                    <p class="info-pra"><?php echo $contact_page_address_field_2;?></p>
                                </div>
                                <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.5299 12.4201L13.0799 10.9701L14.4799 9.57005C14.7699 9.28005 14.7699 8.80005 14.4799 8.51005C14.1899 8.22005 13.7099 8.22005 13.4199 8.51005L12.0199 9.91005L10.5699 8.46005C10.2799 8.17005 9.79994 8.17005 9.50994 8.46005C9.21994 8.75005 9.21994 9.23005 9.50994 9.52005L10.9599 10.9701L9.46994 12.4601C9.17994 12.7501 9.17994 13.2301 9.46994 13.5201C9.61994 13.6701 9.80994 13.7401 9.99994 13.7401C10.1899 13.7401 10.3799 13.6701 10.5299 13.5201L12.0199 12.0301L13.4699 13.4801C13.6199 13.6301 13.8099 13.7001 13.9999 13.7001C14.1899 13.7001 14.3799 13.6301 14.5299 13.4801C14.8199 13.1901 14.8199 12.7201 14.5299 12.4201Z"
                                            fill="#D1001F" />
                                        <path opacity="0.4"
                                            d="M20.62 8.7C19.58 4.07 15.54 2 12 2C12 2 12 2 11.99 2C8.45999 2 4.42999 4.07 3.37999 8.69C2.19999 13.85 5.35999 18.22 8.21999 20.98C9.27999 22 10.64 22.51 12 22.51C13.36 22.51 14.72 22 15.77 20.98C18.63 18.22 21.79 13.86 20.62 8.7Z"
                                            fill="#D1001F" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="info-content pt-4">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <div>
                                    <a href="tel:<?php echo $contact_page_phone_tel?>" class="info-pra mb-0 d-block">Tel: <?php echo $contact_page_phone_tel?>
                                    </a>
                                    <a href="fax:<?php echo $contact_page_phone_fax; ?>" class="info-pra mb-0">Fax: <?php echo $contact_page_phone_fax; ?> </a>
                                </div>
                                <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" fill="#D1001F" />
                                        <path opacity="0.4"
                                            d="M11.79 14.21L8.52 17.48C8.16 17.16 7.81 16.83 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.09 13.57 11.44 13.91 11.79 14.21Z"
                                            fill="#292D32" />
                                        <path
                                            d="M21.9701 18.33C21.9701 18.61 21.9201 18.9 21.8201 19.18C21.7901 19.26 21.7601 19.34 21.7201 19.42C21.5501 19.78 21.3301 20.12 21.0401 20.44C20.5501 20.98 20.0101 21.37 19.4001 21.62C19.3901 21.62 19.3801 21.63 19.3701 21.63C18.7801 21.87 18.1401 22 17.4501 22C16.4301 22 15.3401 21.76 14.1901 21.27C13.0401 20.78 11.8901 20.12 10.7501 19.29C10.3601 19 9.9701 18.71 9.6001 18.4L12.8701 15.13C13.1501 15.34 13.4001 15.5 13.6101 15.61C13.6601 15.63 13.7201 15.66 13.7901 15.69C13.8701 15.72 13.9501 15.73 14.0401 15.73C14.2101 15.73 14.3401 15.67 14.4501 15.56L15.2101 14.81C15.4601 14.56 15.7001 14.37 15.9301 14.25C16.1601 14.11 16.3901 14.04 16.6401 14.04C16.8301 14.04 17.0301 14.08 17.2501 14.17C17.4701 14.26 17.7001 14.39 17.9501 14.56L21.2601 16.91C21.5201 17.09 21.7001 17.3 21.8101 17.55C21.9101 17.8 21.9701 18.05 21.9701 18.33Z"
                                            fill="#292D32" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <div class="info-content pt-4 mb-3">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <div>
                                    <p class="info-pra mb-0"><?php echo $contact_page_skype_title; ?> </p>
                                    <p class="info-pra"><?php echo $contact_page_skype_sub_title; ?> </p>
                                </div>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="36" height="33" viewBox="0 0 36 33">
                                        <text id="_" data-name="" fill="#d1001f" font-size="30"
                                            font-family="FontAwesome5BrandsRegular, 'Font Awesome \35  Brands'">
                                            <tspan x="4.875" y="26"></tspan>
                                        </text>
                                    </svg>


                                </div>
                            </div>
                        </div>
                        <?php foreach($contact_page_more_repeater as $item): ?>
                        <div class="info-content pt-5">
                            <div class="d-flex align-items-center justify-content-end gap-3">
                                <div>
                                    <h5 class="info-title mb-0">
                                    <?php echo $item['contact_page_more_title']; ?>

                                    </h5>
                                    <a href="mailto:<?php echo $item['contact_page_more_sub_title']; ?>" class="info-pra mb-0"><?php echo $item['contact_page_more_sub_title']; ?>
                                    </a>
                                </div>
                                <div><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.37 8.87988H17.62" stroke="#D1001F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.38 8.87988L7.13 9.62988L9.38 7.37988" stroke="#D1001F"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.37 15.8799H17.62" stroke="#D1001F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.38 15.8799L7.13 16.6299L9.38 14.3799" stroke="#D1001F"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                            stroke="#D1001F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="tab-information ps-5 mt-5">
                        <h2 class="tab-title mb-4"><?php echo $contact_page_title; ?></h2>
                        <p class="tab-pra mb-5"><?php echo $contact_page_sub_title; ?></p>
                        <h3 class="info-subtitle"><?php echo $contact_page_form_title; ?></h3>

                        <div class="tab-wrapper mt-5">
                        <?php echo do_shortcode($contact_page_form_code); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  information  -->
<?php
get_footer();