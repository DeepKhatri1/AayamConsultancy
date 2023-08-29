<?php get_header();
/* 
*
* Template Name: Blog
*
*/
?>




<section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">Blog</h1>
            </div>
        </section>

<section class="blog-section py-4" >
        <div class="container">
          <div class="row align-items-end justify-content-between">
            <div class="col-6 col-l">
              <h1 class="sc-title">Blogs</h1>
            </div>
          </div>

                <div class="row">

                    <?php

                        $args = array(
                            'post_type' => 'blog',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) :
                                $my_query->the_post();
                    ?>

                    <?php
                    $post_id = get_the_ID(); // Get the current post ID
                    $published_date = get_the_date('F j, Y', $post_id); // Get the formatted published date
                    ?>

                    <div class="col-lg-4 col-md-4 p-lg-2 p-md-1 mb-2">
                        <a href="<?php the_permalink(); ?>">
                          <div class="item-overlay-sm item">
                              <div class="img-cover">
                                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                              </div>
                              <div class="content">
                                  <h1 class="p-text-lg font-rajdhani fw-6"><?php the_title(); ?></h1>
                                  <p class="p-text-lg text-anti-flash-white m-0 mt-3"><?php echo $published_date; ?></p>
                              </div>
                          </div>
                        </a>
                    </div>

                    <?php

                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                    
<!-- ____________________________________________________________________________ -->


                  <?php

                  $args = array(
                      'post_type' => 'blog',
                      'posts_per_page' => -1,
                      'post_status' => 'publish',
                      'posts_per_page' => 3,
                      'offset' => 3,
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                      while ($my_query->have_posts()) :
                          $my_query->the_post();
                  ?>


                    <?php
                    $post_id = get_the_ID(); // Get the current post ID
                    $published_date = get_the_date('F j, Y', $post_id); // Get the formatted published date
                    ?>

                    <div class="col-lg-4 col-sm-6 p-lg-2 p-md-1 mb-2">
                        <a href="<?php the_permalink(); ?>">
                          <div class="item-sm item">
                              <div class="img-container">
                                  <div class="img-cover">
                                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                  </div>
                              </div>
                              <div class="content">
                                  <h1 class="p-text-sm fw-6"><?php the_title(); ?></h1>
                                  <p class="m-0 p-text-base"><?php echo $published_date ?></p>
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

                

        </div>
      </div>
    </section>

    
<!-- Blog Section End -->




<?php get_footer(); ?>