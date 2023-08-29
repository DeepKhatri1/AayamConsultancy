<section class="sc-questions">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 col-md-9 col-11 mx-auto">
            <h1 class="sc-title text-center my-3">Frequently Asked Questions</h1>
            <div class="desc-b text-center ">
              <p class="text-cobalt-blue op-08"><?php echo get_theme_mod('faq_description') ?></p>
            </div>
          </div>
        </div>

        <div class="question-collections">

        <?php

          $args = array(
              'post_type' => 'faq',
              'post_status' => 'publish',
              'posts_per_page' => -1,
          );

          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) :
              while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID(); // Get the ID of the current post
                  ?>

                  <div class="question-item">
                      <a data-bs-toggle="collapse" href="#question-<?php echo $post_id; ?>" role="button" aria-expanded="false"
                          aria-controls="question-<?php echo $post_id; ?>">
                          <div class="item-wrapper d-flex align-items-center justify-content-between">
                              <p class="m-0 font-display p-text-md text-cobalt-blue"><?php the_title(); ?></p>
                              <p class="m-0 font-display p-text-x-lg text-cobalt-blue ms-3"><span><i class="fa-solid fa-plus"></i></span></p>
                          </div>
                      </a>
                      <div class="collapse multi-collapse" id="question-<?php echo $post_id; ?>">
                          <div class="card card-body border-0">
                              <div class="desc-b">
                                  <p><?php the_content(); ?></p>
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
    </section>


