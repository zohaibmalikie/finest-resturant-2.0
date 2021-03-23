      
@extends('layouts.kfc.kfc')
@section('title','Product Cart')
@section('content')
    
<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Product Cart</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We hope you will like this product and give us 5 star rating</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <div class="container">
              <section class="padding-top-100 padding-bottom-100">
                <form class="product-cart-form">
                  <table class="shop_table shop_table_responsive">
                    <thead>
                      <tr>
                        <th class="product-remove"> </th>
                        <th class="product-thumbnail"> </th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="cart_item">
                        <td class="product-remove"><a href="#" aria-label="Remove this item" data-product_id="1061" data-product_sku="" class="remove">×</a></td>
                        <td class="product-thumbnail"><a href="#"><img width="150" height="100" src="assets/images/product/product-2l.jpg" alt="" class="img-responsive"></a></td>
                        <td data-title="Product" class="product-name"><a href="#">Chocolate Fudge Ripple</a></td>
                        <td data-title="Price" class="product-price"><span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>25.0</span></td>
                        <td data-title="Quantity" class="product-quantity">
                          <div class="quantity">
                            <input type="number" step="1" min="0" max="" name="cart[a89cf525e1d9f04d16ce31165e139a4b][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" class="form-control input-qty">
                          </div>
                        </td>
                        <td data-title="Total" class="product-subtotal"><span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>25.0</span></td>
                      </tr>
                      <tr class="cart_item">
                        <td class="product-remove"><a href="#" aria-label="Remove this item" data-product_id="1070" data-product_sku="" class="remove">×</a></td>
                        <td class="product-thumbnail"><a href="#"><img width="150" height="100" src="./assets/images/product/product-2n.jpg" alt="" class="img-responsive"></a></td>
                        <td data-title="Product" class="product-name"><a href="#">Coffee Caramel Swirl</a></td>
                        <td data-title="Price" class="product-price"><span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>14.0</span></td>
                        <td data-title="Quantity" class="product-quantity">
                          <div class="quantity">
                            <input type="number" step="1" min="0" max="" name="" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" class="form-control input-qty">
                          </div>
                        </td>
                        <td data-title="Total" class="product-subtotal"><span class="product-Price-amount amount"><span class="product-Price-currencySymbol">$</span>14.0</span></td>
                      </tr>
                      <tr>
                        <td colspan="6" class="product-coupon">
                          <div class="actions">
                            <div class="coupon">
                              <input type="text" name="coupon_code" value="" placeholder="Coupon code" class="form-control input-coupon">
                              <input type="button" name="apply_coupon" value="Apply coupon" class="swin-btn">
                            </div>
                            <input type="button" name="update_cart" value="Update cart" class="swin-btn f-right">
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                <div class="product-cart-total">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                      <h2 class="cart-total-title">Cart Totals</h2>
                      <table cellspacing="0" class="shop_table">
                        <tbody>
                          <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal"><span class="product-amount amount"><span class="product-currencySymbol">$</span>39.0</span></td>
                          </tr>
                          <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total"><strong><span class="product-amount amount"><span class="product-currencySymbol">$</span>39.0</span></strong></td>
                          </tr>
                        </tbody>
                      </table><a href="#" class="swin-btn"><span>Process To Checkout</span></a>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
@endsection


   
      
    