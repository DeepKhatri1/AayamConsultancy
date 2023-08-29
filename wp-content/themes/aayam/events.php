<?php get_header();


/* 
*
* Template Name: Events
*
*/

$paged=get_query_var('paged') ? get_query_var('paged'):1;

?>

<section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">Events</h1>
            </div>
        </section>


<section class="sc-events">
            <div class="container">
                <h1 class="sc-title my-3 mb-5">Events</h1>
                <div class="row">



                <?php
                    $args = array(
                        'post_type' => 'event',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'posts_per_page' => 3,                
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) :
                        while ($my_query->have_posts()) :
                            $my_query->the_post();
                ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                       <a href="./single-event.html">
                        <div class="item-wrapper shadow">
                            <div class="img-cover">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="height: 215px; object-fit:cover;" >
                            </div>
                            <div class="event-detail p-3">
                                <h1 class="p-text-lg font-display text-berkeley-blue"><?php the_title(); ?></h1>

                                <?php 
                                $starting_date= get_field('starting_date');
                                $start_date=get_the_date('F j, Y', $starting_date);

                                $end_date= get_field('end_date');
                                $ending_date=get_the_date('F j, Y', $end_date);
                                ?>
                                <div class="item-footer d-flex align-items-center justify-content-between mt-3">
                                    <p><?php echo $start_date . ' - ' . $ending_date; ?></p>

                                </div>
                            </div>
                        </div>
                       </a>
                    </div>
                   
                <?php

                        endwhile;
                    endif;

                    wp_reset_postdata();
                ?>

                   
                </div>

                <?php echo wp_pagenavi(); ?>

            </div>
        </section>





<?php get_footer(); ?>