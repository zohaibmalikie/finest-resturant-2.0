<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','')</title>
    <!-- Bootstrap CSS-->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="{{asset('assets/vendors/flexslider/flexslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/swipebox/css/swipebox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/slick/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/pageloading/css/component.min.css')}}">
    <!-- Font-icon-->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-icon/style.css')}}">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/extra.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/widget.css')}}">
    <!--link#colorpattern(rel='stylesheet', type='text/css', href='assets/css/color/colordefault.css')-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="{{asset('assets/vendors/html5shiv.js')}}"></script>
    <script src="{{asset('assets/vendors/respond.min.js')}}"></script>
    <script src="{{asset('assets/vendors/pageloading/js/snap.svg-min.js')}}"></script>
    <script src="{{asset('assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js')}}"></script>
  </head>
  <body>
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">

      <header>
          <div class="header-top top-layout-02">
            <div class="container">
              <div class="topbar-left">
                <div class="topbar-content">
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span>35 Bexley Road Erith DAB 1SH</span></div>
                  </div>
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-phone"></i><span>01322334886</span></div>
                  </div>
                </div>
              </div>
              <div class="topbar-right">
                <div class="topbar-content">
                  <div class="item">
                    <ul class="socials-nb list-inline wg-social">
                      <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="wg-social"><i class="fa fa-user"></i><a href="javascript:void(0)">My Account</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="header-main">
            <div class="container">
              <div class="open-offcanvas">&#9776;</div>
              <div class="utility-nav">
                <div class="dropdown dropdown-full-mobile"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-shopping-bag"></i></a>
                  <div class="dropdown-menu">
                    <div class="cart_lite">
                      <div class="cart_lite_list">
                        <ul>
                          <li class="cart_lite_item"><a href="{{url('single-product')}}" class="cart_item_thumbnail"><img width="150" height="100" src="{{asset('assets/images/product/product-circle-1h.jpg')}}" alt="" class="img-responsive"></a>
                            <div class="cart_item_summary"><a href="{{url('single-product')}}" class="cart_item_title">Caramel Frappuccino</a><span class="product-price-amount"><span class="quantity">1 × </span><span class="product-price-currencySymbol">$</span>12.0</span></div><a href="#" class="remove_from_cart_button">×</a>
                          </li>
                          <li class="cart_lite_item"><a href="{{url('single-product')}}" class="cart_item_thumbnail"><img width="150" height="100" src="{{asset('assets/images/product/product-circle-1k.jpg')}}" alt="" class="img-responsive"></a>
                            <div class="cart_item_summary"><a href="{{url('single-product')}}" class="cart_item_title">Chocolate Fudge Ripple</a><span class="product-price-amount"><span class="quantity">2 × </span><span class="product-price-currencySymbol">$</span>24.0</span></div><a href="#" class="remove_from_cart_button">×</a>
                          </li>
                        </ul>
                      </div>
                      <div class="cart_lite_total">
                        <p><strong>Subtotal: </strong><span class="product-price-amount"><span class="product-price-currencySymbo">$</span>60.0</span></p>
                      </div>
                      <div class="cart_lite_button"><a href="{{url('cart')}}" class="swin-btn btn-sm"><span>View Cart</span></a><a href="{{url('checkout')}}" class="swin-btn btn-sm"><span>Checkout</span></a></div>
                    </div>
                  </div>
                </div>
                <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu">
                    <div class="search-form">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header-logo"><a href="{{url('index')}}" class="logo"><img src="{{asset('assets/images/NewLogo.png')}}" alt="fooday" class="logo-img mu-w-140"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="dropdown current-menu-item"><a href="{{url('index')}}" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <!-- <ul class="dropdown-menu">
                        <li><a href="index.php">Home 1</a></li>
                        <li><a href="homepage2.php">Home 2</a></li>
                        <li><a href="homepage3.php">Home 3</a></li>
                        <li><a href="home-fullpage.php" target="_blank">Home Full Page</a></li>
                        <li><a href="home-shop.php">Home Shop</a></li>
                        <li><a href="homesidebarmenu.php">Home Sidebar Menu</a></li>
                        <li><a href="home-one-page.php" target="_blank">Home One Page</a></li>
                        <li><a href="home-boxed.php">Home Boxed</a></li>
                      </ul> -->
                    </li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <!-- <li><a href="reservation.php">Reservation</a></li> -->
                    <li class="dropdown"><a href="{{url('menu')}}" class="dropdown-toggle">
                         
                        Menu</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <!-- <ul class="dropdown-menu">
                        <li><a href="menu-classic.php">Menu Classic</a></li>
                        <li><a href="menu-grid-1.php">Menu Grid 01</a></li>
                        <li><a href="menu-grid-2.php">Menu Grid 02</a></li>
                        <li><a href="menu-grid-3.php">Menu Grid 03</a></li>
                        <li><a href="product-single.php">Product Detail</a></li>
                        <li><a href="product-cart.php">Product Cart</a></li>
                        <li><a href="product-checkout.php">Product Checkout</a></li>
                      </ul> -->
                    </li>
                    <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Blog</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blogs.php">Blog List</a></li>
                        <li><a href="blog-single.php">Blog Single</a></li>
                        <li><a href="page-404.php">404 Page</a></li>
                      </ul>
                    </li> -->
                    <li><a href="{{url('contact')}}">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>


        @yield('content')

      <footer>
          <div class="subscribe-section">
            <!-- <img src="assets/images/NewLogo.png" alt="" class="img-subscribe mu-mb-35px"> -->
            <div class="container">
              <div class="subscribe-wrapper">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="subscribe-heading">
                      <h3 class="title">Subcribe Us Now</h3>
                      <div class="des">Get more news and delicious dishes everyday from us</div>
                    </div>
                    <form class="widget-newsletter">
                      <input placeholder="Email" class="form-control"><span class="submit"><i class="fa fa-paper-plane"></i></span>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img src="{{asset('assets/images/NewLogo-2.png')}}" alt="" class="img img-responsive mu-w-140"></a>
                          <ul class="socials socials-about list-unstyled list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                        <div class="wget-about-content">
                          <p>Welcome to official website of FKC. Created in 2020 FKC offers halal food for its customers. Our menu contains wide range of options. All the food cooked is 100% healthy and hygienic. We are located at 35 Bexley Road Erith DAB 1SH visit us give us a chance to show you our hospitality. See our menu section to see what we offer and make up your mind.  </p>
                        </div>
                        <div class="about-contact-info clearfix">
                          <div class="address-info d-flexAlignItemsCenter">
                            <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="info-content">
                              <p class="m-0">35 Bexley Road Erith DAB 1SH</p>
                              <!-- <p>689 Lynn Street South Boston</p> -->
                            </div>
                          </div>
                          <div class="phone-info d-flexAlignItemsCenter">
                            <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                            <div class="info-content">
                              <p class="m-0">01322334886</p>
                           
                            </div>
                          </div>
                          <div class="email-info d-flexAlignItemsCenter">
                            <div class="info-icon"><i class="fa fa-envelope"></i></div>
                            <div class="info-content">
                              <p class="m-0">finestkebabandchicken@gmail.com</p>
                         
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="ft-fixed-area">
                    <div class="reservation-box">
                      <div class="reservation-wrap">
                        <h3 class="res-title">Open Hour</h3>
                        <div class="res-date-time">
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Monday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>11AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Tuesday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>11AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Wednesday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>11AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Thursday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>11AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Friday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>4AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Saturday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>11AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                          <div class="res-date-time-item">
                            <div class="res-date">
                              <div class="res-date-item">
                                <div class="res-date-text">
                                  <p>Sunday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>11AM - 23PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <h3 class="res-title">Reservation Numbers</h3>
                        <p class="res-number">
                          020 8304 1053</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
      </div>
      <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
        <div class="loader-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
            <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
          </svg>
          <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
          <div class="sk-circle sk-circle-out">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery-->
    <script src="assets/vendors/jquery-1.10.2.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <!-- Vendors-->
    <script src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>
    <script src="assets/vendors/swipebox/js/jquery.swipebox.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/jquery-countTo/jquery.countTo.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/parallax/parallax.min.js"></script>
    <script src="assets/vendors/gmaps/gmaps.min.js"></script>
    <script src="assets/vendors/audiojs/audio.min.js"></script>
    <script src="assets/vendors/vide/jquery.vide.min.js"></script>
    <script src="assets/vendors/pageloading/js/svgLoader.min.js"></script>
    <script src="assets/vendors/pageloading/js/classie.min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js"></script>
    <script src="assets/vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/vendors/wowjs/wow.min.js"></script>
    <script src="assets/vendors/skrollr.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Own script-->
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/elements.js"></script>
    <script src="assets/js/widget.js"></script>
  </body>
</html>
