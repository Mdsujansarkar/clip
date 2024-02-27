<?php

/*
Template Name: Pricing Template
*/

get_header(); 
global $sclipping;
?>



<!-- CONTACT BANNER SECTION START -->
<section class="contact-banner">
  <div class="container">
    <div class="contact-banner-content">
      <h1 class="contact-title">Pricing Examples</h1>
      <p class="contact-text">
        Our pricing starts from as little as ($0,29) per image. Below are 4 examples. The first column shows the basic price without any additional processing
        options selected. In the 2nd 3rd and 4th column you can see how selecting different editing options will affect the price per image.
      </p>
    </div>
  </div>

  <div class="overlay"></div>
</section>
<!-- CONTACT BANNER SECTION END -->

<!-- PRICING SECTION START -->
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<div id="price">
  <!--price tab-->
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Basic</h3>
        <div class="price">$0,29<span>PER IMAGE</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li> <span>&#10003;</span> Change of resolution </li>
          <li> <span>&#10003;</span> Change of colour space</li>
          <li> <span>&#10003;</span> Image resizing</li>
          <li><span>&#10003;</span> Delivery: 24 Hours</li>
          <li> <span>&#10539;</span> Clipping: Standard (0,20€)</li>
          <li> <span>&#10539;</span> Clipping: Path (0,20€)</li>
          <li> <span>&#10539;</span> Colouration (1,00€)</li>
          <li><span>&#10539;</span> Retouch: Dirt (0,20€)</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan basic">
    <div class="plan-inner">
      <div class="hot">hot</div>
      <div class="entry-title">
        <h3>Clipping</h3>
        <div class="price">$0.45<span>PER IMAGE</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li> <span>&#8592;</span> Everything from Basic (0,29€)</li>
          <li><span>&#10003;</span> Clipping: Standard (0,16€)</li>
          <li><span>&#10539;</span> Clipping: Path (0,20€)</li>
          </li>
          <li><span>&#10539;</span>Colours: Colouration (1,00€)</li>
          <li><span>&#10539;</span> Retouch: Dirt (0,20€)</li>
          <li><span>&#10539;</span> Retouch: Dust (0,20€)</li>
          <li><span>&#10539;</span> Retouch: Pimples (0,20€)</li>
          <li><span>&#10539;</span> Other: Mirroring (0,20€) </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan standard">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Clipping + Path</h3>
        <div class="price">$0.65<span>PER IMAGE</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li> <span>&#8592;</span> Everything from Basic (0,29€) </li>
          <li> <span>&#10003;</span> Clipping: Standard (0,16€)</li>
          <li> <span>&#10003;</span> Shadow Creation (0,20€)</li>
          <li><span>&#10539;</span>Colours: Colouration (1,00€)</li>
          <li><span>&#10539;</span> Retouch: Dirt (0,20€) </li>
          <li><span>&#10539;</span> Retouch: Dust (0,20€) </li>
          <li><span>&#10539;</span> Retouch: Pimples (0,20€) </li>
          <li><span>&#10539;</span> Other: Mirroring (0,20€) </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan ultimite">
    <div class="plan-inner">
      <div class="entry-title">
        <h3>Various Options</h3>
        <div class="price">$1.95<span>PER IMAGE</span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><span>&#8592;</span> Everything from Basic (0,29€) </li>
          <li> <span>&#10003;</span> Clipping: Standard (0,16€)</li>
          <li> <span>&#10003;</span> Shadow Creation (0,20€)</li>
          <li><span>&#10003;</span> Colours: Colouration (0.50€)</li>
          <li> <span>&#10003;</span> Retouch: Dirt (0,20€)</li>
          <li> <span>&#10003;</span> Retouch: Dust (0,20€)</li>
          <li><span>&#10003;</span> Retouch: Pimples (0,20€)</li>
          <li><span>&#10003;</span> Other: Mirroring (0,20€)</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- end of price tab-->
</div>



<!-- PRICING SECTION END -->

