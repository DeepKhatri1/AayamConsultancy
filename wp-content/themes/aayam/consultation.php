<?php get_header(); 

/* 
*
* Template Name: Consultation
*
*/

?>


<section class="sc-banner bg-property bg-overlay-transparent"
            style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/banner-img.png')">
            <div class="container h-100">
                <h1 class="title-x-lg text-white h-100 d-flex align-items-center justify-content-start">Consullation
                </h1>
            </div>
        </section>
        <section class="sc-consullation">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-9 col-md-9 col-11 mx-auto">
                        <h1 class="sc-title text-center my-3 text-black">Any question regarding study in canada?</h1>
                        <div class="desc-b text-center ">
                            <p class="text-wenge p-text-md">We’d love to hear from you!</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between m-0">
                    <div class="col-lg-5 col-md-6 col-sm-10 mx-auto p-0 mb-3 mb-md-0">
                        <div class="form-wrap">

                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label p-text-md text-onxy">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label p-text-md text-onxy">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label p-text-md text-onxy">Contact Number</label>
                                    <input type="text" class="form-control" id="number" placeholder="Contact Number">
                                </div>
                                <div class="mb-3">
                                    <label for="eductionLevel" class="form-label p-text-md text-onxy">Your Education
                                        Level</label>
                                    <select class="form-select" id="eductionLevel" aria-label="Default select example"
                                        aria-placeholder="">
                                        <option selected disabled>Your Education Level</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="studyLevel" class="form-label p-text-md text-onxy">Your preferred study
                                        level</label>
                                    <select class="form-select" id="studyLevel" aria-label="Default select example"
                                        aria-placeholder="">
                                        <option selected disabled>Your preferred study level</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class='form-label p-text-md text-onxy' for="message">Message</label>
                                    <textarea class="form-control" placeholder="Message" id="message"
                                        rows="4"></textarea>
                                </div>
                                <div class="mt-5 mb-3">
                                    <a href="" class="btn btn-primary mb-3 mb-sm-0"><span
                                            class="me-2">Submit</span><span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </form>

                        </div>
                    </div>



                    <div class="col-lg-6 col-md-6 mx-auto p-0 mb-3 mb-md-0">
                        <div class="col-wrapper w-fit rounded border px-2 px-sm-4 py-2 py-sm-4 mx-auto"
                            style="background:rgba(242, 243, 246, 0.50);">
                            <div class="contact-items mb-3">
                                <p class="font-display mb-2 text-black p-text-md">Quick Contact</p>
                                <ul class="border-bottom w-fit pb-3">
                                    <li class="item font-display p-text-sm text-fire-brick"><?php echo get_theme_mod('nepal_number'); ?></li>
                                    <li class="item font-display p-text-sm text-fire-brick"><?php echo get_theme_mod('email'); ?></li>
                                </ul>
                            </div>
                            <div class="contact-items mb-3 pb-3 border-bottom">
                                <p class="font-display mb-2 text-black p-text-md mb-3 w-100">Key Contacts</p>
                                <div class="member-wrapper">
                                    <div class="member-detail d-flex align-items-center justify-content-start my-3">
                                        <div class="img-container">
                                            <div class="img-cover h-100">
                                                <img src="<?php echo esc_url(get_theme_mod('contact_one_image')); ?>" class="h-100"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="detail-container ms-3">
                                            <p class="m-0 text-berkeley-blue-v2 p-text-sm lh-32"><?php echo get_theme_mod('contact_one_name') ?></p>
                                            <p class="m-0 text-red lh-18 p-text-x-sm"><?php echo get_theme_mod('contact_one_number') ?></p>
                                            <p class="m-0 text-red lh-18 p-text-x-sm"><?php echo get_theme_mod('contact_one_email') ?></p>
                                        </div>
                                    </div>
                                    <div class="member-detail d-flex align-items-center justify-content-start my-3">
                                        <div class="img-container">
                                            <div class="img-cover h-100">
                                                <img src="<?php echo esc_url(get_theme_mod('contact_two_image')); ?>" class="h-100"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="detail-container ms-3">
                                            <p class="m-0 text-berkeley-blue-v2 p-text-sm lh-32"><?php echo get_theme_mod('contact_two_name') ?></p>
                                            <p class="m-0 text-red lh-18 p-text-x-sm"><?php echo get_theme_mod('contact_two_number') ?></p>
                                            <p class="m-0 text-red lh-18 p-text-x-sm"><?php echo get_theme_mod('contact_two_email') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-items mb-3">
                                <p class="font-display mb-2 text-black p-text-md">Adress</p>
                                <div class="adress-wrapper d-flex align-items-start justify-content-md-start flex-md-column">
                                    <ul>
                                        <li class="item font-display p-text-sm text-berkeley-blue-v2 mb-2">Canada</li>
                                        <li class="item p-text-sm text-berkeley-blue-v2"><?php echo get_theme_mod('canada_location'); ?></li>
                                        <li class="item p-text-sm text-berkeley-blue-v2"><?php echo get_theme_mod('canada_number'); ?></li>
                                    </ul>
                                    <ul class="ms-3">
                                        <li class="item font-display p-text-sm text-berkeley-blue-v2 mb-2">Nepal</li>
                                        <li class="item p-text-sm text-berkeley-blue-v2"><?php echo get_theme_mod('nepal_location'); ?></li>
                                        <li class="item p-text-sm text-berkeley-blue-v2"><?php echo get_theme_mod('nepal_number'); ?></li>
                                        <li class="item p-text-sm text-berkeley-blue-v2 mt-2"><span><i
                                                    class="fa-solid fa-envelope"></i></span><span
                                                class="ms-2"><?php echo get_theme_mod('email'); ?></span></li>
                                        <li class="item p-text-sm text-berkeley-blue-v2"><span><i
                                                    class="fa-brands fa-skype"></i></span><span
                                                class="ms-2"><?php echo get_theme_mod('skype'); ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>















<?php get_footer(); ?>