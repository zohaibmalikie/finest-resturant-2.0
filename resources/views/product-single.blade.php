      
      
@extends('layouts.kfc.kfc')
@section('title','Product Cart')
@section('content')
    
<div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
     
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Product Single</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We hope you will like this product and give us 5 star rating</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <div class="container">
              <section class="product-single padding-top-100 padding-bottom-100">
                <div class="row">
                  <div class="col-md-6">
                    <div class="product-image">
                      <div class="product-featured-image">
                        <div class="main-slider">
                          <div class="slides">
                            <div class="featured-image-item"><img src="assets/images/product/product-full-02.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-03.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-04.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-02.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-03.jpg" alt="fooday" class="img img-responsive"></div>
                          </div>
                        </div>
                        <div data-width="150" class="nav-slider">
                          <ul class="slides list-inline">
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-02.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-03.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-04.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-02.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-03.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="product-summary">
                      <div class="product-title">
                        <div class="title">Lobster Parsley Plate Lemons</div>
                      </div>
                      <div class="product-price">
                        <div class="price"><span class="currency-symbol">$ </span>100.0</div>
                      </div>
                      <div class="product-info">
                        <ul class="list-inline">
                          <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                          <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><span>4 Reviews</span></li>
                        </ul>
                      </div>
                      <div class="product-desc">
                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard.</p>
                      </div>
                      <div class="product-meta-info">
                        <div class="meta-info-item">
                          <div class="meta-info-caption">Category:</div>
                          <div class="meta-info-text"><a href="javascript:void(0)">Breakfast</a>,<a href="javascript:void(0)">Seafood</a>,<a href="javascript:void(0)">Main Menu</a></div>
                        </div>
                        <div class="meta-info-item">
                          <div class="meta-info-caption">Tags:</div>
                          <div class="meta-info-text"><a href="javascript:void(0)">Shrimp</a>,<a href="javascript:void(0)">Vegetables</a></div>
                        </div>
                      </div>
                      <div class="product-quanlity">
                        <form action="#">
                          <div class="input-group">
                            <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                          </div>
                          <div class="add-to-cart"><a href="javascript:void(0)" class="swin-btn"> <span>Add To Cart</span></a></div>
                        </form>
                      </div>
                      <div class="product-share"><span class="caption">Share</span>
                        <ul class="socials list-unstyled list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="product-tab-content">
                      <!-- Nav tabs-->
                      <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#product-desc-tab" aria-controls="product-desc-tab" role="tab" data-toggle="tab">DESCRIPTIONS</a></li>
                        <li role="presentation"><a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">REVIEWS</a></li>
                      </ul>
                      <!-- Tab panes-->
                      <div class="tab-content">
                        <div id="product-desc-tab" role="tabpanel" class="tab-pane active">
                          <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot. </p>
                          <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean.</p>
                        </div>
                        <div id="product-review" role="tabpanel" class="tab-pane">
                          <div id="reviews">
                            <div id="comments">
                              <h3 class="product-reviews-title">1 review</h3>
                              <ul class="commentlist list-unstyled">
                                <li>
                                  <div class="comment_container"><img src="http://2.gravatar.com/avatar/59c82b1d2c60537f900fb191b3cb611b?s=60&amp;d=mm&amp;r=g" width="60" height="60" alt="" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default">
                                    <div class="comment-text">
                                      <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                      <p class="meta"><strong itemprop="author">Maria</strong> –
                                        <time itemprop="datePublished" datetime="2013-06-07T15:56:24+00:00">June 7, 2017</time>:
                                      </p>
                                      <div itemprop="description" class="description">
                                        <p>This product is Awesome!!!</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="comment_container"><img src="assets/images/blog/blog-comment-avatar03.jpg" width="60" height="60" alt="" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default">
                                    <div class="comment-text">
                                      <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                      <p class="meta"><strong itemprop="author">Kelvin</strong> –
                                        <time itemprop="datePublished" datetime="2013-06-07T15:56:24+00:00">June 8, 2017</time>:
                                      </p>
                                      <div itemprop="description" class="description">
                                        <p>I recommended it!!!</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="product-related padding-bottom-100">
                <div class="swin-sc swin-sc-title style-2">
                  <p class="title"><span>You May Also Like</span></p>
                </div>
                <div class="swin-sc swin-sc-product products-02 carousel-01 woocommerce">
                  <div class="products nav-slider">
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>5.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>20.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>15.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
@endsection


   
      
    
    
          