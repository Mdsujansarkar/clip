<?php

/*
Template Name: Login Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- ABOUT BANNER SECTION START -->
<section class="about-banner">
      <div class="container">
        <div class="about-banner-content">
          <hgroup class="about-titles">
            <h1 class="title">Lonin</h1>
          </hgroup>

          <p class="about-text">
            In our knowledge database, you will find useful information about
            Doopic including how-to guides and our blog.
          </p>
        </div>
      </div>

      <div class="overlay"></div>
    </section>
    <!-- ABOUT BANNER SECTION END -->

<?php endwhile; ?>

<?php get_footer(); ?>