<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smartclipping_demo
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="google-site-verification" content="RRjo6rp_vc_3fl4S1RgrIx6mgD3vxv4_ds3y6_OoGLo" />
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FRFVRGMD70"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FRFVRGMD70');
</script>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smart Clipping</title>
  <!-- FAVICON -->
  <link rel="shortcut icon" href="favicon.svg" type="image/svg" />
	<link rel="icon" type="image/x-icon" href="https://smartclipping.io/wp-content/themes/smart-clipping/assets/images/logo.svg">
  <!-- POLYFILLED PLAYER CDN -->
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
  <!-- OWL CAROUSEL CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.min.css" />
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" />
  <link href="http://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- SITE TOPBAR SECTION START -->
  <div class="topbar">
    <div class="container">
      <div class="topbar-content">
        <!-- CONTACT LIST START -->
        <ul class="contactlist">
          <li class="contactlist-item" class="#top-header">
            <a href="tel:+8801754486711" class="contactlist-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path id="callIcon" data-name="callIcon" d="M18.4,13.128a11.355,11.355,0,0,1-3.566-.568,1.63,1.63,0,0,0-1.585.334l-2.249,1.7A12.428,12.428,0,0,1,5.407,9.005l1.648-2.19a1.617,1.617,0,0,0,.4-1.638A11.373,11.373,0,0,1,6.883,1.6,1.607,1.607,0,0,0,5.278,0H1.6A1.607,1.607,0,0,0,0,1.6,18.416,18.416,0,0,0,18.4,20,1.607,1.607,0,0,0,20,18.4V14.732A1.607,1.607,0,0,0,18.4,13.128Z" fill="#fff" />
              </svg>

              <span class="text">+880 1687249156</span>
            </a>
          </li>

          <li class="contactlist-item">
            <a href="mailto:smartclipping@gmail.com" class="contactlist-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.189" height="15.142" viewBox="0 0 20.189 15.142">
                <g id="mailIcon" data-name="Group 365" transform="translate(0)">
                  <path id="mailIconPath1" data-name="mailIconPath1" d="M7.063,65.229c2.771,2.347,7.633,6.475,9.062,7.762a.844.844,0,0,0,1.221,0c1.43-1.288,6.292-5.417,9.063-7.764a.42.42,0,0,0,.059-.58A1.67,1.67,0,0,0,25.147,64H8.323A1.67,1.67,0,0,0,7,64.648.42.42,0,0,0,7.063,65.229Z" transform="translate(-6.641 -64)" fill="#fff" />
                  <path id="mailIconPath2" data-name="mailIconPath2" d="M19.945,126.451a.419.419,0,0,0-.449.061c-3.073,2.6-6.995,5.944-8.228,7.056a1.7,1.7,0,0,1-2.348,0C7.6,132.381,3.2,128.638.692,126.512a.421.421,0,0,0-.692.321V137.41a1.684,1.684,0,0,0,1.682,1.682H18.506a1.684,1.684,0,0,0,1.682-1.682V126.832A.42.42,0,0,0,19.945,126.451Z" transform="translate(0 -123.951)" fill="#fff" />
                </g>
              </svg>
              <span class="text">info@smartclipping24.com</span>
            </a>
          </li>
        </ul>
        <!-- CONTACT LIST END -->

        <!-- TOPBAR LIST START -->

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'topbarlist',
          )
        );
        ?>
        <!-- TOPBAR LIST END -->
      </div>
    </div>
  </div>
  <!-- SITE TOPBAR SECTION END -->

  <!-- HEADER SECTION START -->
  <header class="header sticky-top">
    <div class="container">
      <nav class="header-nav">
        <!-- SITE LOGO START -->
        <a href="<?php echo site_url(); ?>" class="brand">
          <figure class="brand-icon">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="site-logo" />
          </figure>
        </a>
        <!-- SITE LOGO END -->

        <!-- SITE MAIN MENU START -->
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-menu',
            'menu_class' => 'headerlist',
          )
        );
        ?>
        <!-- SITE MAIN MENU END -->

        <!-- SITE REGISTRATION LINK START -->
        <div class="registration">
          <a href="registration" class="btn-clip btn-register btn-bordered">Registration</a>
        </div>
        <!-- SITE REGISTRATION LINK END -->


        <!-- SELECT LANGUAGE DROPDOWN START -->
        <?php echo do_shortcode('[gtranslate]'); ?>

        <!-- SELECT LANGUAGE DROPDOWN END -->

        <script>
          var themeDirectoryUri = "<?php echo get_template_directory_uri(); ?>";

          var select = document.getElementById('selectlanguage');
          var options = select.getElementsByTagName('option');

          options[0].setAttribute('data-imagesrc', themeDirectoryUri + '/assets/images/flags/eng.svg');
          options[1].setAttribute('data-imagesrc', themeDirectoryUri + '/assets/images/flags/us.jpg');
          $(function() {
            $('.selectpicker').selectpicker();
          });
        </script>





        <!-- MOBILE MENU ICON START -->
        <button class="mobileicon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenuSidebar" aria-controls="offcanvasMobileMenuSidebar">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
            <rect width="30" height="1.5"></rect>
            <rect y="7" width="20" height="1.5"></rect>
            <rect y="14" width="30" height="1.5"></rect>
          </svg>
        </button>
        <!-- MOBILE MENU ICON END -->

        <!-- MOBILE MENU START -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMobileMenuSidebar" aria-labelledby="offcanvasMobileMenuSidebarLabel">
          <div class="offcanvas-header">
            <!-- SITE LOGO START -->
            <a href="/" class="brand">
              <figure class="brand-icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="site-logo" />
              </figure>
            </a>
            <!-- SITE LOGO END -->

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
              </svg>
            </button>
          </div>

          <div class="offcanvas-body">
            <div class="mobilemenu">
              <ul class="mobilelist">
                <li class="mobilelist-item">
                  <a href="/" class="mobilelist-link active">Home</a>
                </li>

                <li class="mobilelist-item">
                  <a href="service" class="mobilelist-link">Image Editing</a>
                </li>

                <li class="mobilelist-item">
                  <a href="#" class="mobilelist-link">Sectors</a>
                </li>

                <li class="mobilelist-item">
                  <a href="#" class="mobilelist-link">Design</a>
                </li>

                <li class="mobilelist-item">
                  <a href="pricing" class="mobilelist-link">Price</a>
                </li>
              </ul>

              <!-- SITE REGISTRATION LINK START -->
              <div class="registration">
                <a href="registration" class="btn-clip btn-register btn-bordered">Registration</a>
              </div>
              <!-- SITE REGISTRATION LINK END -->
            </div>
          </div>
        </div>
        <!-- MOBILE MENU END -->
      </nav>
    </div>
  </header>
  <!-- HEADER SECTION END -->