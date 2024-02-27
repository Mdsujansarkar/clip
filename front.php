<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<!-- HOME-BANNER SECTION START -->
<section class="home-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="banner-content">
          <div class="content-head">
            <h1 class="title">
              Time for more picture
              <br />
              editing in 24h.
            </h1>

            <p class="text">Quality edits, quick, easy and affordable.</p>
          </div>

          <div class="content-buttons">
            <a href="#portfolio" class="btn-clip btn-banner btn-bordered">Portfolio</a>
            <a href="contact" class="btn-clip btn-banner btn-fill btn-trail">Free Trail</a>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="banner">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/header-slide.jpg" alt="slider" class="w-100" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- HOME-BANNER SECTION END -->

<!-- HOME PRICING SECTION START -->
<section class="home-pricing">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="pricing-content">
          <h4 class="pricing-title">
            Smart Clipping image - Background removal service >
            <span class="titletext">Start @ US $0.29</span>
          </h4>

          <p class="pricing-text">
            A leading online photo Cut Out, Image background removal, photo
            manipulation, <br />
            Deepetch &amp; Clipping path service provider loved by agencies
            &amp; Business.
          </p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="pricing-buttons">
          <a href="contact" class="btn-clip btn-service btn-fill-white">Get a Quote</a>
          <a href="https://smartclipping.io/contact/" class="btn-clip btn-service btn-fill btn-trail">Free Trial</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- HOME PRICING SECTION END -->

<section id="imageSliderDetailsSection">
  <div class="container">
    <div class="row justify-content-between align-items-center" style="margin-top: 100px">
      <div class="col-lg-5">
        <div id="imageDivSlider" class="beforeAfter" style="width: 100%">
          <img style="width: 100%; object-fit: cover" class="after_image" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/bike-after.jpg" alt="after" />
          <img style="width: 100%; object-fit: cover" class="before_image" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/bike-before.jpg" alt="before" />
        </div>
      </div>

      <div class="col-lg-6">
        <div id="imageContent">
          <h1 class="text-left">
            <span style="font-weight: bold">Image</span> Clipping
          </h1>
          <h6 class="text-left mt-3 mb-5">
            Image Clipping made easy with Smart Clipping.
          </h6>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>Test our service with 3 test images. Free of charge.</h6>
          </div>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>Fast delivery. Even with large orders.</h6>
          </div>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>High quality even with complex images.</h6>
          </div>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>Personal advisor.</h6>
          </div>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>100% Customer satisfaction.</h6>
          </div>
        </div>
        <div style="display: flex; margin-top: 30px" class="pricing-buttons">
          <a style="
                  box-shadow: 0px 0px 6px -3px #000000;
                  width: 35%;
                  margin-right: 6px;
                " href="contact" class="btn-clip btn-service btn-fill-white">Get a Quote</a>
          <a style="width: 35%" href="https://smartclipping.io/contact/" class="btn-clip btn-service btn-fill btn-trail">Free Trial</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-between align-items-center" style="margin-top: 100px">
      <div class="col-lg-6">
        <div id="imageContent">
          <h1 class="text-left">
            <span style="font-weight: bold">Image</span> Retouching
          </h1>
          <h6 class="text-left mt-3 mb-5">
            Let Doopic retouch your product images. From Hollow-Man to
            beauty retouching.
          </h6>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>Digital makeover and beauty retouching.</h6>
          </div>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>Removal of lettering and logos.</h6>
          </div>
          <div class="notesBox mt-4 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
              <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
              <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
            </svg>
            <h6>Add watermarks to secure your copyrights.</h6>
          </div>
        </div>
        <div style="display: flex; align-items: center; margin-top: 30px" class="pricing-buttons">
          <a style="
                  box-shadow: 0px 0px 6px -3px #000000;
                  width: 35%;
                  margin-right: 6px;
                " href="contact" class="btn-clip btn-service btn-fill-white">Get a Quote</a>
          <a style="width: 35%" href="https://smartclipping.io/contact/" class="btn-clip btn-service btn-fill btn-trail">Free Trial</a>
        </div>
      </div>

      <div class="col-lg-5">
        <div id="imageDivSlider" class="beforeAfter" style="width: 100%">
          <img style="width: 100%; object-fit: cover" class="after_image" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/beauty-after.jpg" alt="after" />
          <img style="width: 100%; object-fit: cover" class="before_image" src="<?php echo get_template_directory_uri() ?>/assets/images/sliders/beauty-before.jpg" alt="before" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOME-SERVICES SECTION START -->
