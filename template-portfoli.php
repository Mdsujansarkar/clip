<?php

/*
Template Name: Portfolio
*/

get_header(); 
global $sclipping;

?>

    <!-- SERVICE BANNER SECTION START -->
    <section class="service-banner">
        <div class="container">
            <div class="service-banner-content">
                <h1 class="service-title">Our Portfolio</h1>
                <p class="service-text">
                    We can coloraturas any product quickly <br>
                    And easily for you.
                </p>
            </div>
        </div>

        <div class="overlay"></div>
    </section>
    <!-- SERVICE BANNER SECTION END -->

    <!-- SERVICE QUALITY SECTION START -->
    <!-- SERVICE QUALITY SECTION END -->
        <!-- PORTFOLIO-SLIDER START -->
        <section class="portfolioslider">
        <div class="container">
            <div class="portfolioslider-content">
                <div class="slider-nav">
                    <div class="slide-btn">
                        <div class="cardnav">
                            <div class="cardnav-cap">
                                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/portfolio-type/Clipping-Path.png" alt="nav-thumbnail">
                            </div>
                            <a href="<?php echo $sclipping['port-link-one']; ?>">
                            <div class="cardnav-detail">
                                <h4 class="cardnav-title"><?php echo $sclipping['port-text-one']; ?></h4>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="slide-btn">
                        <div class="cardnav">
                            <div class="cardnav-cap">
                                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/portfolio-type/Ghot-Mannequeen.png" alt="nav-thumbnail">
                            </div>
                            <a href="<?php echo $sclipping['port-link-two']; ?>">
                            <div class="cardnav-detail">
                                <h4 class="cardnav-title"><?php echo $sclipping['port-text-two']; ?></h4>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="slide-btn">
                        <div class="cardnav">
                            <div class="cardnav-cap">
                                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/portfolio-type/Image-Retouch-Icon-for-Portfolio.png"
                                    alt="nav-thumbnail">
                            </div>
                            <a href="<?php echo $sclipping['port-link-three']; ?>">
                            <div class="cardnav-detail">
                                <h4 class="cardnav-title"><?php echo $sclipping['port-text-three']; ?></h4>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="slide-btn">
                        <div class="cardnav">
                            <div class="cardnav-cap">
                                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/portfolio-type/E-Commerce.png" alt="nav-thumbnail">
                            </div>
                            <a href="<?php echo $sclipping['port-link-four']; ?>">
                            <div class="cardnav-detail">
                                <h4 class="cardnav-title"><?php echo $sclipping['port-text-four']; ?></h4>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="slide-btn">
                        <div class="cardnav">
                            <div class="cardnav-cap">
                                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/portfolio-type/Masking.png" alt="nav-thumbnail">
                            </div>
                            <a href="<?php echo $sclipping['port-link-six']; ?>">
                            <div class="cardnav-detail">
                                <h4 class="cardnav-title"><?php echo $sclipping['port-text-six']; ?></h4>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="slide-btn">
                        <div class="cardnav">
                            <div class="cardnav-cap">
                                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/portfolio-type/Shadow.png" alt="nav-thumbnail">
                            </div>
                            <a href="<?php echo $sclipping['port-link-seven']; ?>">
                            <div class="cardnav-detail">
                                <h4 class="cardnav-title"><?php echo $sclipping['port-text-seven']; ?></h4>
                            </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="slider-for">
                    <div class="slide-container">
                        <div class="portfolioitem">
                            <div class="portfolioitem-header">
                                <div class="row">
                                    <div class="col-lg-8 mx-lg-auto col-12">
                                        <p>
                                            Make your every image count! Our automobile imageediting
                                            promises to fix every imperfection in your image and let your automobile
                                            image speak
                                            for itself. See our portfolio images for cars below.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolioitem-body galleryslider">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                      <?php if(! $sclipping['port-beforeAfter-one']): ?>
                                        <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-one']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-one']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-one']): ?>
                                        <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-one']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-one']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-two']): ?>
                                        <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-two']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-two']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-two']): ?>
                                        <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-two']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-two']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-three']): ?>
                                        <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-three']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-three']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-three']): ?>
                                        <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/retouch-before.jpg" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-three']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-three']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide-container">
                        <div class="portfolioitem">
                            <div class="portfolioitem-header">
                                <div class="row">
                                    <div class="col-lg-8 mx-lg-auto col-12">
                                        <p>
                                            Make your every image count! Our automobile imageediting
                                            promises to fix every imperfection in your image and let your automobile
                                            image speak
                                            for itself. See our portfolio images for cars below.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolioitem-body galleryslider">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-four']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-four']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-four']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-four']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-four']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-four']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-five']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-five']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-five']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-five']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-five']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-five']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-six']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-six']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-six']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-six']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-six']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-six']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide-container">
                        <div class="portfolioitem">
                            <div class="portfolioitem-header">
                                <div class="row">
                                    <div class="col-lg-8 mx-lg-auto col-12">
                                        <p>
                                            Make your every image count! Our automobile imageediting
                                            promises to fix every imperfection in your image and let your automobile
                                            image speak
                                            for itself. See our portfolio images for cars below.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolioitem-body galleryslider">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-seven']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-seven']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-seven']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-eight']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-eight']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-eight']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-nine']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-nine']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-nine']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-ten']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-ten']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-ten']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-beforeAfter-eleven']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-beforeAfter-eleven']; ?>">
                                            <img src="<?php echo $sclipping['port-beforeAfter-eleven']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-4">
                                    <?php if(! $sclipping['port-afterAfter-12']): ?>
                                      <a class="portfoliolink" href="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg">
                                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/sliders/hairmask_before.jpg"
                                                alt="Gallery-Thumbnail">
                                        </a>
                                        <?php else: ?>
                                        <a class="portfoliolink" href="<?php echo $sclipping['port-afterAfter-12']; ?>">
                                            <img src="<?php echo $sclipping['port-afterAfter-12']; ?>" alt="Gallery-Thumbnail">
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PORTFOLIO-SLIDER END -->
<style>

.portfolioslider {
  padding: 3rem 0rem;
  overflow: hidden;
}

.portfolioslider-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 4rem;
}

.slick-list {
  padding: 0 !important;
}

.slick-prev {
  left: calc(50% - 2rem);
  right: auto;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}

.slick-next {
  right: calc(50% - 2rem);
  left: auto;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}

.slick-arrow {
  position: absolute;
  top: 180%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 2rem;
  width: 2rem;
  overflow: hidden;
  background: transparent;
  border: none;
}

