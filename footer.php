<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smartclipping_demo
 */

?>



<!-- FOOTER SECTION START DONE -->
<footer class="footer">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="footer-details">
          <?php dynamic_sidebar('footer-one') ?>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-menu">
          <?php dynamic_sidebar('footer-two') ?>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-menu">

          <?php dynamic_sidebar('footer-three') ?>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="footer-menu">
          <h3 class="title">Contact</h3>

          <div class="lists">
            <ul class="contactlist">
              <li class="contactlist-item">
                <div class="titlebox">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20.003" height="20.005" viewBox="0 0 20.003 20.005">
                    <path id="Path_194" data-name="Path 194" d="M19.554,16.216l-3.089-3.1a1.608,1.608,0,0,0-2.271.043l-1.556,1.56-.307-.171a15.488,15.488,0,0,1-3.743-2.714A15.61,15.61,0,0,1,5.874,8.078c-.058-.1-.113-.205-.167-.3L6.751,6.732l.514-.515A1.616,1.616,0,0,0,7.306,3.94L4.217.843A1.606,1.606,0,0,0,1.946.886l-.871.878.024.024A5.05,5.05,0,0,0,.382,3.056,5.269,5.269,0,0,0,.063,4.342C-.345,7.732,1.2,10.83,5.394,15.033c5.8,5.81,10.468,5.371,10.67,5.35a5.209,5.209,0,0,0,1.287-.324,5.014,5.014,0,0,0,1.261-.716l.019.017.882-.866A1.619,1.619,0,0,0,19.554,16.216Z" transform="translate(0 -0.394)" fill="#fff" />
                  </svg>

                  <span class="title">TELEPHONE-SUPPORT:</span>
                </div>

                <a href="tel:+8801754486711" class="contactlist-link">
                  Monday - Saturday | 24 Hours</a>
              </li>

              <li class="contactlist-item">
                <div class="titlebox">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20.003" height="16.716" viewBox="0 0 20.003 16.716">
                    <g id="Group_365" data-name="Group 365" transform="translate(-1339 -6055)">
                      <path id="Path_195" data-name="Path 195" d="M1.92,59.664q.38.268,2.288,1.591t2.925,2.037q.112.078.474.341t.6.424q.24.162.581.363a3.368,3.368,0,0,0,.642.3,1.769,1.769,0,0,0,.558.1h.022a1.77,1.77,0,0,0,.558-.1,3.371,3.371,0,0,0,.642-.3q.34-.2.58-.363t.6-.424q.363-.263.474-.341l5.224-3.628a5.3,5.3,0,0,0,1.362-1.373A2.948,2.948,0,0,0,20,56.606a1.8,1.8,0,0,0-1.786-1.786H1.786a1.594,1.594,0,0,0-1.323.58A2.253,2.253,0,0,0,0,56.851a2.607,2.607,0,0,0,.614,1.524A5.541,5.541,0,0,0,1.92,59.664Z" transform="translate(1339 6000.18)" fill="#fff" />
                      <path id="Path_196" data-name="Path 196" d="M18.886,185.408q-3.661,2.478-5.559,3.851-.636.469-1.032.731a6.371,6.371,0,0,1-1.055.536,3.212,3.212,0,0,1-1.228.273H9.99a3.213,3.213,0,0,1-1.228-.273,6.374,6.374,0,0,1-1.055-.536q-.4-.262-1.032-.731-1.507-1.1-5.548-3.851A5.912,5.912,0,0,1,0,184.437V193.3a1.719,1.719,0,0,0,.525,1.261,1.719,1.719,0,0,0,1.261.525H18.217A1.791,1.791,0,0,0,20,193.3v-8.863A6.155,6.155,0,0,1,18.886,185.408Z" transform="translate(1339 5876.63)" fill="#fff" />
                    </g>
                  </svg>

                  <span class="title">EMAIL-SUPPORT</span>
                </div>

                <a href="mailto:smartclipping@gmail.com" class="contactlist-link">info@smartclipping24.com</a>
              </li>
            </ul>

            <ul class="sociallist">
              <li class="sociallist-item">
                <a href="#" target="_blank" class="sociallist-link">
                  <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.978516" width="31.1923" height="31.1923" rx="15.5962" fill="#395185" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9415 16.6549V26.5265C12.9415 26.6691 13.0544 26.7821 13.1971 26.7821H16.864C17.0067 26.7821 17.1196 26.6691 17.1196 26.5265V16.4944H19.7762C19.9069 16.4944 20.0199 16.3934 20.0318 16.2567L20.2873 13.2375C20.2992 13.0889 20.1803 12.9582 20.0318 12.9582H17.1196V10.8127C17.1196 10.3075 17.5297 9.90339 18.0289 9.90339H20.0793C20.2219 9.90339 20.3349 9.79047 20.3349 9.64783V6.62274C20.3349 6.48011 20.2219 6.36719 20.0793 6.36719H16.6204C14.5878 6.36719 12.9415 8.01345 12.9415 10.046V12.9582H11.111C10.9684 12.9582 10.8555 13.0711 10.8555 13.2137V16.2329C10.8555 16.3755 10.9684 16.4884 11.111 16.4884H12.9415V16.6549Z" fill="white" />
                  </svg>
                </a>
              </li>
              <li class="sociallist-item">
                <a href="#" target="_blank" class="sociallist-link">
                  <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                      <circle clip-rule="evenodd" cx="16" cy="16" fill="#007BB5" fill-rule="evenodd" r="16" />
                      <g>
                        <rect fill="#FFFFFF" height="14" width="4" x="7" y="11" />
                        <path d="M20.499,11c-2.791,0-3.271,1.018-3.499,2v-2h-4v14h4v-8c0-1.297,0.703-2,2-2c1.266,0,2,0.688,2,2v8h4v-7    C25,14,24.479,11,20.499,11z" fill="#FFFFFF" />
                        <circle cx="9" cy="8" fill="#FFFFFF" r="2" />
                      </g>
                    </g>
                    <g />
                    <g />
                    <g />
                    <g />
                    <g />
                    <g />
                  </svg>
                </a>
              </li>
              <li class="sociallist-item">
                <a href="#" target="_blank" class="sociallist-link">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="18" fill="#3f729b" />
                    <path d="M14.2511 18C14.2511 15.929 15.9295 14.2497 18.0005 14.2497C20.0715 14.2497 21.7508 15.929 21.7508 18C21.7508 20.071 20.0715 21.7503 18.0005 21.7503C15.9295 21.7503 14.2511 20.071 14.2511 18ZM12.2237 18C12.2237 21.1905 14.81 23.7767 18.0005 23.7767C21.191 23.7767 23.7772 21.1905 23.7772 18C23.7772 14.8095 21.191 12.2233 18.0005 12.2233C14.81 12.2233 12.2237 14.8095 12.2237 18ZM22.6559 11.9942C22.6558 12.2612 22.7349 12.5223 22.8831 12.7443C23.0314 12.9664 23.2422 13.1395 23.4888 13.2418C23.7354 13.3441 24.0069 13.3709 24.2688 13.3189C24.5307 13.2669 24.7713 13.1385 24.9601 12.9497C25.149 12.761 25.2777 12.5205 25.3299 12.2587C25.3821 11.9968 25.3554 11.7253 25.2534 11.4786C25.1513 11.2319 24.9783 11.021 24.7564 10.8726C24.5344 10.7241 24.2735 10.6449 24.0065 10.6447H24.0059C23.648 10.6449 23.3048 10.7871 23.0517 11.0401C22.7986 11.2932 22.6562 11.6363 22.6559 11.9942ZM13.4555 27.1572C12.3587 27.1073 11.7625 26.9246 11.3663 26.7702C10.8411 26.5657 10.4663 26.3222 10.0723 25.9287C9.67828 25.5352 9.43438 25.1608 9.2308 24.6356C9.07636 24.2396 8.89366 23.6433 8.8438 22.5464C8.78926 21.3606 8.77837 21.0044 8.77837 18.0001C8.77837 14.9958 8.79016 14.6406 8.8438 13.4537C8.89375 12.3569 9.0778 11.7617 9.2308 11.3646C9.43528 10.8393 9.67882 10.4646 10.0723 10.0705C10.4658 9.67653 10.8402 9.43263 11.3663 9.22905C11.7623 9.07461 12.3587 8.89191 13.4555 8.84205C14.6413 8.78751 14.9975 8.77662 18.0005 8.77662C21.0034 8.77662 21.36 8.78841 22.5468 8.84205C23.6437 8.892 24.2388 9.07605 24.636 9.22905C25.1612 9.43263 25.536 9.67707 25.93 10.0705C26.3241 10.464 26.5671 10.8393 26.7715 11.3646C26.926 11.7606 27.1087 12.3569 27.1585 13.4537C27.2131 14.6406 27.224 14.9958 27.224 18.0001C27.224 21.0044 27.2131 21.3596 27.1585 22.5464C27.1086 23.6433 26.925 24.2394 26.7715 24.6356C26.5671 25.1608 26.3235 25.5356 25.93 25.9287C25.5366 26.3218 25.1612 26.5657 24.636 26.7702C24.24 26.9247 23.6437 27.1074 22.5468 27.1572C21.361 27.2118 21.0048 27.2227 18.0005 27.2227C14.9962 27.2227 14.641 27.2118 13.4555 27.1572ZM13.3623 6.81813C12.1647 6.87267 11.3463 7.06257 10.6316 7.34067C9.89149 7.62786 9.26491 8.01315 8.63878 8.63829C8.01265 9.26343 7.62835 9.891 7.34116 10.6312C7.06306 11.3463 6.87316 12.1642 6.81862 13.3618C6.76318 14.5614 6.75049 14.9449 6.75049 18C6.75049 21.0551 6.76318 21.4386 6.81862 22.6381C6.87316 23.8359 7.06306 24.6537 7.34116 25.3688C7.62835 26.1085 8.01274 26.7368 8.63878 27.3617C9.26482 27.9866 9.89149 28.3713 10.6316 28.6593C11.3477 28.9374 12.1647 29.1273 13.3623 29.1819C14.5625 29.2364 14.9453 29.25 18.0005 29.25C21.0556 29.25 21.4391 29.2373 22.6386 29.1819C23.8364 29.1273 24.6542 28.9374 25.3693 28.6593C26.109 28.3713 26.7361 27.9868 27.3622 27.3617C27.9883 26.7366 28.3718 26.1085 28.6598 25.3688C28.9379 24.6537 29.1287 23.8358 29.1824 22.6381C29.2369 21.4377 29.2496 21.0551 29.2496 18C29.2496 14.9449 29.2369 14.5614 29.1824 13.3618C29.1278 12.1641 28.9379 11.3458 28.6598 10.6312C28.3718 9.89145 27.9873 9.26442 27.3622 8.63829C26.7371 8.01216 26.109 7.62786 25.3702 7.34067C24.6542 7.06257 23.8363 6.87177 22.6395 6.81813C21.44 6.76359 21.0565 6.75 18.0014 6.75C14.9462 6.75 14.5625 6.76269 13.3623 6.81813Z" fill="white" />
                  </svg>
                </a>
              </li>
              <li class="sociallist-item">
                <a href="#" target="_blank" class="sociallist-link">
                  <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.578125" y="0.978516" width="31.1923" height="31.1923" rx="15.5962" fill="#FF0000" />
                    <path d="M17.4696 21.4251C16.2512 21.33 15.7401 20.7297 14.7892 20.1473C14.3672 22.376 13.8621 24.5334 12.6794 26.0013C12.3347 26.4292 11.6393 26.2153 11.6096 25.6626C11.4313 22.1085 12.6556 19.2915 13.2618 16.3139C12.1148 14.3883 13.3985 10.5074 15.8114 11.4643C18.783 12.641 13.238 18.6258 16.9585 19.3747C20.8453 20.1532 22.4321 12.6351 20.0192 10.1865C16.5365 6.65623 9.88607 10.1033 10.7062 15.1609C10.8608 16.1237 11.669 16.5635 11.568 17.5144C11.5026 18.1028 10.8964 18.4475 10.3556 18.192C8.8163 17.4728 8.33489 15.892 8.41215 13.8832C8.54885 10.0498 11.8592 7.36347 15.1755 6.98905C19.3714 6.51954 23.3117 8.52834 23.8526 12.4746C24.4647 16.9498 21.9567 21.7757 17.4696 21.4251Z" fill="white" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <hr class="divider" />

    <div class="row">
      <div class="col-12">
        <p class="copyright">
          <span>&copy;</span> 2021 Smart Clipping. All Rights Reserved
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER SECTION END -->



<script>
  new MultiSelectTag('countries') // id
</script>

<!-- BOOTSTRAP JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- JQUERY -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.5.1.min.js"></script>

<!-- DD SELECT JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.ddslick.min.js"></script>

<!-- CUSTOM SCRIPT -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/selector.js"></script>

<!-- COMPARISON SLIDER JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/beforeafter.jquery-1.0.0.min.js"></script>

<!-- COMPARISON SLIDER SCRIPT -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/comparison-slider.js"></script>

<!-- POLYFILLED PLAYER JS CDN -->
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>

<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>

<!-- PLAYER SCRIPT -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plyer.js"></script>

<!-- OWL CAROUSEL JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>

<!-- CAROUSEL SCRIPT -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script>
  $(function() {
    $('.selectpicker').selectpicker();
  });
  $("#headingOne").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $("#headingTwo").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $("#headingThree").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $("#headingFour").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $("#headingFive").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $("#headingSix").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $("#headingSeven").click(function() {
    $(".accordion-body").toggle(1000);
  });
  $(document).ready(function(){

var mixer = mixitup('.portfolio-list');
});
</script>
<?php wp_footer(); ?>

</body>

</html>