<section class="home-portfolio" id="portfolio">
  <div class="container">
    <header class="portfolio-header">
      <!-- <span class="home-badge">
                    Project Gallery
                </span> -->
      <h2 class="service-title mt-5">Project Gallery</h2>
    </header>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px">
          <div class="card-product-header">
            <div class="beforeAfter">
              <img class="after_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/bike-after.jpg" alt="after" />
              <img class="before_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/bike-before.jpg" alt="before" />
            </div>
          </div>

          <div class="card-product-body">
            <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000">Get a Quote</a>
            <a href="https://smartclipping.io/contact/" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px">
          <div class="card-product-header">
            <div class="beforeAfter">
              <img class="after_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/after-shadow.jpg" alt="after" />
              <img class="before_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/before-shadow.jpg" alt="before" />
            </div>
          </div>

          <div class="card-product-body">
            <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000">Get a Quote</a>
            <a href="https://smartclipping.io/contact/" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px">
          <div class="card-product-header">
            <div class="beforeAfter">
              <img class="after_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/color-correction-after.jpg" alt="after" />
              <img class="before_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/color-correction-before.jpg" alt="before" />
            </div>
          </div>

          <div class="card-product-body">
            <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000">Get a Quote</a>
            <a href="https://smartclipping.io/contact/" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px">
          <div class="card-product-header">
            <div class="beforeAfter">
              <img class="after_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/hairmask_after.jpg" alt="after" />
              <img class="before_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/hairmask_before.jpg" alt="before" />
            </div>
          </div>

          <div class="card-product-body">
            <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000">Get a Quote</a>
            <a href="https://smartclipping.io/contact/" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px">
          <div class="card-product-header">
            <div class="beforeAfter">
              <img class="after_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/retouch-after.jpg" alt="after" />
              <img class="before_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/retouch-before.jpg" alt="before" />
            </div>
          </div>

          <div class="card-product-body">
            <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000">Get a Quote</a>
            <a href="https://smartclipping.io/contact/" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px">
          <div class="card-product-header">
            <div class="beforeAfter">
              <img class="after_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/size_optimize_after.jpg" alt="after" />
              <img class="before_image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/size_optimize_before.jpg" alt="before" />
            </div>
          </div>

          <div class="card-product-body">
            <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000">Get a Quote</a>
            <a href="https://smartclipping.io/contact/" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- HOME-SERVICES SECTION END -->