.slick-arrow svg {
  width: 100%;
  height: 100%;
}

.slick-arrow svg path {
  fill: #006F9C;
}

.slick-arrow:not([disabled]):hover svg path {
  fill: #00AEEF;
}

.baguetteBox-button {
  background: transparent;
  border: none;
  color: transparent;
  font-size: 0;
}

.baguetteBox-button:not([disabled]):hover {
  background: transparent;
}

.baguetteBox-button:not([disabled]):hover svg polyline {
  stroke: #006F9C;
}

.baguetteBox-button:focus {
  background: transparent;
}

.baguetteBox-button:focus svg svg polyline {
  stroke: #006F9C;
}

#close-button svg {
  -webkit-transition: transform 350ms ease-in-out;
  -webkit-transition: -webkit-transform 350ms ease-in-out;
  transition: -webkit-transform 350ms ease-in-out;
  transition: transform 350ms ease-in-out;
  transition: transform 350ms ease-in-out, -webkit-transform 350ms ease-in-out;
}

#close-button svg g {
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

#close-button:not([disabled]):hover svg {
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

#close-button:not([disabled]):hover svg g {
  stroke: #EC2020;
}

.offcanvas-header {
  padding: 1.25rem 2rem;
}

.offcanvas-header .brand-icon img {
  max-width: 100%;
}

.offcanvas-header .btn-close {
  opacity: 1;
  background: transparent;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.offcanvas-header .btn-close svg path {
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.offcanvas-header .btn-close:not([disabled]):hover {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}

.offcanvas-header .btn-close:not([disabled]):hover svg path {
  fill: #00AEEF;
}

.offcanvas-body {
  padding: 0rem 2rem;
}

.offcanvas-body .mobilemenu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.875rem;
  width: 100%;
}

.offcanvas-body .mobilelist {
  margin: 0;
  padding: 0;
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.25rem;
}

.offcanvas-body .mobilelist-link {
  border-bottom: solid 0.1875rem transparent;
  padding-bottom: 0.3125rem;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: 500;
  line-height: 1.66667;
  color: #2A2A2A;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.offcanvas-body .mobilelist-link:hover:not(.active) {
  border-color: #00AEEF;
  color: #00AEEF;
}

.offcanvas-body .mobilelist-link.active {
  border-color: #00AEEF;
  color: #00AEEF;
}

@media screen and (max-width: 61.9375rem) {
  .offcanvas-body .registration {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

.smartcrumb {
  padding: 2.5rem 0rem;
}

.smartcrumb .breadcrumb-item {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.07143;
  color: #2A2A2A;
}

.smartcrumb .breadcrumb-item a {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.07143;
  color: #2A2A2A;
}

.smartcrumb .breadcrumb-item.active {
  color: #006F9C;
}

.home-banner {
  padding: 0.625rem 0rem 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-banner {
    padding: 2.1875rem 0rem 3.125rem;
  }
}

.home-banner .banner-content {
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  gap: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-banner .banner-content {
    gap: 1.25rem;
    margin-bottom: 3.75rem;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

.home-banner .banner-content .content-head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 0.9375rem;
}

.home-banner .banner-content .content-head .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #2A2A2A;
}

@media screen and (max-width: 61.9375rem) {
  .home-banner .banner-content .content-head .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
    text-align: center;
  }
}

.home-banner .banner-content .content-head .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
}

@media screen and (max-width: 61.9375rem) {
  .home-banner .banner-content .content-head .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
    color: #2A2A2A;
    text-align: center;
  }
}

@media screen and (max-width: 31.25rem) {
  .home-banner .banner-content .content-head .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.home-banner .banner-content .content-buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 2.5rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-banner .banner-content .content-buttons {
    gap: 1.25rem;
  }
}

@media screen and (max-width: 61.9375rem) {
  .home-banner .banner .beforeAfter {
    width: 100%;
  }
}

.home-banner .banner .beforeAfter img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.home-pricing {
  background: #F6F6F6;
  padding: 3.75rem 0rem;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-pricing {
    margin-bottom: 3.125rem;
  }
}

.home-pricing .pricing-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-pricing .pricing-content {
    margin-bottom: 3.75rem;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

.home-pricing .pricing-content .pricing-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1rem;
  line-height: 2.28571;
  color: #2A2A2A;
}

@media screen and (max-width: 61.9375rem) {
  .home-pricing .pricing-content .pricing-title {
    text-align: center;
  }
}

.home-pricing .pricing-content .pricing-title .titletext {
  color: #EC2020;
}

.home-pricing .pricing-content .pricing-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 2.28571;
  color: #646464;
}

@media screen and (max-width: 61.9375rem) {
  .home-pricing .pricing-content .pricing-text {
    text-align: center;
  }
}

.home-pricing .pricing-buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 0.875rem;
  height: 100%;
}

@media screen and (max-width: 61.9375rem) {
  .home-pricing .pricing-buttons {
    gap: 1.25rem;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
.home-services {
  margin-bottom: 2rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-services {
    margin-bottom: 2.5rem;
  }
}

.home-services .service-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-services .service-header {
    margin-bottom: 1.875rem;
  }
}

.home-services .service-header .service-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-services .service-header .service-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-services .service-header .service-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 2;
  color: #646464;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-services .service-header .service-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.875rem;
    font-weight: normal;
    line-height: 1.42857;
  }
}

.home-services .solution-card {
  margin-bottom: 1.5rem;
}

.home-portfolio {
  background: #F6F6F6;
  padding: 5rem 0rem 1.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-portfolio {
    padding: 2.5rem 0rem 1.25rem;
  }
}

.home-portfolio .portfolio-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-portfolio .portfolio-header {
    margin-bottom: 1.875rem;
  }
}

.home-portfolio .portfolio-header .portfolio-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-portfolio .portfolio-header .portfolio-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-portfolio .portfolio-header .portfolio-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-portfolio .portfolio-header .portfolio-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.home-portfolio .card-product {
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-portfolio .card-product {
    margin-bottom: 2.5rem;
  }
}

.home-partner {
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-partner {
    padding: 2.5rem 0rem;
  }
}

.home-partner .partner-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-partner .partner-header {
    margin-bottom: 2.5rem;
  }
}

