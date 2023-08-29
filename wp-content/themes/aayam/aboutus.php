<?php get_header();
/* 
*
* Template Name: About Us
*
*/
?>



        <section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">About Us</h1>
            </div>
        </section>
        <section class="sc-about py-5">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="abt-content">
                            <h1 class="sc-title mb-4"><?php echo get_post_meta(217, 'title_', true); ?></h1>
                            <div class="desc-b">
                                <?php the_content(); ?>
                            </div>
                            <ul class="nav about-tab nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item mb-4" role="presentation">
                                    <button class="nav-link p-text-md font-display active" id="mission-tab"
                                        data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab"
                                        aria-controls="mission" aria-selected="true">
                                        <?php
                                        $page_id=269;
                                        $page_title=get_the_title($page_id);
                                        echo $page_title;
                                        ?>
                                    </button>
                                </li>
                                <li class="nav-item mb-4" role="presentation">
                                    <button class="nav-link p-text-md font-display" id="vission-tab"
                                        data-bs-toggle="tab" data-bs-target="#vission" type="button" role="tab"
                                        aria-controls="vission" aria-selected="false">
                                        <?php
                                        $page_id=272;
                                        $page_title=get_the_title($page_id);
                                        echo $page_title;
                                        ?>
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="mission" role="tabpanel"
                                    aria-labelledby="mission-tab">
                                    <div class="tab-contents border rounded p-4">
                                        <div class="desc-b">
                                        <?php
                                        $page_id=269;
                                        $post_content = get_post_field('post_content', $page_id);
                                        echo $post_content;
                                        ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vission" role="tabpanel" aria-labelledby="vission-tab">
                                    <div class="tab-contents border rounded p-4">
                                        <div class="desc-b">
                                        <?php
                                        $page_id=269;
                                        $post_content = get_post_field('post_content', $page_id);
                                        echo $post_content;
                                        ?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="abt-img-wrapper d-flex align-items-center justify-content-center flex-column">
                            <div class="main-img">
                                <div class="img-cover">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="sc-choose bg-property py-5"
            style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/_about-page/banner-image.png');">
            <div class="container">
                <h2 class="text-white p-text-xx-lg font-display mb-3">Why Aayam ?
                </h2>
                <div class="row align-items-stretch">
                    <div class="col-md-4 mb-3 mb-lg-0">
                        <div class="item-wrapper bg-white rounded p-4">
                            <p class="m-0 text-berkeley-blue font-display p-text-sm mb-3"><?php echo get_theme_mod('copy_title_one') ?></p>
                            <p class="p-text-x-sm">
                                <?php echo get_theme_mod('copy_content_one') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-lg-0">
                        <div class="item-wrapper bg-white rounded p-4">
                            <p class="m-0 text-berkeley-blue font-display p-text-sm mb-3"><?php echo get_theme_mod('copy_title_two') ?></p>
                            <p class="p-text-x-sm">
                                <?php echo get_theme_mod('copy_content_two') ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-lg-0">
                        <div class="item-wrapper bg-white rounded p-4">
                            <p class="m-0 text-berkeley-blue font-display p-text-sm mb-3"><?php echo get_theme_mod('copy_title_three') ?></p>
                            <p class="p-text-x-sm">
                                <?php echo get_theme_mod('copy_content_three') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sc-team py-5">
            <div class="container">
                <h1 class="sc-title mb-4">Meet Our Team</h1>
                <div class="row teams">

                <?php

                  $args = array(
                      'post_type' => 'team',
                      'posts_per_page' => -1,
                      'post_status' => 'publish',    
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                      while ($my_query->have_posts()) :
                          $my_query->the_post();
                ?>


                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                        <div class="team-member">
                            <div class="img-cover">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="member-detail py-2">
                                <p class="font-display p-text-md text-white m-0"><?php the_title(); ?></p>
                                <p class="m-0 p-text-sm text-white"><?php echo get_field('position_') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <?php

                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                    
                </div>
            </div>
        </section>






<?php get_footer(); ?>