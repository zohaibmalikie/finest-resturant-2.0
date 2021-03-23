      
@extends('layouts.kfc.kfc')
@section('title','Reservation')
@section('content')
<div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
        <header>
          <div class="header-top top-layout-02">
            <div class="container">
              <div class="topbar-left">
                <div class="topbar-content">
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span>157 White Oak Drive Kansas City</span></div>
                  </div>
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-phone"></i><span>012 987 650</span></div>
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
              <div class="header-logo"><a href="index.html" class="logo"><img src="assets/images/logo.png" alt="fooday" class="logo-img"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="dropdown"><a href="index.html" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li class="current-menu-item"><a href="index.html">Home 1</a></li>
                        <li><a href="homepage2.html">Home 2</a></li>
                        <li><a href="homepage3.html">Home 3</a></li>
                        <li><a href="homesidebarmenu.html">Home Sidebar Menu</a></li>
                        <li><a href="home-one-page.html">Home One Page</a></li>
                      </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="current-menu-item"><a href="reservation.html">Reservation</a></li>
                    <li class="dropdown"><a href="menu-grid-1.html" class="dropdown-toggle">
                         
                        Menu</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="menu-classic.html">Menu Classic</a></li>
                        <li><a href="menu-grid-1.html">Menu Grid 01</a></li>
                        <li><a href="menu-grid-2.html">Menu Grid 02</a></li>
                        <li><a href="menu-grid-3.html">Menu Grid 03</a></li>
                        <li><a href="product-single.html">Product Detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Blog</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="blogs.html">Blog List</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="page-404.html">404 Page</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Reservation</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Just a few click to make the reservation online for saving your time and money</div>
              </div>
            </div>
          </div>
          <section class="section-reservation-form padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2">
                  <h3 class="title"><span>Reservation Form</span></h3>
                </div>
                <div class="reservation-form">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 225-88888</span></p>
                    </div>
                  </div>
                  <div class="swin-sc swin-sc-contact-form light mtl">
                    <form action="" method="POST">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                          <input type="text" placeholder="Username" name ="username" class="form-control">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                          <input type="email" placeholder="Email" name ="mail" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <div class="fa fa-phone"></div>
                          </div>
                          <input type="text" placeholder="Phone" name="phone" class="form-control">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-male"></i></div>
                          <select type="text" placeholder="People" name="people" class="form-control">
                            <option>1 person</option>
                            <option>2 People</option>
                            <option>3 People</option>
                            <option>4 People</option>
                            <option>5 People</option>
                            <option>6 People</option>
                            <option>7 People</option>
                            <option>8 People</option>
                            <option>9 People</option>
                            <option>10 People</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          <input type="text" placeholder="Date" name="date" class="form-control datepicker">
                        </div>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <div class="fa fa-clock-o"></div>
                          </div>
                          <select type="text" placeholder="Time" name="time" class="form-control">
                            <option>7:00 AM</option>
                            <option>8:00 AM</option>
                            <option>9:00 AM</option>
                            <option>10:00 AM</option>
                            <option>11:00 AM</option>
                            <option>12:00 AM</option>
                            <option>1:00 PM</option>
                            <option>2:00 PM</option>
                            <option>3:00 PM</option>
                            <option>4:00 PM</option>
                            <option>5:00 PM</option>
                            <option>6:00 PM</option>
                            <option>7:00 PM</option>
                            <option>8:00 PM</option>
                            <option>9:00 PM</option>
                            <option>10:00 PM</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="swin-btn-wrap center"><button href="#" class="swin-btn center form-submit" type="submit"> <span>Book Table</span></button></div>
                        <input type="hidden" name="reservation">
                      </div>
                      <?php if ($mail_reservation_status != '') {
                        echo $mail_reservation_status;
                      } ?>
                    </form>
                  </div>
                </div>
                <div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div>
              </div>
            </div>
          </section>
          <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2 light">
                  <h3 class="title"><span>Fooday Best Service</span></h3>
                </div>
                <div class="swin-sc swin-sc-iconbox light">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                        <h4 class="title">Reservation</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                        <h4 class="title">Private Event</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                        <h4 class="title">Online Order</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                      <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                        <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                        <h4 class="title">Fast Delivery</h4>
                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-reservation-events padding-top-100 padding-bottom-100">
            <div class="container">
              <div class="section-content">
                <div class="swin-sc swin-sc-title style-2">
                  <h3 class="title"><span>Upcoming Events</span></h3>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="swin-sc swin-sc-event swin-transition wow fadeInLeft">
                      <div class="swin-sc-event-inner">
                        <div class="event-info clearfix">
                          <div class="event-date"><span class="day">12</span><span class="month">Jun</span></div>
                          <div class="event-title"><a href="#" class="swin-transition">Hong Kong Tasty Food Cooking Event</a></div>
                        </div>
                        <div class="event-featured-img"><img src="assets/images/event/event-01.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="event-countdown swin-transition">
                          <div class="event-countdown-inner">
                            <div class="event-img"><img src="assets/images/event/event-01.jpg" alt=""></div>
                            <ul class="event-countdown-content list-inline nav-justified">
                              <li><span class="num">03</span><span class="cap">/days</span></li>
                              <li><span class="num">50</span><span class="cap">/foods</span></li>
                              <li><span class="num">290</span><span class="cap">/guests</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="swin-sc swin-sc-event swin-transition wow fadeInRight">
                      <div class="swin-sc-event-inner">
                        <div class="event-info clearfix">
                          <div class="event-date"><span class="day">12</span><span class="month">Jun</span></div>
                          <div class="event-title"><a href="#" class="swin-transition">Regional Cuisine Down Home Cooking</a></div>
                        </div>
                        <div class="event-featured-img"><img src="assets/images/event/event-02.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="event-countdown swin-transition">
                          <div class="event-countdown-inner">
                            <div class="event-img"><img src="assets/images/event/event-01.jpg" alt=""></div>
                            <ul class="event-countdown-content list-inline nav-justified">
                              <li><span class="num">02</span><span class="cap">/days</span></li>
                              <li><span class="num">20</span><span class="cap">/foods</span></li>
                              <li><span class="num">120</span><span class="cap">/guests</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer>
          <div class="subscribe-section"><img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
            <div class="container">
              <div class="subscribe-wrapper">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="subscribe-heading">
                      <h3 class="title">Subcribe Us Now</h3>
                      <div class="des">Get more news and delicious dishes everyday from us</div>
                    </div>
                    <form class="widget-newsletter" action="#" method="POST">
                      <input placeholder="Email" type="email" required class="form-control" name="mail-subscribe">
                      <button style="border: 0; background-color: transparent" type="submit" class="submit"><span><i class="fa fa-paper-plane"></i></span></button>
                      <?php if ($mail_subscribe_status != '') {
                        echo $mail_subscribe_status;
                      } ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-top"></div>
          <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img src="assets/images/logo-ft.png" alt="" class="img img-responsive"></a>
                          <ul class="socials socials-about list-unstyled list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                        <div class="wget-about-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
                        </div>
                        <div class="about-contact-info clearfix">
                          <div class="address-info">
                            <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="info-content">
                              <p>157 White Oak Drive Kansas City </p>
                              <p>689 Lynn Street South Boston</p>
                            </div>
                          </div>
                          <div class="phone-info">
                            <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                            <div class="info-content">
                              <p>(617)-276-8031</p>
                              <p>(617)-276-8031</p>
                            </div>
                          </div>
                          <div class="email-info">
                            <div class="info-icon"><i class="fa fa-envelope"></i></div>
                            <div class="info-content">
                              <p>admin@fooday.com</p>
                              <p>support@fooday.com</p>
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
                                  <p>Tuesday:</p>
                                </div>
                                <div class="res-date-dot">.......................................</div>
                              </div>
                            </div>
                            <div class="res-time">
                              <div class="res-time-item">
                                <p>7AM - 9PM</p>
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
                                <p>7AM - 9PM</p>
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
                                <p>7AM - 9PM</p>
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
                                <p>7AM - 9PM</p>
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
                                <p>7AM - 9PM</p>
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
                                <p>7AM - 9PM</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
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
                                <p>Close</p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <h3 class="res-title">Reservation Numbers</h3>
                        <p class="res-number">(617)-276-8031</p>
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
      <div id="live-setting" class="hidden-sm hidden-xs"><a id="open-popup"><i class="fa fa-cogs"></i></a>
        <form id="popup">
          <h5 class="live-title">Live Setting</h5>
          <div class="popup-inner">
            <div class="box-setting">
              <p>Pattern Color Variable</p>
              <div class="color-setting">
                <ul class="list-unstyled">
                  <li class="colordefault"><span>Default</span><a></a></li>
                  <li class="color01"><span>Pizza + Bread</span><a></a></li>
                  <li class="color02"><span>Wine</span><a></a></li>
                  <li class="color03"><span>Coffee</span><a></a></li>
                  <li class="color04"><span>Vegetable</span><a></a></li>
                  <li class="color05"><span>Cream</span><a></a></li>
                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection


   
      
    
   