.home-partner .partner-header .partner-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-partner .partner-header .partner-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-partner .partner-header .partner-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-partner .partner-header .partner-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.home-partner .details {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 1.875rem;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

@media screen and (max-width: 61.9375rem) {
  .home-partner .details {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}

.home-partner .details .divider {
  margin-top: -4.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-partner .details .divider {
    margin-top: 0rem;
  }
  .home-partner .details .divider svg {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }
}

.home-video {
  background: #F6F6F6;
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-video {
    padding: 2.5rem 0rem;
  }
}

.home-video .details {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-video .details {
    margin-bottom: 2.5rem;
  }
}

@media screen and (max-width: 61.9375rem) and (max-width: 61.9375rem) {
  .home-video .details {
    text-align: center;
  }
}

.home-video .details .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 31.25rem) {
  .home-video .details .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-video .details .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  margin-bottom: 2.125rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-video .details .text {
    text-align: center;
  }
}

@media screen and (max-width: 31.25rem) {
  .home-video .details .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

@media screen and (max-width: 61.9375rem) {
  .home-video .details .trial {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

.home-service {
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-service {
    padding: 2.5rem 0rem;
  }
}

.home-service .service-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-service .service-header {
    margin-bottom: 2.5rem;
  }
}

.home-service .service-header .service-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-service .service-header .service-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-service .servicebox {
  margin-bottom: 5rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-service .servicebox {
    margin-bottom: 2.5rem;
  }
}

@media screen and (max-width: 61.9375rem) {
  .home-service .servicethumb {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }
}

@media screen and (max-width: 61.9375rem) {
  .home-service .servicedetail {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }
}

.home-service .service-thumbnail {
  width: 100%;
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
  overflow: hidden;
}

@media screen and (max-width: 61.9375rem) {
  .home-service .service-thumbnail {
    margin-bottom: 2.5rem;
  }
}

.home-service .service-thumbnail img {
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
  width: 100%;
}

.home-service .service-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.home-service .services {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.125rem;
  height: 100%;
}

.home-service .services .service {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

@media screen and (max-width: 31.25rem) {
  .home-service .services .service {
    gap: 0.625rem;
  }
}

.home-service .services .service .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.25rem;
  font-weight: 500;
  font-weight: 600;
  color: #00AEEF;
}

.home-service .services .service .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
}

@media screen and (max-width: 31.25rem) {
  .home-service .services .service .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.home-advantages {
  background: #F6F6F6;
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-advantages {
    padding: 2.5rem 0rem;
  }
}

.home-advantages .advantages-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-advantages .advantages-header {
    margin-bottom: 2.5rem;
  }
}

.home-advantages .advantages-header .advantages-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-advantages .advantages-header .advantages-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

@media screen and (max-width: 61.9375rem) {
  .home-advantages .card-advantage {
    margin-bottom: 2.5rem;
  }
}

.home-blog {
  padding: 5rem 0rem;
  position: relative;
}

@media screen and (max-width: 61.9375rem) {
  .home-blog {
    padding: 2.5rem 0rem;
  }
}

.home-blog .blog-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-blog .blog-header {
    margin-bottom: 2.5rem;
  }
}

@media screen and (max-width: 48rem) {
  .home-blog .blog-header {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

@media screen and (max-width: 48rem) {
  .home-blog .blog-header .header-left .home-badge {
    margin: 0 auto;
  }
}

.home-blog .blog-header .header-left .home-badge {
  max-width: 11.25rem;
  margin-bottom: 1.25rem;
}

.home-blog .blog-header .header-left .blog-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 48rem) {
  .home-blog .blog-header .header-left .blog-title {
    font-size: 2rem;
    margin: 0.75rem 0rem;
    text-align: center;
  }
}

@media screen and (max-width: 31.25rem) {
  .home-blog .blog-header .header-left .blog-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-blog .blog-header .header-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

@media screen and (max-width: 61.9375rem) {
  .home-blog .blog-header .header-right {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }
}

.home-blog .owl-nav {
  margin-top: 0;
  position: absolute;
  top: -9.125rem;
  right: 11.875rem;
  display: block !important;
}

@media screen and (max-width: 61.9375rem) {
  .home-blog .owl-nav {
    top: -9.375rem;
  }
}

@media screen and (max-width: 48rem) {
  .home-blog .owl-nav {
    top: -5rem;
    right: 0;
  }
}

.home-blog .owl-nav .owl-prev:hover,
.home-blog .owl-nav .owl-next:hover {
  background: transparent;
}

.home-strategy {
  background: #F6F6F6;
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-strategy {
    padding: 2.5rem 0rem;
  }
}

.home-strategy .strategy-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-strategy .strategy-header {
    margin-bottom: 2.5rem;
  }
}

.home-strategy .strategy-header .strategy-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-strategy .strategy-header .strategy-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

@media screen and (max-width: 61.9375rem) {
  .home-strategy .card-strategy {
    margin-bottom: 2.5rem;
  }
}

.home-client {
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-client {
    padding: 2.5rem 0rem;
  }
}

.home-client .client-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .home-client .client-header {
    margin-bottom: 2.5rem;
  }
}

.home-client .client-header .client-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
  text-align: center;
}

@media screen and (max-width: 31.25rem) {
  .home-client .client-header .client-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.home-client .owl-item {
  padding: 0rem 5rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 0.625rem;
  border-radius: 0.625rem;
  overflow: hidden;
}

.home-client .owl-item img {
  max-width: 100%;
}

.home-client .owl-item.active {
  background: #ffffff;
  -webkit-box-shadow: 0.625rem 2.1875rem 2.1875rem rgba(0, 0, 0, 0.04);
          box-shadow: 0.625rem 2.1875rem 2.1875rem rgba(0, 0, 0, 0.04);
}

.owl-stage {
  padding: 0 0 2rem;
}

.plyr__poster {
  z-index: 100;
  cursor: pointer;
}

.plyr {
  border-radius: 0.625rem;
  border-radius: 0.625rem;
}

#portfolio,
#service,
#process,
#blog {
  padding: 4rem 0rem;
}

.about-banner {
  background: url(../images/about/about-banner/about-banner.svg) center center/cover;
  padding: 5rem 0rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .about-banner {
    margin-bottom: 3.125rem;
  }
}

.about-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.about-banner-content .about-titles {
  margin-bottom: 0.625rem;
}

.about-banner-content .about-titles .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .about-banner-content .about-titles .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.about-banner-content .about-titles .subtitle {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 1.71429;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .about-banner-content .about-titles .subtitle {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.875rem;
    font-weight: 500;
    line-height: 2.57143;
    color: #ffffff;
  }
}

