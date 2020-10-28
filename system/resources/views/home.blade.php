<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Young Tian Shop</title>

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
       <nav class="nav-menu d-none d-lg-block">
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


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Young Tian Shop</strong></h3>
      <h1>Let's Shopping</h1>
      <h2>We are an online shop that provides the latest branded goods at affordable prices and the best quality</h2>
      <div class="col-md-6">
              <div class="header-search">
                <form>
                  <select class="input-select">
                    <option value="0">All Categories</option>
                    <option value="1">Clothes</option>
                    <option value="1">Pants</option>
                    <option value="1">Jacket</option>
                    <option value="1">Shoes</option>
                    <option value="1">Sandals</option>
                    <option value="1">Hat</option>
                  </select>
                  <input class="input" placeholder="Search here">
                  <button class="search-btn">Search</button>
                </form>
              </div>
            </div>
    </div>
  </section><!-- End Hero -->

      <!-- SECTION -->
    <div class="section">
      
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
     
         <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/4.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>Clothes<br>Collection</h3>
                <a href="{{ url('/product') }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/1.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>Pants<br>Collection</h3>
                <a href="{{ url('/product') }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/3.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>Jacket<br>Collection</h3>
                <a href="{{ url('/product') }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">

          <!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">New Products</h3>
              <div class="section-nav">
                <ul class="section-tab-nav tab-nav">
                  <li class="active"><a data-toggle="tab" href="#tab1">Clothes</a></li>
                  <li><a data-toggle="tab" href="#tab1">Pants</a></li>
                  <li><a data-toggle="tab" href="#tab1">Jacket</a></li>
                  <li><a data-toggle="tab" href="#tab1">Shoes</a></li>
                  <li><a data-toggle="tab" href="#tab1">Sandals</a></li>
                  <li><a data-toggle="tab" href="#tab1">Hat</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /section title -->

          <!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick" data-nav="#slick-nav-1">
                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/6.jpg" alt="">
                        <div class="product-label">
                          <span class="sale">-30%</span>
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category Jacket</p>
                        <h3 class="product-name"><a href="">Summer Jacket</a></h3>
                        <h4 class="product-price">Rp 100.000 <del class="product-old-price">Rp 150.000</del></h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{ url('/store') }}"><b>add to cart</b></button></a>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/9.jpeg" alt="">
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category Clothes</p>
                        <h3 class="product-name"><a href="#">Korean Clothes</a></h3>
                        <h4 class="product-price">Rp 85.000<del class="product-old-price">Rp 85.000</del></h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{ url('/store') }}"><b>add to cart</b></button></a>
                      </div>

                      
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/1.jpg" alt="">
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category Pants</p>
                        <h3 class="product-name"><a href="#">Sports Kanva Pants</a></h3>
                        <h4 class="product-price">Rp 110.000 <del class="product-old-price">Rp 170.000</del></h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{ url('/store') }}"><b>add to cart</b></button></a>
                      </div>
                    </div>
                    <!-- /product -->


                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/h.jpg" alt="">
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category Clothes</p>
                        <h3 class="product-name"><a href="#">Crop Clothes</a></h3>
                        <h4 class="product-price">Rp 95.000 <del class="product-old-price">Rp 150.000</del></h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{ url('/store') }}"><b>add to cart</b></button></a>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/8.jpg" alt="">
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category Pants</p>
                        <h3 class="product-name"><a href="#">Jogger Pants</a></h3>
                        <h4 class="product-price">Rp 100.000 <del class="product-old-price">Rp 150.000</del></h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{ url('/store') }}"><b>add to cart</b></button></a>
                      </div>
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="product">
                      <div class="product-img">
                        <img src="./img/3.jpg" alt="">
                      </div>
                      <div class="product-body">
                        <p class="product-category">Category Jacket</p>
                        <h3 class="product-name"><a href="#">Denim Jacket</a></h3>
                        <h4 class="product-price">Rp 150.000 <del class="product-old-price">Rp 200.000</del></h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="{{ url('/store') }}"><b>add to cart</b></button></a>
                      </div>
                    </div>
                    <!-- /product -->
                  </div>
                  <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
              </div>
            </div>
          </div>
          <!-- Products tab & slick -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

  <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/55.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>Shoes<br>Collection</h3>
                <a href="{{ url('/product') }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/56.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>Sandals<br>Collection</h3>
                <a href="{{ url('/product') }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
          <div class="col-md-4 col-xs-6">
            <div class="shop">
              <div class="shop-img">
                <img src="./img/k.jpg" alt="">
              </div>
              <div class="shop-body">
                <h3>Hat<br>Collection</h3>
                <a href="{{ url('/product') }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /shop -->

          <!-- shop -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

     <!-- SECTION -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-3" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-3">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/22.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Sandals</p>
                    <h3 class="product-name"><a href="#">Flat Sandals</a></h3>
                    <h4 class="product-price">Rp 45.000 <del class="product-old-price">Rp 60.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/23.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Hat</p>
                    <h3 class="product-name"><a href="#">Black Hat</a></h3>
                    <h4 class="product-price">Rp 35.000 <del class="product-old-price">Rp 50.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/r.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Clothes</p>
                    <h3 class="product-name"><a href="#">Tie Dye Clothes</a></h3>
                    <h4 class="product-price">Rp 195.000<del class="product-old-price">Rp 250.000</del></h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/1.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Pants</p>
                    <h3 class="product-name"><a href="#">Sports Kanva pants</a></h3>
                    <h4 class="product-price">Rp 110.000 <del class="product-old-price">Rp 170.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/2.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Jacket</p>
                    <h3 class="product-name"><a href="#">Denim Jacket</a></h3>
                    <h4 class="product-price">Rp 145.000 <del class="product-old-price">Rp 190.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/4.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Clothes</p>
                    <h3 class="product-name"><a href="#">Deus Clothes</a></h3>
                    <h4 class="product-price">Rp 50.000 <del class="product-old-price">Rp 85.000</del></h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-4" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-4">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/k.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Hat</p>
                    <h3 class="product-name"><a href="#">Korean Hat</a></h3>
                    <h4 class="product-price">Rp 75.000  <del class="product-old-price">Rp 99.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/77.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Jacket</p>
                    <h3 class="product-name"><a href="#">Levis Jacket</a></h3>
                    <h4 class="product-price">Rp 195.000 <del class="product-old-price">Rp 250.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/i.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Pants</p>
                    <h3 class="product-name"><a href="#">Hot Pants</a></h3>
                    <h4 class="product-price">Rp 5.500 <del class="product-old-price">Rp 10.000</del></h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/u.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Pants</p>
                    <h3 class="product-name"><a href="#">Trousers</a></h3>
                    <h4 class="product-price">Rp 100.000 <del class="product-old-price">Rp 150.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/ti.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Shoes</p>
                    <h3 class="product-name"><a href="#">Vans Shoes</a></h3>
                    <h4 class="product-price">Rp 75.000 <del class="product-old-price">Rp 150.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/yu.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Hat</p>
                    <h3 class="product-name"><a href="#">Black Rose Hat</a></h3>
                    <h4 class="product-price">Rp 45.000 <del class="product-old-price">Rp 70.000</del></h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

          <div class="clearfix visible-sm visible-xs"></div>

          <div class="col-md-4 col-xs-6">
            <div class="section-title">
              <h4 class="title">Top selling</h4>
              <div class="section-nav">
                <div id="slick-nav-5" class="products-slick-nav"></div>
              </div>
            </div>

            <div class="products-widget-slick" data-nav="#slick-nav-5">
              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/55.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Shoes</p>
                    <h3 class="product-name"><a href="#">Ventella Shoes</a></h3>
                    <h4 class="product-price">Rp 239.000 <del class="product-old-price">Rp 260.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/h.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Clothes</p>
                    <h3 class="product-name"><a href="#">Crop Clothes</a></h3>
                    <h4 class="product-price">Rp 95.000 <del class="product-old-price">Rp 150.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/3.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Jacket</p>
                    <h3 class="product-name"><a href="#">Jacket Denim</a></h3>
                    <h4 class="product-price">Rp 150.000 <del class="product-old-price">Rp 200.000 </del></h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>

              <div>
                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/p.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Jacket</p>
                    <h3 class="product-name"><a href="#"> Levis Jacket</a></h3>
                    <h4 class="product-price">Rp 170.000 <del class="product-old-price">Rp 195.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/o.jpg" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Shoes</p>
                    <h3 class="product-name"><a href="#">Compass Shoes</a></h3>
                    <h4 class="product-price">Rp 95.500 <del class="product-old-price">Rp 150.000</del></h4>
                  </div>
                </div>
                <!-- /product widget -->

                <!-- product widget -->
                <div class="product-widget">
                  <div class="product-img">
                    <img src="./img/c.PNG" alt="">
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category Hat</p>
                    <h3 class="product-name"><a href="#">Beanie Hat</a></h3>
                    <h4 class="product-price">Rp 12.000 <del class="product-old-price">Rp 20.000</del></h4>
                  </div>
                </div>
                <!-- product widget -->
              </div>
            </div>
          </div>

        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

     <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Young Tian</h3>
            <p>
              JL.Aip Ks.Tubun <br>
              Kalimantan Barat, Ketapang<br>
              <br><br>
              <strong>Phone:</strong> +11 0102 9898 1221<br>
              <strong>Email:</strong> youngtianshop@gmail.com<br>
            </p>
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
    </footer>
    <!-- /FOOTER -->

        <!-- jQuery Plugins -->
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

    <script src="{{url('public')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{url('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{url('public')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  </body>
</html>
