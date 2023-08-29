<?php get_header();
/* 
*
* Template Name: Courses
*
*/
?>



<section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">Courses</h1>
            </div>
        </section>
        <section class="sc-courses py-5">
            <?php
            $page_id='courses';
            ?>
            <div class="container">
                <h1 class="sc-title">Top Courses To Study In Canada
                </h1>
                <div class="desc-b my-4">
                    <?php the_content(); ?>
                </div>
                <h2 class="p-text-lg font-display text-oxford-blue mb-4">top 12 best courses in Canada</h2>
                <div class="row">

                <?php

                $args = array(
                    'post_type' => 'courses',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'posts_per_page' => 12,
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) :
                        $my_query->the_post();
                ?>

                    <div class="col-lg-3 mb-4">
                        <div class="course-item shadow border rounded px-lg-3 px-2 py-4 d-flex align-items-stretch"
                            tabindex="0" style="width: 263px;" data-slick-index="0" aria-hidden="false">
                            <a href="<?php the_permalink(); ?>" class="course-item-wrapper d-flex align-items-center h-100">
                                <div class="img-container" style="flex-basis: 60px;">
                                    <div class="img-cover">
                                    <?php
                                        $image_url = get_field('icon'); 

                                        if ($image_url) {
                                            echo '<img src="' . esc_url($image_url) . '" alt="Image">';
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="course-detail ms-2">
                                    <p class="font-display p-text-sm text-caribean-current mb-0"><?php the_title(); ?></p>
                                </div>
                            </a>
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