<?php

/*
Template Name: Registration Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <!-- REGISTRATION SECTION START -->
    <section class="registration">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
            <div class="register-info">
              <h1 class="title">
                Welcome to <br />
                Smart Clipping
              </h1>

              <p class="text">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                fringilla.
              </p>

              <div class="login-detail">
                <p class="login-text">Already have an account?</p>
                <a href="#" class="btn-text">Log in</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="registration-info">
              <h1 class="title">
                Welcome to <br />
                Smart Clipping
              </h1>

              <form class="registration-form">
                <div class="inputbox">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="floatingCompanyName"
                      placeholder="Company name"
                    />
                    <label for="floatingCompanyName">Company name</label>
                  </div>
                  <p class="error-message">Company name is required</p>
                </div>

                <div class="inputbox error">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="floatingEmail"
                      placeholder="Email"
                    />
                    <label for="floatingEmail">Email</label>
                  </div>
                  <p class="error-message">Email is required</p>
                </div>

                <div class="inputbox">
                  <div class="form-floating">
                    <input
                      type="password"
                      class="form-control"
                      id="floatingPassword"
                      placeholder="Password"
                    />
                    <label for="floatingPassword">Password</label>
                  </div>
                  <p class="error-message">Password is required</p>
                </div>

                <div class="inputbox">
                  <div class="form-floating">
                    <input
                      type="password"
                      class="form-control"
                      id="floatingConfirmPassword"
                      placeholder="Confirm Password"
                    />
                    <label for="floatingConfirmPassword"
                      >Confirm Password</label
                    >
                  </div>
                  <p class="error-message">
                    Password doesn't match! please try again.
                  </p>
                </div>

                <div class="submitbox">
                  <button type="button" class="btn-clip btn-create btn-fill">
                    Create my Account
                  </button>
                </div>
              </form>

              <div class="login-detail">
                <p class="login-text">Already have an account?</p>
                <a href="#" class="btn-text">Log in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- REGISTRATION SECTION END -->


<?php endwhile; ?>

<?php get_footer(); ?>