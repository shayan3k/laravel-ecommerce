@extends('layouts.app')


@section('content')


<aside id="shop-hero" class="breadcrumbs">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/cover-img-1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Checkout</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span><a
                                            href="cart.html">Shopping Cart</a></span> <span>Checkout</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div class="shop-shop">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-10 col-md-offset-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="process text-center active">
                        <p><span>02</span></p>
                        <h3>Checkout</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>03</span></p>
                        <h3>Order Complete</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <form method="post" class="shop-form">
                    <h2>Billing Information</h2>
                    <div class="row">

                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="fname">*First Name</label>
                                <input type="text" id="fname" class="form-control loginInput" placeholder="Your firstname" required>
                            </div>
                            <div class="col-md-10">
                                <label for="lname">*Last Name</label>
                                <input type="text" id="lname" class="form-control loginInput w-100" placeholder="Your lastname" required>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="companyname">Company Name</label>
                                <input type="text" id="companyname" class="form-control loginInput" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="fname">*Address</label>
                                <input type="text" id="address" class="form-control loginInput" placeholder="Enter Your Address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="address2" class="form-control loginInput" placeholder="Second Address">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="companyname">*Town/City</label>
                                <input type="text" id="towncity" class="form-control loginInput" placeholder="Town or City" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="stateprovince">*State/Province</label>
                                <input type="text" id="fname" class="form-control loginInput" placeholder="State Province" required>
                            </div>
                            <div class="col-md-10">
                                <label for="lname">*Zip/Postal Code</label>
                                <input type="text" id="zippostalcode" class="form-control loginInput" placeholder="Zip / Postal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label for="email">*E-mail Address</label>
                                <input type="email" id="email" class="form-control loginInput" placeholder="State Province" required>
                            </div>
                            <div class="col-md-10">
                                <label for="Phone">*Phone Number</label>
                                <input type="text" id="zippostalcode" class="form-control loginInput" placeholder="" required>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="cart-detail">
                    <h2>Cart Total</h2>
                    <ul>
                        <li>
                        <span>Subtotal</span> <span>${{$subTotal}}</span>

                        </li>
                        <li><span>Shipping</span> <span>$7</span></li>
                    <li><span>Order Total</span> <span>${{$total}}</span></li>
                    </ul>
                </div>
                <div class="cart-detail">
                    <h2>Payment Method</h2>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Direct Bank Tranfer</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Check Payment</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Paypal</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label><input type="checkbox" value="">I have read and accept the terms and
                                    conditions</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><a href="#" class="btn-ordernow">Order Now <i class="fas fa-cart-arrow-down"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection


@section('goToTop')
@include('partials.goToTop')
@endsection


@section('custom-scripts')
//
@endsection
