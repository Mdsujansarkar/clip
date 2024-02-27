<?php

/*
Template Name: Photo Retouching Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <!-- SERVICE BANNER SECTION START -->
    <section class="service-banner">
        <div class="container">
            <div class="service-banner-content">
                <h1 class="service-title">You have the choice</h1>
                <p class="service-text">
                    We can coloraturas any product quickly <br>
                    And easily for you.
                </p>

                <a href="#" class="btn-clip btn-banner-transparent btn-fill-transparent">Image Clipping</a>
            </div>
        </div>

        <div class="overlay"></div>
    </section>
    <!-- SERVICE BANNER SECTION END -->

    <!-- SERVICE QUALITY SECTION START -->
    <section class="service-quality">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <figure class="qualitybox">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/service/service-quality/service-quality.svg" alt="service-quality-thumbnail">
                    </figu>
                </div>

                <div class="col-lg-7">
                    <div class="qualitydetails">
                        <h2 class="title">Quality image clipping, quick & easy</h2>
                        <p class="text">
                            A wonderful serenity has taken possession of my entire soul, like these
                            sweet mornings of spring which I enjoy with my whole heart. I am alone,
                            and feel the charm of existence in this spot, which was created for the
                            bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                            exquisite.
                        </p>
                        
                        <div class="service">
                            <a href="#" class="btn-clip btn-service btn-fill btn-trail">Get started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE QUALITY SECTION END -->

    
    <!-- SERVICE SLIDER SECTION START -->
    <section class="home-portfolio">
        <div class="container">
            <div class="service-slider-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/bike-after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/bike-before.jpg" alt="before" />
                                </div>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/after-shadow.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/before-shadow.jpg" alt="before" />
                                </div>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
                    
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/color-correction-after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/color-correction-before.jpg" alt="before" />
                                </div>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/hairmask_after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/hairmask_before.jpg" alt="before" />
                                </div>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/retouch-after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/retouch-before.jpg" alt="before" />
                                </div>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div class="card-product" style="box-shadow: 0 1px 13px -5px !important; border-radius: 8px;">
                            <div class="card-product-header">
                                <div class="beforeAfter">
                                    <img class="after_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/size_optimize_after.jpg" alt="after" />
                                    <img class="before_image" src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/size_optimize_before.jpg" alt="before" />
                                </div>
                            </div>
    
                            <div class="card-product-body">
                                <a href="contact" class="btn-clip btn-gallery btn-fill-white" style="box-shadow: 0px 0px 6px -3px #000000;">Get a Quote</a>
                                <a href="form" class="btn-clip btn-gallery btn-fill btn-trail">Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text">
                <a href="#" class="btn-clip btn-test btn-fill btn-trail">FREE TEST NOW</a>
            </div>
        </div>
    </section>
    <!-- SERVICE SLIDER SECTION END -->

    <!-- SERVICE INQUIRE SECTION START -->
    <section class="service-inquire">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inquire">
                        <hgroup class="inquire-titles">
                            <h2 class="title">Clipping clothes and shoes</h2>
                            <h4 class="subtitle">Clipping shoes and clothings with the expert</h4>
                        </hgroup>

                        <div class="inquire-text">
                            A wonderful serenity has taken possession of my entire soul, like these
                            sweet mornings of spring which I enjoy with my whole heart. I am alone,
                            and feel the charm of existence in this spot, which was created for the
                            bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                            exquisite.
                        </div>

                        <div class="inquire-now">
                            <a href="#" class="btn-clip btn-get btn-bordered">Inquire Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <figure class="inquire-thumbnail">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/service/inquire/inquire.svg" alt="inquire-thumbnail">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE INQUIRE SECTION END -->

    <!-- SERVICE PRECISION SECTION START -->
    <section class="service-precision">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <figure class="precision-thumbnail">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/service/precision/precision.svg" alt="precision-thumbnail">
                    </figure>
                </div>

                <div class="col-lg-6">
                    <div class="precision">
                        <h2 class="title">
                            Precision down to the <br>
                            smallest detail
                        </h2>

                        <p class="text">
                            A wonderful serenity has taken possession of my entire soul, like these
                            sweet mornings of spring which I enjoy with my whole heart. I am alone,
                            and feel the charm of existence in this spot, which was created for the
                            bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                            exquisite.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE PRECISION SECTION END -->

    <!-- HOME PARTNER SECTION START -->
    <section class="home-partner">
        <div class="container">
            <header class="partner-header">
                <!-- <span class="home-badge">
                    Process
                </span> -->

                <h2 class="partner-title">
                    Your partner for the optimal process
                </h2>

                <p class="partner-text">
                    We build better businesses by creating joyful digital ideas, products and experiences
                    <br>
                    that connect the hearts of brands to the hearts of their consumers.
                </p>
            </header>

            <div class="details">
                <div class="card-detail">
                    <div class="card-cap">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/register.svg" alt="card-cap">
                    </div>

                    <div class="card-detail-body">
                        <h4 class="title">Register for free</h4>
                    </div>
                </div>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
                        <g id="Group_197" data-name="Group 197" transform="translate(-137.612 -84.632)">
                          <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1"/>
                        </g>
                    </svg>
                </div>

                <div class="card-detail">
                    <div class="card-cap">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/upload.svg" alt="card-cap">
                    </div>

                    <div class="card-detail-body">
                        <h4 class="title">Upload data</h4>
                    </div>
                </div>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
                        <g id="Group_197" data-name="Group 197" transform="translate(-137.612 -84.632)">
                          <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1"/>
                        </g>
                    </svg>
                </div>

                <div class="card-detail">
                    <div class="card-cap">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/offer.svg" alt="card-cap">
                    </div>

                    <div class="card-detail-body">
                        <h4 class="title">Offer received</h4>
                    </div>
                </div>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
                        <g id="Group_197" data-name="Group 197" transform="translate(-137.612 -84.632)">
                          <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1"/>
                        </g>
                    </svg>
                </div>

                <div class="card-detail">
                    <div class="card-cap">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/processing.svg" alt="card-cap">
                    </div>

                    <div class="card-detail-body">
                        <h4 class="title">Processing</h4>
                    </div>
                </div>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
                        <g id="Group_197" data-name="Group 197" transform="translate(-137.612 -84.632)">
                          <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1"/>
                        </g>
                    </svg>
                </div>

                <div class="card-detail">
                    <div class="card-cap">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/archive.svg" alt="card-cap">
                    </div>

                    <div class="card-detail-body">
                        <h4 class="title">Quality Check</h4>
                    </div>
                </div>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.88" height="17.235" viewBox="0 0 9.88 17.235">
                        <g id="Group_197" data-name="Group 197" transform="translate(-137.612 -84.632)">
                          <path id="Path_291" data-name="Path 291" d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z" fill="#d1d1d1"/>
                        </g>
                    </svg>
                </div>

                <div class="card-detail">
                    <div class="card-cap">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/business.svg" alt="card-cap">
                    </div>

                    <div class="card-detail-body">
                        <h4 class="title">Closing and Invoicing</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME PARTNER SECTION END -->

    

<?php endwhile; ?>

<?php get_footer(); ?>