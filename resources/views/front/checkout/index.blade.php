@extends('front.layouts.master')
@section('contact')
    <!--====== Page Checkout start ======-->
    <section class="page-Checkout-area">
        <div class="container">
            <h2 class="title changestyleabout">Checkout</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home.index')}}" class="activecolorstyle">Home</a></li>
                <li class="active activecolorstyle">Checkout</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Shoping Checkout Start  ======-->
    <section class="shoping-checkout-area section-gap">
        <div class="container">
            <form action="{{route('home.index')}}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="billing-details">
                            <h3 class="title">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="topstylechange">Country <span>*</span></label>
                                        <select>
                                            <option data-display="Select">United Arab Emirates</option>
                                            <option value="1">China</option>
                                            <option value="2">United Kingdom</option>
                                            <option value="3">Japan</option>
                                            <option value="4">France</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="topstylechange" >First Name <span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="topstylechange">Last Name <span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="topstylechange">Company Name <span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="topstylechange">Town / City <span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="topstylechange">State / County <span>*</span></label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="topstylechange">Email Address <span>*</span></label>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="topstylechange">Phone <span>*</span></label>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input type="checkbox" id="create-an-account" class="form-check-input">
                                        <label for="create-an-account" class="form-check-label topstylechange">Create an
                                            account?</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check">
                                        <input type="checkbox" id="ship-different-address" class="form-check-input">
                                        <label for="ship-different-address" class="form-check-label topstylechange">Ship to a different
                                            address?</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="address" placeholder="Order Notes"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="order-details mt-md-gap-50">
                            <h3 class="title">Your Order</h3>
                            <div class="order-table table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">Note Book Mockup</a>
                                        </td>
                                        <td class="product-total">
                                            <span class="sub-total">$250.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">Motivational Book Cover</a>
                                        </td>
                                        <td class="product-total">
                                            <span class="sub-total">$20.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-name">
                                            <a href="#">Book Cover Softcover</a>
                                        </td>
                                        <td class="product-total">
                                            <span class="sub-total">$50.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-subtotal">
                                            <span>Cart Subtotal</span>
                                        </td>
                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">$320.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Shipping</span>
                                        </td>
                                        <td class="shipping-price">
                                            <span>$30.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="total-price">
                                            <span>total-price</span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$350.00</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment-box mt-30">
                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                        <label class="topstylechange" for="direct-bank-transfer">Direct Bank Transfer</label>
                                        <span class="mb-10">
                                            Make your payment directly into our bank account. Please use your Order ID
                                            as the payment reference. Your order will not be shipped until the funds
                                            have cleared in our account.
                                        </span>
                                    </p>
                                    <p>
                                        <input type="radio" id="paypal" name="radio-group">
                                        <label class="topstylechange" for="paypal">Paypal</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="cash-on-delivery" name="radio-group">
                                        <label class="topstylechange" for="cash-on-delivery">Cash-on-delivery</label>
                                    </p>
                                </div>
                                <button class="main-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--====== Shoping Checkout End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->
@endsection
