<?php get_header();
/* 
*
* Template Name: Contact Us
*
*/
?>









<section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">Contact</h1>
            </div>
        </section>
        <section class="sc-contacts mt-3 py-5">
            <div class="container">
                <p class="text-berkeley-blue p-text-sm mb-0 font-display w-fit mx-auto">Contact Us</p>
                <h1 class="sc-title my-3 text-cobalt-blue w-fit mx-auto">Aayam Education Visa Services</h1>
                <div class="row mt-5">
                    <div class="col-lg-6 pb-4 text-center head-office mb-3 mb-lg-0">
                        <div class="contact-item">
                            <p class="box-title w-fit mx-auto mb-3 p-text-sm font-display text-cobalt-blue">Nepal Office
                            </p>
                            <p class="text-black font-display w-fit mb-0 mx-auto p-text-md"><?php echo get_theme_mod('nepal_location'); ?></p>
                            <p class="text-black w-fit mx-auto p-text-sm mb-0"><span class="font-display">Contact Number
                                    :</span><span><?php echo get_theme_mod('nepal_number'); ?></span></p>
                            <p class="text-black w-fit mx-auto p-text-sm mb-0"><span class="font-display">Email
                                    :</span><span><?php echo get_theme_mod('email');?></span></p>
                            <div class="google-map-link mt-4 p-4 mx-auto d-flex align-items-center justify-content-between">
                                <div class="map-logo">
                                    <div class="img-cover h-100">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/_contact-page/map-icon.png" alt="">
                                    </div>
                                </div>
                                <a href="<?php echo get_theme_mod('nepal_location_map') ?>" class="map-link" style="cursor: pointer;" target="_blank" >
                                    <div class="link-container d-flex align-items-center justify-content-start">
                                        <p class="m-0 me-3 font-display p-text-sm icon text-white"><i class="fa-solid fa-angle-right"></i></p>
                                        <p class="m-0 text-cobalt-blue font-display p-text-md">Google Map</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-item">
                            <p class="box-title w-fit mx-auto mb-3 p-text-sm font-display text-cobalt-blue">Canada Office</p>
                            <p class="text-black font-display w-fit mb-0 mx-auto p-text-md"><?php echo get_theme_mod('canada_location'); ?></p>
                            <p class="text-black w-fit mx-auto p-text-sm mb-0"><span class="font-display">Tel
                                    :</span><span><?php echo get_theme_mod('canada_number'); ?></span></p>
                            <p class="text-black w-fit mx-auto p-text-sm mb-0"><span class="font-display">Email
                                    :</span><span><?php echo get_theme_mod('canada_email');?></span></p>
                            <div class="google-map-link mt-4 p-4 mx-auto d-flex align-items-center justify-content-between">
                                <div class="map-logo">
                                    <div class="img-cover h-100">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pages/_contact-page/map-icon.png" alt="">
                                    </div>
                                </div>
                                <a href="<?php echo get_theme_mod('canada_location_map') ?>" class="map-link" style="cursor: pointer;" target="_blank">
                                    <div class="link-container d-flex align-items-center justify-content-start">
                                        <p class="m-0 me-3 font-display p-text-sm icon text-white d-flex align-items-center justify-content-center"><i class="fa-solid fa-angle-right"></i></p>
                                        <p class="m-0 text-cobalt-blue font-display p-text-md">Google Map</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


















<?php get_footer(); ?>