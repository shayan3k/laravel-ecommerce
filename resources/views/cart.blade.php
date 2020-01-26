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
                                <h1>Shopping Cart</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span><a
                                            href="shop.html">Product</a></span> <span>Shopping Cart</span></h2>
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

            @include('partials.message', ['errors' => $errors])

            <div class="col-md-10 col-md-offset-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="process text-center">
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
        <div class="row row-pb-md">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-4 text-center">
                        <span>Product Details</span>
                    </div>
                    <div class="col-2 text-center">
                        <span>Price</span>
                    </div>
                    <div class="col-2 text-center">
                        <span>Quantity</span>
                    </div>
                    <div class="col-2 text-center">
                        <span>Total</span>
                    </div>
                    <div class="col-2 text-center">
                        <span>Remove</span>
                    </div>
                </div>
                <hr>




                @forelse ($products as $item)
               {{-- {{ dd($item)}} --}}

                <div class="row">
                    <div class="col-4">
                        <div class="product-img" style="background-image: url(../images/{{$item->attributes->thumbnail}});">
                        </div>
                        <div class="display-tc cart-fonts text-center">
                            <h6>{{$item->name}}</h3>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center text-center">
                        <div class="display-tc cart-fonts">
                            <span class="price">${{$item->price}}</span>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center text-center">
                        <div class="display-tc cart-fonts d-flex justify-content-center align-items-center">

                                <span class="price">{{$item->quantity}}</span>

</div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center text-center">
                        <div class="display-tc cart-fonts">
                            <span class="price">${{$item->price * $item->quantity}}</span>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center text-center">
                        <div class="display-tc cart-fonts">
                        <a href="/cart/remove/{{$item->id}}" ><i class="far fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
                <hr>
                @empty
                <div class="alert alert-info">


                    <h2>No item to show</h2>
                    <h4>try to add new items to your cart :)</h4>

                </div>
                @endforelse






            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="total-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-12 text-center">
                                        <h4>Proceed to Peyment</h4>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <a href="/checkout" class="btn-login">Pay</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 col-md-push-1 text-center">
                            <div class="total">
                                <div class="sub">
                                <p><span>Subtotal:</span> <span>${{$subTotal}}</span></p>
                                    <p><span>Delivery:</span> <span>$7</span></p>
                                </div>
                                <div class="grand-total">
                                <p><span><strong>Total:</strong></span> <span>${{($total==7)?0:$total}}</span></p>
                                </div>
                            </div>
                        </div>
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