<!-- PRICING INFO SECTION START -->
<section class="portfolio-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="portfolio-menu">
          <ul>
            <li class="mixitup-control-active" data-filter="*">All</li>
            <li data-filter=".<?php echo $sclipping['standard-no-extra-charge'];?>">
            <?php echo $sclipping['standard-no-extra-charge-text'];?></li>
            <li data-filter=".<?php echo $sclipping['category-ghshdsyh'];?>">
            <?php echo $sclipping['category-ghshdsyh-text'];?></li>
            <li data-filter=".<?php echo $sclipping['category-ghshdsyh-2'];?>">
            <?php echo $sclipping['category-ghshdsyh-text-2'];?></li>
            <li data-filter=".<?php echo $sclipping['category-ghshdsyh-3'];?>">
            <?php echo $sclipping['category-ghshdsyh-text-3'];?></li>
            <li data-filter=".<?php echo $sclipping['category-ghshdsyh-4'];?>">
            <?php echo $sclipping['category-ghshdsyh-text-4'];?></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row portfolio-list">
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['standard-no-extra-charge'];?>">
        <img src="https://images.unsplash.com/photo-1585801442122-96dd773c76fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['standard-no-extra-charge'];?>">
        <img src="https://images.unsplash.com/photo-1585801442122-96dd773c76fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['standard-no-extra-charge'];?>">
        <img src="https://images.unsplash.com/photo-1585801442122-96dd773c76fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh'];?>">
        <img src="https://images.unsplash.com/photo-1630948198694-c3cd4df3c9bb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh'];?>">
        <img src="https://images.unsplash.com/photo-1589666788370-cf6ba244bda2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh'];?>">
        <img src="https://plus.unsplash.com/premium_photo-1661592645319-cb83e4c6b324?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-2'];?>">
        <img src="https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-2'];?>">
        <img src="https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-2'];?>">
        <img src="https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-3'];?>">
        <img src="https://images.unsplash.com/photo-1591779051696-1c3fa1469a79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-3'];?>">
        <img src="https://images.unsplash.com/photo-1684700432561-09c54fc1d09b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1054&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-3'];?>">
        <img src="https://images.unsplash.com/photo-1684700432561-09c54fc1d09b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1054&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-4'];?>">
        <img src="https://images.unsplash.com/photo-1684700432561-09c54fc1d09b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1054&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-4'];?>">
        <img src="https://images.unsplash.com/photo-1684700432561-09c54fc1d09b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1054&q=80">
      </div>
      <div class="col-lg-4 mix single-portfolio-item <?php echo $sclipping['category-ghshdsyh-4'];?>">
        <img src="https://images.unsplash.com/photo-1684700432561-09c54fc1d09b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1054&q=80">
      </div>
    </div>
  </div>
</section>
<!-- PRICING INFO SECTION END -->

<!-- PRICING HELP SECTION START -->
<section class="pricing-help">
  <div class="container">
    <div class="helpbox">
      <h2 class="title">Have any other question?</h2>

      <p class="text">
        Go to our <a href="faq" class="link">FAQ</a> page for more information.
      </p>
    </div>
  </div>
</section>
<!-- PRICING HELP SECTION END -->


<style>
  img {
    max-width: 100%;
  }

  .single-portfolio-item {
    margin-bottom: 30px;
  }

  .single-portfolio-item img {
    height: 100%;
    max-height: 300px;
    width: 100%;
    object-fit: cover;
  }

  .portfolio-menu {
    text-align: center;
  }

  .portfolio-menu ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }

  .portfolio-menu ul li {
    display: inline-block;
    padding: 5px 15px;
    font-size: 15px;
    font-weight: 600;
    background: #00AEEF;
    color: #fff;
    border-radius: 3px;
    margin: 34px 4px;
    margin-bottom: 30px;
    cursor: pointer;
  }

  .portfolio-menu ul li.mixitup-control-active {
    background: #00AEEF;
  }
</style>
<?php get_footer(); ?>