<!-- HOME-SERVICES SECTION START -->
<!-- HOME-SERVICES SECTION END -->
<section class="home-services">
  <div class="container">
    <header class="service-header">
      <!-- <span class="home-badge">
                    Our Solutions
                </span> -->

      <h2 class="service-title mt-5">What we do</h2>

      <p class="service-text">
        We build better businesses by creating joyful digital ideas,
        products and experiences
        <br>
        that connect the hearts of brands to the hearts of their consumers.
      </p>
    </header>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="card text-center" style="box-shadow: 0px 0px 12px -8px #000000; margin-bottom:20px;">
        <div class="solution-card-header">
              <div class="bloglink">
                <img width="53" height="54" src="https://smartclipping.io/wp-content/uploads/2023/07/graphic-design.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Image Clipping</h5>
            <p class="card-text">Retailers or photographers everyone looks forward to the image quality…</p>
            <a href="https://smartclipping.io/imageclipping" class="solution-readmore" style="margin-top: 1.8rem">Read More &gt;&gt;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card text-center" style="box-shadow: 0px 0px 12px -8px #000000">
        <div class="solution-card-header">
              <div class="bloglink">
                <img width="53" height="54" src="https://smartclipping.io/wp-content/uploads/2023/07/retouch.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Photo Retouching</h5>
            <p class="card-text">Retailers or photographers everyone looks forward to the image quality…</p>
            <a href="https://smartclipping.io/photoretouching" class="solution-readmore" style="margin-top: 1.8rem">Read More &gt;&gt;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card text-center" style="box-shadow: 0px 0px 12px -8px #000000">
        <div class="solution-card-header">
              <div class="bloglink">
                <img width="53" height="54" src="https://smartclipping.io/wp-content/uploads/2023/07/shadow-300x265.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="https://smartclipping.io/photo-retouching/" class="solution-readmore" style="margin-top: 1.8rem">Read More &gt;&gt;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card text-center" style="box-shadow: 0px 0px 12px -8px #000000">
        <div class="solution-card-header">
              <div class="bloglink">
                <img width="53" height="54" src="https://smartclipping.io/wp-content/uploads/2023/07/sizing.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="https://smartclipping.io/mirroring-shadows/" class="solution-readmore" style="margin-top: 1.8rem">Read More &gt;&gt;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card text-center" style="box-shadow: 0px 0px 12px -8px #000000">
        <div class="solution-card-header">
              <div class="bloglink">
                <img width="53" height="54" src="https://smartclipping.io/wp-content/uploads/2023/07/recolor.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Color Corrections</h5>
            <p class="card-text">Retailers or photographers everyone looks forward to the image quality…</p>
            <a href="https://smartclipping.io/color-corrections/" class="solution-readmore" style="margin-top: 1.8rem">Read More &gt;&gt;</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card text-center" style="box-shadow: 0px 0px 12px -8px #000000">
        <div class="solution-card-header">
              <div class="bloglink">
                <img width="53" height="54" src="https://smartclipping.io/wp-content/uploads/2023/07/cart.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              </div>
            </div>
          <div class="card-body">
            <h5 class="card-title">Amazon & eBay Ready</h5>
            <p class="card-text">Retailers or photographers everyone looks forward to the image quality…</p>
            <a href="https://smartclipping.io/amazon-ebay-ready/" class="solution-readmore" style="margin-top: 1.8rem">Read More &gt;&gt;</a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- HOME PARTNER SECTION START -->
<section class="home-partner blue" id="process">
  <div class="container">
    <header class="partner-header">
      <!-- <span class="home-badge">
                    Process
                </span> -->

      <h2 class="partner-title">Your partner for the optimal process</h2>

      <p class="partner-text">
        We build better businesses by creating joyful digital ideas,
        products and experiences
        <br />
        that connect the hearts of brands to the hearts of their consumers.
      </p>
    </header>

    <div class="details">
      <div class="card-detail">
        <div class="card-cap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process/register.svg" alt="card-cap" />
        </div>

        <div class="card-detail-body">
          <h4 class="title">Register for free</h4>
        </div>
      </div>

      <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
          <g id="Group_197" data-name="Group 197" transhttps://smartclipping.io/contact/="translate(-137.612 -84.632)">
            <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1" />
          </g>
        </svg>
      </div>

      <div class="card-detail">
        <div class="card-cap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process/upload.svg" alt="card-cap" />
        </div>

        <div class="card-detail-body">
          <h4 class="title">Upload data</h4>
        </div>
      </div>

      <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
          <g id="Group_197" data-name="Group 197" transhttps://smartclipping.io/contact/="translate(-137.612 -84.632)">
            <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1" />
          </g>
        </svg>
      </div>

      <div class="card-detail">
        <div class="card-cap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process/offer.svg" alt="card-cap" />
        </div>

        <div class="card-detail-body">
          <h4 class="title">Offer received</h4>
        </div>
      </div>

      <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
          <g id="Group_197" data-name="Group 197" transhttps://smartclipping.io/contact/="translate(-137.612 -84.632)">
            <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1" />
          </g>
        </svg>
      </div>

      <div class="card-detail">
        <div class="card-cap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process/processing.svg" alt="card-cap" />
        </div>

        <div class="card-detail-body">
          <h4 class="title">Processing</h4>
        </div>
      </div>

      <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
          <g id="Group_197" data-name="Group 197" transhttps://smartclipping.io/contact/="translate(-137.612 -84.632)">
            <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1" />
          </g>
        </svg>
      </div>

      <div class="card-detail">
        <div class="card-cap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process/archive.svg" alt="card-cap" />
        </div>

        <div class="card-detail-body">
          <h4 class="title">Quality Check</h4>
        </div>
      </div>

      <div class="divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
          <g id="Group_197" data-name="Group 197" transhttps://smartclipping.io/contact/="translate(-137.612 -84.632)">
            <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1" />
          </g>
        </svg>
      </div>

      <div class="card-detail">
        <div class="card-cap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process/business.svg" alt="card-cap" />
        </div>

        <div class="card-detail-body">
          <h4 class="title">Closing & Invoicing</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- HOME PARTNER SECTION END -->

