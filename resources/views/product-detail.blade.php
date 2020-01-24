@extends('layouts.app')



@section('content')

<aside id="shop-hero" class="breadcrumbs">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(../images/cover-img-1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Product Detail</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span><a
                                            href="shop.html">Product</a></span> <span>Product Detail</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>



{{-- Message Section --}}
@if(isset($status))
    @if ($status == 'success')
        <div class="container"><div class="alert alert-success">{{$msg}}</div></div>
    @endif

    @if ($status == 'error')
        <div class="container"><div class="alert alert-danger">{{$msg}}</div></div>
    @endif
    @if ($status == 'warning')
        <div class="container"><div class="alert alert-warning">{{$msg}}</div></div>
    @endif
@endif




<div class="shop-shop">
    <div class="container">
        <div class="row row-pb-lg d-flex justify-content-center align-items-center">
            <div class="col-md-11 col-md-offset-1">
                <div class="product-detail-wrap">
                    <div class="row">

                        <div class="col-md-7">
                            <div class="desc">



                                <h3>{{$product->name}}</h3>
                                <p class="price">
                                    <span>{{$product->price}}</span>

                                </p>
                                <p>
                                    {{$product->description}}

                                </p>

                            <p>


                                <form action="cart/{{$product->id}}" method='POST'>

                                    @csrf

                                    <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn" data-type="minus"
                                            data-field="">
                                            <i class="icon-minus2"></i>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                        value="1" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn" data-type="plus"
                                            data-field="">
                                            <i class="icon-plus2"></i>
                                        </button>
                                    </span>
                                </div>
                                    <button  type='submit' class="btn-login text-capitalize">

                                        <i class="icon-shopping-cart"></i> add to cart

                                    </button>


                                </form>


                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(../images/{{$product->thumbnail}});">
                                    <p class="tag"><span class="sale">Sale</span></p>
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
