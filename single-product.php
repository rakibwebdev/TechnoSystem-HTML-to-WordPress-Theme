<?php
get_header();
?>
    
    <!-- product info -->
    <section class="productSelection py-5" style="background-color: #F5F5F5;">
        <div class="container">
            <?php echo do_shortcode( '[searchandfilter fields="search,product_cat,product_tag"]' ); ?>
        </div>
    </section>
    <!-- product info -->
    <?php while(have_posts()): the_post(); ?>
    <!-- product description -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="description-wrapper">
                <div class="row align-items-center" >
                    <div class="col-xl-6">

                        <div id="slider" class="owl-carousel product-slider">
                            <?php $image_lists = get_field('image_gallery');
                            foreach ($image_lists as $image_list) { 
                            ?>
                            <div class="item">
                                <img class="mx-auto" src="<?php echo $image_list['image']; ?>" alt="<?php echo $image_list['alt']; ?>" />
                            </div>
                            <?php } ?>
                        </div>

                        <div id="thumb" class="owl-carousel product-thumb">
                            <?php
                            foreach ($image_lists as $image_list) { ?>
                            <div class="item">
                            <img src="<?php echo $image_list['image']; ?>" alt="<?php echo $image_list['alt']; ?>" />
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-xl-6">

                     <div class="">
                            <!--/ breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb py-5 mb-0  d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
                            </ol>
                        </nav>
                        <!--/ breadcrumb -->


                        <div class="sec-title-area  border-start ps-5">
                            <span class="sec-sub-tile fw-400"><?php the_field('sub_title');?></span>
                            <h2 class="sec-title fw-700">
                                <?php echo get_the_title();?>
                            </h2>
                            <p class="sec-description fw-400">
                                <?php echo get_the_content();?>

                            </p>

                            <div class="d-flex align-items-center gap-5">
                                <div class="border-end pe-5">
                                    <div class="edge-card-caption">
                                        <h4 class="product-subheading mb-0">
                                            Applicazioni
                                        </h4>
                                    </div>
                                    <div>

                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                stroke="#D1001F" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                                stroke="#D1001F" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="">
                                        <?php the_field('applications');?>

                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <div class="edge-card-caption">
                                        <h4 class="product-subheading mb-0">
                                            Settore
                                        </h4>
                                    </div>
                                    <div>

                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                stroke="#D1001F" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                                stroke="#D1001F" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="">
                                        <?php the_field('sector');?>

                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-5 mt-5">
                                <button
                                    class=" product-description-btn dflex align-items-center justify-content-center">
                                    <span><svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z"
                                                fill="#292D32" />
                                            <path
                                                d="M12 15.12C13.7231 15.12 15.12 13.7231 15.12 12C15.12 10.2769 13.7231 8.88 12 8.88C10.2769 8.88 8.88 10.2769 8.88 12C8.88 13.7231 10.2769 15.12 12 15.12Z"
                                                fill="#292D32" />
                                            <path
                                                d="M12.75 2V4.04H12.74C12.5 4.01 12.25 4 12 4C11.75 4 11.5 4.01 11.26 4.04H11.25V2C11.25 1.59 11.59 1.25 12 1.25C12.41 1.25 12.75 1.59 12.75 2Z"
                                                fill="#292D32" />
                                            <path
                                                d="M4 12C4 12.25 4.01 12.51 4.04 12.75H2C1.59 12.75 1.25 12.41 1.25 12C1.25 11.59 1.59 11.25 2 11.25H4.04C4.01 11.49 4 11.75 4 12Z"
                                                fill="#292D32" />
                                            <path
                                                d="M12.75 19.96V22C12.75 22.41 12.41 22.75 12 22.75C11.59 22.75 11.25 22.41 11.25 22V19.96H11.26C11.5 19.99 11.75 20 12 20C12.25 20 12.5 19.99 12.74 19.96H12.75Z"
                                                fill="#292D32" />
                                            <path
                                                d="M22.75 12C22.75 12.41 22.41 12.75 22 12.75H19.96C19.99 12.51 20 12.25 20 12C20 11.75 19.99 11.49 19.96 11.25H22C22.41 11.25 22.75 11.59 22.75 12Z"
                                                fill="#292D32" />
                                        </svg>
                                    </span>
                                    <?php the_field('data_sheet');?>
                                </button>
                                <button
                                    class=" product-description-btn dflex align-items-center justify-content-center">
                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M21.37 11.39V17.38C21.37 20.14 19.13 22.38 16.37 22.38H7.63C4.87 22.38 2.63 20.14 2.63 17.38V11.46C3.39 12.28 4.47 12.75 5.64 12.75C6.9 12.75 8.11 12.12 8.87 11.11C9.55 12.12 10.71 12.75 12 12.75C13.28 12.75 14.42 12.15 15.11 11.15C15.88 12.14 17.07 12.75 18.31 12.75C19.52 12.75 20.62 12.26 21.37 11.39Z"
                                                fill="#292D32" />
                                            <path
                                                d="M14.99 1.25H8.99L8.25 8.61C8.19 9.29 8.29 9.93 8.54 10.51C9.12 11.87 10.48 12.75 12 12.75C13.54 12.75 14.87 11.89 15.47 10.52C15.65 10.09 15.76 9.59 15.77 9.08V8.89L14.99 1.25Z"
                                                fill="#292D32" />
                                            <path opacity="0.6"
                                                d="M22.36 8.27L22.07 5.5C21.65 2.48 20.28 1.25 17.35 1.25H13.51L14.25 8.75C14.26 8.85 14.27 8.96 14.27 9.15C14.33 9.67 14.49 10.15 14.73 10.58C15.45 11.9 16.85 12.75 18.31 12.75C19.64 12.75 20.84 12.16 21.59 11.12C22.19 10.32 22.46 9.31 22.36 8.27Z"
                                                fill="#292D32" />
                                            <path opacity="0.6"
                                                d="M6.58999 1.25C3.64999 1.25 2.28999 2.48 1.85999 5.53L1.58999 8.28C1.48999 9.35 1.77999 10.39 2.40999 11.2C3.16999 12.19 4.33999 12.75 5.63999 12.75C7.09999 12.75 8.49999 11.9 9.20999 10.6C9.46999 10.15 9.63999 9.63 9.68999 9.09L10.47 1.26H6.58999V1.25Z"
                                                fill="#292D32" />
                                            <path
                                                d="M11.35 16.66C10.08 16.79 9.12 17.87 9.12 19.15V22.38H14.87V19.5C14.88 17.41 13.65 16.42 11.35 16.66Z"
                                                fill="#292D32" />
                                        </svg>

                                    </span>
                                    <?php the_field('data_sheet_2');?>
                                </button>
                            </div>

                            <div
                                class="faqBar descriptionMore d-flex gap-3 align-items-center justify-content-start mb-3 mt-5 pb-5">
                                <h5 class="mb-0">Cerca ricambi</h5>
                                <img src="assets/images/arrow-down.svg" alt="">
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product description -->

    <!-- product Specification -->
    <section class="table-specificaion pt-5 pb-5 position-relative" style="background-color: #F5F5F5;">
      
        <div class="container">
            <a href="#" class="icon bg-danger text-center mx-auto d-flex align-items-center position-absolute">
              <i class="fal fa-cog"></i>
            </a>
            <div class="border-red pb-4">
                <div class="specification-heading" style="max-width:354px; width: 100%;">
                    <h2 class="productSelectTitle mb-0">Caratteristiche tecniche:</h2>
                </div>
                <div class="">
                    <table class="table mt-4">
                        <tbody>
                            <tr>
                                <td class="table-specification-heading">Applicazioni</td>
                                <td class="table-specification-details"> <?php the_field('technical_features_applications');?></td>
                            </tr>
                            <tr>
                                <td class="table-specification-heading">Portata max.</td>
                                <td class="table-specification-details"> <?php the_field('max_flow');?></td>
                            </tr>
                            <tr>
                                <td class="table-specification-heading">Numero di piastre max.</td>
                                <td class="table-specification-details"><?php the_field('number_of_plates_max');?></td>
                            </tr>
                            <tr>
                                <td class="table-specification-heading border-0">Telaio</td>
                                <td class="table-specification-details  border-0"><?php the_field('chassis');?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pb-4 mt-5">
                <div class="specification-heading" style="max-width:354px; width: 100%;">
                    <h2 class="productSelectTitle mb-0">Materiali</h2>
                </div>
                <div class="">
                    <table class="table mt-4">
                        <tbody>
                            <tr>
                                <td class="table-specification-heading">Telaio</td>
                                <td class="table-specification-details"><?php the_field('materials_chassis');?> </td>
                            </tr>
                            <tr>
                                <td class="table-specification-heading">Piastre</td>
                                <td class="table-specification-details"><?php the_field('plates');?></td>
                            </tr>
                            <tr>
                                <td class="table-specification-heading">Guarnizioni</td>
                                <td class="table-specification-details"><?php the_field('gaskets');?></td>
                            </tr>
                            <tr>
                                <td class="table-specification-heading border-0">Connessioni</td>
                                <td class="table-specification-details  border-0"><?php the_field('connections');?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- product Specification -->

    <!--case history -->
    <div class="caseHistory section-padding">
        <div class="container">
            <div class="sec-title-area pe-4">
                <span class="sec-sub-tile fw-400 text-end ms-5 mt-5">Riscaldae</span>
                <h4 class="sec-title fw-700 ms-5">Case history</h4>
            </div>

        </div>
        <div class="caseWrapper">
            <div class="row">
                <?php $history_lists = get_field('case_history');
                foreach ($history_lists as $list) { 
                ?>
                <div class="col-xl-4">
                    <a href="" class="history-content text-decoration-none d-block position-relative">
                        <img src="<?php echo $list['image'] ?>" alt="" class="img-fluid">
                        <div class="position-absolute bottom-0 start-0">
                            <div class="d-flex align-items-end">
                                <div class="hoverContent ">
                                    <div class="py-4 px-4 bg-gray ">
                                        <h2><?php echo $list['title'] ?></h2>
                                        <p><?php echo $list['content'] ?></p>
                                    </div>
                                </div>
                                <div class="icon bg-danger text-center mx-auto d-flex align-items-center">
                                    <i class="far fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--/ case history  -->

    <!--faq  -->
    <section class="solution-section section-padding pt-4  mb-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="solution-content">
                <div class="sec-title-area  text-start">

                    <span class="sec-sub-tile fw-400">TSC 510</span>
                    <h2 class="sec-title fw-700">
                        FAQ <br class="d-inline">Frequently Asked Question
                    </h2>


                    <div class="accordion mt-5">
                        <ul class="accordion-list list-unstyled">
                            <?php $faq_lists = get_field('faq');
                            $count = 0;
                            foreach ($faq_lists as $list) {
                            ?>
                            <li class="accordion-list-item  <?php if($count == 0 ): 
                                echo 'open';
                                endif;?>">
                                <h5 class="accordion-title d-flex justify-content-between mb-0">
                                    <?php echo $list['title']; ?>
                                    <span>
                                        <img src="<?php THEME_URI . 'assets/images/arrow-down.svg'?>" class="img-fluid" alt="">
                                    </span>
                                </h5>
                                <div class="accordion-desc">
                                    <p class="pe-5 pt-3">
                                    <?php echo $list['content']; ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                            $count++;
                             } ?>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="solution-image">
                <img src="assets/images/serviceSite.png" class="img-fluid w-100" alt="">
            </div>
        </div>
    </section>
    <!--/faq  -->

    <!-- review -->
    <section class="reviewCarousel">
        <div class="container">

            <div class="reviewCarousels owl-carousel owl-theme">
                <?php $review_lists = get_field('review');
                foreach ($review_lists as $list) {
                ?>
                <div class="reviewItem">
                    <img src="<?php echo $list['quote'] ?>" alt="" class="img-fluid" />
                    <div>
                        <p><?php echo $list['content'] ?></p>
                        </p>
                        <div class="member-info d-flex gap-3 align-items-center">
                            <img src="<?php echo $list['avatar'] ?>" class="img-fluid" alt="">
                            <div>
                                <h4 class="mb-0"><?php echo $list['name'] ?></h4>
                                <p class="fs-5"><?php echo $list['company'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </section>
    <!--/ review -->
    <?php endwhile; ?>
<?php
get_footer();