<!-- HOME VIDEO SECTION START -->
<section class="home-video">
  <div class="container">
    <?php
    global $post;

    $args = array('posts_per_page' => 1, 'post_type' => 'video', 'orderby' => 'menu_order', 'order' => 'ASC');
    $myposts = get_posts($args);
    foreach ($myposts as $post) : setup_postdata($post); ?>

      <?php
      $btn_text = get_post_meta($post->ID, 'text', true);
      $btn_link = get_post_meta($post->ID, 'link', true);
      ?>

      <div class="row">
        <div class="col-lg-6">
          <div class="details">
            Your partner for the optimal process
            <h2 class="title"><?php the_title(); ?></h2>

            <p class="text">
              <?php the_content(); ?>
            </p>

            <div class="trial">
              <a href="<?php echo $btn_link; ?>" class="btn-clip btn-get btn-fill btn-trail"><?php echo $btn_text; ?></a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <?php dynamic_sidebar('video_widget'); ?>
          <!-- <div class="videoplayer">
              <video id="player" controls crossorigin playsinline>
                <source src="<?php echo $video_link; ?>" type="video/mp4" />
              </video>
            </div> -->
        </div>
      </div>
    <?php endforeach;
    wp_reset_query(); ?>
  </div>
</section>
<!-- HOME VIDEO SECTION END -->

<!-- HOME SERVICE SECTION START -->
<section class="home-service" id="service">
  <div class="container">
    <header class="service-header">
      <!-- <span class="home-badge">
                    Services
                </span> -->

      <h2 class="service-title">Our services for your business</h2>
    </header>

    <div class="row servicebox">
      <div class="col-lg-6">
        <figure class="service-thumbnail">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/services/service-1.svg" alt="service-thumbnail" />
        </figure>
      </div>

      <div class="col-lg-6">
        <div class="services">
          <?php
          global $post;

          $args = array('posts_per_page' => 4, 'post_type' => 'service', 'orderby' => 'menu_order', 'order' => 'ASC');
          $myposts = get_posts($args);
          foreach ($myposts as $post) : setup_postdata($post); ?>

            <?php
            $btn_link = get_post_meta($post->ID, 'link', true);
            ?>
            <div class="service">
              <a href="<?php echo $btn_link; ?>" class="title"><?php the_title(); ?></a>
              <p class="text">
                <?php the_content(); ?>
              </p>
            </div>
          <?php endforeach;
          wp_reset_query(); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 servicedetail"></div>
    </div>
  </div>
</section>
<!-- HOME SERVICE SECTION END -->