.about-banner-content .about-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  letter-spacing: 0.03rem;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .about-banner-content .about-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .about-banner-content .about-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.about-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.about-us {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .about-us {
    margin-bottom: 3.125rem;
  }
}

.about-us .about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .about-us .about {
    margin-bottom: 2.5rem;
  }
}

@media screen and (max-width: 48rem) {
  .about-us .about {
    gap: 0.625rem;
  }
}

.about-us .about-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 31.25rem) {
  .about-us .about-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.about-us .about-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
}

@media screen and (max-width: 31.25rem) {
  .about-us .about-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.about-us .about-thumbnail {
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
  overflow: hidden;
}

.about-us .about-thumbnail img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.about-us .about-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.our-mission {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .our-mission {
    margin-bottom: 3.125rem;
  }
}

.our-mission .mission-thumbnail {
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
  overflow: hidden;
}

@media screen and (max-width: 61.9375rem) {
  .our-mission .mission-thumbnail {
    margin-bottom: 2.5rem;
  }
}

.our-mission .mission-thumbnail img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.our-mission .mission-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.our-mission .mission {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

@media screen and (max-width: 48rem) {
  .our-mission .mission {
    gap: 0.625rem;
  }
}

.our-mission .mission-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 31.25rem) {
  .our-mission .mission-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.our-mission .mission-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
}

@media screen and (max-width: 31.25rem) {
  .our-mission .mission-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.contact-banner {
  background: url(../images/contact/contact-banner/contact-banner.svg) center center/cover;
  padding: 3.75rem 0rem 5.625rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .contact-banner {
    margin-bottom: 3.125rem;
  }
}

.contact-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.contact-banner-content .contact-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .contact-banner-content .contact-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.contact-banner-content .contact-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  letter-spacing: 0.03rem;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .contact-banner-content .contact-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .contact-banner-content .contact-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.contact-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.contact {
  margin-bottom: 9.375rem;
}

@media screen and (max-width: 61.9375rem) {
  .contact {
    margin-bottom: 5rem;
  }
}

.contact-form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.contact-form .inputbox .form-floating .form-control,
.contact-form .inputbox .form-floating .form-select {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 3.33333;
}

.contact-form .inputbox .form-control,
.contact-form .inputbox .form-select {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 3.33333;
  border: solid 0.0625rem #e6e6e6;
  background: #f8f8f8;
  color: #646464;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.contact-form .inputbox .form-control:focus,
.contact-form .inputbox .form-select:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  border-color: #646464;
}

.contact-form .inputbox .comment .form-control {
  padding: .75rem;
}

.contact-form .inputbox .input-group {
  border: solid 0.0625rem transparent;
  border-radius: 0.25rem;
  border-radius: 0.25rem;
}

.contact-form .inputbox .input-group-text {
  background: #f8f8f8;
  border-color: #e6e6e6;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-right: 0;
}

.contact-form .inputbox .input-group select {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 3.33333;
}

.contact-form .inputbox .form-select {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 3.33333;
  -moz-appearance: none;
  -o-appearance: none;
  -ms-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  cursor: pointer;
  border: solid 0.0625rem transparent;
  background: #f8f8f8 url("data:image/svg+xml;utf8,<svg viewBox='0 0 140 140' width='20' height='16' xmlns='http://www.w3.org/2000/svg'><g><path d='m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z' fill='2a2a2a'/></g></svg>") no-repeat 98.5% center;
}

.contact-form .inputbox .error-message {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: 500;
  line-height: 2.25;
  color: #EC2020;
  display: none;
}

.contact-form .inputbox.error .form-floating .form-control {
  border-color: #EC2020;
}

.contact-form .inputbox.error .form-floating label {
  color: #EC2020;
  display: block;
}

.contact-form .inputbox.error .form-select {
  border-color: #EC2020;
}

.contact-form .inputbox.error .input-group {
  border-color: #EC2020;
}

.contact-form .inputbox.error .error-message {
  display: block;
}

.contact-form .inputboxrow {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.875rem;
}

@media screen and (max-width: 61.9375rem) {
  .contact-form .inputboxrow {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

.contact-form .inputboxrow .inputcol {
  width: 50%;
}

@media screen and (max-width: 61.9375rem) {
  .contact-form .inputboxrow .inputcol {
    width: 100%;
  }
}

.contact-form .inputboxrow .inputcol .input-group .phone {
  width: calc(100% - 5.625rem);
}

.contact-form .inputboxrow .inputcol .input-group .form-select:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.contact-form .inputboxrow .inputcol .input-group .form-control:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.contact-form .inputboxrow .inputcol .inputs .form-select:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.contact-form .inputboxrow .inputcol .inputs .form-control:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.contact-form .inputboxrow .inputcol .inputs .form-floating .form-control {
  background: #f8f8f8;
  color: #646464;
  border: solid 0.0625rem #e6e6e6;
}

.contact-form .inputboxrow .inputcol .inputs .form-floating .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
  color: #646464;
}

.contact-form .inputboxrow .inputcol .inputs .form-floating label {
  font-size: 1rem;
  color: #646464;
}

.contact-info {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .contact-info {
    margin-bottom: 3.125rem;
  }
}

.contact-info-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .contact-info-content {
    gap: 3.125rem;
  }
}

.contact-info .info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.contact-info .info .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 2.88889;
  color: #2A2A2A;
  text-align: center;
}

.contact-info .info .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
  text-align: center;
}

.contact-info .infobox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .contact-info .infobox {
    margin-bottom: 2.5rem;
  }
}

.contact-info .infobox .icon {
  margin-bottom: 0.625rem;
}

.contact-info .infobox .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 4.28571;
  color: #2A2A2A;
  font-weight: 600;
  text-align: center;
}

.contact-info .infobox .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
  text-align: center;
}

.contact-info .infobox .contactlist-item {
  list-style: none;
}

.contact-info .infobox .contactlist-link {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
  text-align: center;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.contact-info .infobox .contactlist-link:not([disabled]):hover {
  color: #000000;
}

.career-banner {
  background: url(../images/career/career-banner/career-banner.svg) center center/cover;
  padding: 3.75rem 0rem 5.625rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .career-banner {
    margin-bottom: 3.125rem;
  }
}

.career-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.career-banner-content .career-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .career-banner-content .career-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.career-banner-content .career-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  letter-spacing: 0.03rem;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .career-banner-content .career-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .career-banner-content .career-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.career-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.career-about {
  margin-bottom: 10rem;
}

@media screen and (max-width: 61.9375rem) {
  .career-about {
    margin-bottom: 5rem;
  }
}

.career-about .aboutbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .career-about .aboutbox {
    margin-bottom: 2.5rem;
  }
}

