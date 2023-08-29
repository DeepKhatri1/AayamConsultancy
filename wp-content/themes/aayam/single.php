<?php get_header(); ?>









        <section class="sc-main-banner bg-property bg-overlay-transparent position-relative"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png');height: 50vh;">
        </section>
        <section class="sc-single-items pt-5">
            <div class="container">


                <?php
                while (have_posts()) :
                    the_post();

                    $singlepageID = get_the_ID();
                ?>


                <div class="row">
                    <div class="col-lg-8 col-md-9 ms-auto">
                        <div class="single-item-wrapper">

                                <?php
                                $published_date = get_the_date('F j, Y');
                                ?>

                            <p class="m-0 date p-text-sm font-display text-black op-06"><?php echo $published_date; ?></p>
                            <h1 class="sc-title mb-3 mt-1 text-black"><?php the_title(); ?></h1>
                            <div class="single-news-img my-3">
                                <div class="img-cover">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
                            <div class="desc-b">
                                <?php the_content(); ?>
                            </div>
                            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 mt-3 mt-md-0 text-center">
                        <div class="social-media-links">
                            <ul class="social-media w-100 text-center d-flex justify-content-between flex-md-column">
                                <li class="medial-item mx-2 mx-md-0  mb-3"><a href="" class="media-link p-text-xx-lg text-black font-display"><span>Share</a></li>
                                
                                <?php if (get_theme_mod('facebook_link')) : ?>
                                    <li class="medial-item mx-2 mx-md-0">
                                        <a href="<?php echo esc_url(get_theme_mod('facebook_link')); ?>" class="media-link p-text-xx-lg text-cobalt-blue font-display">
                                            <span><i class="fa-brands fa-facebook"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                
                                <?php if (get_theme_mod('instagram_link')) : ?>
                                    <li class="medial-item mx-2 mx-md-0">
                                        <a href="<?php echo esc_url(get_theme_mod('instagram_link')); ?>" class="media-link p-text-xx-lg text-cobalt-blue font-display">
                                            <span><i class="fa-brands fa-instagram"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_theme_mod('tiktok_link')) : ?>
                                    <li class="medial-item mx-2 mx-md-0">
                                        <a href="<?php echo esc_url(get_theme_mod('tiktok_link')); ?>" class="media-link p-text-xx-lg text-cobalt-blue font-display">
                                            <span><i class="fa-brands fa-tiktok"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_theme_mod('youtube_link')) : ?>
                                    <li class="medial-item mx-2 mx-md-0">
                                        <a href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>" class="media-link p-text-xx-lg text-cobalt-blue font-display">
                                            <span><i class="fa-brands fa-youtube"></i></span>
                                        </a>
                                    </li>
                                <?php endif; ?>


                            </ul>
                        </div>
                    </div>
                </div>

                <?php

                endwhile;
                wp_reset_postdata();
                ?>

<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>

            </div>
        </section>













<?php get_footer(); ?>