<?php

/*
Template Name: Photo Studios Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>



    <!-- BLOG BANNER SECTION START -->
    <section style="padding-top: 100px; padding-bottom: 100px; background-color: #00AEEF;" class="online-stores">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div style="color: #FFF;" id="imageContent">
                        <h1 class="text-left mb-5"><span><b>Image editing</b><br/>
                            for photo studios and photographers</h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">We process your eCommerce images. Offer your customers optimal online shopping experience by using quality photos to showcase your products professionally. Save time by having your product images professionally optimised at low fixed prices.</p>

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
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/images.jpg" 
                            alt="after"
                         />
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay"></div>
    </section>
    <!-- BLOG BANNER SECTION END -->

    

    <!-- HOME PARTNER SECTION START -->
   
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div id="imageDivSlider" class="beforeAfter" style="width: 100%">
                        <img 
                            style="width: 100%;
                            object-fit: cover;" 
                            class="after_image" 
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/retouch-after.jpg" 
                            alt="after"
                         />
                        <img
                            style="width: 100%;
                            object-fit: cover;" 
                            class="before_image" 
                            src="<?php echo get_template_directory_uri(  )?>/assets/images/sliders/retouch-before.jpg" 
                            alt="before" 
                        />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="color: #000;" id="imageCon
                    tent">
                        <h1 class="text-left mb-5"><span><b style="color: #00AEEF;">Fast and reliable support
                        </b>on all orders, big or small

                    </h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">We know the real work only starts once the shoot is over. On larger shoots such as weddings, corporate events, family events or fashion and product shoots there are often hundreds or thousands of photos to sift through, choose and edit. We can help ease your workload by assisting you with the post-processing.                        </p>

                        <a style="display: inline-block;" class="btn-clip btn-service btn-fill btn-trail">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME PARTNER SECTION END -->


    <!-- HOME PARTNER SECTION START -->
   
    <section style="padding: 100px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div style="color: #000; margin: 0 auto; text-align: center;" id="imageCon
                    tent">
                        <p style="padding-bottom: 30px; width: 80%; margin: 0 auto;">Whether you want basic retouches on a few images or need thousands of product images clipped, cropped, enhanced and colour matched – we deliver. We guarantee professional, reliable service with delivery on time, every time.

                        </p>
                        <div class="row margin-top40px">
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/indian.png" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Clipping products and people in various degrees of complexity</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/dynamite.png" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Brightness, colour and sharpness correction</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/pick-and-shovel.png" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Framing of image file format and image size</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/shadow.png" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Marketplace Ready. Optimisation for all common marketplaces</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/cart.svg" alt="" />
                                    <p style="text-align: left; margin-left: 10px; ">Tone and colour corrections, removal of colour castings. Correcting over– and under-exposed photos</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/color-palette.svg" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Processing images according to customer specific guidelines</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/deliveryboy.svg" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Adding effects such as black and white, sepia and other shades</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/dress.svg" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Removal of fuzz, scratches, cracks etc.</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/graphic-design.svg" alt="" />
                                    <p style="text-align: left; margin-left: 10px; ">Removal of unwanted background objects such as unwanted people etc…</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/recolor.png" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Skin tones correction and red-eye removal</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/retouch.svg" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">	
                                        Retouching and removal of wrinkles, scars, dark circles, blemishes etc…</p></div>
                            </div>
                            <div class="col-lg-3">
                                <div style="display: flex; padding: 25px 0; align-items: flex-start;">
                                    <img style="width: 40px; height: 40px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/solution/sizing.jpg" alt="" />
                                    <p style="text-align: left; margin-left: 10px;">Body enhancement and retouches (nose, lips, eyes, breasts, hair, etc…</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME PARTNER SECTION END -->


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
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div style="color: #000; width: 80%; text-align: center; margin: 0 auto;" id="imageCon
                    tent">
                        <h1 class="text-left mb-5">Don’t waste another minute,<br/><b style="color: #00AEEF;">let us help you deliver</b>
                    </h1>
                        <!-- <h6 class="text-left mt-3 mb-5">
                            for your online store
                        </h6> -->
                        <p style="margin-bottom: 30px;">How? Easy!</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <img style="padding-top: 30px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/strategy/members.svg" alt="" />
                                <p style="margin-top: 30px;">Upload your photos to my.doopic.com. </p>
                            </div>
                            <div class="col-lg-3">
                                <img style="padding-top: 30px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/strategy/process.svg" alt="" />
                                <p style="margin-top: 30px;">Select your desired image editing specifications

                                </p>
                            </div>
                            <div class="col-lg-3">
                                <img style="padding-top: 30px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/strategy/support.svg" alt="" />
                                <p style="margin-top: 30px;">Select the size and format of edited photos

                                </p>
                            </div>
                            <div class="col-lg-3">
                                <img style="padding-top: 30px;" src="<?php echo get_template_directory_uri(  )?>/assets/images/home/strategy/trial.svg" alt="" />
                                <p style="margin-top: 30px;">Your photos will be ready in 8-48 hours

                                </p>
                            </div>
                            <p style="padding: 40px 0;">Alternatively, you can also call us directly and talk to one of our experienced designers.</p>

                            <div>
                                <a style="display: inline-flex; width: 0 auto;" class="btn-clip btn-service btn-fill btn-trail">CONTACT US</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME PARTNER SECTION END -->


<?php endwhile; ?>

<?php get_footer(); ?>