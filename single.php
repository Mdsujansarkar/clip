<?php

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <!-- BLOG BANNER SECTION START -->
    <section class="blog-banner blog-banner-one">
      <div class="container">
        <div class="blog-banner-content">
          <h1 class="blog-title">How to avoid hiring iresponsible people?</h1>
          <p class="blog-text">
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
    <!-- BLOG BANNER SECTION END -->

    <!-- BLOG Details SECTION START -->
    <section class="blog-details">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="singleInfo">
              <?php the_content( ); ?>
            </div>
            <?php 
        			if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                  
    ?>
          </div>
          <div class="col-md-4">

          <!-- <?php
              global $post;

              $args = array( 'posts_per_page' => 4, 'post_type' => 'blog', 'orderby' => 'menu_order', 'order' => 'ASC' );
              $myposts = get_posts( $args );
              foreach( $myposts as $post ) : setup_postdata( $post ); ?>

              <?php 
                $btn_text = get_post_meta( $post->ID, 'text', true );
                $btn_link = get_post_meta( $post->ID, 'link', true );
              ?>

            <a href="<?php echo $btn_link; ?>" class="blog-card add">
              <div class="blog-card-header">
                <div class="bloglink">
                  <img
                    src="<?php the_post_thumbnail()?>"
                    class="blog-thumbnail"
                    alt="blog-card-cap"
                  />
                </div>
              </div>

              <div class="blog-card-body">
                <?php the_content(); ?>

                <div class="bloglink">
                  <h2 class="blog-title">
                    <?php the_title(); ?>
                  </h2>
                </div>
              </div>
            </a>
          <?php endforeach; wp_reset_query(); ?> -->

            <!-- BLOG CARD START -->
            <a href="blog-one" class="blog-card add">
              <div class="blog-card-header">
                <div class="bloglink">
                  <img
                    src="<?php echo get_template_directory_uri(  )?>/assets/images/home/blog/blog-1.svg"
                    class="blog-thumbnail"
                    alt="blog-card-cap"
                  />
                </div>
              </div>

              <div class="blog-card-body">
                <p class="date-time">06 Oct 2021</p>

                <div class="bloglink">
                  <h2 class="blog-title">
                    How to avoid hiring iresponsible people?
                  </h2>
                </div>
              </div>
            </a>
            <!-- BLOG CARD END -->

            <!-- BLOG CARD START -->
            <a href="blog-two" class="blog-card add">
              <div class="blog-card-header">
                <div class="bloglink">
                  <img
                    src="<?php echo get_template_directory_uri(  )?>/assets/images/home/blog/blog-2.svg"
                    class="blog-thumbnail"
                    alt="blog-card-cap"
                  />
                </div>
              </div>

              <div class="blog-card-body">
                <p class="date-time">06 Oct 2021</p>

                <div class="bloglink">
                  <h2 class="blog-title">
                    How to avoid hiring iresponsible people?
                  </h2>
                </div>
              </div>
            </a>
            <!-- BLOG CARD END -->

            <!-- BLOG CARD START -->
            <a href="blog-three" class="blog-card add">
              <div class="blog-card-header">
                <div class="bloglink">
                  <img
                    src="<?php echo get_template_directory_uri(  )?>/assets/images/home/blog/blog-3.svg"
                    class="blog-thumbnail"
                    alt="blog-card-cap"
                  />
                </div>
              </div>

              <div class="blog-card-body">
                <p class="date-time">06 Oct 2021</p>

                <div class="bloglink">
                  <h2 class="blog-title">
                    How to avoid hiring iresponsible people?
                  </h2>
                </div>
              </div>
            </a>
            <!-- BLOG CARD END -->

            <!-- BLOG CARD START -->
            <a href="blog-four" class="blog-card add">
              <div class="blog-card-header">
                <div class="bloglink">
                  <img
                    src="<?php echo get_template_directory_uri(  )?>/assets/images/home/blog/blog-4.svg"
                    class="blog-thumbnail"
                    alt="blog-card-cap"
                  />
                </div>
              </div>

              <div class="blog-card-body">
                <p class="date-time">06 Oct 2021</p>

                <div class="bloglink">
                  <h2 class="blog-title">
                    How to avoid hiring iresponsible people?
                  </h2>
                </div>
              </div>
            </a>
            <!-- BLOG CARD END -->
          </div>
        </div>
      </div>
    </section>
    <!-- BLOG Details SECTION END -->

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