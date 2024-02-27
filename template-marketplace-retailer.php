<?php

/*
Template Name: Marketplace Retailer Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <!-- BLOG BANNER SECTION START -->
    <section style="padding-top: 100px; padding-bottom: 100px; background-color: #00AEEF;" class="online-stores">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div style="color: #FFF;" id="imageCon
                    tent">
                        <h1 class="text-left mb-5"><span><b>Marketplace</b> seller</h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">Outsourcing image editing services to a trusted partner enables you to optimise your workflow and allows you to get the most out of your employees. Whether it’s for creative work or to assist you with your workload, we offer you fast and reliable assistance when you need it. Doopic offers you:</p>

                        <a style="display: inline-block;" class="btn-clip btn-service btn-fill btn-trail">PLACE YOUR FREE TEST ORDER</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div>
                        <img 
                            style="width: 100%;
                            border-radius: 20px;
                            object-fit: cover;" 
                            class="after_image" 
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/about/our-mission/our-mission.svg" 
                            alt="after"
                         />
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>
    </section>
    <!-- BLOG BANNER SECTION END -->



    <!-- BLOG MAIN SECTION START -->
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div style="color: #000;" id="imageCon
                    tent">
                        <h1 class="text-left mb-5"><span><b style="color: #00AEEF;">Increase your sales</b><br/> through your images on Amazon and eBay</h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">The lines between online and offline trade are becoming more and more blurred, which has greatly changed shopping behaviour and buyer expectations. Marketplaces are an important channel in the marketing mix, which is why the quality of the product presentation on these channels is in no way inferior to those in a shop window. Thus, for two-thirds of the buyers, the product images are the most important deciding factor in addition to a detailed product description. In addition to having the choice of several color variations and different product angles, many buyers find it extremely important to be able to enlarge the product view in order to be able to zoom in on the image.

                        </p>

                        <a style="display: inline-block;" class="btn-clip btn-service btn-fill btn-trail">CONTACT US</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div>
                        <img 
                            style="width: 100%;
                            object-fit: cover;" 
                            class="after_image" 
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/service/inquire/inquire.svg" 
                            alt="after"
                         />
                    </div>
                </div>
                <p style="padding-top: 100px; text-align: center; width: 80%; margin: 0 auto;">In order to ensure quality product presentation, online marketplaces like Amazon and eBay have set strict guidelines. These include colour profile and image size controls as well as the background colour and white space in the image. Also, certain things may not be shown in the pictures and may need to be retouched.<br/><br/>

                    Good product images ensure a better click-through rate in the search results, a better conversion rate and thus, in turn, contribute to a ranking improvement within the marketplace.</p>
            </div>
        </div>
    </section>
    <!-- BLOG MAIN SECTION END -->

    <!-- HOME PARTNER SECTION START -->
   
    <section style="padding: 100px 0; background-color: #efefef;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div style="color: #000;" id="imageCon
                    tent">
                        <h1 class="text-left mb-5"><span>Test us <b style="color: #00AEEF;">free of charge.
                        </b></h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">Test whether or not our services are right for you.</p>

                        <a style="display: inline-block;" class="btn-clip btn-service btn-fill btn-trail">TEST US TODAY</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div>
                        <img 
                            style="width: 100%;
                            object-fit: cover;" 
                            class="after_image" 
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/privacy-policy/privacy-policy.svg" 
                            alt="after"
                         />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME PARTNER SECTION END -->

    <!-- HOME PARTNER SECTION START -->
   
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div style="color: #000;" id="imageCon
                    tent">
                        <h1 class="text-left mb-5"><span><b style="color: #00AEEF;">Optimised
                        </b>for all marketplaces
                    </h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">We can also optimize your pictures for other marketplaces like Rakuten, eBay, Otto and Co.</p>

                        <a style="display: inline-block;" class="btn-clip btn-service btn-fill btn-trail">CONTACT US</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div>
                        <img 
                            style="width: 100%;
                            object-fit: cover;" 
                            class="after_image" 
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/service/precision/precision.svg" 
                            alt="after"
                         />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME PARTNER SECTION END -->

    


<?php endwhile; ?>

<?php get_footer(); ?>