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
                                <h1>Blog Post</h1>
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


<div class="shop-shop">
    <div class="container">
        <div class="row row-pb-lg d-flex justify-content-center align-items-center">
            <div class="col-md-11 col-md-offset-1">
                <div class="product-detail-wrap">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(../images/{{$post->thumbnail}});">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="text justify-content-start">
                                <h3>{{$post->title}}</h3>
                                <p class="price">
                                    <span>Posted by {{$post->author_name}} at {{$post->created_at}}</span>
                                    </p>
                                    <p class="price">
                                        <span></span>
                                        </p>
                                 <p>{{$post->body}}</p>


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
