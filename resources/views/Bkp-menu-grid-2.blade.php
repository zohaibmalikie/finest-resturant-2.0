@extends('layouts.kfc.kfc')
@section('title','Menu')
@section('content')


<div class="page-container">
    <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
        <div class="container">
            <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);"
                    data--50-top="transform: translateY(-15px);opacity:0.8;"
                    data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title"
                    class="title">Menu</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider">
                    <span class="line-before"></span><span class="dot"></span><span class="line-after"></span>
                </div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);"
                    data--50-top="transform: translateY(15px);opacity:0.8;"
                    data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title"
                    class="subtitle">The various dishes are waiting for your coming to enjoy its</div>
            </div>
        </div>
    </div>
    <div class="page-content-wrapper">
        <section class="menu-grid-02 padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                    <div class="row">
                        <div class="col-md-12">
                            <div data-slide-toshow="3" class="cat-wrapper-02 cat-images main-slider">
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/bbq.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/Peri-Chicken.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/Fired-chicken.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/Burgers.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/wraps.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/kids-meal.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/extras.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/sides.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/desserts.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                                <div class="item">
                                    <div class="cat-image"><img src="assets/images/product/drinks.jpg" alt=""
                                            class="img img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products nav-slider">
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src=" {{asset('assets/images/menu-images/LambDoner.jpg')}} "
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Lamb Doner</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>6.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src=" {{asset('assets/images/menu-images/ChickenDoner.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Doner</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>6.50</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/LambShish.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Lamb Shish</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>7.00</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/ChickenShish.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Shish</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>7.00</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/KoftaKebab.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Kofte Kebab</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>7.00</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Mixed-Kebab.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mixed Kebab</h5><span
                                                    class="price woocommerce-Price-amount amount"> Large <span
                                                        class="price-symbol">??</span>12.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row secondTitle">
                                        <div class="container">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                                <h1>Combination/Other Kebab</h1>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Lamb-shish-and-chicken-shish.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Lamb shish and chicken shish</h5>
                                                <span class="price woocommerce-Price-amount amount"> Large <span
                                                        class="price-symbol">??</span>9.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Lambshish-and-kofte.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Lamb shish and <br> kofte</h5><span
                                                    class="price woocommerce-Price-amount amount">Large <span
                                                        class="price-symbol">??</span>9.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Chicken-Shish-and-kofte.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Shish and <br> kofte</h5><span
                                                    class="price woocommerce-Price-amount amount">Large <span
                                                        class="price-symbol">??</span>9.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Mix-Doner-(Chicken-and-Lamb).jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mix Doner (Chicken and Lamb)</h5><span
                                                    class="price woocommerce-Price-amount amount">Large <span
                                                        class="price-symbol">??</span>9.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/MeatandChips.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Meat and Chips</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/ChickenDoner-Meatand-chips.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Doner Meat and chips</h5><span
                                                    class="price woocommerce-Price-amount amount">Medium <span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/DonerinBun.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Doner in Bun</h5><span
                                                    class="price woocommerce-Price-amount amount">Large <span
                                                        class="price-symbol">??</span>5.00</span>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Portionof-Meat.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Portion of Meat</h5><span
                                                    class="price woocommerce-Price-amount amount">Large <span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Portion1-of-chicken-doner-meat.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Portion of chicken doner meat</h5><span
                                                    class="price woocommerce-Price-amount amount">Large <span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/halfperperiperi-chicken.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Half Peri Peri Chicken</h5><span
                                                    class="price woocommerce-Price-amount amount"> On its own <span
                                                        class="price-symbol">??</span>5.95</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/FullPeriPeri-Chicken(meal-with-2sides2drinks)-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Full Peri Peri Chicken</h5>(meal with 2 sides 2
                                                drinks)<br><span class="price woocommerce-Price-amount amount">On its
                                                    own <span class="price-symbol">??</span>9.95</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/6PeriPeriWings.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">6 Peri Peri Wings</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/5PeriPerichicken-Strips.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">5 Peri Peri chicken Strips</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/PeriPeriRiceBox-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Peri Peri Rice Box</h5>(Plain Rice with 5 Peri Peri
                                                Chicken Strips)<br>><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>6.95</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Family-Deal-1.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Family Deal 1</h5>( 1 whole peri peri chicken, 2 peri
                                                peri burgers, 2 sides, 1.5ltr drink, )
                                                <br><span class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>20.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Family-Deal-2.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Family Deal 2</h5>( 1 whole peri peri chicken, 5 peri
                                                peri wings, 5 peri peri strips, 2 sides, 1.5ltr drink, )

                                                <br><span class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>20.00</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01b.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Grandpa's Country Fried</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>30.0</span>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01c.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Uncle Herschel's Favorite</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>27.0</span>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01d.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Uncle Herschel's Favorite</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>17.0</span>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01e.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Frish Cheese Chip</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>25.0</span>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01f.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Uncle Herschel's Favorite</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>27.0</span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/2-Pcs-Chicken.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">2 Pcs chicken meal</h5>( 2 pcs of fried chicken with
                                                any side and can of drink )<br><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/3-PcsChicken-Meal-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">3 Pcs Chicken Meal</h5>( 3 pcs of fried chicken with
                                                any side and can of drink ) <br> <span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/6-Wings-Meal-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">6 Wings Meal</h5>( 6 fried wings with any side and can
                                                of drink ) <br> <span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/VarietyMeal.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Variety Meal</h5>( 2 pcs chicken, 2 wings, 1 fillet
                                                strip, any side and can of drink )
                                                <br><span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>6.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/MiniBucket-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mini Bucket</h5>( 6 pcs chicken 6 wings and 2 regular
                                                fries ) <br> <span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>11.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Fillet-RiceBox-100(2).jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Fillet Rice Box</h5>( 5 pcs fried chicken strips with
                                                plain rice )<br><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/FilletSaladBox-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Fillet Salad Box </h5> ( 5 pcs fried chicken strips
                                                with box of salad ) <br> <span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Family-Bucket-6-pcs.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Family Bucket 6 pcs</h5> ( 6 pcs chicken 3 regular
                                                Fries ) <br> <span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>10.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Family-Bucket-10-pcs.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Family Bucket 10 pcs</h5> ( 10 pcs chicken, 4 regular
                                                fries ) <br> <span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>15.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Boneless-Bucket.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Boneless Bucket</h5>( 12 chicken strips, 1 large
                                                chicken popcorn, 2 regular fries, 2 Sides , 1.5ltr bottle of drink )
                                                <br> <span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>20.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/FamilyMegaMix-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Family Mega Mix</h5> ( 6 pcs chicken, 6 spicy wings, 3
                                                chicken fillet burgers, 3 regular fries ) <br> <span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>20.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Family-Treat.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Family Treat</h5> ( 12 pcs chicken, 2 reg fries , 2
                                                sides, 1.5ltr bottle of drink ) <br> <span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>19.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/2-Pcs-Chicken100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">2 Pcs Chicken</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>2.80</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/3-pcs-Chicken.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">3 pcs Chicken</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/5pcs-Chicken-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">5 pcs Chicken</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>6.80</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/8-pcs-Chicken100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">8 pcs Chicken</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>9.95</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/3-Chicken-Strips.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">3 Chicken Strips</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.75</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/4-Chicken-Strips-.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">4 Chicken Strips</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.75</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/6-Hot-Wings.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">6 Hot Wings</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/10-Hot-Wings.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">10 Hot Wings</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/20-Hot-Wings.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">20 Hot Wings</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>8.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Mega-Fillet-Burger-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mega Fillet Burger</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Quarter-Pounder-Burger-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Quarter Pounder Burger</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>3.95</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Half-Pounder-Burger.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Half Pounder Burger</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Mega-peri-peri-burgers-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mega Peri Peri Burger</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>4.95</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/VeggieBurger-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Veggie Burger</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>3.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/CheeseBurger-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Cheese Burger</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>2.95</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Mini-Fillet-Burger-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mini Fillet Burger </h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>2.95</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01e.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Uncle Herschel's Favorite</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>17.0</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01l.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Frish Cheese Chip</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>25.0</span>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01b.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Grandpa's Country Fried</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>30.0</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01f.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Frish Cheese Chip</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>25.0</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img src="assets/images/product/product-01d.jpg"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Uncle Herschel's Favorite</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>27.0</span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/ChickenDoner-Wrap-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Doner Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/LambDonerWraps-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Lamb Doner Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Chicken-Shish-Wrap.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Shish Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>7.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Lamb-Shish-Wrap.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Lamb Shish Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>7.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/KofteWraps-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Kofte Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>7.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Chickenfillet-Wraps-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Fillet Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/PeriPeriChicken-Wraps-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Peri Peri Chicken Wrap </h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/VeggieWrap-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Veggie Wrap</h5><span
                                                    class="price woocommerce-Price-amount amount">On its own <span
                                                        class="price-symbol">??</span>5.50</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="{{asset('assets/images/menu-images/Chickenfillet-Wraps-100.jpg')}}" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="{{asset('assets/images/menu-images/Chickenfillet-Wraps-100.jpg')}}" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="{{asset('assets/images/menu-images/Chickenfillet-Wraps-100.jpg')}}" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="{{asset('assets/images/menu-images/Chickenfillet-Wraps-100.jpg')}}" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