<footer class="sc-footer py-2 overflow-hidden">
      <div class="footer-top py-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-7 col-md-9">
              <p class="text-berkeley-blue p-text-sm mb-0 font-display">INQUIRY</p>
              <h1 class="sc-title my-3">Let's get in touch</h1>
              <div class="desc-b">
                <p>You are welcome to talk with our counselors or Fill the form, we will get back to you ASAP.</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="footer-main bg-property bg-overlay pt-5 pb-5 pb-xl-0"
        style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/pages/_index-page/footer-banner.png');">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-5 col-lx-5">
              <div class="row m-0">
                <div class="col-sm-6 col-md-4 col-lg-6 mb-4">
                  <div class="item h-100">
                    <p class="m-0 p-text-lg fw-6 border-bottom text-seasalt text-center text-sm-start">Canada</p>
                    <ul class="mt-3">
                      <li class="text-seasalt text-center text-sm-start"><?php echo get_theme_mod('canada_location'); ?></li>
                      <li class="text-seasalt text-center text-sm-start"><?php echo get_theme_mod('canada_number'); ?></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-4">
                  <div class="item h-100">
                    <p class="m-0 p-text-lg fw-6 border-bottom text-seasalt text-center text-sm-start">Nepal</p>
                    <ul class="mt-3">
                      <li class="text-seasalt text-center text-sm-start"><?php echo get_theme_mod('nepal_location'); ?></li>
                      <li class="text-seasalt text-center text-sm-start"><?php echo get_theme_mod('nepal_number'); ?></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-4">
                  <div class="item h-100">
                    <p class="icon m-0 p-text-lg text-seasalt p-2 py-0 mx-auto mx-sm-0"><span><i
                          class="fa-solid fa-envelope"></i></span></p>
                    <ul class="mt-2">
                      <li class="text-seasalt fw-6 text-center text-sm-start">EMAIL</li>
                      <li class="text-seasalt text-center text-sm-start"><?php echo get_theme_mod('email');?></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-4">
                  <div class="item h-100">
                    <p class="icon m-0 p-text-lg text-seasalt p-2 py-0 mx-auto mx-sm-0"><span><i
                          class="fa-brands fa-skype"></i></span></p>
                    <ul class="mt-2">
                      <li class="text-seasalt fw-6 text-center text-sm-start">SKYPE</li>
                      <li class="text-seasalt text-center text-sm-start"> <?php echo get_theme_mod('skype');?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-7">
              <div class="footer-form bg-seasalt rounded py-5 px-4">
                <h1 class="sc-title op-08 mb-5">Hi &#58;&#41;</h1>
                
                
                <form action="" method="post">
                  <div class="row">
                    <div class="col mb-4 p-1">
                      <label for="name" class=" text-berkeley-blue op-08 font-display p-text-md blow" >Your Name*</label>
                      <input type="text" id="name" class="border-0 border-bottom p-2 bg-none"
                        placeholder="Enter your name" aria-label="Enter your name">
                    </div>
                    <div class="col mb-4 p-1">
                      <label for="email" class=" text-berkeley-blue op-08 font-display p-text-md">Email Address*</label>
                      <input type="text" id="email" class="border-0 border-bottom p-2 bg-none"
                        placeholder="Enter your email" aria-label="Enter your email">
                    </div>
                    <div class="col mb-4 p-1">
                      <label for="education-level" class=" text-berkeley-blue op-08 font-display p-text-md">Education
                        Level*</label>
                      <input type="text" id="education-level" class="border-0 border-bottom p-2 bg-none"
                        placeholder="Enter Education Level" aria-label="Enter Education Level">
                    </div>
                    <div class="col mb-4 p-1">
                      <label for="last-name" class=" text-berkeley-blue op-08 font-display p-text-md">Phone, Viber or
                        Whatsapp*</label>
                      <input type="text" id="last-name" class="border-0 border-bottom p-2 bg-none"
                        placeholder="Enter Number" aria-label="Enter Number">
                    </div>
                    <div class="col p-1 mb-4 d-flex flex-column">
                      <label for="last-name"
                        class=" mb-auto text-berkeley-blue op-08 font-display p-text-md">Message**</label>
                      <textarea id="last-name" class="border-0 border-bottom p-2 bg-none"
                        placeholder="Type your Message here..." aria-label="Type your Message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-auto"><span><i
                          class="fa-solid fa-paper-plane"></i></span></button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>




      
      <div class="footer-bottom py-3 position-relative" style="z-index: 5;">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-lg-3 col-6 col-md-6 mb-3 mb-lg-0">
              <div class="footer-logo d-flex">
                <div class="img-cover" style="flex-basis: 180px;">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/image 23.svg" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6 col-md-6 mb-3 mb-lg-0">
              <ul class="social-media-links d-flex gap-md-3 gap-2 justify-content-center">
                <li class="social-medial-item">
                  <a href="" class="sociall-medialo-link p-text-x-lg text-cobalt-blue">
                    <span><i class="fa-brands fa-facebook"></i></span>
                  </a>
                </li>
                <li class="social-medial-item">
                  <a href="" class="sociall-medialo-link p-text-x-lg text-cobalt-blue">
                    <span><i class="fa-brands fa-instagram"></i></span>
                  </a>
                </li>
                <li class="social-medial-item">
                  <a href="" class="sociall-medialo-link p-text-x-lg text-cobalt-blue">
                    <span><i class="fa-brands fa-twitter"></i></span>
                  </a>
                </li>
                <li class="social-medial-item">
                  <a href="" class="sociall-medialo-link p-text-x-lg text-cobalt-blue">
                    <span><i class="fa-brands fa-youtube"></i></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-11 col-sm-10 mx-auto col-md-8">
              <div class="col-wrapper d-flex align-items-center justify-content-md-evenly justify-content-between">
                <p class="m-0 p-text-sm text-cobalt-blue ">© 2020- 2023 aayam edu. All rights reserved.</p>
                <ul class="d-flex align-items-center">
                  <li class="up-icon d-flex align-items-center justify-content-center mx-1"><a href="#header"
                      class="p-text-lg text-cobalt-blue"><span><i
                          class="fa-sharp fa-regular fa-circle-up"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- bootstrap 5 script  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.slim.min.js"
    integrity="sha512-5NqgLBAYtvRsyAzAvEBWhaW+NoB+vARl6QiA02AFMhCWvPpi7RWResDcTGYvQtzsHVCfiUhwvsijP+3ixUk1xw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- slick slider  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- main script  -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/script/main.js" async defer></script>
  <script>
    $('.question-item').click(function () {
      $(this).find(".item-wrapper").toggleClass('show');
      $(this).find(".fa-solid").toggleClass("fa-plus fa-minus");
    });
  </script>
</body>

</html>