<!-- HOME BLOG SECTION START -->
<section class="home-blog" id="blog">
  <div class="container">
    <header class="blog-header">
      <div class="header-left">
        <!-- <span class="home-badge">
                        Blog
                    </span> -->

        <h2 class="blog-title">Blog posts about photo editing</h2>
      </div>

      <div class="header-right">
        <a href="#blog" class="btn-view">View Gallery</a>
      </div>
    </header>

    <div class="owl-blog owl-carousel owl-theme">
      <?php
      global $post;

      $args = array('posts_per_page' => 4, 'post_type' => 'blog', 'orderby' => 'menu_order', 'order' => 'ASC');
      $myposts = get_posts($args);
      foreach ($myposts as $post) : setup_postdata($post); ?>

        <?php
        $btn_text = get_post_meta($post->ID, 'text', true);
        $btn_link = get_post_meta($post->ID, 'link', true);
        ?>


        <div class="item">
          <!-- BLOG CARD START -->
          <a href="<?php echo $btn_link; ?>" class="blog-card">
            <div class="blog-card-header">
              <div class="bloglink">
                <img src="<?php the_post_thumbnail() ?>" class="blog-thumbnail" alt="blog-card-cap" />
              </div>
            </div>

            <div class="blog-card-body">
              <p class="date-time"></p>
              <?php the_content(array('class' => 'date-time')); ?>

              <div class="bloglink">
                <h2 class="blog-title">
                  <?php the_title(); ?>
                </h2>
              </div>

              <div class="blog-readmore"><?php echo $btn_text; ?></div>
            </div>
          </a>
          <!-- BLOG CARD END -->
        </div>
      <?php endforeach;
      wp_reset_query(); ?>
    </div>
  </div>
</section>
<!-- HOME BLOG SECTION END -->

<!-- HOME STRATEGY SECTION START -->
<section class="home-strategy">
  <div class="container">
    <header class="strategy-header">
      <!-- <span class="home-badge">
                    Overview
                </span> -->

      <h2 class="strategy-title">Our strategy</h2>
    </header>

    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="card-strategy">
          <div class="card-strategy-header">
            <figure class="thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/strategy/process.svg" alt="card-thumbnail" />
            </figure>
          </div>

          <div class="card-strategy-body">
            <h4 class="title">500+</h4>

            <p class="text">Image Processes in a day</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card-strategy">
          <div class="card-strategy-header">
            <figure class="thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/strategy/members.svg" alt="card-thumbnail" />
            </figure>
          </div>

          <div class="card-strategy-body">
            <h4 class="title">17+</h4>

            <p class="text">Team Members</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card-strategy">
          <div class="card-strategy-header">
            <figure class="thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/strategy/support.svg" alt="card-thumbnail" />
            </figure>
          </div>

          <div class="card-strategy-body">
            <h4 class="title">365</h4>

            <p class="text">24/7 Customer Support</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card-strategy">
          <div class="card-strategy-header">
            <figure class="thumb">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/strategy/trial.svg" alt="card-thumbnail" />
            </figure>
          </div>

          <div class="card-strategy-body">
            <h4 class="title">10+</h4>

            <p class="text">Free Trial Images</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- HOME STRATEGY SECTION END -->

<!-- HOME CLIENT SECTION START -->
<section class="home-client">
  <div class="container">
    <header class="client-header">
      <!-- <span class="home-badge">
                    Clients
                </span> -->

      <h2 class="client-title">Our awesome happy clients</h2>
    </header>

    <div class="owl-client owl-carousel owl-theme">
      <div class="item">
        <div class="card-client">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/clients/lfotto.jpg" alt="card-thumbnail" />
        </div>
      </div>

      <div class="item">
        <div class="card-client">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/clients/amorelie.png" alt="card-thumbnail" />
        </div>
      </div>

      <div class="item">
        <div class="card-client">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/clients/aboutyou.png" alt="card-thumbnail" />
        </div>
      </div>

      <div class="item">
        <div class="card-client">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/clients/amazon.png" alt="card-thumbnail" />
        </div>
      </div>

      <div class="item">
        <div class="card-client">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/clients/languagewire.png" alt="card-thumbnail" />
        </div>
      </div>

      <div class="item">
        <div class="card-client">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/clients/shipbots.gif" alt="card-thumbnail" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- HOME CLIENT SECTION END -->

<?php get_footer(); ?>