</div>
</div> -->
                                    </div>
                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Kids4Nuggets-sideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Kids 4 Nuggets, side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/SmallPopcorn-chicken,sideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Small Popcorn chicken, side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Cheeseburger-sideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Cheese burger, side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Steakburger-withsideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Steak burger with side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Kofte Wrap</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">??</span>7.50</span>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Chicken Fillet Wrap</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">??</span>4.50</span>
</div>
</div> -->

                                    </div>

                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Popcorn-Chicken-Regular.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Popcorn Chicken Regular</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/PopcornChickenLarge-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Popcorn Chicken Large</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/PotatoWedges-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Potato Wedges</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/6BBQWings-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">6 BBQ Wings</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/PittaBread-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Pitta Bread</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>0.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/OnionRings10-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Onion Rings 10</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.00</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Large-Chips-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Large Chips</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>2.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Chips-in-Pitta-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chips in Pitta</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Chips-in-pitta-with-cheese-or-salad -100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chips in pitta with cheese or salad</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.80</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/BoxofSalad-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Box of Salad</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>2.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/ChickenNuggets (7)-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chicken Nuggets (7)</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/SauceinPot -100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Sauce in Pot </h5> (burger, chilli, mayo, garlic mayo,
                                                ketchup) <br> <span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>0.70</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Kids4Nuggets-sideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Kids 4 Nuggets, side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/SmallPopcorn-chicken,sideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Small Popcorn chicken, side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Cheeseburger-sideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Cheese burger, side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Steakburger-withsideanddrink-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Steak burger with side and drink</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>4.50</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Kofte Wrap</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">??</span>7.50</span>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Chicken Fillet Wrap</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">??</span>4.50</span>
