<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Young Tian Shop</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!-- Favicons -->
  <link href="{{url('public')}}/assets/img/apple-touch-icon.png" rel="icon">
  <link href="{{url('public')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
  <body>

  <!-- HEADER -->
    <header id="header" class="fixed-top bg-dark ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="home">Young Tian Shop</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/hero-bg.jpg" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu navbar-expand-lg d-none d-lg-block">
        <ul>
          <li class="active" ><a href="{{ url('/home') }}">HOME</a></li>
          <li ><a href="{{ url('/product') }}">PRODUCT</a>
          <li class="drop-down"><a href="">ABOUT</a>
            <ul>
              <li><a href="{{ url('/about') }}">About Us</a></li>
              <li><a href="{{ url('/contact') }}">Contact Us</a></li>
             
            </ul>
          </li>
          <li><a href="{{ url('/checkout') }}">CHECKOUT</a></li>
          <li><a href="{{ url('/login') }}">LOGIN</a></li>

        </ul>  
    
</div>
         </nav><!-- .nav-menu -->
         
  </header><!-- End Header -->



  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
          <p>If you are not satisfied with our services, you can contact our shop via the email address and telephone number listed below.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.777425083542!2d109.97291401480113!3d-1.83269393698328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05185fbb896a6f%3A0xa3039d6250be4380!2sJl.%20Aip.%20Ks.%20Tubun%2C%20Sampit%2C%20Delta%20Pawan%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat%2078811!5e0!3m2!1sid!2sid!4v1603640957954!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <br><br>
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>JL.Aip Ks.Tubun <br> Kalimantan Barat, Ketapang<br></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>youngtianshop@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+11 012 9898 1221</p>
              </div>

            </div>

          </div>
          <br><br>
          
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Young Tian</h3>
            <p>
              JL.Aip.Ks.Tubun <br>
              Kalimantan Barat, Ketapang<br>
              <br><br>
              <strong>Phone:</strong> +11 012 9898 1221<br>
              <strong>Email:</strong> youngtianshop@gmail.com<br>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Checkout</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Young Tian</h4>
            <p>Let us in our shop get the convenience of shopping at our store
            </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

   <!-- bottom footer -->
      <div id="bottom-footer" class="section">
        <div class="container d-md-flex py-4">
          <!-- row -->
          
          <div class="row">
            <div class="col-md-12 text-center text-md-right pt-3 pt-md-0">
              <ul class="footer-payments">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tiana Adela Pratiwi| Project </i> by <a href="https://colorlib.com" target="_blank">TAP </a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
            <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('public')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>