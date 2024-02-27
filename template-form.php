<?php

/*
Template Name: Form Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>



    <!-- CONTACT SECTION START -->
    <section class="contact" style="margin-top: 100px">
      <div class="container">
        <div class="contact-content">
          <div class="col-12">
            <div class="fusion-column">
              <div
                class="fusion-text"
                data-rule_style="default"
                data-hide_on_mobile="small-visibility,medium-visibility,large-visibility"
                style=""
              >
                <h2 style="text-align: center">
                  <strong>Submit Your Free Trial</strong>
                </h2>
              </div>
              <div
                class="fusion-text"
                data-rule_style="default"
                data-hide_on_mobile="small-visibility,medium-visibility,large-visibility"
                style=""
              >
                <p style="text-align: center">
                  Offshore Clipping Path is gladly offering you a FREE trial to
                  test our service quality. You can upload your sample images,
                  select a particular service &amp; give any required
                  instructions using this contact form below. You’ll get your
                  free trial done in 1 hour.
                </p>
              </div>
            </div>
            <form method="post" action="mail.php" enctype="multipart/form-data">
              <div class="contact-form mt-5">
                <div class="inputboxrow">
                  <div class="inputbox inputcol">
                    <div class="inputs">
                      <div class="form-floating">
                        <input
                          type="text"
                          class="form-control"
                          name="name"
                          id="floatingName"
                          placeholder="Enter name"
                          required
                        />
                        <label for="floatingName">Enter name</label>
                      </div>
                      <p class="error-message">Name is required</p>
                    </div>
                  </div>

                  <div class="inputbox inputcol">
                    <div class="form-floating">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        id="floatingEmail"
                        placeholder="Enter Email"
                        required
                      />
                      <label for="floatingEmail">Enter Email</label>
                    </div>
                    <p class="error-message">Email is required</p>
                  </div>
                </div>
                <div class="inputboxrow">
                  <div class="inputbox inputcol">
                    <div class="inputs">
                      <div class="form-floating">
                        <input
                          type="text"
                          name="phone"
                          class="form-control"
                          id="floatingPhone"
                          placeholder="Enter Phone Number"
                          required
                        />
                        <label for="floatingName">Enter Phone Number</label>
                      </div>
                    </div>
                  </div>

                  <div class="inputbox inputcol">
                    <div class="form-floating">
                      <input
                        type="text"
                        name="website"
                        class="form-control"
                        id="floatingWebsite"
                        placeholder="Enter Website"
                      />
                      <label for="floatingWebsite">Website</label>
                    </div>
                  </div>
                </div>

                <div class="inputbox">
                  <div class="form-floating comment">
                    <textarea
                      class="form-control"
                      name="msg"
                      placeholder="Enter message"
                      id="floatingMessage"
                      style="height: 8.75rem"
                    ></textarea>
                    <label for="floatingMessage">Enter message</label>
                  </div>
                </div>
                <div class="inputbox">
                  <input
                    type="file"
                    name="files[]"
                    class="form-control"
                    multiple
                  />
                </div>
                <div
                  class="fusion-text"
                  data-rule_style="default"
                  data-hide_on_mobile="small-visibility,medium-visibility,large-visibility"
                  style=""
                >
                  <small style="font-size: 14px"
                    >If the size of your Images is more than 25mb then share
                    your images link here from your cloud like Google
                    Drive,Dropbox or Wetransfer</small
                  >
                </div>
                <div class="inputbox">
                  <div class="form-floating comment">
                    <input type="text" class="form-control" name="link" />
                  </div>
                </div>
                <div class="submitbox">
                  <button type="submit" class="btn-clip btn-create btn-fill">
                    Send
                    <div class="mx-2"></div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="7.41"
                      height="13"
                      viewBox="0 0 7.41 13"
                    >
                      <g
                        id="arrow-down-sign-to-navigate"
                        transform="translate(0 13) rotate(-90)"
                      >
                        <path
                          id="Path_425"
                          data-name="Path 425"
                          d="M6.5,7.41a.908.908,0,0,1-.644-.266L.267,1.554A.91.91,0,0,1,1.554.267L6.5,5.213,11.446.267a.91.91,0,0,1,1.287,1.288l-5.59,5.59A.908.908,0,0,1,6.5,7.41Z"
                          fill="#fff"
                        />
                      </g>
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT SECTION END -->

    <!-- CONTACT INFO SECTION START -->
    <section class="contact-info">
      <div class="container">
        <div class="contact-info-content">
          <div class="info">
            <h2 class="title">Contact Us</h2>

            <p class="text">
              Are you an online store, or Amazon or eBay seller, self-employed
              graphic designer, photographer, or an eCommerce photo studio? Then
              you are in the right place. Doopic specialises in bulk image
              processing and acts an extension of your business by helping you
              with your workflow, allowing you to focus on other parts of your
              business.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="infobox">
                <figure class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="34.76"
                    height="50"
                    viewBox="0 0 34.76 50"
                  >
                    <path
                      id="placeholder"
                      d="M11.13,0A17.4,17.4,0,0,0-6.25,17.38c0,12.045,17.4,32.62,17.4,32.62S28.51,28.832,28.51,17.38A17.4,17.4,0,0,0,11.13,0Zm5.244,22.469a7.416,7.416,0,1,1,0-10.487A7.394,7.394,0,0,1,16.374,22.469Zm0,0"
                      transform="translate(6.25)"
                      fill="#00aeef"
                    />
                  </svg>
                </figure>

                <h3 class="title">Find Us</h3>

                <p class="text">
                  Road no: 10, Avenue: 3, House no: 627, <br />
                  Mirpur DOHS, Mirpur-1216, Dhaka
                </p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="infobox">
                <figure class="icon">
                  <svg
                    id="call"
                    xmlns="http://www.w3.org/2000/svg"
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                  >
                    <g id="Group_337" data-name="Group 337">
                      <path
                        id="Path_426"
                        data-name="Path 426"
                        d="M45.988,32.819a28.388,28.388,0,0,1-8.915-1.42,4.075,4.075,0,0,0-3.963.836l-5.622,4.244A31.069,31.069,0,0,1,13.519,22.513l4.119-5.476a4.041,4.041,0,0,0,.994-4.095,28.432,28.432,0,0,1-1.426-8.93A4.017,4.017,0,0,0,13.194,0H4.012A4.017,4.017,0,0,0,0,4.012,46.04,46.04,0,0,0,45.988,50,4.017,4.017,0,0,0,50,45.988V36.831A4.017,4.017,0,0,0,45.988,32.819Z"
                        fill="#00aeef"
                      />
                    </g>
                  </svg>
                </figure>

                <h3 class="title">Contact us</h3>

                <ul class="contactlist">
                  <li class="contactlist-item">
                    <a href="tel:+8801754486711" class="contactlist-link"
                      >+8801754486711</a
                    >
                  </li>
                  <li class="contactlist-item">
                    <a href="tel:+880148765456" class="contactlist-link"
                      >+880148765456</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="infobox">
                <figure class="icon">
                  <svg
                    id="Group_339"
                    data-name="Group 339"
                    xmlns="http://www.w3.org/2000/svg"
                    width="66.667"
                    height="50"
                    viewBox="0 0 66.667 50"
                  >
                    <g id="Group_338" data-name="Group 338">
                      <path
                        id="Path_427"
                        data-name="Path 427"
                        d="M7.405,68.065c9.149,7.764,25.2,21.424,29.922,25.684a2.783,2.783,0,0,0,4.032.005c4.723-4.263,20.777-17.925,29.926-25.689a1.393,1.393,0,0,0,.2-1.92A5.511,5.511,0,0,0,67.121,64H11.569A5.511,5.511,0,0,0,7.21,66.145,1.393,1.393,0,0,0,7.405,68.065Z"
                        transform="translate(-6.012 -64)"
                        fill="#00aeef"
                      />
                      <path
                        id="Path_428"
                        data-name="Path 428"
                        d="M65.861,126.541a1.383,1.383,0,0,0-1.481.2c-10.147,8.6-23.1,19.62-27.172,23.29a5.626,5.626,0,0,1-7.753,0c-4.343-3.911-18.886-16.27-27.169-23.287A1.389,1.389,0,0,0,0,127.8v34.915a5.56,5.56,0,0,0,5.556,5.553H61.111a5.56,5.56,0,0,0,5.555-5.553V127.8A1.388,1.388,0,0,0,65.861,126.541Z"
                        transform="translate(0 -118.269)"
                        fill="#00aeef"
                      />
                    </g>
                  </svg>
                </figure>

                <h3 class="title">Email</h3>

                <ul class="contactlist">
                  <li class="contactlist-item">
                    <a href="mailto:example@mail.com" class="contactlist-link"
                      >example@mail.com</a
                    >
                  </li>
                  <li class="contactlist-item">
                    <a href="mailto:test@email.com" class="contactlist-link"
                      >test@email.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT INFO SECTION END -->


<?php endwhile; ?>

<?php get_footer(); ?>