<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- bootstrap 5 css  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- font awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- slick slider cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- main css  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <style>
    @font-face {
  font-family: "Ascender";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/Ascender-Sans-W01-Regular.ttf") format("truetype");
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: "AscenderBold";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/Ascender-Sans-W01-Bold.ttf") format("truetype");
  font-weight: 700;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: "ClashDisplayBold";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ClashDisplay-Bold.ttf") format("truetype");
  font-weight: 700;
  font-style: normal;
  font-display: swap;
}
  </style>

</head>

<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="dpmxx5JB"></script>

  <div class="page-wrapper">
    <header class="hdr px-3" id="header">
      <nav class="navbar navbar-expand-lg py-2">
        <div class="container p-0">

          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/image 23.svg" loading="lazy" alt="">
          </a>

          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> -->
              <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => 'srdsdasdas',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s" style="margin: 10px 0;" >%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
            <!-- </ul> -->
            <div class="right-box d-flex flex-lg-row flex-column align-items-center align-items-lg-start">
              <div class="contact-item d-flex flex-lg-row flex-column align-items-center">
                <div class="icon me-2">
                  <span class="p-text-xx-lg text-cobalt-blue"><i class="fa-brands fa-whatsapp"></i></span>
                </div>
                <div
                  class="contact-detail d-flex align-items-lg-start align-items-center flex-column justify-contents-start">
                  <p class="m-0 text-black fw-7 p-text-md font-ascender-bold" style="margin-bottom: -5px !important;">
                    Contact us</p>
                  <p class="m-0 fw-7 text-cobalt-blue p-text-xx-sm font-display"><?php echo get_theme_mod('nepal_number'); ?></p>
                </div>
              </div>
              <div class="contact-btn ms-2">
                <a href="<?php echo get_page_link(283); ?>" class="btn btn-primary-rounded">Free Consultation</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>