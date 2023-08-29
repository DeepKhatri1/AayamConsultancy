<?php get_header();
/* 
*
* Template Name: Study In Canada
*
*/


?>

<section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">Study in Canada
                </h1>
            </div>
        </section>
        <section class="sc-eligibility py-5">
            <div class="container">
                <h1 class="sc-title"><?php echo get_post_meta(193, 'title_', true); ?>
                </h1>
                <div class="desc-b my-4">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="tab-navbar bg-berkeley-blue p-0 py-2 mb-3">
                <div class="container">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">


                        <!-- NAV TAB 1 -->
                        <?php 
                        $post_id=242;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white p-text-md active" id="pills-diploma-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-diploma" type="button" role="tab"
                                aria-controls="pills-diploma" aria-selected="true"><?php echo $post_title; ?></button>
                        </li>
                        <?php 
                        }
                        ?>



                        <!-- NAV TAB 2 -->
                        <?php 
                        $post_id=244;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white p-text-md" id="pills-bachelor-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-bachelor" type="button" role="tab" aria-controls="pills-bachelor"
                                aria-selected="false"><?php echo $post_title; ?></button>
                        </li>
                        <?php 
                        }
                        ?>


                        <!-- NAV TAB 3 -->
                        <?php 
                        $post_id=246;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white p-text-md" id="pills-gradute-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-gradute" type="button" role="tab" aria-controls="pills-gradute"
                                aria-selected="false"><?php echo $post_title; ?></button>
                        </li>
                        <?php 
                        }
                        ?>




                     <!-- NAV TAB 4 -->
                        <?php 
                        $post_id=248;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-white p-text-md" id="pills-master-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-master" type="button" role="tab" aria-controls="pills-master"
                                aria-selected="false"><?php echo $post_title; ?></button>
                        </li>
                        <?php 
                        }
                        ?>


                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="tab-content" id="pills-tabContent">

                    <!-- diploma tab  -->
                    <div class="tab-pane fade show active" id="pills-diploma" role="tabpanel"
                        aria-labelledby="pills-diploma-tab">

                        <!-- NAV TAB 1 -->
                        <?php 
                        $post_id=242;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                            $post_thumbnail = get_the_post_thumbnail_url($post_id);
                        ?>

                        <div class="tab-wrapper">
                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="col-details">
                                        <h2 class="sc-title">Diploma Program In Canada</h2>
                                        <div class="desc-b my-3">
                                            <?php echo get_theme_mod('diploma_program') ?>
                                        </div>
                                        <div class="row m-0 align-items-stretch">
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        Academic</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('diploma_program_academic') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        IELTS Score</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('diploma_program_ielts') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img-main">
                                        <div class="img-cover h-100">
                                            <img src="<?php echo $post_thumbnail; ?>" alt=""
                                                class="h-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 pt-3">
                                    <div class="content-wrapper">
                                        <p class="font-display p-text-md text-berkeley-blue-v2">Overview</p>
                                        <div class="desc-b">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        }
                        ?>


                    </div>

                    <!-- end of diploma tab  -->

                    <!-- bachelors tab  -->

                    <div class="tab-pane fade" id="pills-bachelor" role="tabpanel" aria-labelledby="pills-bachelor-tab">
                        <div class="tab-wrapper">

                        <!-- NAV TAB 2 -->
                        <?php 
                        $post_id=244;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                            $post_thumbnail = get_the_post_thumbnail_url($post_id);
                        ?>

                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="col-details">
                                        <h2 class="sc-title">Bachelor Program In Canada</h2>
                                        <div class="desc-b my-3">
                                            <?php echo get_theme_mod('bachelor_program') ?>
                                        </div>
                                        <div class="row m-0 align-items-stretch">
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        Academic</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('bachelor_program_academic') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        IELTS Score</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('bachelor_program_ielts') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img-main">
                                        <div class="img-cover h-100">
                                            <img src="<?php echo $post_thumbnail; ?>" alt=""
                                                class="h-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 pt-3">
                                    <div class="content-wrapper">
                                        <p class="font-display p-text-md text-berkeley-blue-v2">Overview</p>
                                        <div class="desc-b"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                    <!-- end of bachelors tab  -->

                    <!-- post graduate tab  -->
                    <div class="tab-pane fade" id="pills-gradute" role="tabpanel" aria-labelledby="pills-gradute-tab">
                        <div class="tab-wrapper">

                        <!-- NAV TAB 3 -->
                        <?php 
                        $post_id=246;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                            $post_thumbnail = get_the_post_thumbnail_url($post_id);
                        ?>

                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="col-details">
                                        <h2 class="sc-title">Post Graduate In Canada</h2>
                                        <div class="desc-b my-3">
                                            <?php echo get_theme_mod('post_graduate_program') ?>
                                        </div>
                                        <div class="row m-0 align-items-stretch">
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        Academic</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('post_graduate_program_ielts') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        IELTS Score</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('post_graduate_program_academic') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img-main">
                                        <div class="img-cover h-100">
                                            <img src="<?php echo $post_thumbnail; ?>" alt=""
                                                class="h-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 pt-3">
                                    <div class="content-wrapper">
                                        <p class="font-display p-text-md text-berkeley-blue-v2">Overview</p>
                                        <div class="desc-b"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- end of post graduate tab  -->

                    <!-- master tab  -->
                    <div class="tab-pane fade" id="pills-master" role="tabpanel" aria-labelledby="pills-master-tab">
                        <div class="tab-wrapper">

                        <!-- NAV TAB 4 -->
                        <?php 
                        $post_id=248;
                        $post_type='program';

                        $post = get_post($post_id);

                        if ($post && $post->post_type == $post_type) {
                            // Get the post title
                            $post_title = get_the_title($post_id);
                            $post_thumbnail = get_the_post_thumbnail_url($post_id);
                        ?>
                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="col-details">
                                        <h2 class="sc-title">Master Programs In Canada</h2>
                                        <div class="desc-b my-3">
                                            <?php echo get_theme_mod('master_program') ?>
                                        </div>
                                        <div class="row m-0 align-items-stretch">
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        Academic</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('master_program_academic') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 ps-2">
                                                <div class="item-wrapper bg-white-smoke rounded shadow-sm p-2 h-100">
                                                    <p class="p-text-md font-display op-05 text-berkeley-blue-v2 mb-2">
                                                        IELTS Score</p>
                                                    <div class="desc-b">
                                                        <?php echo get_theme_mod('master_program_ielts') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img-main">
                                        <div class="img-cover h-100">
                                            <img src="<?php echo $post_thumbnail; ?>" alt=""
                                                class="h-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 pt-3">
                                    <div class="content-wrapper">
                                        <p class="font-display p-text-md text-berkeley-blue-v2">Overview</p>
                                        <div class="desc-b"><?php the_content(); ?></div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>

                    <!--end of master tab  -->

                </div>
            </div>
        </section>

        <?php get_footer(); ?>