.career-about .aboutbox .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 31.25rem) {
  .career-about .aboutbox .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.career-about .aboutbox .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
}

@media screen and (max-width: 31.25rem) {
  .career-about .aboutbox .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.career-about .career-album {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.875rem;
}

.career-about .career-album .album {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.875rem;
}

@media screen and (max-width: 61.9375rem) {
  .career-about .career-album .album {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

.career-about .career-album .album .career-thumb {
  overflow: hidden;
  width: 50%;
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
}

@media screen and (max-width: 61.9375rem) {
  .career-about .career-album .album .career-thumb {
    width: 100%;
  }
}

.career-about .career-album .album .career-thumb img {
  width: 100%;
  height: 100%;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.career-about .career-album .album .career-thumb img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.career-about .career-album .thumb .career-thumb {
  overflow: hidden;
  width: 100%;
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
}

.career-about .career-album .thumb .career-thumb img {
  width: 100%;
  height: 100%;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.career-about .career-album .thumb .career-thumb img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

@media screen and (max-width: 61.9375rem) {
  .job {
    margin-bottom: 3.125rem;
  }
}

.job-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

@media screen and (max-width: 61.9375rem) {
  .job-content {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    gap: 1.875rem;
  }
}

.job-content .job-details {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  width: 65%;
}

@media screen and (max-width: 61.9375rem) {
  .job-content .job-details {
    width: 100%;
  }
}

.job-content .job-details .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 600;
  line-height: 3.92857;
  color: #2A2A2A;
}

@media screen and (max-width: 31.25rem) {
  .job-content .job-details .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
    color: #2A2A2A;
  }
}

.job-content .job-details .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 31.25rem) {
  .job-content .job-details .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.job-content .job-select {
  width: 35%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

@media screen and (max-width: 61.9375rem) {
  .job-content .job-select {
    width: 100%;
  }
}

.job-content .job-select .selectjob {
  -moz-appearance: none;
  -o-appearance: none;
  -ms-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  cursor: pointer;
  color: #ffffff;
  width: 100%;
  background: #00AEEF url("data:image/svg+xml;utf8,<svg viewBox='0 0 140 140' width='20' height='16' xmlns='http://www.w3.org/2000/svg'><g><path d='m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z' fill='white'/></g></svg>") no-repeat 98.5% center;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  font-size: 1.125rem;
  padding: 0.5rem 1.25rem;
  border-radius: 0.25rem;
  border-radius: 0.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .job-content .job-select .selectjob {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .job-content .job-select .selectjob {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.job-details {
  margin-bottom: 9.375rem;
}

@media screen and (max-width: 61.9375rem) {
  .job-details {
    margin-bottom: 4.6875rem;
  }
}

.job-details-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 3.125rem;
}

@media screen and (max-width: 61.9375rem) {
  .job-details-content {
    gap: 1.5625rem;
  }
}

.job-details-content .detailbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 0rem;
}

.job-details-content .detailbox .titlebar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.25rem;
}

.job-details-content .detailbox .titlebar .textbox {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 3.92857;
  color: #ffffff;
  height: 1.875rem;
  width: 1.875rem;
  border-radius: 0.1875rem;
  border-radius: 0.1875rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-align: center;
  overflow: hidden;
  padding: 0.625rem;
}

.job-details-content .detailbox .titlebar .primarybox {
  background: #20AEEF;
}

.job-details-content .detailbox .titlebar .dangerbox {
  background: #EC2020;
}

.job-details-content .detailbox .titlebar .warningbox {
  background: #EFC720;
}

.job-details-content .detailbox .titlebar .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 3.92857;
  color: #2A2A2A;
}

.job-details-content .detailbox .positions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.job-details-content .detailbox .position {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.5625rem;
  margin-bottom: 0.3125rem;
}

.job-details-content .detailbox .position-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 600;
  line-height: 3.92857;
  color: #2A2A2A;
}

.job-details-content .detailbox .position .job-badge {
  width: 4.375rem;
  height: 1.875rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-align: center;
  padding: 0.25rem 1.25rem;
  border-radius: 0.25rem;
  border-radius: 0.25rem;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 4.58333;
  color: #ffffff;
}

.job-details-content .detailbox .position .open {
  background: #d2effc;
  color: #00AEEF;
}

.job-details-content .detailbox .position .expired {
  background: #fcefd2;
  color: #ffce00;
}

.job-details-content .detailbox .job-type {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.25rem;
}

.job-details-content .detailbox .job-type .type {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 31.25rem) {
  .job-details-content .detailbox .job-type .type {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.job-details-content .detailbox .job-type .vacancy {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 31.25rem) {
  .job-details-content .detailbox .job-type .vacancy {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.blog-banner {
  background: url(../images/blog/blog-banner/blog-banner.svg) center center/cover;
  padding: 5rem 0rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .blog-banner {
    margin-bottom: 3.125rem;
  }
}

.blog-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.blog-banner-content .blog-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .blog-banner-content .blog-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.blog-banner-content .blog-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  text-align: center;
  letter-spacing: 0.03rem;
  margin-bottom: 2.125rem;
}

@media screen and (max-width: 61.9375rem) {
  .blog-banner-content .blog-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .blog-banner-content .blog-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.blog-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.blog-main .blog-card {
  margin-bottom: 1.5rem;
}

.faq-banner {
  background: url(../images/faq/faq-banner/faq-banner.svg) center center/cover;
  padding: 3.75rem 0rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .faq-banner {
    margin-bottom: 3.125rem;
  }
}

.faq-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.faq-banner-content .faq-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .faq-banner-content .faq-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.faq-banner-content .faq-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  text-align: center;
  letter-spacing: 0.03rem;
  margin-bottom: 2.125rem;
}

@media screen and (max-width: 61.9375rem) {
  .faq-banner-content .faq-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .faq-banner-content .faq-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.faq-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.faq {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .faq {
    margin-bottom: 3.125rem;
  }
}

.faq .accordion {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.faq .accordion-item {
  border: none;
}

.faq .accordion-button {
  background: #ffffff;
  color: #2A2A2A;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.14286;
  letter-spacing: 0.03rem;
  padding: 1.25rem 2.5rem;
  border: solid 0.0625rem #332e57;
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.faq .accordion-button:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
}

.faq .accordion-button::after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='10.135' viewBox='0 0 18 10.135'%3E%3Cpath id='Vector' d='M9.006,10.134a1.687,1.687,0,0,0,1.194-.5l7.488-7.691a1.149,1.149,0,0,0,0-1.61,1.1,1.1,0,0,0-1.588,0l-7.083,7.3L1.935.338a1.1,1.1,0,0,0-1.588,0,1.149,1.149,0,0,0,0,1.61L7.835,9.639A1.6,1.6,0,0,0,9.006,10.134Z' transform='translate(-0.018)' fill='%232a2a2a' fill-rule='evenodd'/%3E%3C/svg%3E ");
}

.faq .accordion-button:not(.collapsed) {
  background: #ffffff;
  color: #2A2A2A;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.14286;
  letter-spacing: 0.03rem;
  -webkit-box-shadow: none;
          box-shadow: none;
  border-top-left-radius: 0.3125rem;
  border-top-right-radius: 0.3125rem;
  border-bottom-left-radius: 0rem;
  border-bottom-right-radius: 0rem;
}

.faq .accordion-button:not(.collapsed)::after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 15 15'%3E%3Cpath id='Vector' d='M6.184,7.508l-5.9-5.9A.936.936,0,0,1,1.605.282l5.9,5.9,5.9-5.9a.936.936,0,1,1,1.323,1.323l-5.9,5.9,5.9,5.9a.936.936,0,1,1-1.323,1.323l-5.9-5.9-5.9,5.9A.936.936,0,1,1,.282,13.41Z' transform='translate(-0.008 -0.008)' fill='%232a2a2a' fill-rule='evenodd'/%3E%3C/svg%3E%0A");
}

.faq .accordion-body {
  border: solid 0.0625rem #332e57;
  border-top: 0;
  border-bottom-left-radius: 0.3125rem;
  border-bottom-right-radius: 0.3125rem;
  padding: 1.25rem 1.25rem 1.25rem 2.5rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 3rem;
}

.faq .accordion-body .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.5;
  color: #2A2A2A;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 31.25rem) {
  .faq .accordion-body .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.faq .accordion-body .faqlist {
  padding-left: 0.9375rem;
}

.faq .accordion-body .faqlist-item {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.5;
  color: #2A2A2A;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 31.25rem) {
  .faq .accordion-body .faqlist-item {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.portfolio-banner {
  background: url(../images/portfolio/portfolio-banner/portfolio-banner.svg) center center/cover;
  padding: 5rem 0rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .portfolio-banner {
    margin-bottom: 3.125rem;
  }
}

.portfolio-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.portfolio-banner-content .portfolio-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .portfolio-banner-content .portfolio-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.portfolio-banner-content .portfolio-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  text-align: center;
  letter-spacing: 0.03rem;
  margin-bottom: 2.125rem;
}

@media screen and (max-width: 61.9375rem) {
  .portfolio-banner-content .portfolio-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .portfolio-banner-content .portfolio-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.portfolio-banner-content .portfolio {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  gap: 1.25rem;
}

.portfolio-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.portfolio-main {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .portfolio-main {
    margin-bottom: 3.125rem;
  }
}

.portfolio-main-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 3.75rem;
}

.portfolio-main-content .portfolio {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  text-align: center;
}

.portfolio-main-content .portfolio-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #2A2A2A;
}

@media screen and (max-width: 61.9375rem) {
  .portfolio-main-content .portfolio-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.portfolio-main-content .portfolio-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 31.25rem) {
  .portfolio-main-content .portfolio-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.portfolio-main .card-product {
  margin-bottom: 1.5rem;
}

.portfolioitem {
  padding-top: 1.5rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.5rem;
}

.portfolioitem-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-align: center;
}

.portfolioitem-header p {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.71429;
  color: #2A2A2A;
  cursor: text;
}

.portfolioitem-header p a {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.71429;
  color: #332e57;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.portfolioitem-header p a:not([disabled]):hover {
  color: #2A2A2A;
}

.portfolioitem-header a {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.71429;
  color: #332e57;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.portfolioitem-header a:not([disabled]):hover {
  color: #2A2A2A;
}

.portfolioitem-body .portfoliolink {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 100%;
  overflow: hidden;
}

.portfolioitem-body .portfoliolink img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -webkit-transition: transform 350ms ease-in-out;
  -webkit-transition: -webkit-transform 350ms ease-in-out;
  transition: -webkit-transform 350ms ease-in-out;
  transition: transform 350ms ease-in-out;
  transition: transform 350ms ease-in-out, -webkit-transform 350ms ease-in-out;
}

.portfolioitem-body .portfoliolink img:not([disabled]):hover {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.privacy-policy-banner {
  background: url(../images/privacy-policy/privacy-policy-banner/privacy-policy-banner.svg) center center/cover;
  padding: 3.75rem 0rem 5.625rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-banner {
    margin-bottom: 3.125rem;
  }
}

.privacy-policy-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.privacy-policy-banner-content .privacy-policy-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-banner-content .privacy-policy-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.privacy-policy-banner-content .privacy-policy-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  letter-spacing: 0.03rem;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-banner-content .privacy-policy-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .privacy-policy-banner-content .privacy-policy-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.privacy-policy-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.privacy-policy-info {
  margin-bottom: 10rem;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-info {
    margin-bottom: 5rem;
  }
}

.privacy-policy-info .privacy-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  height: 100%;
  gap: 1.25rem;
}

.privacy-policy-info .privacy-info .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #2A2A2A;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-info .privacy-info .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.privacy-policy-info .privacy-info .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-info .privacy-info .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
    color: #646464;
    margin-bottom: 2.5rem;
  }
}

@media screen and (max-width: 31.25rem) {
  .privacy-policy-info .privacy-info .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
    color: #646464;
  }
}

.privacy-policy-info .privacy-thumbnail {
  border-radius: 0.625rem;
  border-radius: 0.625rem;
  overflow: hidden;
}

.privacy-policy-info .privacy-thumbnail img {
  width: 100%;
  height: 100%;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.privacy-policy-info .privacy-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.privacy-policy {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy {
    margin-bottom: 3.125rem;
  }
}

.privacy-policy-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.privacy-policy-content .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #2A2A2A;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-content .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.privacy-policy-content .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-content .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
    color: #2A2A2A;
  }
}

