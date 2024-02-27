<?php

/*
Template Name: Jobs Template
*/

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>


  <!-- CAREER BANNER SECTION START -->
  <section class="career-banner">
    <div class="container">
      <div class="career-banner-content">
        <h1 class="career-title">Careers at Smart Clipping</h1>
        <p class="career-text">
          There will be no consideration of the Quality rather than Price. The
          chart below will be ascertained by the effort of the
          product/model/objects. We can negotiate the price based on your
          requirement and volume.
        </p>
      </div>
    </div>

    <div class="overlay"></div>
  </section>
  <!-- CAREER BANNER SECTION END -->

  <!-- CAREER ABOUT SECTION START -->
  <section class="career-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="aboutbox">
            <h2 class="title">What’s special about us?</h2>

            <p class="text">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
              commodo ligula eget dolor. Aenean massa. Cum sociis natoque
              penatibus et magnis dis parturient montes, nascetur ridiculus
              mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
              quis, sem. Nulla consequat massa quis enim. Donec pede justo,
              fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
              rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
              felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
              Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
              Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
              enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
              tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque
              rutrum.
            </p>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="career-album">
            <div class="album">
              <div class="career-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/special/special-1.svg" alt="career-thumbnail" />
              </div>

              <div class="career-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/special/special-2.svg" alt="career-thumbnail" />
              </div>
            </div>

            <div class="thumb">
              <div class="career-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/special/special-3.svg" alt="career-thumbnail" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CAREER ABOUT SECTION END -->

  <!-- JOB BOX START -->
  <section class="job">
    <div class="container">
      <div class="job-content">
        <div class="job-details">
          <h2 class="title">Jobs</h2>

          <p class="text">
            There will be no consideration of the Quality rather than Price.
            The chart below will be ascertained by the effort of the.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- JOB BOX END -->

  <!-- JOB DETAILS START -->
  <section class="job-details">
    <div class="container">
      <div class="job-details-content">
        <?php
        $args = array(
          'post_type'      => 'jobs',
          'posts_per_page' => 5, // Adjust the number of posts per page as needed
        );
        $custom_query = new WP_Query( $args );
        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <div class="detailbox">
              <div class="titlebar">
                <span class="textbox primarybox">J</span>
                <span class="title"><?php the_title(); ?></span>
              </div>

              <div class="positions">
                <div class="position">
                  <p class="position-title"><?php the_excerpt(); ?></p>

                  <span class="job-badge open"> Open </span>
                </div>

                <a href="<?php the_permalink(); ?>" class="link">
                  <figure class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45">
                      <g id="group1" data-name="group1" transform="translate(-975 -1500)">
                        <g id="group2" data-name="group2" transform="translate(975 1500)" fill="#fff" stroke="#20aeef" stroke-width="1">
                          <circle cx="22.5" cy="22.5" r="22.5" stroke="none" />
                          <circle cx="22.5" cy="22.5" r="22" fill="none" />
                        </g>
                        <path id="path1" data-name="path1" d="M16.976,60.413l-.859-.859a.54.54,0,0,0-.79,0L8.574,66.306,1.821,59.554a.54.54,0,0,0-.79,0l-.859.859a.54.54,0,0,0,0,.79L8.179,69.21a.54.54,0,0,0,.79,0L16.976,61.2a.542.542,0,0,0,0-.791Z" transform="translate(933.618 1531.147) rotate(-90)" fill="#00aeef" />
                      </g>
                    </svg>
                  </figure>
                </a>
              </div>
            </div>
        <?php
          endwhile;

          // Restore original post data
          wp_reset_postdata();
        else :
          echo 'No products found.';
        endif;
        ?>
        <!-- <div class="detailbox">
            <div class="titlebar">
              <span class="textbox warningbox">M</span>
              <span class="title">Management</span>
            </div>

            <div class="positions">
              <div class="position">
                <p class="position-title">HR & Admin Executive</p>

                <span class="job-badge expired"> Expired </span>
              </div>

              <a href="#" class="link">
                <figure class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="45"
                    height="45"
                    viewBox="0 0 45 45"
                  >
                    <g
                      id="group5"
                      data-name="group1"
                      transform="translate(-975 -1500)"
                    >
                      <g
                        id="groupab"
                        data-name="groupab"
                        transform="translate(975 1500)"
                        fill="#fff"
                        stroke="#20aeef"
                        stroke-width="1"
                      >
                        <circle cx="22.5" cy="22.5" r="22.5" stroke="none" />
                        <circle cx="22.5" cy="22.5" r="22" fill="none" />
                      </g>
                      <path
                        id="path5"
                        data-name="path1"
                        d="M16.976,60.413l-.859-.859a.54.54,0,0,0-.79,0L8.574,66.306,1.821,59.554a.54.54,0,0,0-.79,0l-.859.859a.54.54,0,0,0,0,.79L8.179,69.21a.54.54,0,0,0,.79,0L16.976,61.2a.542.542,0,0,0,0-.791Z"
                        transform="translate(933.618 1531.147) rotate(-90)"
                        fill="#00aeef"
                      />
                    </g>
                  </svg>
                </figure>
              </a>
            </div>

            <div class="job-type">
              <p class="type">Job type: Permanent</p>
              <div class="divider">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                >
                  <circle
                    id="Ellipse_33"
                    data-name="Ellipse 33"
                    cx="5"
                    cy="5"
                    r="5"
                    fill="#d2effc"
                  />
                </svg>
              </div>
              <p class="vacancy">Vacancy: 1</p>
            </div>
          </div>

          <div class="detailbox">
            <div class="titlebar">
              <span class="textbox primarybox">D</span>
              <span class="title">Design</span>
            </div>

            <div class="positions">
              <div class="position">
                <p class="position-title">UI/UX Designer</p>

                <span class="job-badge open"> Open </span>
              </div>

              <a href="#" class="link">
                <figure class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="45"
                    height="45"
                    viewBox="0 0 45 45"
                  >
                    <g
                      id="groupgde"
                      data-name="groupgde"
                      transform="translate(-975 -1500)"
                    >
                      <g
                        id="groupra"
                        data-name="groupra"
                        transform="translate(975 1500)"
                        fill="#fff"
                        stroke="#20aeef"
                        stroke-width="1"
                      >
                        <circle cx="22.5" cy="22.5" r="22.5" stroke="none" />
                        <circle cx="22.5" cy="22.5" r="22" fill="none" />
                      </g>
                      <path
                        id="path5adc"
                        data-name="path5adc"
                        d="M16.976,60.413l-.859-.859a.54.54,0,0,0-.79,0L8.574,66.306,1.821,59.554a.54.54,0,0,0-.79,0l-.859.859a.54.54,0,0,0,0,.79L8.179,69.21a.54.54,0,0,0,.79,0L16.976,61.2a.542.542,0,0,0,0-.791Z"
                        transform="translate(933.618 1531.147) rotate(-90)"
                        fill="#00aeef"
                      />
                    </g>
                  </svg>
                </figure>
              </a>
            </div>

            <div class="job-type">
              <p class="type">Job type: Permanent</p>
              <div class="divider">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                >
                  <circle
                    id="Ellipse_33"
                    data-name="Ellipse 33"
                    cx="5"
                    cy="5"
                    r="5"
                    fill="#d2effc"
                  />
                </svg>
              </div>
              <p class="vacancy">Vacancy: 1</p>
            </div>
          </div>

          <div class="detailbox">
            <div class="titlebar">
              <span class="textbox dangerbox">D</span>
              <span class="title">Development</span>
            </div>

            <div class="positions">
              <div class="position">
                <p class="position-title">Senior Web Application Developer</p>

                <span class="job-badge open"> Open </span>
              </div>

              <a href="#" class="link">
                <figure class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="45"
                    height="45"
                    viewBox="0 0 45 45"
                  >
                    <g
                      id="groupgd"
                      data-name="groupgd"
                      transform="translate(-975 -1500)"
                    >
                      <g
                        id="groupr"
                        data-name="groupr"
                        transform="translate(975 1500)"
                        fill="#fff"
                        stroke="#20aeef"
                        stroke-width="1"
                      >
                        <circle cx="22.5" cy="22.5" r="22.5" stroke="none" />
                        <circle cx="22.5" cy="22.5" r="22" fill="none" />
                      </g>
                      <path
                        id="path5ad"
                        data-name="path1"
                        d="M16.976,60.413l-.859-.859a.54.54,0,0,0-.79,0L8.574,66.306,1.821,59.554a.54.54,0,0,0-.79,0l-.859.859a.54.54,0,0,0,0,.79L8.179,69.21a.54.54,0,0,0,.79,0L16.976,61.2a.542.542,0,0,0,0-.791Z"
                        transform="translate(933.618 1531.147) rotate(-90)"
                        fill="#00aeef"
                      />
                    </g>
                  </svg>
                </figure>
              </a>
            </div>

            <div class="job-type">
              <p class="type">Job type: Permanent</p>
              <div class="divider">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                >
                  <circle
                    id="Ellipse_33"
                    data-name="Ellipse 33"
                    cx="5"
                    cy="5"
                    r="5"
                    fill="#d2effc"
                  />
                </svg>
              </div>
              <p class="vacancy">Vacancy: 1</p>
            </div>
          </div>

          <div class="detailbox">
            <div class="titlebar">
              <span class="textbox warningbox">M</span>
              <span class="title">Management</span>
            </div>

            <div class="positions">
              <div class="position">
                <p class="position-title">HR & Admin Executive</p>

                <span class="job-badge expired"> Expired </span>
              </div>

              <a href="#" class="link">
                <figure class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="45"
                    height="45"
                    viewBox="0 0 45 45"
                  >
                    <g
                      id="groupg"
                      data-name="groupg"
                      transform="translate(-975 -1500)"
                    >
                      <g
                        id="groupabc"
                        data-name="groupabc"
                        transform="translate(975 1500)"
                        fill="#fff"
                        stroke="#20aeef"
                        stroke-width="1"
                      >
                        <circle cx="22.5" cy="22.5" r="22.5" stroke="none" />
                        <circle cx="22.5" cy="22.5" r="22" fill="none" />
                      </g>
                      <path
                        id="path5d"
                        data-name="path1"
                        d="M16.976,60.413l-.859-.859a.54.54,0,0,0-.79,0L8.574,66.306,1.821,59.554a.54.54,0,0,0-.79,0l-.859.859a.54.54,0,0,0,0,.79L8.179,69.21a.54.54,0,0,0,.79,0L16.976,61.2a.542.542,0,0,0,0-.791Z"
                        transform="translate(933.618 1531.147) rotate(-90)"
                        fill="#00aeef"
                      />
                    </g>
                  </svg>
                </figure>
              </a>
            </div>

            <div class="job-type">
              <p class="type">Job type: Permanent</p>
              <div class="divider">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="10"
                  height="10"
                  viewBox="0 0 10 10"
                >
                  <circle
                    id="Ellipse_33"
                    data-name="Ellipse 33"
                    cx="5"
                    cy="5"
                    r="5"
                    fill="#d2effc"
                  />
                </svg>
              </div>
              <p class="vacancy">Vacancy: 1</p>
            </div>
          </div> -->
      </div>
    </div>
  </section>
  <!-- JOB DETAILS END -->

  <!-- PRICING HELP SECTION START -->
  <section class="pricing-help">
    <div class="container">
      <div class="helpbox">
        <h2 class="title">Have any other question?</h2>

        <p class="text">
          Go to our <a href="faq" class="link">FAQ</a> page for more
          information.
        </p>
      </div>
    </div>
  </section>
  <!-- PRICING HELP SECTION END -->

<?php endwhile; ?>

<?php get_footer(); ?>