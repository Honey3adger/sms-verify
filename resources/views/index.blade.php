@extends('layouts.app')

@section('content')
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <h1 style="color: #10BC69;">Get your virtual
            number up and running in <span style="color: #6C63FF;">minutes.</span>🚀</h1>
          <p>Don't feel comfortable giving out your phone number? Protect your online identity by using our virtual phone numbers.</p>
          <div class="d-flex">
            <a href="#about" class="btn-get-started">Get Code</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><span class="material-symbols-outlined">sms</span><span>Get started</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
          <img src="assets/img/globe.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><span class="material-symbols-outlined">looks_one</span></div>
            <h4><a href="" class="stretched-link">Create an Account</a></h4>
            <p>First, you need to create an account with sMs. After creating an account, then log in to view your dashboard.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><span class="material-symbols-outlined">looks_two</span></div>
            <h4><a href="" class="stretched-link">Top Up</a></h4>
            <p>After you log into your dashboard, top UP your account with at least ₦1,000 or $1.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><span class="material-symbols-outlined">looks_3</span></div>
            <h4><a href="" class="stretched-link">Place Order</a></h4>
            <p>Select the desired country and service. Copy the virtual number and make use of it. Come back to your dashboard to receive OTP if requested.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Featured Services Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>About Us<br></span>
      <h2>About</h2>
      <p>what we do</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/about.png" class="img-fluid" alt="">
          <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3>Sms Verify Features</h3>
          <p>Sms Verify is dedicated to simplifying online verifications for individuals and businesses alike. We offer virtual US numbers that ensure smooth and secure verification processes across all major platforms, from WhatsApp and Google Voice to social media and beyond.</p>
          <h4 style="font-weight: bold;">Numbers for Receiving SMS Codes and Registering at any Platform</h4>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>Over 500,000 Numbers Originating from Around 180 Countries Online</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Single-Use Numbers and Multiple SMS Deliveries</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Support Available 24/7</span></li>
          </ul>

          <h4 style="font-weight: bold;">What You Can Do with Temporary Phone Numbers:</h4>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>Bulk Registration for Earning and Meetings Personal Needs</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Stay Anonymous</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Get Rid of Geographical Restrictions</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Protect Yourself from Fraud</span></li>
          </ul>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Workers</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section>
  <!-- /Stats Section -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Services</span>
      <h2>Services</h2>
      <p>what we offer</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon">
              <div class="icon-box bg-success text-light">
                <span class="material-symbols-outlined">bolt</span>
              </div>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Instant Activation</h3>
            </a>
            <p>Get your virtual US number up and running within minutes.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <div class="icon-box bg-success text-light">
                <span class="material-symbols-outlined">devices</span>
              </div>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Universal Compatibility</h3>
            </a>
            <p>Our numbers work seamlessly with all major verification platforms.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <div class="icon-box bg-success text-light">
                <span class="material-symbols-outlined">attach_money</span>
              </div>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Affordable Plans</h3>
            </a>
            <p>Choose from a variety of flexible pricing plans to suit your needs and budget.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->


  <section id="clients" class="clients section accent-background">
    <div class="container">
      <div class="swiper">
        <div class="swiper-wrapper align-items-center">
          <!-- Swiper Slides -->
          <div class="swiper-slide"><img src="/assets/img/clients/facebook.png" class="img-fluid" alt="Facebook"></div>
          <div class="swiper-slide"><img src="/assets/img/clients/instagram.png" class="img-fluid" alt="Instagram"></div>
          <div class="swiper-slide"><img src="/assets/img/clients/whatsapp.png" class="img-fluid" alt="WhatsApp"></div>
          <div class="swiper-slide"><img src="/assets/img/clients/telegram.png" class="img-fluid" alt="Telegram"></div>
          <div class="swiper-slide"><img src="/assets/img/clients/yahoo.png" class="img-fluid" alt="Yahoo"></div>
          <div class="swiper-slide"><img src="/assets/img/clients/tinder.png" class="img-fluid" alt="Tinder"></div>
          <div class="swiper-slide"><img src="/assets/img/clients/google.png" class="img-fluid" alt="Google"></div>
        </div>

      </div>
    </div>
  </section><!-- /Clients Section -->


  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Section Title</span>
      <h2>Contact</h2>
      <p>Feel free to reach out to us - 24/7 support</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>
@endsection