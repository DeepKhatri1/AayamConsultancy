<?php get_header();
/* 
*
* Template Name: Intake
*
*/
?>


        <section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">
                    <?php
                    $page_id=205;
                    $page_title=get_the_title($page_id);
                    echo $page_title;
                    ?>
                </h1>
            </div>
        </section>
        <section class="sc-guides py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="h-100">
                            <?php 
                            $page_id=205;
                             ?>
                            <h1 class="sc-title"><?php echo get_post_meta(205, 'title_', true); ?>
                            </h1>
                            <div class="desc-b my-4">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </section>
        <section class="sc-intakes bg-property" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/_intake-page/sc-bg-img.png');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="intake-wrapper">
                            <h2 class="text-white p-text-xx-lg font-display mb-3">Major Intakes In Canada 2023?</h2>
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="item-wrapper rounded bg-white p-4">
                                        <p class="text-oxford-blue mb-2 font-display"><?php echo get_theme_mod('one_intake_title') ?></p>
                                        <p class="fw-6 text-black m-0"><?php echo get_theme_mod('one_intake_time') ?></p>
                                        <p class="m-0"><?php echo get_theme_mod('one_intake_months') ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4  mb-4">
                                    <div class="item-wrapper rounded bg-white p-4">
                                        <p class="text-oxford-blue mb-2 font-display"><?php echo get_theme_mod('two_intake_title') ?></p>
                                        <p class="fw-6 text-black m-0"><?php echo get_theme_mod('two_intake_time') ?></p>
                                        <p class="m-0"><?php echo get_theme_mod('two_intake_months') ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4  mb-4">
                                    <div class="item-wrapper rounded bg-white p-4">
                                        <p class="text-oxford-blue mb-2 font-display"><?php echo get_theme_mod('three_intake_title') ?></p>
                                        <p class="fw-6 text-black m-0"><?php echo get_theme_mod('third_intake_time') ?></p>
                                        <p class="m-0"><?php echo get_theme_mod('third_intake_months') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-sm-block d-none">
                        <div class="img-wrapper">
                            <div class="img-cover">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<?php get_footer(); ?>