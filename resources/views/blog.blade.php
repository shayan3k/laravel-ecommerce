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
                                <h1>Our Blog</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span>Blog</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div class="shop-blog">
    <div class="container">
        <div class="row">

            @foreach ($blogPosts as $item)
            <div class="col-md-4">
                <article class="article-entry">
                    <a href="blog.html" class="blog-img" style="background-image: url(images/{{ $item->thumbnail}});">
                        <p class="meta"><span class="day">{{ date_format(date_create($item->created_at),"d") }}
                            </span><span class="month">{{ date_format(date_create($item->created_at),"M") }}
                            </span></p>
                        <div class="mask d-flex justify-content-center align-items-center">
                            <button class='btn-blog'>Read</button>
                        </div>

                    </a>
                    <div class="desc">
                        <p class="admin"><span>Posted by:</span> <span>{{ $item->author_name }}</span></p>
                        <h2><a href="blog.html" class='text-capitalize'>{{$item->title}}</a></h2>
                        <hr>
                    </div>
                </article>
            </div>
            @endforeach



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
