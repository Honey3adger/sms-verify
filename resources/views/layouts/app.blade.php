<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - eNno Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <base href="public"> -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Custom Styles */
    .icon-box {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      /* Adjust width as needed */
      height: 50px;
      /* Adjust height as needed */
      background-color: var(--bs-primary);
      /* Default Bootstrap primary color */
      color: #fff;
      /* Default text color */
      border-radius: 8px;
      /* Rounded corners */
    }

    /* Add custom color as needed */
    .icon-box.custom-bg {
      background-color: #ff5733;
      /* Replace with your custom color */
    }

    .material-symbols-outlined {
      font-size: 40px;
      color: #10BC69;
    }

    .icon-box .material-symbols-outlined {
      font-size: 40px;
      color: #fff;
    }

    .service-item position-relative .icon {
      color: #6C63FF !important;
    }
  </style>
</head>

<body class="index-page">


  <!-- header start -->
  @include('snippets.header')
  <!-- header end -->

  <!-- body start -->
  @yield('content')
  <!-- body end -->

  <!-- footer start -->
  @include('snippets.footer')
  <!-- footer end -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.swiper', {
        loop: true, // Enable infinite loop
        slidesPerView: 7, // Show 7 icons per view
        spaceBetween: 20, // Add space between slides
        autoplay: {
          delay: 3000, // Automatically slide every 3 seconds
          disableOnInteraction: false, // Keep autoplay running after user interaction
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true, // Enable clickable pagination
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          // Adjust the number of slides per view based on screen size
          320: {
            slidesPerView: 2
          },
          640: {
            slidesPerView: 4
          },
          1024: {
            slidesPerView: 6
          },
          1200: {
            slidesPerView: 7
          },
        },
      });
    });
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>