</div>
</div> -->

                                    </div>

                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/ChocolateFudge-Cake-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Chocolate Fudge Cake</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/StrawberryCheese-Cake-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Strawberry Cheese Cake</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.00</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Ben-&-Jerrys.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Ben & Jerrys 465 ml</h5>(chocolate fudge, Cookie
                                                Dough) <br> <span class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>6.50</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
</div>
</div> -->
                                        <!-- <div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-12">
<div class="item product-01">
<div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
<div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
</div>
<h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
</div>
</div> -->

                                    </div>

                                </div>
                                <div class="item-slick">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Pepsi-0.33L.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Pepsi 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Pepsidiet0.33L _1-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Pepsi diet 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/7Up0.33L-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">7Up 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/MirindaStrawbery 0.33L-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Mirinda Strawbery 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/TangoOrange 0.33L-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Tango Orange 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Dr.Pepper0.33L -100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Dr.Pepper 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Coke0.33L-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Coke 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/DietCoke0.33L-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Diet Coke 0.33L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>1.20</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Pepsi1.5L-100.jpg')}}"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Pepsi 1.5L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>3.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Pepsidiet1.5L-100.jpg')}}"
                                                        style="height: 80px; width: 120px;" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Pepsi diet 1.5L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">??</span>3.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/Cock.jpg')}}" alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Coke 1.5L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>3.50</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="item product-01">
                                                <div class="block-img"><img
                                                        src="{{asset('assets/images/menu-images/DietCoke1.5L -100.jpg')}}"
                                                        alt="">
                                                    <div class="group-btn"><a href="#"
                                                            class="swin-btn btn-add-to-card"><i
                                                                class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                <h5 class="title">Diet Coke 1.5L</h5><span
                                                    class="price woocommerce-Price-amount amount"><span
                                                        class="price-symbol">$</span>3.50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="menu-banner-section banner-section padding-top-100 padding-bottom-100"><img src="assets/images/background/lemon.png" alt="" class="img-left img-bg img-deco img-responsive"><img src="assets/images/background/vegetable_03.png" alt="" class="img-right img-bg img-deco img-responsive">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="content-wrapper">
                      <h2 class="heading-title">Let's Make Your Meal be Fantastic With<span class="text-large"> FOODAY</span>Awesome Menu!</h2>
                      <div class="swin-btn-wrap"><a href="#" class="swin-btn"><span>Book Table</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
        <!-- <section class="menu-grid-02 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                  <div class="row">
                    <div class="col-md-12">
                      <div data-slide-toshow="2" class="cat-wrapper-02 cat-images main-slider">
                        <div class="item">
                          <div class="cat-image"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive"></div>
                        </div>
                        <div class="item">
                          <div class="cat-image"><img src="assets/images/product/pd-cat-drink.png" alt="" class="img img-responsive"></div>
                        </div>
                        <div class="item">
                          <div class="cat-image"><img src="assets/images/product/pd-cat-dinner.png" alt="" class="img img-responsive"></div>
                        </div>
                        <div class="item">
                          <div class="cat-image"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="products nav-slider">
                        <div class="item-slick">
                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1c.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1d.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1e.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1f.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1g.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1k.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1h.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1l.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-slick">
                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1d.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1e.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1c.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1f.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1k.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1h.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1l.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1g.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item-slick">
                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1g.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1c.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1f.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1d.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1e.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1k.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1h.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                              </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-12">
                              <div class="item product-01">
                                <div class="block-img"><img src="assets/images/product/product-circle-1l.jpg" alt="">
                                  <div class="group-btn"><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                </div>
                                <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
    </div>
</div>
@endsection