@media screen and (max-width: 31.25rem) {
  .privacy-policy-content .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
    color: #2A2A2A;
  }
}

.privacy-policy-content .contentbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.privacy-policy-content .contentbox .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1rem;
  font-weight: 500;
  line-height: 3.125;
  color: #2A2A2A;
}

.privacy-policy-content .contentbox .subtitle {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1rem;
  font-weight: 500;
  line-height: 3.3125;
  color: #2A2A2A;
}

.privacy-policy-content .contentbox .details .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  letter-spacing: 0.03rem;
}

@media screen and (max-width: 61.9375rem) {
  .privacy-policy-content .contentbox .details .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
    color: #2A2A2A;
  }
}

@media screen and (max-width: 31.25rem) {
  .privacy-policy-content .contentbox .details .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
    color: #2A2A2A;
  }
}

.pricing {
  margin-bottom: 9.375rem;
}

@media screen and (max-width: 61.9375rem) {
  .pricing {
    margin-bottom: 4.6875rem;
  }
}

.pricing-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 3.75rem;
}

.pricing-content .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 2.88889;
  color: #2A2A2A;
  text-align: center;
}

.pricing-content .pricing-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 0.625rem;
  border-radius: 0.625rem;
  width: 100%;
  overflow: hidden;
}

@media screen and (max-width: 61.9375rem) {
  .pricing-content .pricing-box {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

.pricing-content .pricing-box .package {
  width: 33.33%;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .pricing-content .pricing-box .package {
    width: 100%;
    border-radius: 0.625rem;
    border-radius: 0.625rem;
  }
}

.pricing-content .pricing-box .package-header {
  padding: 1.3125rem;
}

.pricing-content .pricing-box .package-header .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 600;
  line-height: 3.92857;
  color: #ffffff;
}

.pricing-content .pricing-box .package-body .package-info {
  padding: 1.3125rem;
  border-bottom: solid 0.0625rem #e6e6e6;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 600;
  line-height: 3.92857;
  color: #2A2A2A;
  max-width: 99%;
  overflow: hidden;
  text-overflow: ellipsis;
}

@media screen and (max-width: 74.9375rem) {
  .pricing-content .pricing-box .package-body .package-info {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
    font-weight: 600;
    color: #2A2A2A;
  }
}

.pricing-content .pricing-box .basic .package-header {
  background: #df7a91;
  color: #ffffff;
}

.pricing-content .pricing-box .basic .package-body {
  background: #ffffff;
}

.pricing-content .pricing-box .standard .package-header {
  background: #add3a9;
  color: #ffffff;
}

.pricing-content .pricing-box .standard .package-body {
  background: #add3a9;
}

.pricing-content .pricing-box .premium .package-header {
  background: #00AEEF;
  color: #ffffff;
}

.pricing-content .pricing-box .premium .package-body {
  background: #00AEEF;
}

.pricing-info {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .pricing-info {
    margin-bottom: 3.125rem;
  }
}

.pricing-info-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.5rem;
}

