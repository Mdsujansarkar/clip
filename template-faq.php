<?php

/*
Template Name: FAQ Template
*/

get_header();
global $sclipping;
?>


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<!-- FAQ BANNER SECTION START -->
<section class="faq-banner">
  <div class="container">
    <div class="faq-banner-content">
      <h1 class="faq-title">Frequently asked questions (FAQ)</h1>
      <p class="faq-text">Find your all answer here.</p>
    </div>
  </div>

  <div class="overlay"></div>
</section>
<!-- FAQ BANNER SECTION END -->

<!-- FAQ SECTION START  -->

<!-- FAQ SECTION END  -->
<section class="faq w-50 m-auto">
  <div class="container">
    <div class="row">
      <div class="col align-self-center">
        <div class="acc-container">
          <div class="acc">
            <div class="acc-head">
              <p> <?php echo $sclipping['faq-one']; ?>
              </p>
            </div>
            <div class="acc-content">

            <?php echo $sclipping['faq-desc-one']; ?>
            </div>
          </div>

          <div class="acc">
            <div class="acc-head">
              <p> <?php echo $sclipping['faq-two']?>
              </p>
            </div>
            <div class="acc-content">
              <p class="text">
              <?php echo $sclipping['faq-desc-two']; ?>
              </p>
            </div>
          </div>

          <div class="acc">
            <div class="acc-head">
              <p><?php echo $sclipping['faq-three']?></p>
            </div>
            <div class="acc-content">
              <p class="text">
                <p><?php echo $sclipping['faq-desc-three']?></p>
              </p>
            </div>
          </div>

          <div class="acc">
            <div class="acc-head">
              <p>
               <?php echo $sclipping['faq-four']?>
              </p>
            </div>
            <div class="acc-content">
            <p class="text">
                <?php echo $sclipping['faq-desc-four']?>
              </p>
            </div>
          </div>
          <div class="acc">
            <div class="acc-head">
              <p>
              <?php echo $sclipping['faq-five']?>
              </p>
            </div>
            <div class="acc-content">
            <p class="text">
                <?php echo $sclipping['faq-desc-five']?>
              </p>
            </div>
          </div>
          <div class="acc">
            <div class="acc-head">
              <p>
                <?php echo $sclipping['faq-sixe']?>
              </p>
            </div>
            <div class="acc-content">
            <p class="text">
                <?php echo $sclipping['faq-desc-sixe']?>
              </p>
            </div>
          </div>
          <div class="acc">
            <div class="acc-head">
              <p>
              <?php echo $sclipping['faq-seven']?>
              </p>
            </div>
            <div class="acc-content">
            <p class="text">
                I<?php echo $sclipping['faq-desc-seven']?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

<style>
  .acc-container {
    max-width: 700px;
    width: 100%;
  }

  .acc {
    margin-bottom: 10px;
  }

  .acc-head {
    background-color: #00709dd6;
    padding: 3px 10px;
    font-size: 19px;
    position: relative;
    cursor: pointer;
  }

  .acc-head::before,
  .acc-head::after {
    content: '';
    position: absolute;
    top: 50%;
    background-color: #fff;
    transition: all .3s;
  }

  .acc-head::before {
    right: 30px;
    width: 3px;
    height: 20px;
    margin-top: -10px;
  }

  .acc-head::after {
    right: 21px;
    width: 20px;
    height: 3px;
    margin-top: -2px;
  }

  .acc-head p {
    color: #fff;
    font-weight: bold;
  }

  .acc-content {
    padding: 15px 10px;
    display: none;
  }

  .acc-head.active::before {
    transform: rotate(90deg);
  }
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
    $('.acc-container .acc:nth-child(1) .acc-content').slideDown();
    $('.acc-head').on('click', function() {
      if ($(this).hasClass('active')) {
        $(this).siblings('.acc-content').slideUp();
        $(this).removeClass('active');
      } else {
        $('.acc-content').slideUp();
        $('.acc-head').removeClass('active');
        $(this).siblings('.acc-content').slideToggle();
        $(this).toggleClass('active');
      }
    });
  });
</script>
<!-- Accordion -->

<?php get_footer(); ?>
<!-- Faq -->