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
                                <h1>About Us</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span>About</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id="shop-about">
    <div class="container">
        <div class="row">

            <div class="col-md-5 "><img src="./images/about.jpg" style='width : 100%;'></div>
            <div class="col-md-7 ">

                <div class="display-4 pb-5">About Us</div>
                <p class='lead text-justify px-3 px-md-0'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit vel quo repellat a ea numquam eius laboriosam, cupiditate corporis voluptatibus facere dolores quos incidunt deleniti, quis cum. Tenetur nemo sit perferendis omnis nam odio quasi, tempora voluptatum? Eligendi saepe magnam, eos odit impedit ea distinctio quis voluptate totam aut eaque maiores soluta qui, cupiditate vero ab cumque, facere doloremque obcaecati? Reprehenderit fuga sapiente perferendis dolorem tenetur optio mollitia, delectus distinctio illum suscipit architecto necessitatibus magni nesciunt deserunt sint eaque dolorum possimus nisi eos veritatis molestias doloribus! Eos voluptate harum sed iure nihil enim sit obcaecati nemo, recusandae, praesentium odit hic aperiam, aliquam laudantium non. Quaerat nam, ad minus autem obcaecati repellendus quod praesentium vitae quis voluptatem, animi, eligendi architecto debitis!</p>


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
