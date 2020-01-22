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
                                <h1>Products</h1>
                                <h2 class="bread"><span><a href="index.html">Home</a></span> <span>Shop</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

{{--
<div class="container">
    @foreach ($users as $user)
        {{ $user->name }}
@endforeach
</div>

{{ $users->links() }} --}}


<div class="shop-shop">
    <div class="container">
        <div class="row">

            <div
                class="col-md-9 col-md-push-2 d-flex flex-column justify-content-between align-items-center order-2 order-md-1 py-4">



                <div class="row row-pb-lg w-100">


                    @foreach ($allProducts as $item)
                    {{-- {{ dd($item) }} --}}
                    <div class="col-md-4 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(images/{{ $item->thumbnail }});">
                                <p class="tag"><span class="{{ $item->tag }} text-capitalize">{{ $item->tag }}</span>
                                </p>

                                <div class="cart-info">
                                    <p class="price"><span>${{ $item->price }}</span></p>
                                    <h3><a class='name' href="#">{{ $item->name }}</a></h3>
                                </div>
                                <div class='mask'></div>

                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i
                                                    class="icon-shopping-cart"></i></a></span>
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>

                <div class='w-100 h-100 pagination-container d-flex justify-content-center align-items-end'>
                    {{ $allProducts->links() }}

                </div>


            </div>

            <div class="col-md-3 col-md-pull-10  order-1 order-md-2 py-4">
                <div class="sidebar">
                    <div class="side">
                        <h2>Categories</h2>
                        <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">Men
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirt</a></li>
                                                <li><a href="#">Jacket</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">Women
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirt</a></li>
                                                <li><a href="#">Jacket</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">Jewelry
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirt</a></li>
                                                <li><a href="#">Jacket</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseThree">Jewelry
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirt</a></li>
                                                <li><a href="#">Jacket</a></li>
                                                <li><a href="#">Shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side">
                        <h2>Price Range</h2>
                        <form method="post" class="shop-form-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price from:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">1</option>
                                                <option value="#">200</option>
                                                <option value="#">300</option>
                                                <option value="#">400</option>
                                                <option value="#">1000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Price to:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">2000</option>
                                                <option value="#">4000</option>
                                                <option value="#">6000</option>
                                                <option value="#">8000</option>
                                                <option value="#">10000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="side">
                        <h2>Color</h2>
                        <div class="color-wrap">
                            <p class="color-desc">
                                <a href="#" class="color color-1"></a>
                                <a href="#" class="color color-2"></a>
                                <a href="#" class="color color-3"></a>
                                <a href="#" class="color color-4"></a>
                                <a href="#" class="color color-5"></a>
                            </p>
                        </div>
                    </div>
                    <div class="side">
                        <h2>Size</h2>
                        <div class="size-wrap">
                            <p class="size-desc">
                                <a href="#" class="size size-1">xs</a>
                                <a href="#" class="size size-2">s</a>
                                <a href="#" class="size size-3">m</a>
                                <a href="#" class="size size-4">l</a>
                                <a href="#" class="size size-5">xl</a>
                                <a href="#" class="size size-5">xxl</a>
                            </p>
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
