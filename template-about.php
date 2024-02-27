<?php

/*
Template Name: About Us Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <!-- ABOUT BANNER SECTION START -->
    <section class="about-banner">
      <div class="container">
        <div class="about-banner-content">
          <hgroup class="about-titles">
            <h1 class="title">Welcome to Smart Clipping</h1>
            <h4 class="subtitle">All That You Need To Know!</h4>
          </hgroup>

          <p class="about-text">
            Are you an online store, or Amazon or eBay seller, self-employed
            graphic designer, photographer, or an eCommerce photo studio? Then
            you are in the right place. Doopic specialises in bulk image
            processing and acts an extension of your business by helping you
            with your workflow, allowing you to focus on other parts of your
            business.
          </p>
        </div>
      </div>

      <div class="overlay"></div>
    </section>
    <!-- ABOUT BANNER SECTION END -->

    <!-- ABOUT US SECTION START -->
    <section class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about">
              <h2 class="about-title">About us</h2>

              <p class="about-text">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole
                heart. I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so
                happy, my dear friend, so absorbed in the exquisite. Are you an
                online store, or Amazon or eBay seller, self-employed graphic
                designer, photographer, or an eCommerce photo studio? Then you
                are in the right place. Doopic specialises in bulk image
                processing and acts an extension of your business by helping you
                with your workflow, allowing you to focus on other parts of your
                business.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <figure class="about-thumbnail">
              <img
                src="<?php echo get_template_directory_uri(  )?>/assets/images/about/about-us/about-us.svg"
                alt="about-thumbnail"
              />
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT US SECTION END -->

    <!-- OUR MISSION SECTION START -->
    <section class="our-mission">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure class="mission-thumbnail">
              <img
                src="<?php echo get_template_directory_uri(  )?>/assets/images/about/our-mission/our-mission.svg"
                alt="mission-thumbnail"
              />
            </figure>
          </div>

          <div class="col-lg-6">
            <div class="mission">
              <h2 class="mission-title">Our Mission</h2>

              <p class="mission-text">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole
                heart. I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so
                happy, my dear friend, so absorbed in the exquisite. Are you an
                online store, or Amazon or eBay seller, self-employed graphic
                designer, photographer, or an eCommerce photo studio? Then you
                are in the right place. Doopic specialises in bulk image
                processing and acts an extension of your business by helping you
                with your workflow, allowing you to focus on other parts of your
                business.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- OUR MISSION SECTION END -->

    <!-- HOME PARTNER SECTION START -->
    <section class="home-partner">
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
              <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/register.svg" alt="card-cap" />
            </div>

            <div class="card-detail-body">
              <h4 class="title">Register for free</h4>
            </div>
          </div>

          <div class="divider">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="9.88"
              height="17.235"
              viewBox="0 0 9.88 17.235"
            >
              <g
                id="Group_197"
                data-name="Group 197"
                transform="translate(-137.612 -84.632)"
              >
                <path
                  id="Path_291"
                  data-name="Path 291"
                  d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z"
                  fill="#d1d1d1"
                />
              </g>
            </svg>
          </div>

          <div class="card-detail">
            <div class="card-cap">
              <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/upload.svg" alt="card-cap" />
            </div>

            <div class="card-detail-body">
              <h4 class="title">Upload data</h4>
            </div>
          </div>

          <div class="divider">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="9.88"
              height="17.235"
              viewBox="0 0 9.88 17.235"
            >
              <g
                id="Group_197"
                data-name="Group 197"
                transform="translate(-137.612 -84.632)"
              >
                <path
                  id="Path_291"
                  data-name="Path 291"
                  d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z"
                  fill="#d1d1d1"
                />
              </g>
            </svg>
          </div>

          <div class="card-detail">
            <div class="card-cap">
              <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/offer.svg" alt="card-cap" />
            </div>

            <div class="card-detail-body">
              <h4 class="title">Offer received</h4>
            </div>
          </div>

          <div class="divider">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="9.88"
              height="17.235"
              viewBox="0 0 9.88 17.235"
            >
              <g
                id="Group_197"
                data-name="Group 197"
                transform="translate(-137.612 -84.632)"
              >
                <path
                  id="Path_291"
                  data-name="Path 291"
                  d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z"
                  fill="#d1d1d1"
                />
              </g>
            </svg>
          </div>

          <div class="card-detail">
            <div class="card-cap">
              <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/processing.svg" alt="card-cap" />
            </div>

            <div class="card-detail-body">
              <h4 class="title">Processing</h4>
            </div>
          </div>

          <div class="divider">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="9.88"
              height="17.235"
              viewBox="0 0 9.88 17.235"
            >
              <g
                id="Group_197"
                data-name="Group 197"
                transform="translate(-137.612 -84.632)"
              >
                <path
                  id="Path_291"
                  data-name="Path 291"
                  d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z"
                  fill="#d1d1d1"
                />
              </g>
            </svg>
          </div>

          <div class="card-detail">
            <div class="card-cap">
              <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/archive.svg" alt="card-cap" />
            </div>

            <div class="card-detail-body">
              <h4 class="title">Quality Check</h4>
            </div>
          </div>

          <div class="divider">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="9.88"
              height="17.235"
              viewBox="0 0 9.88 17.235"
            >
              <g
                id="Group_197"
                data-name="Group 197"
                transform="translate(-137.612 -84.632)"
              >
                <path
                  id="Path_291"
                  data-name="Path 291"
                  d="M147.15,92.557l-7.583-7.583a1.141,1.141,0,0,0-1.613,1.613l6.662,6.662-6.662,6.662a1.122,1.122,0,0,0,0,1.613,1.04,1.04,0,0,0,.807.342,3.573,3.573,0,0,0,.92-.228l7.469-7.469a1.04,1.04,0,0,0,.342-.807A1.053,1.053,0,0,0,147.15,92.557Z"
                  fill="#d1d1d1"
                />
              </g>
            </svg>
          </div>

          <div class="card-detail">
            <div class="card-cap">
              <img src="<?php echo get_template_directory_uri(  )?>/assets/images/process/business.svg" alt="card-cap" />
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