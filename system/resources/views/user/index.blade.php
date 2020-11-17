<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko Online | User </title>
        <link rel="icon" type="image/x-icon" href="{{url('public')}}/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url('public')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{url('public')}}/assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Kategori</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Produk</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/registrasi')}}">Registrasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Store!</div>
                <div class="masthead-subheading text-uppercase">Which sells types of goods such as smartphones leptop televisions and printers.</div>
            </div>
        </header>
 
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kategori</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah kategori produk yang kami miliki.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('public')}}/assets/img/about/hp opo.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Smartphone Android</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Mau beli smartphone android online berkualitas dengan harga murah terbaru 2020 pembayarannya mudah bahkan pengirimannya cepat loh. </p> <a href="{{url('produk')}}" class="btn btn-sm btn-success">Belanja</a> </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('public')}}/assets/img/about/tv.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Televisi</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dapatkan televisi dengan kualitas yang bagus dengan harga standar.  </p><a href="{{url('produk')}}" class="btn btn-sm btn-success">Belanja</a> </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('public')}}/assets/img/about/leptop.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Laptop / PC</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Jual leptop online terbaru-harga, promo dan diskon dengan fasilitas belanja online terbaik.</p><a href="{{url('produk')}}" class="btn btn-sm btn-success">Belanja</a> </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('public')}}/assets/img/about/printer.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Printer</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Dapatkan printer di indonesi. cek penawaran dan ulasan jual beli pinter online aman garansi 1 tahun loh .</p><a href="{{url('produk')}}" class="btn btn-sm btn-success">Belanja</a> </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Mulai Cerita
                                <br />
                                Kamu
                                <br />
                                Disini!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

       <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Produk</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah kategori Produk Kami.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{url('public')}}/assets/img/portfolio/realmi 6.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Realme</div>
                                <div class="portfolio-caption-subheading text-muted">Realme 6</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{url('public')}}/assets/img/portfolio/realme-c11.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Realme</div>
                                <div class="portfolio-caption-subheading text-muted">Realme C11</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{url('public')}}/assets/img/portfolio/realme c17.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Realme</div>
                                <div class="portfolio-caption-subheading text-muted">Realme C17</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center  text-center">
                    <button class="btn btn-primary">Info Lebih  Lanjut Silahkan Lihat Di Halaman Admin Dengan Masuk Ke Login</button>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Teknik Informatika 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{url('public')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Realme</h2>
                                    <p class="item-intro text-muted">Realme 6</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url('public')}}/assets/img/portfolio/realmi 6.jpg" alt="" />
                                    <p>Realme 6 merupakan penerus dari realme 5 pro, sementara realme 6 pro merupakan suksuker realme XT. dibandingkan generasi pendahulunya, masing-masing perangkat dibekali dengan sejumlah peningkatan spesifikasi.</p>
                                    <ul class="list-inline">
                                        <li>Layar : IPS LCD 6,5  inci, 1.080 x 2.400 piksel, rasio layar 20:9, refresh rate 90 Hz, Gorilla Glass 3</li>
                                        <li>Dimensi dan bobot: 161,1 x 74,8 x 8,9 mm 191 gram</li>
                                        <li>Ram: 4 GB/8 GB 128 GB</li>
                                        <li>Kamera Depan : 16 MP(f/2.0)</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{url('public')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Realme</h2>
                                    <p class="item-intro text-muted">Realme C11</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url('public')}}/assets/img/portfolio/realme-c11.jpg" alt="" />
                                    <p>Realme C11 merupakan suksesor Realme C2 yang menyasar segma entry-level. dapur pacunya mengandalkan chip gaming besutan mediatek yaitu helio G35 dengan GPU Mali640. </p>
                                    <ul class="list-inline">
                                        <li>Layar: Full HD 6,5 inci, IPS LCD, (1.560 x 720 piksel), Ration 20:9</li>
                                        <li>Ram: 2 GB / 3 GB</li>
                                        <li>Memory: Micro SD slot (Up to 256 GB)</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{url('public')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Realme </h2>
                                    <p class="item-intro text-muted">Realme C17</p>
                                    <img class="img-fluid d-block mx-auto" src="{{url('public')}}/assets/img/portfolio/realme c17.jpg" alt="" />
                                    <p>Realme C17 merupakan ponsel kelas menengah yang hadir dengan layar IPS LCD 6,5 inci.</p>
                                    <ul class="list-inline">
                                        <li>Layar: refresh rate 90HZ</li>
                                        <li>Ram: 6 GB/ 256 GB</li>
                                        <li>Batrai berkapasitas: 5000mAh pengisian daya cepat 18W</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{url('public')}}/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
        <!-- Project Details Go Here-->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{url('public')}}/assets/mail/jqBootstrapValidation.js"></script>
        <script src="{{url('public')}}/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="{{url('public')}}/js/scripts.js"></script>
    </body>
</html>