.pricing-info-content .titlebox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 100%;
}

@media screen and (max-width: 61.9375rem) {
  .pricing-info-content .titlebox {
    margin-bottom: 1.5rem;
  }
}

.pricing-info-content .titlebox .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 2;
  color: #2A2A2A;
}

.pricing-info-content .pricing-thumbnail {
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
  overflow: hidden;
  width: 100%;
  height: 100%;
}

@media screen and (max-width: 61.9375rem) {
  .pricing-info-content .pricing-thumbnail {
    margin-bottom: 1.5rem;
  }
}

.pricing-info-content .pricing-thumbnail img {
  width: 100%;
  height: 100%;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.pricing-info-content .pricing-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.pricing-help {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .pricing-help {
    margin-bottom: 3.125rem;
  }
}

.pricing-help .helpbox {
  padding: 3.75rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  background: #00AEEF;
  color: #ffffff;
  border-radius: 0.625rem;
  border-radius: 0.625rem;
  text-align: center;
  overflow: hidden;
}

.pricing-help .helpbox .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.125rem;
  font-weight: 600;
  line-height: 2.88889;
  color: #ffffff;
}

@media screen and (max-width: 31.25rem) {
  .pricing-help .helpbox .title {
    font-size: 1.25rem;
  }
}

.pricing-help .helpbox .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 3.92857;
  color: #ffffff;
}

@media screen and (max-width: 31.25rem) {
  .pricing-help .helpbox .text {
    font-size: 1rem;
  }
}

.pricing-help .helpbox .text .link {
  color: #ffffff;
  text-transform: uppercase;
  text-decoration: underline;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.pricing-help .helpbox .text .link:not([disabled]):hover {
  color: rgba(255, 255, 255, 0.75);
  text-decoration: none;
}

.registration {
  padding: 6.25rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .registration {
    padding: 3.125rem 0rem;
  }
}

.registration .register-info .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  margin-bottom: 1.5625rem;
}

@media screen and (max-width: 61.9375rem) {
  .registration .register-info .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.registration .register-info .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  margin-bottom: 5.125rem;
}

.registration .register-info .login-detail {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1.25rem;
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 4.28571;
}

.registration .register-info .login-detail .login-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 1.66667;
  color: inherit;
}

.registration .register-info .login-detail .btn-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 1.66667;
}

.registration-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 2.5rem;
}

.registration-info .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  display: none;
}

@media screen and (max-width: 61.9375rem) {
  .registration-info .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
    display: block;
    text-align: center;
  }
}

.registration-info .login-detail {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 4.28571;
  display: none;
}

@media screen and (max-width: 61.9375rem) {
  .registration-info .login-detail {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    gap: 1.25rem;
  }
}

.registration-info .login-detail .login-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 1.66667;
  color: inherit;
}

.registration-info .login-detail .btn-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 1.66667;
}
.cardnav a {
  color:#000000;
}
.registration-form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.registration-form .inputbox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 0.25rem;
}

.registration-form .inputbox .form-floating .form-control {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 3.33333;
  background: #f8f8f8;
  color: #646464;
  border: solid 0.0625rem #e6e6e6;
  padding: 1rem;
  height: 100%;
}

.registration-form .inputbox .form-floating .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
  color: #646464;
}

.registration-form .inputbox .form-floating label {
  font-size: 0.875rem;
  color: #b4b4b4;
}

.registration-form .inputbox .error-message {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: 500;
  line-height: 2.25;
  color: #EC2020;
  display: none;
}

.registration-form .inputbox.error .form-floating .form-control {
  border-color: #EC2020;
}

.registration-form .inputbox.error .form-floating label {
  color: #EC2020;
  display: block;
}

.registration-form .inputbox.error .error-message {
  display: block;
}

