<?php get_header();
/* 
*
* Template Name: Home
*
*/

?>



    <section class="sc-main-banner bg-property overflow-hidden pt-5 pt-lg-0"
      style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/_index-page/banner-img.png');">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-8 col-md-6 col-11 mx-auto">
            <div class="left-content">
              <h1 class="text-white title-lg"><?php echo get_theme_mod('banner_title') ?></h1>
              <div class="desc-w my-4">
                <p><?php echo get_theme_mod('banner_copy') ?></p>
              </div>
              <div class="buttons-container mt-3 text-center text-lg-start">
                <a href="<?php echo get_page_link(214); ?>" class="btn btn-primary mb-3 mb-sm-0"><span class="me-2">Enquiry Now</span><span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
                <a href="<?php echo get_page_link(283); ?>" class="btn btn-primary-transparent"><span class="me-2">Free Consulation</span><span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-7 mx-auto align-self-end">
            <div class="img-container h-100">
              <div class="img-cover">
                <img src="<?php echo esc_url(get_theme_mod('banner_image')) ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="sc-about">
      <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
          <div class="col-lg-6 mb-5 pb-sm-5 mb-lg-0 pb-lg-0">
            <div class="left-content">
              <h1 class="sc-title">About Us</h1>
              <div class="desc-b my-4">
                <p><?php echo wpautop(get_theme_mod('about_us')); ?></p>
              </div>
              <div class="buttons-container mt-3 text-center text-lg-start">
                <a href="<?php echo get_page_link(217); ?>" class="btn btn-primary mb-3 mb-sm-0"><span>Know More</span></a>
                <a href="<?php echo get_page_link(217); ?>" class="btn btn-primary-transparent-red"><span>Meet Our Team</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-items row">
              <div class="col-lg-6 col-sm-6 col-10 mx-auto mb-4">
                <div class="item p-3 h-100">
                  <p class="m-0 fw-6 font-display text-fire-brick p-text-md">Years</p>
                  <p class="m-0 title-lg text-oxford-blue my-2"><?php echo get_theme_mod('year_value') ?></p>
                  <div class="desc-b">
                    <p><?php echo get_theme_mod('year_description') ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 col-10 mx-auto mb-4">
                <div class="item p-3 h-100">
                  <p class="m-0 fw-6 font-display text-fire-brick p-text-md">Academic Partners</p>
                  <p class="m-0 title-lg text-oxford-blue my-2"><?php echo get_theme_mod('academic_partners') ?></p>
                  <div class="desc-b">
                    <p><?php echo get_theme_mod('partners_description') ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 col-10 mx-auto mb-4">
                <div class="item p-3 h-100">
                  <p class="m-0 fw-6 font-display text-fire-brick p-text-md">Student Counselled</p>
                  <p class="m-0 title-lg text-oxford-blue my-2"><?php echo get_theme_mod('student_counciled') ?></p>
                  <div class="desc-b">
                    <p><?php echo get_theme_mod('student_description') ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 col-10 mx-auto mb-4">
                <div class="item p-3 h-100">
                  <p class="m-0 fw-6 font-display text-fire-brick p-text-md">Programs</p>
                  <p class="m-0 title-lg text-oxford-blue my-2"><?php echo get_theme_mod('programs') ?></p>
                  <div class="desc-b">
                    <p><?php echo get_theme_mod('program_description') ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="sc-service bg-property pt-5"
      style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/_index-page/sc-service-bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 col-11 mx-auto">
            <p class="text-white p-text-sm text-center mb-0 font-display">OUR SERVICE</p>
            <h1 class="title-lg text-white text-center my-3"><?php echo get_theme_mod('service_main_title') ?></h1>
            <div class="desc-w text-center">
              <p><?php echo get_theme_mod('service_subtitle') ?></p>
            </div>
          </div>
        </div>
        <div class="row service-items align-items-center">

        <?php

            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 6,
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
        ?>

          <div class="col-lg-4 col-sm-6 col-11 mx-auto">
            <div class="service-item h-100">
              <div class="img-container">
                <?php
                    $image_url = get_field('icon'); 

                    if ($image_url) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Image">';
                    }
                ?>

            </div>
              <p class="mb-2 p-text-lg font-display text-fire-brick text-center"><?php the_title(); ?></p>
              <div class="desc-b text-center">
                <p><?php the_content(); ?></p>
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


    <section class="sc-universities">
      <div class="container">
        <div class="row d-flex flex-column mb-3 mb-md-0">
          <div class="col-xl-4 col-lg-7 col-md-9">
            <h1 class="sc-title">Best Universities
              & Colleges in Canada</h1>
          </div>
          <div class="col-lg-7 col-md-9 my-4">
            <div class="desc-b">
              <p><?php echo wpautop(get_theme_mod('collage_description')); ?></p>
            </div>
          </div>
        </div>
        <div class="universities-slider py-2">

        <?php

            $args = array(
                'post_type' => 'collages',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>

          <div class="university m-2">
            <a href="<?php the_permalink(); ?>" class="university-wrapper">
              <div class="img-cover">
                <?php
                    $image_url = get_field('icon'); 

                    if ($image_url) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Image">';
                    }
                ?>
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
    </section>


    <section class="sc-cources bg-property py-5 bg-overlay"
      style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/_index-page/sc-cources-banner.png');">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-8 col-md-9 col-11 mx-auto">
            <h1 class="title-lg text-white text-center my-3">Courses in Canada</h1>
            <div class="desc-w text-center">
              <p><?php echo wpautop(get_theme_mod('course_description')); ?></p>
            </div>
          </div>
        </div>


        <div class="course-slider">

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

          <div class="course-item px-lg-2 px-1 py-3 mx-2 d-flex align-items-stretch">
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

          <?php

                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
          
        </div>
      </div>
    </section>



    <section class="sc-works">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 col-md-9 col-11 mx-auto">
            <h1 class="sc-title text-center my-3">How We Work</h1>
            <div class="desc-b text-center ">
              <p><?php echo get_theme_mod('work_description') ?></p>
            </div>
          </div>
        </div>
        <div class="works-slider">

        <?php
          $args = array(
              'post_type' => 'work',
              'posts_per_page' => -1,
              'post_status' => 'publish',
          );
          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) :
              $counter = 1; // Initialize the counter variable

              while ($my_query->have_posts()) :
                  $my_query->the_post();
                  ?>

                  <div class="mx-2 item">
                      <div class="item-wrapper h-100">
                          <div class="item-number">
                              <p class="m-0 font-display ms-auto w-fit p-text-x-lg"><?php echo $counter; ?></p>
                          </div>
                          <div class="img-container w-fit d-flex align-items-center justify-content-center">
                              <div class="img-cover d-flex align-items-center justify-content-center">
                                  <?php
                                  $image_url = get_field('icon');

                                  if ($image_url) {
                                      echo '<img style="height: auto;" src="' . esc_url($image_url) . '" alt="Image">';
                                  }
                                  ?>
                              </div>
                          </div>
                          <div class="item-content py-3 px-1">
                              <h2 class="font-display p-text-md text-oxford-blue mb-1"><?php the_title(); ?></h2>
                              <div class="desc-b">
                                  <p><?php the_content(); ?></p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php
                  $counter++; // Increment the counter
              endwhile;

              wp_reset_postdata();
          endif;
          ?>


        </div>
      </div>
    </section>



    <section class="sc-events">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 col-md-9 col-6">
            <h1 class="sc-title my-3">Events</h1>
          </div>
          <div class="col-lg-3 col-md-3 col-6 align-self-end">
            <div class="button-wrapper text-end">
              <a href="<?php echo get_page_link(298); ?>" class="btn btn-primary-transparent-red"><span class="me-2">View All</span><span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>

        <div class="row">

        <?php

            $args = array(
                'post_type' => 'event',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 1,                
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
        ?>

          <div class="col-lg-6 mb-3 mb-lg-0">
            <div class="img-container bg-overlay-sm recent-news-wrapper">
              <div class="img-cover">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="position-absolute w-100 px-3 py-2 bottom-50" style="transform: translateY(85%);">
                <h1 class="text-white titile-md"><?php the_title(); ?></h1>
                <?php 
                $starting_date= get_field('starting_date');
                $start_date=get_the_date('F j, Y', $starting_date);

                $end_date= get_field('end_date');
                $ending_date=get_the_date('F j, Y', $end_date);
                ?>
                <p class="m-0 p-text-md mt-2 text-white"><?php echo $start_date . ' - ' . $ending_date; ?></p>
              </div>

              <?php
                $ongoing_event = get_field('event'); 

                if ($ongoing_event) {
              ?>

              <div class="event-status overflow-hidden d-flex flex-column align-items-center justify-content-sm-center justify-content-center py-4">
              <p class="m-0 font-display p-text-x-lg text-white text-center">Ongoing</p>
                <div class="cs-loader mb-5">
                  <div class="cs-loader-inner d-flex align-items-center justify-content-center">
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                  </div>
                </div>
              </div>


              <?php

                }
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>

            </div>
          </div>
          
          <div class="col-lg-6">

          <?php

            $args = array(
                'post_type' => 'event',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'offset' => 1,                
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
          ?>

            <a href="">
              <div class="row m-0 mb-3">
                <div class="col-6 img-container-sm">
                  <div class="img-cover">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="content h-100 d-flex py-2 flex-column justify-content-between">
                    <h2 class="p-text-sm text-cobalt-blue font-display"><?php the_title(); ?></h2>
                    <?php 
                      $starting_date= get_field('starting_date');
                      $start_date=get_the_date('F j, Y', $starting_date);

                      $end_date= get_field('end_date');
                      $ending_date=get_the_date('F j, Y', $end_date);
                    ?>
                    <p class="m-0 p-text-x-sm text-wenge"><?php echo $start_date . ' - ' . $ending_date; ?></p>
                  </div>
                </div>
              </div>
            </a>
            
            <?php

                    endwhile;
                endif;
                wp_reset_postdata();
            ?>

          </div>
        </div>
      </div>
    </section>




    <section class="sc-testimonial pt-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 col-md-9 col-11 mx-auto">
            <h1 class="sc-title text-center my-3">Testimonials</h1>
            <div class="desc-b text-center ">
              <p class="text-cobalt-blue op-08"><?php echo get_theme_mod('testimonial_descsription'); ?></p>
            </div>
          </div>
        </div>
        <div class="row sliders">
          <div class="col-lg-5 mx-auto mb-5">
            <div class="h-100 d-flex flex-column">
              <div class="my-auto">
                <div class="main-img-slider my-auto">
                  

                <?php

                  $args = array(
                      'post_type' => 'testimonial',
                      'posts_per_page' => -1,
                      'post_status' => 'publish',    
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                      while ($my_query->have_posts()) :
                          $my_query->the_post();
                ?>

                
                  <div class="img-item my-1">
                    <div class="img-item-wrapper py-5 py-lg-0">
                      <div class="img-clipPath">
                        <div class="img-cover">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
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
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-sm-9 mx-auto">
            <div class="col-wrapper text-slider mx-4">

                <?php

                  $args = array(
                      'post_type' => 'testimonial',
                      'posts_per_page' => -1,
                      'post_status' => 'publish',    
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                      while ($my_query->have_posts()) :
                          $my_query->the_post();
                ?>

              <div class="item">
                <div class="item-wrapper">
                  <h3 class="font-display p-text-md text-berkeley-blue"><?php the_title(); ?></h3>
                  <p class="m-0 text-van-dyke"><?php echo get_field('position_') ?></p>
                  <div class="desc-b mt-3">
                    <?php the_content(); ?>
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


          <div class="col-lg-2 col-md-2 col-sm-2 mt-5 mt-sm-0 no-d mx-auto">
            <div class="img-slider d-md-block d-none">

                <?php

                  $args = array(
                      'post_type' => 'testimonial',
                      'posts_per_page' => -1,
                      'post_status' => 'publish',
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                      while ($my_query->have_posts()) :
                          $my_query->the_post();
                ?>

              <div class="item my-1">
                <div class="item-wrapper">
                  <div class="img-cover">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
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
        </div>
      </div>
    </section>




    <section class="sc-news py-5">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 col-md-9 col-6">
            <h1 class="sc-title my-3">Blog</h1>
            <div class="desc-b">
              <p><?php echo get_theme_mod('news_description') ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-6 align-self-end">
            <div class="button-wrapper text-end">
              <a href="<?php echo get_page_link(211); ?>" class="btn btn-primary-transparent-red"><span class="me-2">View All</span><span><i
                    class="fa-solid fa-arrow-right"></i></span></a>
            </div>
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
          
        <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-3">
            <div class="card">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="..." style="height: 215px; object-fit: cover;" >
              <div class="card-body">
                <h5 class="card-title text-cobalt-blue my-3 p-text-lg font-display"><?php the_title(); ?></h5>
                <p class="card-text p-text-sm font-mont">
                  <?php
                  $untrimmed_content=get_the_content();
                  $trimmed_content=wp_trim_words($untrimmed_content, 30, '...');

                  echo $trimmed_content;
                  ?>
                </p>
                <a href="#" class="btn btn-primary w-100"><span class="me-2">Read More</span><span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
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




    


<?php get_footer();
/* 
*
* Template Name: Home
*
*/

?>