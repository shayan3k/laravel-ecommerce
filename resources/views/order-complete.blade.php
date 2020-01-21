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
                                <h1>Order Complete</h1>
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
        <div class="row row-pb-lg">
            <div class="col-md-10 col-md-offset-1 mx-auto mb-2">
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
            <div class="col-md-10 col-md-offset-1 text-center  mx-auto py-4 mt-5">
                <span class="icon"><i class="icon-shopping-cart"></i></span>
                <h2>Thank you for purchasing, Your order is complete</h2>
                <p>
                    <a href="index.html" class="btn btn-primary">Home</a>
                    <a href="shop.html" class="btn btn-primary btn-outline">Continue Shopping</a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection


@section('custom-scripts')
@include('partials.goToTop')
@endsection