.registration-form .submitbox {
  margin: 1.875rem 0rem;
}

.service-banner {
  background: url(../images/service/service-banner/service-banner.svg) center center/cover;
  padding: 3.75rem 0rem 5.625rem;
  position: relative;
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-banner {
    margin-bottom: 3.125rem;
  }
}

.service-banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
  position: relative;
  z-index: 2;
}

.service-banner-content .service-title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 2.25rem;
  font-weight: 600;
  line-height: 1.27778;
  color: #ffffff;
  text-align: center;
}

@media screen and (max-width: 61.9375rem) {
  .service-banner-content .service-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

.service-banner-content .service-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: 500;
  line-height: 2.57143;
  color: #ffffff;
  letter-spacing: 0.03rem;
  text-align: center;
  margin-bottom: 2.125rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-banner-content .service-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.08333;
    color: #ffffff;
  }
}

@media screen and (max-width: 31.25rem) {
  .service-banner-content .service-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
  }
}

.service-banner .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.service-quality {
  margin-bottom: 6.25rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-quality {
    margin-bottom: 3.125rem;
  }
}

.service-quality .qualitybox {
  border-radius: 0.3125rem;
  border-radius: 0.3125rem;
  -webkit-box-shadow: 0.625rem 0.625rem 1.5625rem rgba(0, 0, 0, 0.05);
          box-shadow: 0.625rem 0.625rem 1.5625rem rgba(0, 0, 0, 0.05);
  overflow: hidden;
}

.service-quality .qualitybox img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.service-quality .qualitybox img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

@media screen and (max-width: 61.9375rem) {
  .service-quality .qualitybox {
    margin-bottom: 2.5rem;
  }
}

.service-quality .qualitydetails {
  padding-left: 1.625rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 0.9375rem;
}

.service-quality .qualitydetails .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 61.9375rem) {
  .service-quality .qualitydetails .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

@media screen and (max-width: 31.25rem) {
  .service-quality .qualitydetails .title {
    text-align: center;
  }
}

.service-quality .qualitydetails .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  margin-bottom: 1.25rem;
}

@media screen and (max-width: 31.25rem) {
  .service-quality .qualitydetails .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
    text-align: center;
  }
}

.service-quality .qualitydetails .service {
  max-width: 16.25rem;
}

@media screen and (max-width: 31.25rem) {
  .service-quality .qualitydetails .service {
    margin: 0 auto;
  }
}

@media screen and (max-width: 61.9375rem) {
  .service-quality .qualitydetails {
    padding-left: 0rem;
  }
}

.service-slider {
  margin-bottom: 10rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-slider {
    margin-bottom: 5rem;
  }
}

.service-slider-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 7.8125rem;
  margin-bottom: 3.75rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-slider-content {
    gap: 2rem;
    margin-bottom: 1.25rem;
  }
}

@media screen and (max-width: 48rem) {
  .service-slider-content {
    margin-bottom: 1.875rem;
    gap: 0rem;
  }
  .service-slider-content .card-product {
    margin-bottom: 1.875rem;
  }
}

.service-inquire {
  margin-bottom: 5rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-inquire {
    margin-bottom: 2.5rem;
  }
}

.service-inquire .inquire {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 1.25rem;
}

.service-inquire .inquire-titles {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  gap: 0.9375rem;
}

.service-inquire .inquire-titles .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 61.9375rem) {
  .service-inquire .inquire-titles .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

@media screen and (max-width: 31.25rem) {
  .service-inquire .inquire-titles .title {
    text-align: center;
  }
}

.service-inquire .inquire-titles .subtitle {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 2.35714;
  color: #00AEEF;
  color: #000000;
}

@media screen and (max-width: 31.25rem) {
  .service-inquire .inquire-titles .subtitle {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 2.33333;
    color: #646464;
    color: #000000;
    text-align: center;
  }
}

.service-inquire .inquire-text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  margin-bottom: 1.875rem;
}

@media screen and (max-width: 31.25rem) {
  .service-inquire .inquire-text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
    text-align: center;
  }
}

@media screen and (max-width: 31.25rem) {
  .service-inquire .inquire-now {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}

@media screen and (max-width: 61.9375rem) {
  .service-inquire .inquire {
    margin-bottom: 2.5rem;
  }
}

.service-inquire .inquire-thumbnail {
  overflow: hidden;
}

.service-inquire .inquire-thumbnail img {
  -o-object-fit: cover;
     object-fit: cover;
  width: 100%;
  height: 100%;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.service-inquire .inquire-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.service-precision {
  background: #F6F6F6;
  padding: 5rem 0rem;
}

@media screen and (max-width: 61.9375rem) {
  .service-precision {
    padding: 2.5rem 0rem;
  }
}

.service-precision .precision-thumbnail {
  overflow: hidden;
}

.service-precision .precision-thumbnail img {
  -o-object-fit: cover;
     object-fit: cover;
  width: 100%;
  height: 100%;
  -webkit-transition: all 350ms ease-in-out;
  transition: all 350ms ease-in-out;
}

.service-precision .precision-thumbnail img:not([disabled]):hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

@media screen and (max-width: 61.9375rem) {
  .service-precision .precision-thumbnail {
    margin-bottom: 2.5rem;
  }
}

.service-precision .precision {
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.service-precision .precision .title {
  font-family: "Poppins";
  font-style: normal;
  font-size: 1.75rem;
  font-weight: 600;
  line-height: 1.64286;
  color: #000000;
}

@media screen and (max-width: 61.9375rem) {
  .service-precision .precision .title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 1.25rem;
    font-weight: 500;
    line-height: 1.75;
  }
}

@media screen and (max-width: 31.25rem) {
  .service-precision .precision .title {
    text-align: center;
  }
}

.service-precision .precision .text {
  font-family: "Poppins";
  font-style: normal;
  font-size: 0.75rem;
  font-weight: normal;
  line-height: 2.33333;
  color: #646464;
  margin-bottom: 1.875rem;
}

@media screen and (max-width: 31.25rem) {
  .service-precision .precision .text {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.66667;
    text-align: center;
  }
}
.cardnav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}
.cardnav-cap img {
    width: 80%;
    height: 80%;
    -o-object-fit: cover;
    object-fit: cover;
}
@media screen and (min-width: 48rem){
.cardnav-title {
    font-family: "Poppins";
    font-style: normal;
    font-size: 0.875rem;
    font-weight: normal;
    line-height: 1.07143;
}
}
</style>
<?php get_footer(); ?>